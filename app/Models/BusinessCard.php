<?php

namespace App\Models;
use File;
use Image;
use App\Models\SocialIcon;
use App\Traits\ApiResponse;
use Illuminate\Support\Str;
use App\Traits\RepoResponse;
use App\Models\BusinessField;
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

    public function getPaginatedList($request, int $paginate = 20)
    {
        // $data = $this->where('user_id',Auth::user()->id)->where('status',1)->orderBy('id','DESC')->paginate($per_page);
        $data = DB::table('business_cards as c')
        ->select('c.id','c.title','c.title2','c.phone_number','c.card_email','c.logo','c.card_url',
        'c.profile','c.created_at','cf.content','p.plan_name','c.user_id','c.status','c.cover','c.designation','c.company_name',
        )
        ->leftJoin('business_fields as cf','cf.card_id','c.id')
        ->leftJoin('users as u','c.user_id','u.id')
        ->leftJoin('plans as p','u.plan_id','p.id')
        ->orderBy('c.created_at', 'desc')
        ->where('c.status', '!=' , 2)
        ->where('c.user_id',Auth::user()->id)
        ->paginate($paginate);

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
            $data = new BusinessCard();
            $data->card_id      = $card_id;
            // $data->card_url      = $card_id;
            $data->user_id      = Auth::id();
            $data->card_lang    = 'en';
            $data->card_type    = 'vcard';
            $data->card_for     = $request->card_for;
            $data->card_status  = 'activated';
            $data->status       = 1;
            $data->title        = $request->name;
            // $data->title2       = $request->last_name;
            $data->location     = $request->location;
            $data->bio          = $request->bio;
            $data->sub_title    = $request->sub_title ?? '';
            $data->theme_color  = $request->bgcolor ?? '#fff';
            $data->theme_id     = $request->theme_id ?? 1;
            $data->designation  = $request->designation;
            $data->company_name = $request->company_name;
            $data->card_url     = $request->card_url;
            $data->phone_number = $request->phone_number;
            $data->ccode        = $request->ccode;
            $data->card_email   = $request->card_email ?? Auth::user()->email;
            $data->created_at   = date('Y-m-d H:i:s');
            if($request->has('profile_pic') && !empty($request->profile_pic[0]))
            {
                $file_name = $this->formatName($request->name);
                $output = $request->profile_pic;
                $output = json_decode($output, TRUE);
                if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                    $image = $output['output']['image'];
                    if(isset($image))
                    {
                        $image_name =  $this->uploadBase64ToImage($image,$file_name,'jpg');
                    }
                }
                $data->profile  = $image_name;
            }
            if($request->has('cover_pic') && !empty($request->cover_pic[0]))
            {
                $file_name = $this->formatName($request->name);
                $output = $request->cover_pic;
                $output = json_decode($output, TRUE);
                if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                    $image = $output['output']['image'];
                    if(isset($image))
                    {
                        $image_name =  $this->uploadBase64ToImage($image,$file_name,'jpg');
                    }
                }
                $data->cover = $image_name;
            }
            if($request->has('company_logo') && !empty($request->company_logo[0]))
            {
                $file_name = $this->formatName($request->name);
                $output = $request->company_logo;
                $output = json_decode($output, TRUE);
                if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                    $image = $output['output']['image'];
                    if(isset($image))
                    {
                        $image_name =  $this->uploadBase64ToImage($image,$file_name,'jpg');
                    }
                }
                $data->logo = $image_name;
            }
            $data->save();
            $card_id = DB::table('business_cards')->insertGetId($card);
            $email_icon =  DB::table('social_icon')->where('icon_name','email')->first();
            $fields = new BusinessField();
            $fields->card_id = $card_id;
            $fields->type = 'email';
            $fields->icon = $email_icon->icon_name;
            $fields->icon_image = $email_icon->icon_image;
            $fields->icon_id = $email_icon->id;
            $fields->label = $email_icon->icon_title;
            $fields->content = Auth::user()->email;
            $fields->position = 1;
            $fields->status = 1;
            $fields->created_at = date('Y-m-d H:i:s');
            $fields->save();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return $this->formatResponse(false, 'Unable to create Card !', 'user.card.create');
        }
        DB::commit();
        $card_info = DB::table('business_cards')->where('id',$card_id)->first();
        Mail::to(Auth::user()->email)->send(new EmailToCardOwner($card_info));
        return $this->formatResponse(true, 'Card has been created successfully !', 'user.card.edit',$card_info->id);
    }




    public function uploadBase64ToImage($file,$file_name,$file_prefix)
    {
        $file_path = sprintf("assets/uploads/avatar/");
        $file_name = sprintf('%s.%s', $file_name, $file_prefix);
        $upload_path = public_path() . '/' . $file_path;
        if(stripos($file, 'data:image/jpeg;base64,') === 0)
        {
            $img = base64_decode(str_replace('data:image/jpeg;base64,', '', $file));
        }
        else if(stripos($file, 'data:image/png;base64,') === 0){
            $img = base64_decode(str_replace('data:image/png;base64,', '', $file));
        }
        else{
            return array('error' => 'non-image files');
        }
        $result = file_put_contents($upload_path . $file_name, $img);
            // if($result == FALSE)
            // {
            //     return array('error' => 'Failed to write to file, possibly without permission');
            // }
        return $file_path.$file_name;
    }



    // public function getYoutubeEmbad($url){
    //     $query = parse_url($url);
    //     if(isset($query['query'])){
    //        $remove_extra = substr($query['query'], 0, strpos($query['query'], "&"));
    //         $_query = $remove_extra;
    //         $video_id = trim($_query,'v=');
    //     }else{
    //         $video_id = explode('/', $url);
    //         $video_id = end($video_id);
    //         }
    //     $video_file = 'https://www.youtube.com/embed/'.$video_id;
    //     return $video_file;
    // }


    public function postUpdate($request, $id)
    {
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

            if($request->has('profile_pic') && !empty($request->profile_pic[0]))
            {
                $file_name = $this->formatName($request->name);
                $output = $request->profile_pic;
                $output = json_decode($output, TRUE);
                if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                    $image = $output['output']['image'];
                    if(isset($image))
                    {
                        if(File::exists($card->profile)) {
                            File::delete($card->profile);
                        }
                        $card->profile =  $this->uploadBase64ToImage($image,$file_name,'jpg');
                    }
                }

            }
            if($request->has('cover_pic') && !empty($request->cover_pic[0]))
            {
                $file_name = $this->formatName($request->name);
                $output = $request->cover_pic;
                $output = json_decode($output, TRUE);
                if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                    $image = $output['output']['image'];
                    if(isset($image))
                    {
                        if(File::exists($card->cover)) {
                            File::delete($card->cover);
                        }
                        $card->cover =  $this->uploadBase64ToImage($image,$file_name,'jpg');
                    }
                }
            }
            if($request->has('company_logo') && !empty($request->company_logo[0]))
            {
                $file_name = $this->formatName($request->name);
                $output = $request->company_logo;
                $output = json_decode($output, TRUE);
                if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                    $image = $output['output']['image'];
                    if(isset($image))
                    {
                        if(File::exists($card->logo)) {
                            File::delete($card->logo);
                        }
                        $card->logo =  $this->uploadBase64ToImage($image,$file_name,'jpg');
                    }
                }
            }
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


    public function formatName($name)
    {
        $base_name = preg_replace('/\..+$/', '', $name);
        $base_name = explode(' ', $base_name);
        $base_name = implode('-', $base_name);
        $base_name = Str::lower($base_name);
        $name = $base_name."-".uniqid();
        return $name;
    }


}
