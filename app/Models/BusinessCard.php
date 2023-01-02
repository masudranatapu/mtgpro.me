<?php

namespace App\Models;
use File;
use Image;
use App\Models\SocialIcon;
use App\Traits\ApiResponse;
use Illuminate\Support\Str;
use App\Traits\RepoResponse;
use App\Helpers\StorageHelper;
use App\Mail\EmailToCardOwner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class BusinessCard extends Model
{
    use RepoResponse;
    use ApiResponse;

    public function getPaginatedList($request, int $per_page = 20)
    {
        $data = $this->where('user_id',Auth::user()->id)->where('status',1)->orderBy('id','DESC')->paginate($per_page);
        return $this->formatResponse(true, '', 'web.index', $data);
    }

    public function getView($request,$id){

        return $this->select('business_cards.*','users.plan_details')
        ->leftJoin('users','users.id','=','business_cards.user_id')
        ->where('business_cards.status',1)
        ->where('business_cards.id',$id)
        ->where('business_cards.user_id',Auth::user()->id)->first();
    }



    public function business_card_fields()
    {
        return $this->hasMany(BusinessField::class, 'card_id')->orderBy('position','asc');
    }




    public function theme()
    {
        return $this->hasOne(Theme::class, 'theme_id', 'theme_id');
    }


    public function postStore($request){
        DB::beginTransaction();
        try {
            $card_id = uniqid();
            $card['card_id']      = $card_id;
            // $card['card_url']      = $card_id;
            $card['user_id']      = Auth::id();
            $card['card_lang']    = 'en';
            $card['card_type']    = 'vcard';
            $card['card_for']     = $request->card_for;
            $card['card_status']  = 'activated';
            $card['status']       = 1;
            $card['title']        = $request->name;
            // $card['title2']       = $request->last_name;
            $card['location']     = $request->location;
            $card['bio']          = $request->bio;
            $card['sub_title']    = $request->sub_title ?? '';
            $card['theme_color']  = $request->bgcolor ?? '#fff';
            $card['theme_id']     = $request->theme_id ?? 1;
            $card['designation']  = $request->designation;
            $card['company_name'] = $request->company_name;
            $card['card_url']     = $request->card_url;
            $card['phone_number'] = $request->phone_number;
            $card['ccode']        = $request->ccode;
            $card['card_email']   = $request->card_email ?? Auth::user()->email;
            $card['created_at']   = date('Y-m-d H:i:s');

            if(!is_null($request->file('profile_pic')))
            {
              $icon_ = $request->file('profile_pic');
              $base_name = preg_replace('/\..+$/', '', $icon_->getClientOriginalName());
              $base_name = explode(' ', $base_name);
              $base_name = implode('-', $base_name);
              $base_name = Str::lower($base_name);
              $image_name = $base_name."-".uniqid().".".$icon_->getClientOriginalExtension();
              $file_path = 'assets/uploads/avatar/';
              if (!File::exists($file_path)) {
                File::makeDirectory($file_path, 777, true);
              }
             $icon_->move($file_path, $image_name);

             $card['profile']  = $file_path.$image_name;
            }

            if(!is_null($request->file('cover_pic')))
            {
              $cover_pic = $request->file('cover_pic');
              $base_name = preg_replace('/\..+$/', '', $cover_pic->getClientOriginalName());
              $base_name = explode(' ', $base_name);
              $base_name = implode('-', $base_name);
              $base_name = Str::lower($base_name);
              $image_name = $base_name."-".uniqid().".".$cover_pic->getClientOriginalExtension();
              $file_path = 'assets/uploads/cover/';
              if (!File::exists($file_path)) {
                File::makeDirectory($file_path, 777, true);
              }
             $cover_pic->move($file_path, $image_name);
             $card['cover'] = $file_path.$image_name;
            }
            if(!is_null($request->file('company_logo')))
            {
              $company_logo = $request->file('company_logo');
              $base_name = preg_replace('/\..+$/', '', $company_logo->getClientOriginalName());
              $base_name = explode(' ', $base_name);
              $base_name = implode('-', $base_name);
              $base_name = Str::lower($base_name);
              $image_name = $base_name."-".uniqid().".".$company_logo->getClientOriginalExtension();
              $file_path = 'assets/uploads/logo/';
              if (!File::exists($file_path)) {
                File::makeDirectory($file_path, 777, true);
              }
             $company_logo->move($file_path, $image_name);
             $card['logo'] = $file_path.$image_name;
            }
            $card_id = DB::table('business_cards')->insertGetId($card);
            // $request_arr = $request->all();
            // $content = $section_video = $section_testimonial = [];
            // if($request_arr){
            //     foreach ($request_arr as $key => $value) {
            //         $icon = SocialIcon::where('status',1)->where('icon_name',$key)->pluck('icon_name')->toArray();
            //         if(!empty($icon)){
            //             if(in_array($key,$icon)){
            //                 $content[$key] = $request_arr[$key];
            //             }
            //         }
            //     }
            // }
            // //section about
            // if($request->about_content){
            //     $content['section_about'] = ['about_title' => $request->about_title, 'about_content' => $request->about_content];
            // }
            //section video
            // if($request->video_file){
            //     foreach ($request->video_file as $vkey => $video) {
            //         if(!empty($video)){
            //             $video_file =  null;
            //             if($request->video_file[$vkey]){
            //                 if($request->video_type[$vkey]=='file'){
            //                     $_video = $request->file('video_file')[$vkey];
            //                     $base_name = preg_replace('/\..+$/', '', $_video->getClientOriginalName());
            //                     $video_name = $base_name . "-" . uniqid() . "." .$_video->getClientOriginalExtension();
            //                     $file_path = 'upload/video';
            //                     if (! File::exists($file_path)) {
            //                         File::makeDirectory($file_path);
            //                     }
            //                     $_video->move($file_path, $video_name);
            //                     $video_file = asset($file_path.'/'.$video_name);
            //                 }else{
            //                     $video_file =  $this->getYoutubeEmbad($request->video_file[$vkey]);
            //                 }
            //             }
            //             $section_video[$vkey]['video_title'] = $request->video_title[$vkey] ?? null;
            //             // $section_video[$vkey]['video_type'] = $request->video_type[$vkey] ?? null;
            //             $section_video['video_type'] = 'link';
            //             $section_video[$vkey]['video_description'] = $request->video_description[$vkey] ?? null;
            //             $section_video[$vkey]['video_file'] = $video_file;
            //         }
            //     }
            //     $content['section_video'] = $section_video;
            // }

            //section testimonial
            // if($request->testimonial_content){
            //     foreach ($request->testimonial_content as $tkey => $testimonial) {
            //         if(!empty($testimonial)){
            //             $section_testimonial[$vkey]['testimonial_content'] = $request->testimonial_content[$tkey] ?? null;
            //             $section_testimonial[$vkey]['testimonial_name'] = $request->testimonial_name[$tkey] ?? null;
            //         }
            //     }
            //     $content['section_testimonial'] = $section_testimonial;
            // }

            //insert to business_fields
            // if($content){
            //     $fields['card_id'] = $card_id;
            //     $fields['type'] = 'json';
            //     $fields['icon'] = 'json';
            //     $fields['label'] = 'json';
            //     $fields['content'] = json_encode($content);
            //     $fields['position'] = 1;
            //     $fields['status'] = 1;
            //     $fields['created_at'] = date('Y-m-d H:i:s');
            //     DB::table('business_fields')->insert($fields);
            // }

                $fields['card_id'] = $card_id;
                $fields['type'] = 'email';
                $fields['icon'] = 'json';
                $fields['label'] = 'Email';
                $fields['content'] = Auth::user()->email;
                $fields['position'] = 1;
                $fields['icon_image'] = 'assets/img/icon/email.svg';
                $fields['status'] = 1;
                $fields['created_at'] = date('Y-m-d H:i:s');

                DB::table('business_fields')->insert($fields);

            $card_info = DB::table('business_cards')->where('id',$card_id)->first();
            Mail::to(Auth::user()->email)->send(new EmailToCardOwner($card_info));
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return $this->formatResponse(false, 'Unable to create Card !', 'user.card.create');
        }
        DB::commit();
        return $this->formatResponse(true, 'Card has been created successfully !', 'user.card.edit',$card_info->id);
    }


    public function getYoutubeEmbad($url){
        $query = parse_url($url);
        if(isset($query['query'])){
           $remove_extra = substr($query['query'], 0, strpos($query['query'], "&"));
            $_query = $remove_extra;
            $video_id = trim($_query,'v=');
        }else{
            $video_id = explode('/', $url);
            $video_id = end($video_id);
            }
        $video_file = 'https://www.youtube.com/embed/'.$video_id;
        return $video_file;
    }


    public function postUpdate($request, $id)
    {
        // dd($request->all());
        // $content = null;
        DB::beginTransaction();
        try {
            $card = BusinessCard::findOrFail($id);
            $card->user_id      = Auth::id();
            $card->card_lang    = 'en';
            $card->card_url     = $request->card_url;
            $card->card_type    = 'vcard';
            $card->card_for     = $request->card_for;
            $card->card_status  = 'activated';
            $card->status       = 1;
            $card->title        = $request->name;
            // $card->title2       = $request->last_name;
            // $card->sub_title    = $request->sub_title;
            $card->theme_color  = $request->bgcolor ?? '#fff';
            $card->theme_id     = $request->theme_id ?? 1;
            $card->designation  = $request->designation;
            $card->location     = $request->location;
            $card->bio          = $request->bio;
            $card->company_name = $request->company_name;
            // $card->phone_number = $request->phone_number;
            // $card->ccode        = $request->ccode;
            // $card->card_email   = $request->card_email;
            // $card->company_websitelink   = $request->company_websitelink;
            $card->updated_at   = date('Y-m-d H:i:s');

            // if($request->profile_image_path){
            //     $card->profile = $request->profile_image_path;
            // }
            // if($request->logo_path){
            //     $card->logo = $request->logo_path;
            // }
            $card->update();


    } catch (\Exception $e) {
        dd($e);
        DB::rollback();
    return $this->formatResponse(false, 'Unable to update card !!', 'user.card',[]);
    }
    DB::commit();
    return $this->formatResponse(true, 'Successfully updated', 'user.card',[]);
    }



    public function addCardIcon($request){
        // dd($request->all());
        $data = [];
        DB::beginTransaction();
        try {
                $rules = array(
                    'logo'      => 'mimes:jpeg,jpg,png,webp,gif | max:1000',
                    'content'   => 'required|max:255',
                    'label'     => 'required|max:255',
                );
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    return $this->successResponse(200, 'Information not updated! Please try again', '', 0);
                }
                $social_icon    = SocialIcon::findOrFail($request->icon_id);
                $icon           = new BusinessField();
                $icon->card_id  = $request->card_id;
                $icon->type     = $request->type ?? 'link';
                $icon->position = BusinessField::where('card_id',$request->card_id)->max('position')+1;
                $icon->status   = 1;
                $icon->icon     = $social_icon->icon_name;
                $icon->icon_id  = $social_icon->id;
                $icon->created_at = date('Y-m-d H:i:s');
                $icon->content  = $request->content;
                $icon->label    =  $request->label;
                if(!is_null($request->file('logo')))
                {
                  $icon_ = $request->file('logo');
                  $base_name = preg_replace('/\..+$/', '', $icon_->getClientOriginalName());
                  $base_name = explode(' ', $base_name);
                  $base_name = implode('-', $base_name);
                  $base_name = Str::lower($base_name);
                  $image_name = $base_name."-".uniqid().".".$icon_->getClientOriginalExtension();
                  $file_path = 'assets/img/icon/custom_icon/';
                  if (!File::exists($file_path)) {
                    File::makeDirectory($file_path, 777, true);
                  }
                 $icon_->move($file_path, $image_name);
                 $icon->icon_image = $file_path.$image_name;
                }
                else{
                    $icon->icon_image = $social_icon->icon_image;
                }
                $icon->save();
                $data['html'] = view('user.card.partial._social_icon', compact('icon'))->render();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return $this->successResponse(200, 'Information not created! Please try again', $data, 0);
        }
            DB::commit();
            return $this->successResponse(200, 'Information successfully created', $data, 1);
    }
    public function siconUpdate($request){

        $data = [];

        DB::beginTransaction();
        try {
            $sid = $request->id;
            if($request->status){
                $status = $request->status == 'checked' ? 1 : 0;
                DB::table('business_fields')->where('id',$sid)->update(['status'=>$status]);
            }
            else{
                $rules = array(
                    'logo'      => 'mimes:jpeg,jpg,png,webp,gif | max:1000',
                    'content'   => 'required|max:255',
                    'label'     => 'required|max:255',
                );
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    return $this->successResponse(200, 'Information not updated! Please try again', '', 0);
                }
                $icon = BusinessField::findOrFail($request->id);
                $icon->content = $request->content;
                $icon->label =  $request->label;
                if(!is_null($request->file('logo')))
                {
                    if(File::exists($icon->icon_image)) {
                        File::delete($icon->icon_image);
                    }
                  $icon_ = $request->file('logo');
                  $base_name = preg_replace('/\..+$/', '', $icon_->getClientOriginalName());
                  $base_name = explode(' ', $base_name);
                  $base_name = implode('-', $base_name);
                  $base_name = Str::lower($base_name);
                  $image_name = $base_name."-".uniqid().".".$icon_->getClientOriginalExtension();
                  $file_path = 'assets/img/icon/custom_icon/';
                  if (!File::exists($file_path)) {
                    File::makeDirectory($file_path, 777, true);
                  }
                 $icon_->move($file_path, $image_name);
                 $icon->icon_image = $file_path.$image_name;
                }
                $icon->update();

                $data['logo'] = asset($icon->icon_image);
                $data['content'] = $icon->content;
                $data['label'] = $icon->label;
                $data['status'] = $icon->status;
                $data['id'] = $icon->id;
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return $this->successResponse(200, 'Information not updated! Please try again', $data, 0);
        }
            DB::commit();
            return $this->successResponse(200, 'Information successfully updated', $data, 1);
    }

    public function siconEdit($request){
        $data = null;
        DB::beginTransaction();
        try {
            $sid = $request->id;
            $icon = BusinessField::where('id',$sid)->first();
            $data['html'] = view('user.card._sicon_edit', compact('icon'))->render();

        } catch (\Exception $e) {
            // dd($e->getMessage());
            DB::rollback();
            return $this->successResponse($e->getCode(), 'Content not found', '', 0);
        }
            DB::commit();
            return $this->successResponse(200, 'Content found', $data, 1);
    }


    public function siconRemove($request){
        $data = null;
        DB::beginTransaction();
        try {
            $sid = $request->id;
            BusinessField::where('id',$sid)->delete();
        } catch (\Exception $e) {
            // dd($e->getMessage());
            DB::rollback();
            return $this->successResponse($e->getCode(), 'Content not deleted', '', 0);
        }
            DB::commit();
            return $this->successResponse(200, 'Content deleted successfully', $data, 1);
    }


    public function getCardShareInfo($request,$id){
        DB::beginTransaction();
        try {
            $row = $this->getView($request,$id);
            $data = view('mobile.partial._card_share_info')->withRow($row)->render();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return $this->successResponse($e->getCode(), 'Card info not found !', '', 0);
        }
            DB::commit();
            return $this->successResponse(200, 'Data found!', $data, 1);
    }
    public function getSendModalInfo($request,$id){
        DB::beginTransaction();
        try {
            $row = $this->getView($request,$id);
            $data = view('mobile.partial._send_modal_info')->withRow($row)->render();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return $this->successResponse($e->getCode(), 'Card info not found !', '', 0);
        }
            DB::commit();
            return $this->successResponse(200, 'Data found!', $data, 1);
    }
    public function getEmailForm($request,$id){
        DB::beginTransaction();
        try {
            $row = $this->getView($request,$id);
            $data = view('mobile.partial._modal_email_form')->withRow($row)->render();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return $this->successResponse($e->getCode(), 'Card info not found !', '', 0);
        }
            DB::commit();
            return $this->successResponse(200, 'Data found!', $data, 1);
    }


}
