<?php

namespace App\Http\Controllers\User;

use Str;
use App\Models\User;
use App\Models\Review;
use App\Mail\ResetEmail;
use App\Mail\ChangeEmail;
use App\Models\Card;
use Illuminate\Http\Request;
use App\Mail\AccountDeletion;
use App\Models\BusinessField;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PassResetRequest;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{

    protected $settings;
    public function __construct()
        {
            $this->settings = getSetting();
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

        return view('desktop.review.review',compact('review'));
    }

    public function storeReview(Request $request)
    {
        //  dd($request->all());


            $this->validate($request, [
                'display_name' => 'required|string|max:50',
                'display_title' => 'required|string|max:50',
                'details' => 'required|string|max:1024',
            ]);

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

            Toastr::success('Review submitted successfully:-)','Success');
            return redirect()->back();


    }
    public function updateReview(Request $request,$id)
    {

            $this->validate($request, [
                'display_name' => 'required|string|max:50',
                'display_title' => 'required|string|max:50',
                'details' => 'required|string|max:1024',
            ]);

            DB::table('reviews')
            ->where('id',$id)
            ->update([
                'order_id' => 0,
                'display_title' => $request->display_title,
                'display_name' => $request->display_name,
                'details' => $request->details,
                'status' => 0,

            ]);

            Toastr::success('Review Updated successfully:-)','Success');
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
        DB::beginTransaction();
        try {
            $data = [];
            if($request->confirm=='delete'){

                $user_cards = Card::where('user_id', Auth::user()->id)->get();

                foreach ($user_cards as $key => $value) {
                    BusinessField::where('card_id', $value->id)->update([
                        'status'=> 2,
                    ]);
                }
                Card::where('user_id', Auth::user()->id)->update([
                    'status'=> 2,
                    'is_deleted' => 1,
                    'deleted_at' => date('Y-m-d H:i:s'),
                    'deleted_by' => Auth::user()->id
                ]);
                $user = User::find(Auth::user()->id);
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




}
