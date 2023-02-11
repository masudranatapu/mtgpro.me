<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BusinessCard;
use App\Models\SocialIcon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends ResponceController
{

    private $settings;
    private $user;
    public function __construct(
        User $user
    ) {
        $this->user = $user;
        $this->settings = getSetting();
    }
    public function getSettings()
    {
        $settings = getSetting();
        return $this->sendResponse(200, "Settings", $settings, true, []);
    }

    public function getSocialIcons()
    {
        $social_icon    = SocialIcon::all();

        return $this->sendResponse(200, 'Social Icons', $social_icon, true, []);
    }

    public function getPreview($cardurl)
    {
        $user = DB::table('users')->where('username', $cardurl)->first();

        if ($user == null) {
            $cardinfo = BusinessCard::select('business_cards.*', 'plans.plan_name', 'plans.hide_branding', 'users.connection_title')
                ->where('business_cards.card_url', $cardurl)
                ->leftJoin('users', 'users.id', 'business_cards.user_id')
                ->leftJoin('plans', 'plans.id', 'users.plan_id')
                ->first();
            if ($cardinfo == null) {
                return redirect()->route('user.card.create');
            }
        } else {
            //by username
            $cardinfo = BusinessCard::select('business_cards.*', 'plans.plan_name', 'plans.hide_branding', 'users.connection_title')
                ->where('business_cards.id', $user->active_card_id)
                ->leftJoin('users', 'users.id', 'business_cards.user_id')
                ->leftJoin('plans', 'plans.id', 'users.plan_id')
                ->first();

            $location                   = $this->user->getLocation();



            //browsing history
            if ($cardinfo) {
                $brwInfo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']));

                // dd($_SERVER['HTTP_USER_AGENT']);
                $new_history['ip_address'] = $_SERVER['REMOTE_ADDR'];
                $new_history['user_agent'] = $this->user->getBrowser();
                // dd($location->timezone);
                if ($brwInfo) {

                    $new_history['city']            = $brwInfo['geoplugin_city'];
                    $new_history['region']          = $brwInfo['geoplugin_region'];
                    $new_history['region_code']     = $brwInfo['geoplugin_regionCode'];
                    $new_history['region_name']     = $brwInfo['geoplugin_regionName'];
                    $new_history['area_code']       = $brwInfo['geoplugin_areaCode'];
                    $new_history['country_code']    = $brwInfo['geoplugin_countryCode'];
                    $new_history['country_name']    = $brwInfo['geoplugin_countryName'];
                    $new_history['continent_name']  = $brwInfo['geoplugin_continentName'];
                    $new_history['timezone']        = $brwInfo['geoplugin_timezone'];
                    $new_history['created_at']      = date('Y-m-d H:i:s');
                }
                $new_history['card_id'] = $cardinfo->id;
                if (Auth::guard('api')->user()) {
                    $new_history['name']        = Auth::guard('api')->user()->name;
                    $new_history['email']       = Auth::guard('api')->user()->email;
                    $new_history['mobile']      = Auth::guard('api')->user()->mobile;
                    $new_history['username']    = Auth::guard('api')->user()->username;
                }

                $history = DB::table('history_card_browsing')
                    ->select('id', 'counter')
                    ->where(['card_id' => $cardinfo->id, 'ip_address' => $_SERVER['REMOTE_ADDR']])
                    ->first();

                if ($history) {
                    $counter = $history->counter + 1;
                    DB::table('history_card_browsing')->where('id', $history->id)->update(
                        [
                            'counter' => $counter,
                            'modified_at' => date('Y-m-d H:i:s')
                        ]
                    );
                } else {
                    DB::table('history_card_browsing')->insert($new_history);
                }
            }
            //end browsing history

        }

        if ($cardinfo) {

            // if(checkPackageValidity($cardinfo->user_id) == false){

            //     dd(checkPackageValidity($cardinfo->user_id));

            // }
            $cardinfo->contacts = DB::table('business_fields')
                ->leftJoin('social_icon as si', 'si.id', '=', 'business_fields.icon_id')
                ->select('business_fields.*', 'si.icon_title', 'si.icon_name', 'si.icon_color', 'si.main_link', 'si.is_paid')
                ->where('business_fields.card_id', $cardinfo->id)
                ->where('business_fields.status', 1)
                ->orderBy('business_fields.position', 'ASC')
                ->get();




            $user = User::find($cardinfo->user_id);
            $url = url($cardinfo->card_url);
            if (Auth::guard('api')->user() && ($cardinfo->user_id == Auth::id())) {
            } else {
                // if($cardinfo->status == 0){
                //     Toastr::warning('This card is not active now');
                //     return redirect()->route('home');
                // }
                if ($cardinfo->status == 2) {

                    return $this->sendError('Exception Error', 'This card is not available');
                }
            }
            return $this->sendResponse(200, "User Card Revirw", $cardinfo, true, []);
        } else {


            return $this->sendError('Exception Error', 'This card is not available please create your desired card');
        }
    }
}
