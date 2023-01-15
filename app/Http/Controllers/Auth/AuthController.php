<?php

namespace App\Http\Controllers\Auth;
use Str;
use \Config;
use Carbon\Carbon;
use App\Models\Plan;
use App\Models\User;
use App\Models\Setting;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\ChangePasswordRequest;

class AuthController extends Controller
{
    protected $user;
    public function __construct(
        User            $user,
        Plan            $plan
    ) {
        $this->user     = $user;
        $this->plan     = $plan;

        $link = Setting::first();

        Config::set('services.google.client_id', $link->google_client_id);
        Config::set('services.google.client_secret', $link->google_client_secret);
        Config::set('services.google.redirect', url('/auth/google/callback'));

        Config::set('services.facebook.client_id', $link->facebook_client_id);
        Config::set('services.facebook.client_secret', $link->facebook_client_secret);
        Config::set('services.facebook.redirect', preg_replace("/^http:/i", "https:", url('/auth/facebook/callback')));
    }

    public function postRegister(RegistrationRequest $request)
    {
        try {
            $plan = DB::table('plans')->where('is_free', 1)->latest()->where('status',1)->first();
            $term_days = $plan->validity;
            $checkExist = User::where('email', $request->email)->whereNotNull('email')->first();
            if (!empty($checkExist)) {
                Toastr::error(trans('Cannot create account an identical account already exists!'), 'Error', ["positionClass" => "toast-top-center"]);
                return redirect()->back()->with('error', 'Already exist account')->withInput();;
            }
            $user                       = new User();
            $user->name                 = trim($request->name);
            $user->email                = trim($request->email);
            if(!empty($request->username) && $this->checkExistUserName($request->username)==false){
                $user->username    = $request->username;
            }else{
                $user->username    = $this->makeUserName($request->name);
            }
            $user->password             = bcrypt($request->password);
            $user->gender               = NULL;
            $user->dob                  = NULL;
            $user->social_id            = NULL;
            $user->provider             = NULL;
            $user->status               = 1;
            $user->role_id              = 1;
            $user->user_type            = 2;
            // for plan info
            if(!empty($plan)){
                $user->plan_id              = $plan->id;
                $user->plan_details         = json_encode($plan);
                $user->plan_validity        = $this->plan->planValidity($plan->id);
                $user->plan_activation_date = Carbon::now();
                $user->term                 = $term_days;
            }


            $location                   = $this->user->getLocation();
            if ($location) {
                $user->billing_country  = $location->countryName;
                $user->billing_country_code = $location->countryCode;
                // $user->regionCode    = $location->regionCode;
                $user->billing_state    = $location->regionName;
                $user->billing_city     = $location->cityName;
                $user->billing_zipcode  = $location->zipCode;
                // $user->isoCode          = $location->isoCode;
                // $user->latitude         = $location->latitude;
                // $user->longitude        = $location->longitude;
            }
            // $user->ip_address       = $this->user->getIP();
            // $user->device           = $this->user->getOS();
            // $user->browser          = $this->user->getBrowser();
            $user->save();
            if ($user) {
                Auth::login($user);
                Mail::to($user->email)->send(new WelcomeMail($user));
                return redirect()->route('user.card');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            Toastr::error('Something went wrong ', 'Success', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        return redirect()->route('user.card');
    }

    public function getDeactivationForm()
    {
        return view('auth.deactivation-form');
    }

    public function getChangePassword()
    {
        return view('auth.change_password');
    }


    public function putChangePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        $userPassword = $user->password;
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);
        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password' => 'Old password does not match']);
        }
        $user->password = Hash::make($request->password);
        $user->save();
        Toastr::success(trans('Password successfully updated!'), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
        // ->with('success','Password successfully updated');
    }


    public function redirectToProvider(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(string $provider)
    {
        // dd($provider);
        $plan = DB::table('plans')->where('is_free', 1)->latest()->where('status',1)->first();
        $term_days = $plan->validity;
        $data = Socialite::driver($provider)->stateless()->user();
        $falsemail = trim(str_replace(' ','_',$data->name)) . '@gmail.com';
        $check_deactive = User::where('email', $data->email)->where('status', 0)->first();
        if (!empty($check_deactive)) {
            Toastr::error(trans('oops! your account has been deactivated! please contact website administrator'), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
            // ->with('error','oops! your account has been deactivated! please contact website administrator');
        }
        try {

            if (!empty($data->email)) {
                $isExist  = User::where(['email' => $data->email])->first();
            } else {
                $isExist  = User::where('provider', $provider)->where('social_id', $data->id)->first();
            }

            if (!empty($isExist)) {
                $isExist->update([
                    'avatar'            => $data->avatar,
                    'provider'          => $provider,
                    'social_id'         => $data->id
                ]);
                Auth::login($isExist);
            } else {
                $base_name  = preg_replace('/\..+$/', '', $data->name);
                $base_name  = explode(' ', $base_name);
                $base_name  = implode('_', $base_name);
                $name  = Str::lower($base_name);
                $_unique_name       = $base_name ."_".uniqid();
                $user              = new User;
                $user->name        = $data->name;
                $user->email       = $data->email ?? $falsemail;
                if(!empty($data->username) && $this->checkExistUserName($data->username)==false){
                    $user->username    = $data->username;
                }else{
                    $user->username    = $this->makeUserName($data->name);
                }
                $user->profile_image = $data->avatar ?? NULL;
                $user->provider    = $provider;
                $user->social_id   = $data->id;
                $user->status      = 1;
                $user->role_id     = 1;
                $user->user_type   = 2;
                $location                   = $this->user->getLocation();
                if ($location) {
                    $user->billing_country     = $location->countryName;
                    $user->billing_country_code = $location->countryCode;
                    // $user->regionCode       = $location->regionCode;
                    $user->billing_state       = $location->regionName;
                    $user->billing_city        = $location->cityName;
                    $user->billing_zipcode     = $location->zipCode;
                    // $user->isoCode          = $location->isoCode;
                    // $user->latitude         = $location->latitude;
                    // $user->longitude        = $location->longitude;
                }
                 // for plan info
                if(!empty($plan)){
                    $user->plan_id              = $plan->id;
                    $user->plan_details         = json_encode($plan);
                    $user->plan_validity        = $this->plan->planValidity($plan->id);
                    $user->plan_activation_date = Carbon::now();
                    $user->term                 = $term_days;
                }
                $user->save();
                Auth::login($user);
                if ($user->email) {
                    Mail::to($user->email)->send(new WelcomeMail($user));
                }
            }
        } catch (\Exception $e) {
            dd($e->getmessage());
            Toastr::error(trans('Login failed. Please try again'), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
        return redirect()->route('user.card');
    }


    public function checkExistUserName($base_name)
    {
        $base_name   = trim($base_name);
        $base_name   = Str::lower($base_name);
        $exist = DB::table('users')->where('username',$base_name)->count();
        if($exist > 0){
            return true;
        }
        return false;
    }


    public function makeUserName($base_name)
    {
        $base_name  = trim($base_name);
        $base_name  = preg_replace('/\..+$/', '', $base_name);
        $base_name  = explode(' ', $base_name);
        $base_name  = implode('_', $base_name);
        $base_name  = Str::lower($base_name);
        $exist = DB::table('users')->where('username',$base_name)->count();
        if($exist > 0){
          return  $base_name.$exist+1;
        }
        return $base_name;
    }

}
