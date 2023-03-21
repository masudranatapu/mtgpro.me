<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CardController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\StripeController;
use App\Http\Controllers\Api\SubscriptionController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ConnectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',


], function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register',  [AuthController::class, 'register']);
});

Route::get('/general-settings', [HomeController::class, 'getSettings']);
Route::get('/get-social-icons', [HomeController::class, 'getSocialIcons']);
Route::get('/get-plan', [HomeController::class, 'planList']);
Route::get('/get-country', [HomeController::class, 'clountyList']);
Route::post('/get-connection', [UserController::class, 'getConnect']);
Route::post('/quick-report', [HomeController::class, 'quickReport']);
Route::post('/credit-report', [HomeController::class, 'creditReport']);


Route::middleware(['auth:api'])->group(function () {
    Route::get('me', [AuthController::class, 'me']);

    Route::post('/crete-first-card', [CardController::class, 'storefirstCard']);
    Route::get('/my-card', [CardController::class, 'myCard']);
    Route::post('crete-card', [CardController::class, 'postStore']);
    Route::put('/update-card/{businessCard}', [CardController::class, 'postUpdate']);
    Route::post('/add-icons', [CardController::class, 'addCardIcon']);
    Route::post('/update-icons/{icon}', [CardController::class, 'siconUpdate']);
    Route::delete('/remove-icons/{icon_id}', [CardController::class, 'removeCardIcon']);


    Route::post('/make-card-live', [CardController::class, 'getChangeCardStatus']);


    Route::get('/insights', [HomeController::class, 'getInsights']);
    Route::post('/support-mail-send', [HomeController::class, 'sendSupportMail']);
    Route::get('/user-plan', [UserController::class, 'userplan']);
    Route::get('/billing-info', [UserController::class, 'userBillingInfo']);
    Route::post('update-billing-info', [UserController::class, 'userBillingInfoUpdate']);



    Route::get('/user-profile', [UserController::class, 'userProfile']);
    Route::post('/user-profile-update', [UserController::class, 'profileUpdate']);
    Route::post('/cancel-plan/stripe', [SubscriptionController::class, 'cancelCurrentPlan']);
    Route::post('/password-reset', [UserController::class, 'passwordReset']);
    Route::post('/account-delete', [UserController::class, 'postDeletionRequest']);
    Route::post('/push-notifications', [UserController::class, 'putNitificationStatus']);


    Route::post('stripe-checkout', [StripeController::class, 'stripeCheckout']);
    Route::get('user-invoice', [UserController::class, 'userInvoice']);




    Route::post('/equal-housing-view', [UserController::class, 'equalhousingShow']);
    Route::post('/user-disclaimer-view', [UserController::class, 'userdisclaimerShow']);
    Route::post('/user-nmls-view', [UserController::class, 'userNmlsShow']);
    Route::post('/user-nmls-add', [UserController::class, 'userNmlsAdd']);
    Route::post('/user-credit-auth-view', [UserController::class, 'usercraditAuthShow']);
    Route::post('/user-quick-application-view', [UserController::class, 'quickApplication']);
    Route::get('/my-order', [UserController::class, 'myOrder']);

    Route::get('user/review', [UserController::class, 'getReview']);
    Route::post('/user/review', [UserController::class, 'storeReview']);
    Route::post('user/review/update/{id}', [UserController::class, 'updateReview']);



    Route::get('user/free-marketing-material', [UserController::class, 'getFreeMarketing']);
    Route::get('user/invoice/download/{transection_id}', [UserController::class, 'getInvoicePDF']);



    Route::get('/crm', [ConnectionController::class, 'getIndex']);
    Route::get('/crm/{id}/view', [ConnectionController::class, 'getView']);
    Route::post('/crm/{id}/update', [ConnectionController::class, 'putUpdate']);
    Route::post('/crm-send-mail', [ConnectionController::class, 'sendMail']);




    Route::post('/suggest-feature', [UserController::class, 'sendRequestToFeature']);
});

Route::get('/qr/{id}', [HomeController::class, 'getQRImage']);
Route::get('/{cardUrl}', [HomeController::class, 'getPreview']);
