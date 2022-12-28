<?php
namespace App\Http\Controllers\User;
use DB;
use App\Models\Card;
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
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

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

        return view('user.dashboard', compact('cards'));
    }

    public function getCreate (Request $request)
    {
        $this->resp = $this->businessCard->getPaginatedList($request);
        $cards = $this->resp->data;
        $icons = SocialIcon::orderBy('order_id','desc')->get();
        if(count($cards) == 0 ){
            return view('user.card.first_card',compact('cards'));
        }
        //validity
        $validity = checkPackageValidity(Auth::id());
        if($validity == false){
            Toastr::warning(trans('Your package is expired please upgrade'), 'Warning', ["positionClass" => "toast-top-right"]);
            return redirect()->route('user.plans');
        }


        $check = checkCardLimit(Auth::id());
        if($check == false){
            Toastr::warning(trans('Your card limit is over please upgrade your package for more card'), 'Warning', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        $plan_details = User::where('id',Auth::user()->id)->first();
        return view('user.card.create',compact('cards','icons','plan_details'));
    }

    public function getEdit(Request $request,$id)
    {
        $user_id = Auth::id();
        $card = $this->businessCard->getView($request,$id);
        $icons = SocialIcon::all();
        return view('user.card.edit',compact('card','icons'));
    }

    public function getVideoDelete($id,$index)
    {
        DB::beginTransaction();
        try {
            $card = BusinessCard::where('business_cards.id',$id)->first();
            if($card->business_card_fields){
                $card_fields = $card->business_card_fields->content;
                $arr_card_fields = json_decode($card_fields,true);
                if($arr_card_fields['section_video']){
                    $comment = $arr_card_fields;
                    if(isset($arr_card_fields['section_video'][$index])){
                        unset($arr_card_fields['section_video'][$index]);
                    }
                    $comment['section_video'] = $arr_card_fields['section_video'];
                    $jcomment = json_encode($comment);
                    BusinessField::where('card_id',$id)->update(['content' => $jcomment]);
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            $data['status'] = 'failed';
            return response()->json($data);
        }
        DB::commit();
        $data['status'] = 'success';
        return response()->json($data);
    }


    public function getTestimonialDelete($id,$index)
    {
        DB::beginTransaction();
        try {
            $card = BusinessCard::where('business_cards.id',$id)->first();
            if($card->business_card_fields){
                $card_fields = $card->business_card_fields->content;
                $arr_card_fields = json_decode($card_fields,true);
                if($arr_card_fields['section_testimonial']){
                    $comment = $arr_card_fields;
                    if(isset($arr_card_fields['section_testimonial'][$index])){
                        unset($arr_card_fields['section_testimonial'][$index]);
                    }
                    $comment['section_testimonial'] = $arr_card_fields['section_testimonial'];
                    $jcomment = json_encode($comment);
                    BusinessField::where('card_id',$id)->update(['content' => $jcomment]);
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            $data['status'] = 'failed';
            return response()->json($data);
        }
        DB::commit();
        $data['status'] = 'success';
        return response()->json($data);
    }


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
        $this->resp = $this->businessCard->postStore($request);
        if (!$this->resp->status) {
            Toastr::error(trans($this->resp->msg), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->with($this->resp->redirect_class, $this->resp->msg);
        }
        Toastr::success(trans($this->resp->msg), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('user.card.view',$this->resp->data)->with($this->resp->redirect_class, $this->resp->msg);
    }


    public function postUpdate(CardRequest $request, $id)
    {
        $this->resp = $this->businessCard->postUpdate($request, $id);
        if (!$this->resp->status) {
            Toastr::error(trans($this->resp->msg), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->with($this->resp->redirect_class, $this->resp->msg);
        }
        Toastr::success(trans($this->resp->msg), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route($this->resp->redirect_to)->with($this->resp->redirect_class, $this->resp->msg);
    }


    public function checkPerLink(Request $request,$link_text){
        $reserve_word = config('app.reserve_word');
        $data['status'] = false;
        $data['message'] = 'This link is not available';
        if(!in_array($link_text,$reserve_word)){
            //check in database business_cards card_url
            $card_url = BusinessCard::where('card_url',$link_text)->first();
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
        Toastr::success(trans('Card deleted successfully!'), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('user.card');

    }

    public function plans(Request $request)
    {
       $this->resp =  $this->plan->getPlanList($request);
       $plans =  $this->resp->data;
       $user_plan = DB::table('plans')->where('id', Auth::user()->plan_id)->latest()->first();
        return view('user.plan.index', compact('user_plan','plans'));
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
         return view('user.starter_card');
    }



}