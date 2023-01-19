<?php

namespace App\Http\Controllers\User;
use Stripe\StripeClient;

use Str;
use App\Models\Card;
use App\Models\User;
use App\Models\Review;
use App\Mail\ResetEmail;
use App\Mail\ChangeEmail;
use App\Mail\SupportMail;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use App\Mail\AccountDeletion;
use App\Models\BusinessField;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PassResetRequest;
use App\Http\Requests\BillingInfoRequest;
use App\Http\Requests\PaymentInfoRequest;
use App\Http\Requests\SupportMailRequest;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{

    protected $settings;
    protected $businessCard;
    public function __construct(
        BusinessCard $businessCard
        )
        {
            $this->settings = getSetting();
            $this->businessCard  = $businessCard;
        }


    public function passwordReset(Request $request)
    {
        $data = [];
        DB::begintransaction();
        try{
            $token = Str::random(60);
            $check = User::where('email',Auth::user()->email)->first();
            if (empty($check) || $check->count() == 0) {
                return response()->json(['status'=> 0,'message' => 'User account not found ! !'], 401);
            }
            $check->token               = $token;
            $check->is_token_active     = 1;
            $check->token_expire_at    = \Carbon\Carbon::now()->addMinute(60)->format('Y-m-d H:i:s');
            $check->save();
            $link = \URL::to('/').'/user/password/password-reset/'.$token.'?email='.Auth::user()->email;
            $data['subject'] = 'Reset Password Notification from '.$this->settings->site_name;
            $data['user'] = $check;
            $data['link'] = $link;
            Mail::to(Auth::user()->email)->send(new ResetEmail($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return response()->json(['status'=> 0,'message' => 'Something went wrong please try again !'], 401);
        }
        DB::commit();
        return response()->json(['status'=> 1,'message' => 'We have e-mailed your password reset link!'], 200);
    }


    public function getresetPassword(Request $request,$token)
    {
        try{
            $check = User::where('token',$token)->first();
            $email = $check->email;
            if (empty($check) || $check->count() == 0) {
                Toastr::error(trans('Token mismatched !'), 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back()->with('error', 'Token mismatched !');
            }
            if ($check->token_expire_at < date("Y-m-d H:i:s") || $check->is_token_active == 0) {
                Toastr::error(trans('Token expired ! Please send another request'), 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->route('user.dashboard')->with('error', 'Token expired ! Please send another request');
            }
            if ($check->token_expire_at >= date("Y-m-d H:i:s")) {
                return view('auth.reset-password',compact('token','email'));
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('auth.reset-password',compact('token'));
    }

    public function resetNewPassword(PassResetRequest $request)
    {
        DB::begintransaction();
        try{
            $check = User::where('token',$request->token)->where('email',$request->email)->first();
            if (empty($check) || $check->count() == 0) {
                Toastr::error(trans('Token mismatched'), 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back()->with('error', 'Token mismatched !');
            }
            if ($check->token_expire_at < date("Y-m-d H:i:s") || $check->is_token_active == 0) {
                Toastr::error(trans('Token expired ! Please send another request'), 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back()->with('error', 'Token expired ! Please send another request');
            }

            if ($check->token_expire_at >= date("Y-m-d H:i:s")) {
                $check->is_token_active = 0;
                $check->password     = bcrypt($request->password);
                $check->update();
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error(trans('Please try again !'), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login')->with('error', 'Please try again !');
        }
        DB::commit();
        Auth::logout();
        return redirect()->route('login')->with('success', 'Login with your new password !');
    }

    public function getReview(){

        $user_id = Auth::id();
        $review = DB::table('reviews')
                ->select('reviews.*','users.name as user_name','users.profile_image as user_image')
                ->leftJoin('users', 'users.id', '=', 'reviews.user_id')
                ->where('user_id',$user_id)
                ->first();

        return view('user.review', compact('review'));

    }

    public function storeReview(Request $request)
    {
        DB::beginTransaction();
        try {

            $validator = Validator::make($request->all(), [
                'display_name' => 'required|string|max:50',
                'display_title' => 'required|string|max:50',
                'details' => 'required|string|min:10|max:250',
              ]);

              if ($validator->fails())
              {
                return redirect()->back()->withErrors($validator)->withInput();
              }

        DB::table('reviews')->insert([
            'user_id' => Auth::user()->id,
            'order_id' => 0,
            'display_title' => $request->display_title,
            'display_name' => $request->display_name,
            'details' => $request->details,
            'status' => 0,
            'created_at' => Carbon::now(),
            'created_by' => Auth::user()->id,
        ]);

    } catch (\Exception $e) {
        dd($e->getMessage());
        DB::rollback();
        Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }
    DB::commit();
    Toastr::success(trans('Review submitted successfully'), 'Success', ["positionClass" => "toast-top-center"]);
    return redirect()->back();
    }

    public function updateReview(Request $request,$id)
    {
        DB::beginTransaction();
        try {
        $validator = Validator::make($request->all(), [
            'display_name' => 'required|string|max:50',
            'display_title' => 'required|string|max:50',
            'details' => 'required|string|min:10|max:250',
          ]);

          if ($validator->fails())
          {
            return redirect()->back()->withErrors($validator)->withInput();
          }

        DB::table('reviews')
            ->where('id',$id)
            ->update([
                'order_id' => 0,
                'display_title' => $request->display_title,
                'display_name' => $request->display_name,
                'details' => $request->details,
                'status' => 0,
            ]);

    } catch (\Exception $e) {
        DB::rollback();
        Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }
    DB::commit();
    Toastr::success(trans('Review submitted successfully'), 'Success', ["positionClass" => "toast-top-center"]);
    return redirect()->back();
}
    public function changeEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'=>'required|email'
        ]);
        $data = [];
        DB::begintransaction();
        try{
            $check = User::where('email',$request->email)->first();
            if(!empty($check) && $check->email == trim($request->email)){
                return response()->json(['status'=> 0,'message' => 'You have entered the email you are currently using ! Please enter another email address'], 200);
            }
            if (!empty($check)) {
                return response()->json(['status'=> 0,'message' => 'This email already used another account'], 200);
            }
            $user = User::findOrFail(Auth::user()->id);
            $user->email = $request->email;
            $user->update();
            $data['email'] =$request->email;
            $data['user'] = $user;
            Mail::to(Auth::user()->email)->send(new ChangeEmail($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return response()->json(['status'=> 0,'message' => 'Email not updated ! Please try again'], 200);
        }
        DB::commit();
        return response()->json(['status'=> 1,'message' => 'Your Email address successfully updated!','data'=>$user->email], 200);
    }

    public function postDeletionRequest(Request $request)
    {
        $config = DB::table('config')->get();

        DB::beginTransaction();
        try {
            $data = [];
            if($request->confirm=='delete'){

                $stripe = new StripeClient($config[10]->config_value);


                $user_cards = BusinessCard::where('user_id', Auth::user()->id)->get();

                foreach ($user_cards as $key => $value) {
                    BusinessField::where('card_id', $value->id)->update([
                        'status'=> 2,
                    ]);
                }
                BusinessCard::where('user_id', Auth::user()->id)->update([
                    'status'=> 2,
                    'is_deleted' => 1,
                    'deleted_at' => date('Y-m-d H:i:s'),
                    'deleted_by' => Auth::user()->id
                ]);

                $user = User::find(Auth::user()->id);
                if(!empty($user->stripe_customer_id)){
                    //Find Existing Customer
                    $stripe_customer = $stripe->customers->retrieve(
                        $user->stripe_customer_id,
                        []
                    );
                    $customer_id = $stripe_customer->id;
                    if(!empty($customer_id)){

                        $payment_data = json_decode($user->stripe_data);
                        if(!empty($payment_data)){
                            //Check subscription
                            $check_subscription = $stripe->subscriptions->retrieve(
                                $payment_data->id,
                                []
                            );
                            if($check_subscription->status=='active'){
                                //Unsubscription Stripe
                                $stripe = $stripe->subscriptions->cancel(
                                    $payment_data->id,
                                    []
                                );
                            }
                        }
                        $stripe->customers->delete(
                            $customer_id,
                            []
                          );
                    }
                }

                $user_email = $user->email;
                $user->status = 2;
                $user->email = Auth::user()->id.'-'.$user_email;
                $user->deleted_at = date("Y-m-d H:i:s") ;
                $user->deleted_by  = Auth::user()->id;
                $user->is_delete = 1;
                $user->update();
                Auth::logout();
                Mail::to($user_email)->send(new AccountDeletion($data));
            }
            else{
                return response()->json(['status'=> 0,'message' => 'Please type `delete` for account deletion'], 200);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();

            return response()->json(['status'=> 0,'message' => 'Something wrong! Please try again'], 200);
        }
        DB::commit();
        return response()->json(['status'=> 1,'message' => 'Your account has been deleted'], 200);
    }


    public function putUpdateBilling(BillingInfoRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = User::find(Auth::user()->id);
            $user->billing_email = $request->billing_email;
            $user->billing_country = $request->billing_country;
            $user->billing_zipcode  = $request->billing_zipcode;
            $user->updated_at = date("Y-m-d H:i:s");
            $user->update();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('Billing information updated', 'Success', ["positionClass" => "toast-top-center"]);

        return redirect()->back();
    }

    public function putUpdatePayment(PaymentInfoRequest $request)
    {
        DB::beginTransaction();
        try {
            $user              = User::find(Auth::user()->id);
            $user->card_number = $request->card_number;
            $user->card_expiration_date = $request->card_expiration_date;
            $user->card_cvc     = $request->card_cvc;
            $user->name_on_card = $request->name_on_card;
            $user->updated_at   = date("Y-m-d H:i:s");
            $user->update();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('Payment information updated', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    public function profileUpdate(Request $request)
    {

        // dd($request->all());
        DB::beginTransaction();
        try {
            $user  = User::find(Auth::user()->id);
            if($request->has('profile_pic') && !empty($request->profile_pic[0]))
            {
                $file_name = $this->businessCard->formatName($request->name);
                $output = $request->profile_pic;
                $output = json_decode($output, TRUE);
                if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                    $image = $output['output']['image'];
                    if(isset($image))
                    {
                        if(File::exists($user->profile)) {
                            File::delete($user->profile);
                        }
                        $profile_image = $this->businessCard->uploadBase64ToImage($image,$file_name,'png');
                        $user->profile_image =  asset($profile_image);
                    }
                }
            }
            if($request->connection_title){
                $user->connection_title = $request->connection_title;
            }else{
                $user->connection_title = 'Share your info back with '.$user->name;
            }

            $user->email = $request->email;
            $user->updated_at   = date("Y-m-d H:i:s");
            // dd($user);
            $user->update();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('User information updated', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }


    public function sendSupportMail(SupportMailRequest $request)
    {
        DB::beginTransaction();
        try {
            $settings =  getSetting();
            $data = [];
            $data['subject'] = $request->subject;
            $data['message'] = $request->message;
            $data['email'] = Auth::user()->email;
            $data['username'] = Auth::user()->name;
           Mail::to($settings->support_email)->send(new SupportMail($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('Thank you for your feedback', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    public function sendRequestToFeature(Request $request)
    {

        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'request_message' => 'required',
              ]);

              if ($validator->fails())
              {
                return redirect()->back()->withErrors($validator)->withInput();
              }

            $settings =  getSetting();
            $data = [];
            $data['subject'] = 'Request a Feature';
            $data['message'] = $request->request_message;
            $data['email'] = Auth::user()->email;
            $data['username'] = Auth::user()->name;
           Mail::to($settings->support_email)->send(new SupportMail($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('Thank you for your feedback', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }


    public function siconSorting(Request $request){

    DB::beginTransaction();
      try {
          DB::table('business_fields')->where('id',$request->id)->update(['position' => $request->position_new]);
        $data = DB::table('business_fields')->where('card_id',$request->card_id)->where('id','<>',$request->id)->orderBy('position','ASC')->get();
        if($data && count($data)>0){
            foreach ($data as $key => $value) {
                $position_new = $key;
                if($position_new == $request->position_new ){
                    $position_new +=1;
                    $key++;
                }
                DB::table('business_fields')->where('id',$value->id)->update(['position' => $position_new]);
            }
        }

      } catch (\Throwable $th) {
         DB::rollback();
         $response['status'] = false;
         $response['message'] = 'Sorting not updated';
         return response()->json($response);
      }
        DB::commit();
        $response['status'] = true;
        $response['message'] = 'Sorting updated successfully!';
        return response()->json($response);
    }


    public function putNitificationStatus(Request $request){
        DB::beginTransaction();
        try {
            DB::table('users')->where('id',Auth::user()->id)->update(['is_notify' => $request->current_val]);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'status'=> 0,
                'message' =>'Something wrong please try again'
            ]);
        }
            DB::commit();
            return response()->json([
                'status'=> 1,
                'message' =>'Successfully uploaded'
            ]);
        }
    }
