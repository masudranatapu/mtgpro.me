<?php
namespace App\Http\Controllers\Auth;
use App\Models\Plan;
use App\Models\User;
use App\Models\Theme;
use App\Models\Gateway;
use App\Models\Setting;
use App\Models\Currency;
use App\Models\Transaction;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TemplateContent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $settings = Setting::where('status', 1)->first();

        if(Auth::user()->user_type == '1'){
            $config = DB::table('config')->get();
            $currency = Currency::where('iso_code', $config['1']->config_value)->first();
            $overall_income = Transaction::where('payment_status', 'Success')->sum('transaction_amount');
            $today_income = Transaction::where('payment_status', 'Success')->whereDate('created_at', Carbon::today())->sum('transaction_amount');
            $overall_users = User::where('user_type', 2)->where('status', 1)->count();
            $today_users = User::where('user_type', 2)->where('status', 1)->whereDate('created_at', date('Y-m-d'))->count();

            // dd($today_users);
            // $themes = Theme::where('status', 1)->count();
            $plans = Plan::where('status', 1)->count();
            $gateways = Gateway::where('status', 1)->count();
            $whatsapp_stores = Card::where('card_type', 'store')->count();
            $card_count  = Card::where('status',1)->count();
            // $signatures = TemplateContent::count();


            return view('admin.dashboard', compact('overall_income', 'today_income', 'overall_users', 'today_users', 'plans', 'gateways', 'currency', 'settings', 'whatsapp_stores','card_count'));


        }else{

            $user_id = Auth::id();
            $cards = Card::where('user_id',$user_id)->get();

            if(count($cards) == 0 ){
                return redirect()->route('user.card.create');
            }

            $user = User::where('id',$user_id)->first();


            if(isMobile()){
                return view('mobile.dashboard',compact('user'));
            }



            return view('desktop.dashboard',compact('user'));

        }

    }


/*
    public function ContactMsg()
    {
        $settings = Setting::where('status', 1)->first();
        $contact = DB::table('contacts')->orderBy('id', 'DESC')->get();
        return view('admin.contact.index', compact('settings', 'contact'));
    }


    public function ContactDestroy(Request $request)
    {
       $contact = DB::table('contacts')->where('id', $request->query('id'))->delete();
       alert()->success(trans('Deleted Successfully!'));
       return redirect()->back();
    }

    public function SubscriberList()
    {
         $settings = Setting::where('status', 1)->first();
         $subscriber = DB::table('subscribers')->orderBy('id', 'DESC')->get();
         return view('admin.subscriber.index', compact('settings','subscriber'));
    }

    public function userGuide()
    {
         $settings = Setting::where('status', 1)->first();
         $data     = DB::table('tutorials')->orderBy('id', 'DESC')->get();
         return view('admin.userguide.index', compact('settings', 'data'));
    }

    public function userGuideCreate()
    {
        $settings = Setting::where('status', 1)->first();
         return view('admin.userguide.create', compact('settings'));
    }

    public function userGuideStore(Request $request)
    {
        $request->validate([
            'title'         => 'required|unique:tutorials',
            'description'   => 'required'
        ]);

        $data = array();
        $data['title']          = $request->title;
        $data['description']    = $request->description;
        DB::table('tutorials')->insert($data);
        alert()->success(trans('Created Successfully!'));
        return redirect()->route('admin.user.guide');
    }

    public function userGuideView($id)
    {
         $data     = DB::table('tutorials')->where('id', $id)->first();
         $settings = Setting::where('status', 1)->first();
         return view('admin.userguide.view', compact('settings', 'data'));

    }

    public function userGuideEdit($id)
    {
         $data = DB::table('tutorials')->where('id', $id)->first();
         $settings = Setting::where('status', 1)->first();
         return view('admin.userguide.edit', compact('settings', 'data'));
    }

    public function userGuideUpdate(Request $request, $id)
    {
        $request->validate([
            'title'         => 'unique:tutorials,title,'.$id,
            'description'   => 'required'
        ]);
        $data = array();
        $data['title']          = $request->title;
        $data['description']    = $request->description;
        DB::table('tutorials')->where('id', $id)->update($data);
        alert()->success(trans('Updated Successfully!'));
        return redirect()->route('admin.user.guide');
    }

    public function DeleteUserGuide(Request $request)
    {
       $blog = DB::table('tutorials')->where('id', $request->query('id'))->delete();
       alert()->success(trans('Deleted Successfully!'));
       return redirect()->back();
    }

    */


    public function profile(){
        if(isMobile() && (Auth::user()->user_type == 2)){
            return view('mobile.profile.profile');
        }
        return view('desktop.profile.profile');
    }

    public function profileEdit(){
        if(isMobile() && (Auth::user()->user_type == 2)){
            return view('mobile.profile.profile-edit');
        }
        return view('desktop.profile.profile-edit');
    }

    public function profileUpdate(Request $request){
        DB::beginTransaction();
        try {

            $user = User::find(Auth::user()->id);
            if($request->name){
                $user->name    = $request->name;
            }
            if($request->email){
                $checkEmail = DB::table('users')->where('email',$request->email)->whereNotNull('email')->first();
                if(!empty($checkEmail)){
                    Toastr::error('This email already used ! Please Try with another');
                    return redirect()->back();
                }
                $user->email    = $request->email;
            }

            if ($request->logo_path) {
                $imagePath = public_path($user->profile_image);
                if(File::exists($imagePath)){
                    File::delete($imagePath);
                }
                $user->profile_image    = asset($request->logo_path);
            }

            $user->update();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error('Something went wrong profile not updated');
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('Profile Successfully updated');
        return redirect()->back();
        }





}
