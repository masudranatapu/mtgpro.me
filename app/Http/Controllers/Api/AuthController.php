<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\AllMail;
use App\Models\BusinessCard;
use App\Models\EmailTemplate;
use App\Models\Plan;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Tymon\JWTAuth\Facades\JWTAuth;



class AuthController extends ResponceController
{
    public $authApiGuard;
    protected $user;
    protected $plan;
    protected $businessCard;
    public function __construct(
        User            $user,
        Plan            $plan,
        BusinessCard    $businessCard
    ) {
        $this->user     = $user;
        $this->plan     = $plan;
        $this->businessCard = $businessCard;
        $this->middleware('auth:api', ['except' => ['login', 'register', 'socialLogin']]);
        $this->authApiGuard = auth()->guard('api');

        $link = Setting::first();

        Config::set('services.google.client_id', $link->google_client_id);
        Config::set('services.google.client_secret', $link->google_client_secret);
        Config::set('services.google.redirect', url('/auth/google/callback'));

        Config::set('services.facebook.client_id', $link->facebook_client_id);
        Config::set('services.facebook.client_secret', $link->facebook_client_secret);
        Config::set('services.facebook.redirect', preg_replace("/^http:/i", "https:", url('/auth/facebook/callback')));
    }


    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'password' => 'required|string',
            'username' => 'sometimes|string',
        ]);

        if ($validate->fails()) {
            return $this->sendError('Validation Error', $validate->errors());
        }

        try {
            $login_type = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'email';

            $credentials = [$login_type => $request->email, 'password' => $request->password];

            if (!$token = $this->authApiGuard->attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid Crendentials',
                ], 200);
            }

            $token = JWTAuth::fromUser(auth()->guard('api')->user());



            return $this->createNewToken($token);
        } catch (Exception $e) {
            return response()->json("failed", "An error occured, please contact support.", 500);
        }
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'username' => 'required|string|between:2,100|unique:users,username',
            'email' => "required|string|max:100|email|unique:users,email",
            'password' => "min:8|required_with:password_confirmation|same:password_confirmation",
            'password_confirmation' => 'min:8'
        ]);

        if ($validate->fails()) {


            return $this->sendError("Validation Error", $validate->errors());
        }

        $plan = DB::table('plans')->where('is_free', 1)->latest()->where('status', 1)->first();
        $term_days = $plan->validity;
        $checkExist = User::where('email', $request->email)->whereNotNull('email')->first();
        if (!empty($checkExist)) {
            return $this->sendError("Cannot create account an identical account already exists!", $validate->errors());
        }
        $user                       = new User();
        $user->name                 = trim($request->name);
        $user->email                = trim($request->email);
        if (!empty($request->username) && $this->checkExistUserName($request->username) == false) {
            $user->username    = $request->username;
        } else {
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
        if (!empty($plan)) {
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
            $user->load('hasCards');
            Auth::guard('api')->login($user);
            // Mail::to($user->email)->send(new WelcomeMail($user));
            $content = $this->wellcomeMail($user);
            Mail::to($user->email)->send(new AllMail($content));

            $token = JWTAuth::fromUser($user);


            $user_data = [
                "id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
                "username" => $user->username,
                "gender" => $user->gender,
                "dob" => $user->dob,
                "social_id" => $user->social_id,
                "provider" => $user->provider,
                "status" => $user->status,
                "role_id" => $user->role_id,
                "user_type" => $user->user_type,
                "plan_id" => $user->plan_id,
                "plan_details" => json_decode($user->plan_details, true),
                "plan_validity" => $user->plan_validity,
                "plan_activation_date" => $user->plan_activation_date,
                "term" => $user->term,
                "billing_country" => $user->billing_country,
                "billing_country_code" => $user->billing_country_code,
                "billing_state" => $user->billing_state,
                "billing_city" => $user->billing_city,
                "billing_zipcode" => $user->billing_zipcode,
                "updated_at" => $user->updated_at,
                "created_at" => $user->created_at,
                "card_count" => count($user->hasCards) > 0 ? count($user->hasCards) : 0

            ];
            $message = "User registered";
            $data = [
                'access_token' => $token,
                'user' => $user_data
            ];

            return $this->sendResponse(200, $message, $data, true, "");
        }





        return response()->json([], 201);
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->authApiGuard->logout();

        $message = "User logged out";
        return  $this->sendResponse(200, $message, null, true, "");
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->createNewToken($this->authApiGuard->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function authUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {


                $message = "User Not Found";
                $this->sendError($message, $message);
                // return response()->json(['user_not_found'], 404);
            }
        } catch (Exception $e) {

            // return response()->json(['token_expired'], $e->getMessage());
            $message = "Token Expired";
            $this->sendError($message, $e->getMessage());
        } catch (Exception $e) {

            // return response()->json(['token_invalid'], $e->getMessage());

            $message = "Token Invalid";
            $this->sendError($message, $e->getMessage());
        } catch (Exception $e) {
            $message = "Token Absent";
            $this->sendError($message, $e->getMessage());
            // return response()->json(['token_absent'], $e->getMessage());
        }
        $message = "Successfully Loging";
        return $this->sendResponse(200, $message, $user);
        // return response()->json(compact('user'));
    }
    public function checkExistUserName($base_name)
    {
        $base_name   = trim($base_name);
        $base_name   = Str::lower($base_name);
        $exist = DB::table('users')->where('username', $base_name)->count();
        if ($exist > 0) {
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
        $exist = DB::table('users')->where('username', $base_name)->count();
        if ($exist > 0) {
            return  $base_name . $exist + 1;
        }
        return $base_name;
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        $user = $this->authApiGuard->user();

        $user_data = [
            "id" => $user->id,
            "name" => $user->name,
            "email" => $user->email,
            "username" => $user->username,
            "gender" => $user->gender,
            "dob" => $user->dob,
            "social_id" => $user->social_id,
            "provider" => $user->provider,
            "status" => $user->status,
            "role_id" => $user->role_id,
            "user_type" => $user->user_type,
            "plan_id" => (int)$user->plan_id,
            "plan_details" => json_decode($user->plan_details, true),
            "plan_validity" => $user->plan_validity,
            "plan_activation_date" => $user->plan_activation_date,
            "term" => $user->term,
            "billing_country" => $user->billing_country,
            "billing_country_code" => $user->billing_country_code,
            "billing_state" => $user->billing_state,
            "billing_city" => $user->billing_city,
            "billing_zipcode" => $user->billing_zipcode,
            "updated_at" => $user->updated_at,
            "created_at" => $user->created_at,
            "card_count" => count($user->hasCards) > 0 ? count($user->hasCards) : 0

        ];

        $data = [
            'access_token' => $token,
            'user' => $user_data,
            'token_type' => 'bearer',
            // 'expires_in' => $this->authApiGuard->factory()->getTTL() * 60 * 24 * 30
            'expires_in' => auth()->guard('api')->factory()->getTTL() * 60,


        ];

        $message = "Successfully Login";
        return $this->sendResponse(200, $message, $data);
        // return response()->json([
        //     'access_token' => $token,
        //     'user' => $this->authApiGuard->user(),
        //     'token_type' => 'bearer',
        //     'expires_in' => $this->authApiGuard->factory()->getTTL() * 60 * 24 * 30
        //     'expires_in' => auth()->guard('api')->factory()->getTTL() * 60
        // ]);
    }

    public function socialLogin(Request $request)
    {


        $userName = "";
        if ($request->email) {
            $trimedUserName = explode('@', $request->email);
            $userName = array_shift($trimedUserName);
            $result = User::where('username', $userName)->first();

            if (isset($result)) {
                $userName = Str::slug($userName . random_int(999, 9999));
            }
        } else {
            $userName = $request->id;
        }

        $provider = $request->input('provider');
        $token = $request->input('access_token');

        // get the provider's user. (In the provider server)
        $providerUser = Socialite::driver($provider)->userFromToken($token);




        // check if access token exists etc..
        $user = User::where('provider', $provider)->where('provider_id', $providerUser->id)->first();
        // if there is no record with these data, create a new user
        if ($user == null) {
            $user = User::create([
                'name' => $request->name,
                'username' => $userName,
                'email' => $request->email ?? $request->id,
                'password' => bcrypt($userName),
                // 'email_verified_at' => now(),
                'provider' => $provider,
                'provider_id' => $request->id,
            ]);
        }
        // create a token for the user, so they can login
        Auth::guard('api')->login($user);

        $token = JWTAuth::fromUser($user);



        $data = [
            'access_token' => $token,
            'user' => Auth::guard('api')->user(),
            'token_type' => 'bearer',
            // 'expires_in' => $this->authApiGuard->factory()->getTTL() * 60 * 24 * 30
            'expires_in' => auth()->guard('api')->factory()->getTTL() * 60,


        ];



        $message = "Successfully Login";
        return $this->sendResponse(200, $message, $data);
    }
    public function wellcomeMail(User $user)
    {

        $setting = getSetting();

        $mail = EmailTemplate::where('slug', 'welcome-mail')->first();
        $content = $mail->body;

        if ($user->email) {

            if ($user->username) {
                $content = preg_replace("/{{user_name}}/", $user->name, $content);
            }
            if ($user->email) {
                $content = preg_replace("/{{email}}/", $user->email, $content);
            }
            if ($user) {
                $content = preg_replace("/{{site_name}}/", $setting->site_name, $content);
            }
        }
        return $content;
    }
}
