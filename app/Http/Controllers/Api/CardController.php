<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CardRequest;
use App\Models\BusinessCard;
use App\Models\BusinessField;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CardController extends ResponceController
{
    protected $businessCard;
    protected $plan;
    protected $settings;
    public function __construct(
        BusinessCard $businessCard,
        Plan $plan
    ) {
        $this->businessCard  = $businessCard;
        $this->plan         = $plan;
        $this->settings = getSetting();
    }
    public function storefirstCard(Request $request)
    {

        $validation = Validator::make($request->all(), [
            "name" => 'required',
            "phone_number" => 'required',
            "designation" => 'required',
            "company_name" => 'required',
            'photo' => 'required'

        ]);

        $discription = [
            // "email" => "Must be string value",
            "name" => "Must be string value",
            "phone_number" => "Must be integer value",
            "designation" => "Must be string value",
            "company_name" => "Must be string value",
            'photo' => "Must be base64 decode"
        ];

        if ($validation->fails()) {
            return $this->sendError("Validation error", ['discription' => $discription, 'errors' => $validation->errors()]);
        }


        DB::beginTransaction();
        try {
            $card = $this->businessCard->where('user_id', Auth::guard('api')->user()->id)->first();

            if (!empty($card)) {
                return $this->sendError('Card Exist', 'Alrady create a card');
            }
            $card               = new BusinessCard();
            $card->card_id      = uniqid();
            $card->user_id      = Auth::guard('api')->id();
            $card->theme_id     = 1;
            $card->theme_color  = null;
            $card->card_lang    = 'en';
            $card->card_url     = uniqid();
            $card->card_type    = 'vcard';
            if ($request->has('photo') && !empty($request->photo[0])) {
                $file_name = $this->businessCard->formatName($request->name);
                $output = $request->photo;
                $output = json_decode($output, TRUE);
                if (isset($output) && isset($output['output']) && isset($output['output']['image'])) {
                    $image = $output['output']['image'];
                    if (isset($image)) {
                        $card->profile =  $this->businessCard->uploadBase64ToImage($image, $file_name, 'jpg');
                    }
                }
            }
            $card->title        = $request->name;
            $card->designation  = $request->designation;
            $card->company_name = $request->company_name;
            $card->phone_number = $request->phone_number;
            $card->ccode        = $request->ccode;
            $card->card_email   = $request->card_email ?? Auth::guard('api')->user()->email;
            $card->card_for     = 'Work';
            $card->status       = 1;
            $card->save();

            if (!empty($request->phone_number)) {
                $mobile_icon =  DB::table('social_icon')->where('icon_name', 'phone')->first();
                $_icon = new BusinessField();
                $_icon->card_id = $card->id;
                $_icon->type = 'mobile';
                $_icon->icon = $mobile_icon->icon_name;
                $_icon->icon_image = $mobile_icon->icon_image;
                $_icon->icon_id = $mobile_icon->id;
                $_icon->label = $mobile_icon->icon_title;
                $_icon->content = $request->phone_number;
                $_icon->position = 1;
                $_icon->status = 1;
                $_icon->created_at = date('Y-m-d H:i:s');
                $_icon->save();
            }

            $email_icon =  DB::table('social_icon')->where('icon_name', 'email')->first();
            $fields = new BusinessField();
            $fields->card_id = $card->id;
            $fields->type = 'mail';
            $fields->icon = $email_icon->icon_name;
            $fields->icon_image = $email_icon->icon_image;
            $fields->icon_id = $email_icon->id;
            $fields->label = $email_icon->icon_title;
            $fields->content = Auth::guard('api')->user()->email;
            $fields->position = 2;
            $fields->status = 1;
            $fields->created_at = date('Y-m-d H:i:s');
            $fields->save();
            $user = User::where('id', Auth::guard('api')->id())->first();
            if ($user->name == null) {
                $user->name = $request->name;
            }
            $user->active_card_id = $card->id;
            $user->update();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
        }
        DB::commit();
        $card->load('business_card_fields');
        return $this->sendResponse(200, 'Card Create Successfully', $card, true, $discription);
    }


    public function myCard()
    {
        $user = Auth::guard('api')->id();

        $cards = BusinessCard::where('user_id', $user)->get();


        return $this->sendResponse(200, "My Business Card", $cards, true);
    }


    public function postStore(Request $request)
    {


        $rules = [
            'name'             => 'required|string|max:124',
            'location'         => 'required|string|max:124',
            'bio'              => 'required|string|max:255',
            'bgcolor'          => 'required|string|max:25',
            'designation'      => 'required|string|max:124',
            'company_name'     => 'required|string|max:124',
            'color_link'       => 'required|string|max:124',
            'phone_number'     => 'required|string|max:124',
            'card_for'         => 'nullable|string|max:124',
            'location'         => 'required|string|max:124',
            'phone_number'     => 'unique:business_cards,card_url|string|max:124',
            'profile_pic'      => 'required',
            // 'cover_pic'        => 'nullable|mimes:jpeg,jpg,png,webp,gif | max:10000',
            // 'company_logo'     => 'nullable|mimes:jpeg,jpg,png,webp,gif | max:10000'
        ];
        // $social_icon = DB::table('social_icon')->get();
        // if ($social_icon) {
        //     foreach ($social_icon as $key => $value) {
        //         $rules[$value->icon_name . '.*'] = 'required|string|max:224';
        //     }
        // }


        $validation = Validator::make($request->all(), $rules);


        if ($validation->fails()) {
            return $this->sendError('Validation Error', $validation->errors(), 200);
        }





        $validity = checkPackageValidity(Auth::guard('api')->id());
        if ($validity == false) {
            return $this->sendError('Package Expired', trans('Your package is expired please upgrade'), 200);
        }
        $check = checkCardLimit(Auth::guard('api')->id());
        if ($check == false) {

            return $this->sendError('Package Expired', trans('Your card limit is over please upgrade your package for more card'), 200);
        }
        DB::beginTransaction();
        try {
            $card_id = uniqid();
            $card = new BusinessCard();
            $card->card_id      = $card_id;
            $card->user_id      = Auth::guard('api')->id();
            $card->card_lang    = 'en';
            $card->card_type    = 'vcard';
            $card->card_for     = $request->card_for;
            $card->status       = 1;
            $card->title        = $request->name;
            $card->location     = $request->location;
            $card->bio          = $request->bio;
            $card->sub_title    = $request->sub_title ?? '';
            $card->theme_color  = $request->bgcolor ?? '#fff';
            $card->theme_id     = $request->theme_id ?? 1;
            $card->designation  = $request->designation;
            $card->company_name = $request->company_name;
            $card->color_link   = $request->color_link ?? 0;
            $card->card_url     = $card_id;
            $card->phone_number = $request->phone_number;
            $card->ccode        = $request->ccode;
            $card->card_email   = $request->card_email ?? Auth::guard('api')->user()->email;
            $card->created_at   = date('Y-m-d H:i:s');

            if ($request->has('profile_pic') && !empty($request->profile_pic[0])) {
                $file_name = $this->formatName($request->name);
                $output = $request->profile_pic;
                $output = json_decode($output, TRUE);
                if (isset($output) && isset($output['output']) && isset($output['output']['image'])) {
                    $image = $output['output']['image'];
                    if (isset($image)) {
                        $image_name =  $this->uploadBase64ToImage($image, $file_name, 'png');
                    }
                    $card->profile  = $image_name;
                }
            }
            if ($request->has('cover_pic') && !empty($request->cover_pic[0])) {
                $file_name = $this->formatName($request->name);
                $output = $request->cover_pic;
                $output = json_decode($output, TRUE);
                if (isset($output) && isset($output['output']) && isset($output['output']['image'])) {
                    $image = $output['output']['image'];
                    if (isset($image)) {
                        $image_name =  $this->uploadBase64ToImage($image, $file_name, 'png');
                    }
                    $card->cover = $image_name;
                }
            }
            if ($request->has('company_logo') && !empty($request->company_logo[0])) {
                $file_name = $this->formatName($request->name);
                $output = $request->company_logo;
                $output = json_decode($output, TRUE);
                if (isset($output) && isset($output['output']) && isset($output['output']['image'])) {
                    $image = $output['output']['image'];
                    if (isset($image)) {
                        $image_name =  $this->uploadBase64ToImage($image, $file_name, 'png');
                    }
                    $card->logo = $image_name;
                }
            }
            $card->save();
            $email_icon =  DB::table('social_icon')->where('icon_name', 'email')->first();
            $fields = new BusinessField();
            $fields->card_id = $card->id;
            $fields->type = 'mail';
            $fields->icon = $email_icon->icon_name;
            $fields->icon_image = $email_icon->icon_image;
            $fields->icon_id = $email_icon->id;
            $fields->label = $email_icon->icon_title;
            $fields->content = Auth::guard('api')->user()->email;
            $fields->position = 1;
            $fields->status = 1;
            $fields->created_at = date('Y-m-d H:i:s');
            $fields->save();
        } catch (\Exception $e) {
            return $this->sendError("Exception Error",$e->getMessage());
            DB::rollback();

        }
        DB::commit();


        return $this->sendResponse(200, "Card create Successfully", $card, true,);

    }



    public function formatName($name)
    {
        $base_name = preg_replace('/\..+$/', '', $name);
        $base_name = explode(' ', $base_name);
        $base_name = implode('-', $base_name);
        $base_name = Str::lower($base_name);
        $name = $base_name . "-" . uniqid();
        return $name;
    }

}
