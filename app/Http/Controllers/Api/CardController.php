<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CardRequest;
use App\Models\BusinessCard;
use App\Models\BusinessField;
use App\Models\Plan;
use App\Models\SocialIcon;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
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
                $output = $request->photo;
                $card->profile =  $this->uploadBase64FileToPublic($output, "profilePic");
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

        ];

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

            if ($request->has('profile_pic') && !empty($request->profile_pic)) {
                $file_name = $this->formatName($request->name);
                $output = $request->profile_pic;

                $image_name =  $this->uploadBase64FileToPublic($output, 'profilePic');
                $card->profile  = $image_name;
            }
            if ($request->has('cover_pic') && !empty($request->cover_pic[0])) {
                $file_name = $this->formatName($request->name);
                $output = $request->cover_pic;

                $image_name =  $this->uploadBase64FileToPublic($output, 'coverPic');


                $card->cover = $image_name;
            }
            if ($request->has('company_logo') && !empty($request->company_logo[0])) {
                $file_name = $this->formatName($request->name);
                $output = $request->company_logo;
                $image_name =  $this->uploadBase64FileToPublic($output, 'companyLogo');
                $card->logo = $image_name;
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
            DB::rollback();
            return $this->sendError("Exception Error", $e->getMessage());
        }
        DB::commit();


        return $this->sendResponse(200, "Card create Successfully", $card, true,);
    }

    public function postUpdate(BusinessCard $businessCard, Request $request)
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

        ];

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return $this->sendError('Validation Error', $validation->errors()->first(), 200);
        }
        DB::beginTransaction();
        try {
            $businessCard->user_id      = Auth::guard('api')->id();
            $businessCard->card_lang    = 'en';
            $businessCard->card_type    = 'vcard';
            $businessCard->card_for     = $request->card_for;
            $businessCard->status       = 1;
            $businessCard->title        = $request->name;
            $businessCard->location     = $request->location;
            $businessCard->bio          = $request->bio;
            $businessCard->sub_title    = $request->sub_title ?? '';
            $businessCard->theme_color  = $request->bgcolor ?? '#fff';
            $businessCard->theme_id     = $request->theme_id ?? 1;
            $businessCard->designation  = $request->designation;
            $businessCard->company_name = $request->company_name;
            $businessCard->color_link   = $request->color_link ?? 0;
            $businessCard->phone_number = $request->phone_number;
            $businessCard->ccode        = $request->ccode;
            $businessCard->card_email   = $request->card_email ?? Auth::guard('api')->user()->email;
            $businessCard->created_at   = date('Y-m-d H:i:s');

            if ($request->has('profile_pic') && !empty($request->profile_pic)) {
                $file_name = $this->formatName($request->name);
                $output = $request->profile_pic;

                $image_name =  $this->uploadBase64FileToPublic($output, 'profilePic');
                $businessCard->profile  = $image_name;
            }
            if ($request->has('cover_pic') && !empty($request->cover_pic[0])) {
                $file_name = $this->formatName($request->name);
                $output = $request->cover_pic;

                $image_name =  $this->uploadBase64FileToPublic($output, 'coverPic');


                $businessCard->cover = $image_name;
            }
            if ($request->has('company_logo') && !empty($request->company_logo[0])) {
                $file_name = $this->formatName($request->name);
                $output = $request->company_logo;
                $image_name =  $this->uploadBase64FileToPublic($output, 'companyLogo');
                $businessCard->logo = $image_name;
            }
            $businessCard->save();
            $email_icon =  DB::table('social_icon')->where('icon_name', 'email')->first();
            $fields = new BusinessField();
            $fields->card_id = $businessCard->id;
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
        } catch (Exception $e) {
            DB::rollback();
            dd($e);
            return $this->sendError("Exception Error", $e->getMessage());
        }
        DB::commit();


        return $this->sendResponse(200, "Card Updated Successfully", $businessCard, true,);
    }


    public function addCardIcon(Request $request)
    {
        $data = [];
        DB::beginTransaction();
        try {
            $rules = array(
                'logo'      => 'mimes:jpeg,jpg,png,webp,gif | max:1000',
                'content'   => 'required',
                'label'     => 'required|max:255',
                'card_id'   => 'required',
                'icon_id'   => 'required',
            );


            $social_icon    = SocialIcon::findOrFail($request->icon_id);
            if ($social_icon->type == 'link') {
                $rules['content'] = 'required|url|max:255';
            }
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return $this->sendError(200, $validator->errors()->first(), 200);
            }





            $card = BusinessCard::find($request->card_id);
            $icon           = new BusinessField();
            $icon->card_id  = $request->card_id;
            $icon->type     = $social_icon->type;
            $icon->position = BusinessField::where('card_id', $request->card_id)->max('position') + 1;
            $icon->status   = 1;
            $icon->icon     = $social_icon->icon_name;
            $icon->icon_id  = $social_icon->id;
            $icon->created_at = date('Y-m-d H:i:s');

            // $contact->type == 'link') &&  ($contact->icon_name == 'embeddedvideo')
            if (($social_icon->type == 'link')  &&  ($social_icon->icon_name == 'embeddedvideo')) {
                $icon->content =  $this->getYoutubeEmbad($request->content);
            } elseif ($request->hasFile('content')) {

                $icons = $this->uploadBase64FileToPublic($request->content, "/cardContent");

                $icon->content = $icons;
            } else {
                $icon->content  = $request->content;
            }

            $icon->label    =  $request->label;



            if (!is_null($request->file('logo'))) {
                $iconLogo = $this->uploadBase64FileToPublic($request->logo, "iconLogo");
                $icon->icon_image = $iconLogo;
            } else {
                $icon->icon_image = $social_icon->icon_image;
            }
            $icon->save();


            $icon = BusinessField::select('business_fields.*', 'social_icon.icon_color')->where('business_fields.id', $icon->id)
                ->leftJoin('social_icon', 'social_icon.id', '=', 'business_fields.icon_id')
                ->first();
            $icon_color = $social_icon->icon_color;
            if ($card->theme_color) {
                $icon_color = $card->theme_color;
            }
            DB::commit();
            return $this->sendResponse(200, "Icon Updated", $icon, true, []);
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return $this->sendResponse(200, $e, $data, 0);
        }
    }




    public function siconUpdate($request)
    {

        $data = [];
        DB::beginTransaction();
        try {

            $sid = $request->id;
            if ($request->status) {
                $status = $request->status;
                DB::table('business_fields')->where('id', $sid)->update(['status' => $status]);
            } else {
                $rules = array(
                    // 'logo'      => 'mimes:jpeg,jpg,png,webp,gif | max:1000',
                    'content'   => 'required',
                    'label'     => 'required|max:255',
                );
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    return $this->sendError("Validation Error", $validator->errors()->first(), 200);
                }
                $icon = BusinessField::findOrFail($request->id);
                $social_icon    = SocialIcon::findOrFail($icon->icon_id);
                if (($social_icon->type == 'link')  &&  ($social_icon->icon_name == 'embeddedvideo')) {
                    $icon->content =  $this->businessCard->getYoutubeEmbad($request->content);
                } elseif ($request->hasFile('content')) {
                    $custotomIconPath = $this->uploadBase64FileToPublic($request->content, "customIconPath");
                    $icon->content = $custotomIconPath;
                } else {
                    $icon->content  = $request->content;
                }
                $icon->label =  $request->label;

                if (!is_null($request->file('logo'))) {
                    $icon_ = $request->file('logo');

                    $icon->icon_image = $this->uploadBase64FileToPublic($icon_, "customLogo");;
                } else {
                    $icon->icon_image = $social_icon->icon_image;
                }
                $icon->update();
                $data['logo'] = asset($icon->icon_image);
                $data['content'] = $icon->content;
                $data['label'] = $icon->label;
                $data['status'] = $icon->status;
                $data['id'] = $icon->id;
            }
        } catch (\Exception $e) {

            DB::rollback();
            return $this->sendError("Exception Error", 'Information not updated! Please try again', $data, 0);
        }
        DB::commit();
        return $this->sendResponse(200, 'Information successfully updated', $data, 1);
    }


    public function removeCardIcon(Request $request)
    {
        $rules = array(
            'card_id'   => 'required',
            'icon_id'   => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError(200, $validator->errors()->first(), 200);
        }
        DB::beginTransaction();
        try {

            $cardResult = BusinessField::where('card_id', $request->card_id)->get();

            if (isset($cardResult) && count($cardResult) > 0) {
                $iconResult = BusinessField::where('card_id', $request->card_id)->where('icon_id', $request->icon_id)->first();
                if (isset($iconResult)) {
                    BusinessField::where('card_id', $request->card_id)->where('icon_id', $request->icon_id)->delete();
                } else {
                    return $this->sendError(200, "Invalid Icon", 200);
                }
            } else {
                return $this->sendError(200, "Invalid Card", 200);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return $this->sendError("Exception Error", 'Content not deleted', 0);
        }
        DB::commit();
        return $this->sendResponse(200, 'Icon deleted successfully', [], true, []);
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
