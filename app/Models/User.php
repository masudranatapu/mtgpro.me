<?php

namespace App\Models;



use Stevebauman\Location\Facades\Location;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
        'plan_id',
        'username',
    ];

    protected $appends = ['plan_duration', 'remainng_days', 'profile_image_url'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function getProfileImageUrlAttribute()
    {
        return getPhoto($this->profile_image);
    }


    public function userPlan()
    {
        return $this->hasOne(Plan::class, 'id', 'plan_id');
    }

    public static function getOS()
    {
        $user_agent  =  $_SERVER['HTTP_USER_AGENT'];
        $os_platform    =   "Unknown OS Platform";
        $os_array       =   array(
            '/windows nt 10/i'     =>  'Windows 10',
            '/windows nt 6.3/i'     =>  'Windows 8.1',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        );
        foreach ($os_array as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $os_platform    =   $value;
            }
        }
        return $os_platform;
    }

    public static function getBrowser()
    {
        $user_agent  =  $_SERVER['HTTP_USER_AGENT'];
        $browser        =   "Unknown Browser";
        $browser_array  =   array(
            '/msie/i'       =>  'Internet Explorer',
            '/firefox/i'    =>  'Firefox',
            '/safari/i'     =>  'Safari',
            '/chrome/i'     =>  'Chrome',
            '/edge/i'       =>  'Edge',
            '/opera/i'      =>  'Opera',
            '/netscape/i'   =>  'Netscape',
            '/maxthon/i'    =>  'Maxthon',
            '/konqueror/i'  =>  'Konqueror',
            '/mobile/i'     =>  'Handheld Browser'
        );
        foreach ($browser_array as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $browser    =   $value;
            }
        }
        return $browser;
    }

    public function getLocation()
    {
        // $ip = '103.103.35.202'; //Dynamic IP address get
        $ip = $this->getIp();
        $data = Location::get($ip);
        return $data;
    }

    public static function getIP()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        if ($ipaddress == '::1')
            $ipaddress = getHostByName(getHostName());

        return $ipaddress;
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    public function hasCards(): HasMany
    {
        return $this->hasMany(BusinessCard::class, 'user_id', 'id');
    }

    public function getPlanDurationAttribute()
    {
        $plan = DB::table('plans')
            // ->select('')
            ->leftJoin('transactions', 'transactions.plan_id', '=', 'plans.id')
            ->where('plans.id', $this->plan_id)
            ->orderBy('transactions.id', 'DESC')
            ->first();

        $subscription_end = new \Carbon\Carbon($this->plan_validity);
        $subscription_start = new \Carbon\Carbon($this->plan_activation_date);

        $diff_in_days = $subscription_start->diffInDays($subscription_end);

        if ($diff_in_days > 31) {
            return "Yearly";
        } else {
            return "Monthly";
        }
    }
    public function getRemainngDaysAttribute()
    {
        $plan = DB::table('plans')
            // ->select('')
            ->leftJoin('transactions', 'transactions.plan_id', '=', 'plans.id')
            ->where('plans.id', $this->plan_id)
            ->orderBy('transactions.id', 'DESC')
            ->first();

        $subscription_end = new \Carbon\Carbon($this->plan_validity);
        $subscription_start = new \Carbon\Carbon($this->plan_activation_date);

        $diff_in_days = $subscription_start->diffInDays($subscription_end);

        $duration = now()->diffInDays(\Carbon\Carbon::parse($this->plan_validity));
        return $duration;
    }
}
