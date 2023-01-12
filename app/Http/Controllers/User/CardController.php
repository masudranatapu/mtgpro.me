<?php
namespace App\Http\Controllers\User;
use DB;
use App\Models\Plan;
use App\Models\User;
use App\Models\SocialIcon;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use App\Models\BusinessField;
use App\Mail\EmailToCardOwner;
use App\Http\Requests\CardRequest;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use App\Http\Requests\FirstCardRequest;
use App\Http\Requests\CardUpdateRequest;

class CardController extends Controller
{
    protected $businessCard;
    protected $plan;
    public function __construct(
        BusinessCard $businessCard,
        Plan $plan
        )
        {
            $this->businessCard  = $businessCard;
            $this->plan         = $plan;
            $this->middleware('auth');
            $this->settings = getSetting();
        }

    public function getIndex(Request $request)
    {
        $this->resp = $this->businessCard->getPaginatedList($request);
        $cards = $this->resp->data;
        if(count($cards) < 1){
            return redirect()->route('user.card.init-card');
        }
        return view('user.dashboard', compact('cards'));
    }

    public function getCreate (Request $request)
    {
        $this->resp = $this->businessCard->getPaginatedList($request);
        $cards = $this->resp->data;
        $icons = SocialIcon::where('status',1)->orderBy('order_id','desc')->get();

        // if(count($cards) == 0 ){
        //     return view('user.card.first_card',compact('cards'));
        // }
        $user_id = Auth::id();
        //validity
        $validity = checkPackageValidity($user_id);
        if($validity == false){
            Toastr::warning(trans('Your package is expired please upgrade'), 'Warning', ["positionClass" => "toast-top-center"]);
            return redirect()->route('user.plans');
        }


        $check = checkCardLimit($user_id);
        if($check == false){
            Toastr::warning(trans('Your card limit is over please upgrade your package for more card'), 'Warning', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        $plan_details = User::where('id',$user_id)->first();
        $user_email = SocialIcon::where('icon_name','email')->first();

        $user = User::find($user_id);
        return view('user.card.create',compact('cards','icons','plan_details','user_email','user'));
    }

    public function getEdit(Request $request,$id)
    {
        $user_id = Auth::id();
        $card = $this->businessCard->getView($request,$id);
        $icons = SocialIcon::where('status',1)->orderBy('order_id','desc')->get();
        // dd($icons);
        // dd($card->business_card_fields);
        $user = User::find($user_id);
        // dd($card);
        return view('user.card.edit',compact('card','icons','user'));
    }

    public function siconUpdate(Request $request)
    {
        $data = $this->businessCard->siconUpdate($request);
        return response()->json($data);
    }
    public function addCardIcon(Request $request)
    {
        $data = $this->businessCard->addCardIcon($request);
        return response()->json($data);
    }

    public function siconEdit(Request $request)
    {
        $data = $this->businessCard->siconEdit($request);
        return response()->json($data);
    }
    public function siconRemove(Request $request)
    {
        $data = $this->businessCard->siconRemove($request);
        return response()->json($data);
    }


    // public function getVideoDelete($id,$index)
    // {
    //     DB::beginTransaction();
    //     try {
    //         $card = BusinessCard::where('business_cards.id',$id)->first();
    //         if($card->business_card_fields){
    //             $card_fields = $card->business_card_fields->content;
    //             $arr_card_fields = json_decode($card_fields,true);
    //             if($arr_card_fields['section_video']){
    //                 $comment = $arr_card_fields;
    //                 if(isset($arr_card_fields['section_video'][$index])){
    //                     unset($arr_card_fields['section_video'][$index]);
    //                 }
    //                 $comment['section_video'] = $arr_card_fields['section_video'];
    //                 $jcomment = json_encode($comment);
    //                 BusinessField::where('card_id',$id)->update(['content' => $jcomment]);
    //             }
    //         }
    //     } catch (\Throwable $th) {
    //         DB::rollback();
    //         $data['status'] = 'failed';
    //         return response()->json($data);
    //     }
    //     DB::commit();
    //     $data['status'] = 'success';
    //     return response()->json($data);
    // }


    // public function getTestimonialDelete($id,$index)
    // {
    //     DB::beginTransaction();
    //     try {
    //         $card = BusinessCard::where('business_cards.id',$id)->first();
    //         if($card->business_card_fields){
    //             $card_fields = $card->business_card_fields->content;
    //             $arr_card_fields = json_decode($card_fields,true);
    //             if($arr_card_fields['section_testimonial']){
    //                 $comment = $arr_card_fields;
    //                 if(isset($arr_card_fields['section_testimonial'][$index])){
    //                     unset($arr_card_fields['section_testimonial'][$index]);
    //                 }
    //                 $comment['section_testimonial'] = $arr_card_fields['section_testimonial'];
    //                 $jcomment = json_encode($comment);
    //                 BusinessField::where('card_id',$id)->update(['content' => $jcomment]);
    //             }
    //         }
    //     } catch (\Throwable $th) {
    //         DB::rollback();
    //         $data['status'] = 'failed';
    //         return response()->json($data);
    //     }
    //     DB::commit();
    //     $data['status'] = 'success';
    //     return response()->json($data);
    // }


    public function getView(Request $request,$id)
    {
        $card = $this->businessCard->getView($request,$id);
        if(empty($card)){
            abort(404);
        }
        $icons = SocialIcon::orderBy('order_id','desc')->get();
        $url = url($card->card_url);

        $shareComponent = \Share::page($url,'Hello! This is my vCard.')->facebook()->twitter()->linkedin()->telegram()->whatsapp();
        return view('user.card.view',compact('card','icons', 'shareComponent'));

    }


    public function postStore(CardRequest $request)
    {
        $validity = checkPackageValidity(Auth::id());
        if($validity == false){
            Toastr::warning(trans('Your package is expired please upgrade'), 'Warning', ["positionClass" => "toast-top-center"]);
            return redirect()->route('user.plans');
        }


        $check = checkCardLimit(Auth::id());
        if($check == false){
            Toastr::warning(trans('Your card limit is over please upgrade your package for more card'), 'Warning', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        $this->resp = $this->businessCard->postStore($request);
        if (!$this->resp->status) {
            Toastr::error(trans($this->resp->msg), 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back()->with($this->resp->redirect_class, $this->resp->msg);
        }
        Toastr::success(trans($this->resp->msg), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('user.card.edit',$this->resp->data)->with($this->resp->redirect_class, $this->resp->msg);
    }


    public function postUpdate(CardUpdateRequest $request, $id)
    {
        $this->resp = $this->businessCard->postUpdate($request, $id);
        if (!$this->resp->status) {
            Toastr::error(trans($this->resp->msg), 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back()->with($this->resp->redirect_class, $this->resp->msg);
        }
        Toastr::success(trans($this->resp->msg), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route($this->resp->redirect_to)->with($this->resp->redirect_class, $this->resp->msg);
    }


    public function checkPerLink(Request $request,$link_text){
        $reserve_word = config('app.reserve_word');
        $data['status'] = false;
        $data['message'] = 'This link is not available';

        if(!in_array($link_text,$reserve_word)){

            //check in database business_cards card_url
            if($request->mode == 'edit'){
                $card_url = BusinessCard::where('card_url',$link_text)->where('id','<>',$request->id)->first();
            }else{
                $card_url = BusinessCard::where('card_url',$link_text)->first();
            }
            if($card_url == null){
                $data['status'] = true;
                $data['message'] = 'This link is available';
            }
        }


        return response()->json($data);
    }

    public function getDelete(Request $request,$id){
        BusinessCard::where('id',$id)->update([
            'status' => 2
        ]);
        BusinessField::where('card_id',$id)->update([
            'status' => 2
        ]);
        // BusinessCard::where('id',$id)->delete();
        // BusinessField::where('card_id',$id)->delete();
        if($request->ajax()){
            return response()->json(['status'=> 1,'message' => 'Card deleted successfully!'], 200);
        }
        Toastr::success(trans('Card deleted successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('user.card');

    }

    public function getCardShareInfo(Request $request,$id)
    {
        $response = $this->businessCard->getCardShareInfo($request,$id);
        return response()->json($response, $response->code);
    }
    public function getSendModalInfo(Request $request,$id)
    {
        $response = $this->businessCard->getSendModalInfo($request,$id);
        return response()->json($response, $response->code);
    }

    public function getEmailForm(Request $request,$id)
    {
        $response = $this->businessCard->getEmailForm($request,$id);
        return response()->json($response, $response->code);
    }


    public function getInitCard()
    {
        $card = $this->businessCard->where('user_id',Auth::user()->id)->first();
        if(!empty($card)){
            return redirect()->route('user.card');
        }
        return view('user.card.starter_card');
    }


    public function saveBusinessCard(FirstCardRequest $request)
    {
        DB::beginTransaction();
        try {
            $card = $this->businessCard->where('user_id',Auth::user()->id)->first();
            if(!empty($card)){
                return redirect()->route('user.card');
            }
          //validity
          $validity = checkPackageValidity(Auth::id());
        //   if($validity == false){
        //       Toastr::warning(trans('Your package is expired please upgrade'), 'Warning', ["positionClass" => "toast-top-center"]);
        //       return redirect()->route('user.plans');
        //   }

        //   $check = checkCardLimit(Auth::id());
        //   if($check == false){
        //       Toastr::warning(trans('Your card limit is over please upgrade your package for more card'), 'Warning', ["positionClass" => "toast-top-center"]);
        //       return redirect()->back();
        //   }
        $card               = new BusinessCard();
        $card->card_id      = uniqid();
        $card->user_id      = Auth::id();
        $card->theme_id     = 1;
        $card->theme_color  = '#fff';
        $card->card_lang    = 'en';
        $card->card_url     = uniqid();
        $card->card_type    = 'vcard';
        if($request->has('photo') && !empty($request->photo[0]))
        {
            $file_name = $this->businessCard->formatName($request->name);
            $output = $request->photo;
            $output = json_decode($output, TRUE);
            if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                $image = $output['output']['image'];
                if(isset($image))
                {
                    $card->profile =  $this->businessCard->uploadBase64ToImage($image,$file_name,'jpg');
                }
            }
        }
        $card->title        = $request->name;
        $card->designation  = $request->designation;
        $card->company_name = $request->company_name;
        $card->phone_number = $request->phone_number;
        $card->ccode        = $request->ccode;
        $card->card_email   = $request->card_email ?? Auth::user()->email;
        $card->card_for     = 'Work';
        $card->save();

        if(!empty($request->phone_number)){
            $mobile_icon =  DB::table('social_icon')->where('icon_name','phone')->first();
            // dd($mobile_icon);
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

        $email_icon =  DB::table('social_icon')->where('icon_name','email')->first();
        $fields = new BusinessField();
        $fields->card_id = $card->id;
        $fields->type = 'mail';
        $fields->icon = $email_icon->icon_name;
        $fields->icon_image = $email_icon->icon_image;
        $fields->icon_id = $email_icon->id;
        $fields->label = $email_icon->icon_title;
        $fields->content = Auth::user()->email;
        $fields->position = 2;
        $fields->status = 1;
        $fields->created_at = date('Y-m-d H:i:s');
        $fields->save();
        $user = User::where('id',Auth::id())->first();

        if($user->name == null){
            $user->name = $request->name;
        }
        $user->active_card_id = $card->id;
        $user->update();

        $card = $this->businessCard->getView($request,$card->id);
        // Mail::to(Auth::user()->email)->send(new EmailToCardOwner($card));
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error(trans('Unable to create Card ! Please try again'), 'Success', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success(trans('Card has been created successfully !'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('user.card');
        }



        // public function cropImage(Request $request){
        //     return view('user.crop-img');
        // }


        // public function cropImageUpload(Request $request){
        //     if($request->has('avatar') && $request->avatar[0])
        //     {
        //          $output = $request->avatar;
        //          $output = json_decode($output, TRUE);
        //          if(isset($output) && isset($output['output']) && isset($output['output']['image']))
        //             $image = $output['output']['image'];
        //             if(isset($image))
        //             {
        //               $this->uploadBase64ToImage($image,'jpg');
        //               return view('user.crop-img');
        //             }
        //             return view('user.crop-img');
        //         //  return 'no picture file';
        //     }
        //     // dd($request->all());

        //     return view('user.crop-img');
        // }

        public function getChangeCardStatus(Request $request)
        {
            DB::beginTransaction();
            try
            {
            $card = BusinessCard::findOrFail($request->id);
            $card->status = !$card->status;
            $card->save();
            }
            catch(\Exception $e)
            {
                DB::rollback();
                return response()->json([
                    'status'=>false,
                    'msg'=>'Something wrong! Please try again',
                    'is_active'=> $card->status,
                ]);
            }
            DB::commit();
            return response()->json([
                'status'=>true,
                'msg'=>'Card status successfully updated',
                'is_active'=> $card->status,
            ]);


        }






}
