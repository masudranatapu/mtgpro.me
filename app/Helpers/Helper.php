<?php

use App\Helpers\CountryHelper;
use App\Models\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

if (!function_exists('getSetting')) {
    function getSetting()
    {
        return DB::table('settings')->orderBy('id', 'DESC')->first();
    }
}


/*Print Validation Error List*/
if (!function_exists('vError')) {
    function vError($errors)
    {
        if ($errors->any()) {
            foreach ($errors->all() as $error) {
                echo '<li class="text-danger">' . $error . '</li>';
            }
        } else {
            echo 'Not found any validation error';
        }
    }
}
if (!function_exists('get_error_response')) {
    function get_error_response($code, $reason, $errors = [],  $error_as_string = '', $description = '')
    {
        if ($error_as_string == '') {
            $error_as_string = $reason;
        }
        if ($description == '') {
            $description = $reason;
        }
        return [
            'code'          => $code,
            'errors'        => $errors,
            'error_as_string'  => $error_as_string,
            'reason'        => $reason,
            'description'   => $description,
            'error_code'    => $code,
            'link'          => ''
        ];
    }
}

if (!function_exists('checkPackageValidity')) {
    function checkPackageValidity($user_id)
    {
        $data['status']     = true;
        $data['message']    = true;

        $user = DB::table('users')->where('id', $user_id)->first();

        $today = strtotime("today midnight");
        $expire = strtotime($user->plan_validity);

        if($user->plan_id == null){
            $data['status']     = false;
            $data['message']    = 'Please upgrade your package';
        } elseif ($today >= $expire) {
            $data['status']     = false;
            $data['message']    = 'Your package is expired please upgrade';
        }elseif ($user->plan_details) {
            $plan_details = json_decode($user->plan_details, true);
            if ($plan_details['no_of_vcards'] != 9999) {
                $user_card = DB::table('business_cards')->where('status', 1)->where('user_id', $user_id)->count();
                if ($plan_details['no_of_vcards'] <=  $user_card) {
                    $data['status']     = false;
                    $data['message']    = 'Your card limit is over please upgrade your package for more card';
                }
            }
        }


        return $data;
    }
}


if (!function_exists('checkCardLimit')) {
    function checkCardLimit($user_id)
    {
        $data['status']     = true;
        $data['message']    = true;

        $user = DB::table('users')->where('id', $user_id)->first();
        if ($user->plan_details) {
            $plan_details = json_decode($user->plan_details, true);
            if ($plan_details['no_of_vcards'] != 9999) {
                $user_card = DB::table('business_cards')->where('status', 1)->where('user_id', $user_id)->count();
                if ($plan_details['no_of_vcards'] <=  $user_card) {
                    $data['status']     = false;
                    $data['message']    = 'Your card limit is over please upgrade your package for more card';
                }
            }
        }

        return $data;
    }
}

if (!function_exists('getPhoto')) {
    function getPhoto($path)
    {
        if ($path) {
            $ppath = public_path($path);
            if (file_exists($ppath)) {
                return asset($path);
            } else {
                return asset('assets/img/no-image.jpg');
            }
        } else {
            return asset('assets/img/no-image.jpg');
        }
    }
}


if (!function_exists('getAvatar')) {
    function getAvatar($path)
    {
        if (!empty($path)) {
            return $path;
        } else {
            return asset('assets/img/default-profile.png');
        }
    }
}

if (!function_exists('getCover')) {
    function getCover($path = null)
    {
        if ($path) {
            $ppath = public_path($path);
            if (file_exists($ppath)) {
                return asset($path);
            } else {
                return asset('assets/img/default-cover.png');
            }
        } else {
            return asset('assets/img/default-cover.png');
        }
    }
}
if (!function_exists('getProfile')) {
    function getProfile($path = null)
    {
        if ($path) {
            $ppath = public_path($path);
            if (file_exists($ppath)) {
                return asset($path);
            } else {
                return asset('assets/img/default-profile.png');
            }
        } else {
            return asset('assets/img/default-profile.png');
        }
    }
}
if (!function_exists('getLogo')) {
    function getLogo($path = null)
    {
        if ($path) {
            $ppath = public_path($path);
            if (file_exists($ppath)) {
                return asset($path);
            } else {
                return asset('assets/img/default-logo.png');
            }
        } else {
            return asset('assets/img/default-logo.png');
        }
    }
}

if (!function_exists('getIcon')) {
    function getIcon($path = null)
    {
        if ($path) {
            $ppath = public_path($path);
            if (file_exists($ppath)) {
                return asset($path);
            } else {
                return asset('assets/img/default.svg');
            }
        } else {
            return asset('assets/img/default.svg');
        }
    }
}



if (!function_exists('getDesigComp')) {
    function getDesigComp($desig, $comp)
    {
        if ($desig != '' & $comp != '') {
            return  $desig . ' At ' . $comp;
        } else {
            return  $desig . ' ' . $comp;
        }
    }
}


if (!function_exists('makeUrl')) {
    function makeUrl($url)
    {
        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = "http://" . $url;
        }
        return $url;
    }
}

if (!function_exists('getSocialIcon')) {
    function getSocialIcon($ikey)
    {
        return DB::table('social_icon')->where('icon_name', '=', $ikey)->first();
    }
}

if (!function_exists('CurrencyFormat')) {
    function CurrencyFormat($number, $decimal = 1)
    { // cents: 0=never, 1=if needed, 2=always
        if (is_numeric($number)) { // a number
            if (!$number) { // zero
                $money = ($decimal == 2 ? '0.00' : '0.00'); // output zero
            } else { // value
                if (floor($number) == $number) { // whole number
                    $money = number_format($number, ($decimal == 2 ? 2 : 2)); // format
                } else { // cents
                    $money = number_format(round($number, 2), ($decimal == 0 ? 0 : 2)); // format
                } // integer or decimal
            } // value
            return $money;
        } // numeric
    } //
}


function formatFileName($file)
{
    $base_name = preg_replace('/\..+$/', '', $file->getClientOriginalName());
    $base_name = explode(' ', $base_name);
    $base_name = implode('-', $base_name);
    $base_name = Str::lower($base_name);
    $file_name = $base_name . "-" . uniqid() . "." . $file->getClientOriginalExtension();
    return $file_name;
}

function checkPackage($id = null)
{
    if ($id) {
        $user = DB::table('users')->where('id', $id)->first();
        if ($user->plan_id) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}


function isFreePlan($user_id)
{
    $user = DB::table('users')->select('plans.is_free')->leftJoin('plans', 'plans.id', '=', 'users.plan_id')->where('users.id', $user_id)->first();
    if ($user->is_free == 1) {
        return true;
    }
    return false;
}
function isAnnualPlan($user_id)
{
    $user = DB::table('users')->select('users.*', 'plans.is_free')
        ->leftJoin('plans', 'plans.id', '=', 'users.plan_id')
        ->where('users.id', $user_id)
        ->first();
    $subscription_end = new \Carbon\Carbon($user->plan_validity);
    $subscription_start = new \Carbon\Carbon($user->plan_activation_date);
    $diff_in_days = $subscription_start->diffInDays($subscription_end);
    if ($diff_in_days > 364 && $user->is_free == 0) {
        return true;
    }
    return false;
}


function getPlan($user_id)
{
    return DB::table('users')
        ->select('plans.*')
        ->leftJoin('plans', 'plans.id', '=', 'users.plan_id')
        ->where('users.id', $user_id)
        ->first();
}


if (!function_exists('getPrice')) {
    function getPrice($price = null)
    {
        $config = Config::where('config_key', 'currency')->first('config_value');


        $symbles = CountryHelper::CurrencySymbol();


        $symble = $symbles[$config->config_value];

        if (isset($price)) {
            $formateCurrency = CurrencyFormat($price);
            return $symble . $formateCurrency;
        } else {

            return 0;
        }
    }
    # code...
}

function uploadImage(?object $file, string $path, int $width = null, int $height = null): string
{
    $updated_img = Image::make($file);
    $updated_img->resize($width ?? 850, $height, function ($constraint) {
        $constraint->aspectRatio();
    });
    $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

    $fullPath = public_path('upload/' . $path . '/');
    if (!file_exists($fullPath)) {
        mkdir($fullPath, 666, true);
    }

    $updated_img->save($fullPath . $fileName);

    return "upload/$path/" . $fileName;
}


function uploadBlogImage(?object $file, string $path, int $width, int $height, $watermark = false): string
{

    $blank_img =  Image::canvas($width, $height, '#EBEEF7');
    $pathCreate = public_path("/uploads/$path/");

    if (!file_exists($pathCreate)) {
        mkdir($pathCreate, 0755, true);
    }

    if ($watermark && setting('watermark_status')) {

        $watermark_image = Image::make(setting('watermark_image'));
        $type = setting('watermark_type');
        $text = setting('watermark_text');

        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $updated_img = Image::make($file);
        $imageWidth = $updated_img->width();
        $imageHeight = $updated_img->height();

        if ($type == 'text') {

            $updated_img->text($text, 100, 100, function ($font) {
                $font->file(public_path('RobotoMono-Bold.ttf'));
                $font->size(30);
                $font->color('#e1e1e1');
                $font->valign('center');
                $font->align('center');
            });

        } else {

            $watermarkSize = round(10 * $imageWidth / 50);
            $watermark_image->resize($watermarkSize, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $updated_img->insert($watermark_image, 'bottom-right', 10, 10);
        }
        if ($imageWidth > $width) {

            $updated_img->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });

        }
        if ($imageHeight > $height) {

            $updated_img->resize(null, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
        }


        $blank_img->insert($updated_img, 'center');
        $blank_img->save(public_path('/uploads/' . $path . '/') . $fileName);
        return "uploads/$path/" . $fileName;

    } else {

        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('/uploads/' . $path . '/'), $fileName);
        $updated_img = Image::make($file);
        $imageWidth = $updated_img->width();
        $imageHeight = $updated_img->height();

        if ($imageWidth > $width) {

            $updated_img->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        }

        if ($imageHeight > $height) {

            $updated_img->resize(null, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
        }

        $blank_img->insert($updated_img, 'center');
        $blank_img->save(public_path('/uploads/' . $path . '/') . $fileName);
        return "uploads/$path/" . $fileName;

    }

}
