<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Setting;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use \Config;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\ChangePasswordRequest;

class AuthController extends Controller
{
    protected $user;
    public function __construct(
        User            $user
    ) {
        $this->user     = $user;

        $link = Setting::first();
        // dd($link);

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
            $plans = DB::table('plans')->where('is_free', 1)->latest()->first();
            $checkExist = User::where('email', $request->email)->whereNotNull('email')->first();
            if (!empty($checkExist)) {
                Toastr::error(trans('Cannot create account an identical account already exists!'), 'Error', ["positionClass" => "toast-top-center"]);
                return redirect()->back()->with('error', 'Already exist account')->withInput();;
            }
            $user                       = new User();
            $user->name                 = trim($request->name);
            $user->email                = trim($request->email);
            $user->username             = trim($request->username);
            $user->password             = bcrypt($request->password);
            $user->gender               = NULL;
            $user->dob                  = NULL;
            $user->social_id            = NULL;
            $user->provider             = NULL;
            $user->status               = 1;
            $user->role_id              = 1;
            $user->user_type            = 2;
            // for plan info
            $user->plan_id              = $plans->id;
            $user->plan_details         = json_encode($plans);
            $user->plan_validity        = Carbon::parse(date('Y-m-d'))->addYear(5)->format('Y-m-d');
            $user->plan_activation_date = Carbon::now();
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
        $plans = DB::table('plans')->where('is_free', 1)->latest()->first();
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

                $base_name = preg_replace('/\..+$/', '', $data->name);
                $base_name = explode(' ', $base_name);
                $base_name = implode('-', $base_name);
                $base_name = Str::lower($base_name);
                $name = $base_name . "-" . uniqid();

                $user              = new User;
                $user->name        = $data->name;
                $user->email       = $data->email ?? $falsemail;
                $user->username    = $data->username ??  $name;
                $user->profile_image = $data->avatar;
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
                $user->plan_id     = $plans->id;
                $user->plan_details = json_encode($plans);
                $user->plan_validity = Carbon::parse(date('Y-m-d'))->addYear(3)->format('Y-m-d');
                $user->plan_activation_date = Carbon::now();
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
}
