<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('clear', function() {
    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:cache');
    \Artisan::call('config:clear');
    return 'DONE';
});
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});


Route::get('/',['as'=>'home','uses'=>'HomeController@getIndex']);
Route::get('privacy-policy',['as'=>'privacy-policy','uses'=>'HomeController@getPrivacyPolicy']);
Route::get('terms-conditions',['as'=>'terms-conditions','uses'=>'HomeController@getTermsCondition']);
Route::get('about-us',['as'=>'about-us','uses'=>'HomeController@getAboutUs']);
Route::get('pricing',['as'=>'pricing','uses'=>'HomeController@getPricing']);
Route::get('contact-us',['as'=>'contact-us','uses'=>'HomeController@getContact']);
Route::post('contact',['as'=>'contact.post','uses'=>'HomeController@postContact']);
Route::get('help',['as'=>'help','uses'=>'HomeController@getHelp']);
Route::get('tutorials',['as'=>'tutorials','uses'=>'HomeController@getTutorials']);

Route::get('data-deletion-instructions',['as'=>'data-deletion-instructions','uses'=>'HomeController@getdDataDeletion']);

Route::get('login/{provider}', ['as' => 'social.login', 'uses' => 'Auth\AuthController@redirectToProvider']);
Route::get('auth/{provider}/callback', ['as' => 'social.login.callback', 'uses' => 'Auth\AuthController@handleProviderCallback']);
Auth::routes();

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth'], 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('card/init-card',['as'=>'init-card','uses'=>'CardController@getInitCard']);//static
    Route::post('card/upload_avatar',['as'=>'card.upload_avatar','uses'=>'CardController@uploadCardAvatar']);
    Route::get('card',['as'=>'card','uses'=>'CardController@getIndex']);
    Route::get('card/check_link/{text}',['as'=>'card.check_link','uses'=>'CardController@checkPerLink']);

    Route::get('card/create',['as'=>'card.create','uses'=>'CardController@getCreate']);

    Route::post('card/store',['as'=>'card.store','uses'=>'CardController@postStore']);
    Route::post('card/store-first-card',['as'=>'card.store-first-card','uses'=>'CardController@saveBusinessCard']);
    Route::get('card/{id}/view',['as'=>'card.view','uses'=>'CardController@getView']);
    Route::get('card/{id}/edit',['as'=>'card.edit','uses'=>'CardController@getEdit']);
    Route::post('card/sicon_update',['as'=>'card.sicon_update','uses'=>'CardController@siconUpdate']);
    Route::get('card/sicon_edit',['as'=>'card.sicon_edit','uses'=>'CardController@siconEdit']);
    Route::post('card/sicon_remove',['as'=>'card.sicon_remove','uses'=>'CardController@siconRemove']);
    Route::post('card/add_icon',['as'=>'card.add_icon','uses'=>'CardController@addCardIcon']);
    Route::post('card/{id}/update',['as'=>'card.update','uses'=>'CardController@postUpdate']);
    Route::get('card/{id}/delete',['as'=>'card.delete','uses'=>'CardController@getDelete']);
    Route::get('insights',['as'=>'insights','uses'=>'DashboardControler@getInsights']);
    // Route::get('dashboard',['as'=>'dashboard','uses'=>'DashboardControler@getIndex']);
    Route::get('setting',['as'=>'setting','uses'=>'DashboardControler@getSetting']);
    Route::get('plans',['as'=>'plans','uses'=>'DashboardControler@getPlanList']);
    Route::get('checkout',['as'=>'checkout','uses'=>'CheckoutController@checkout']);
    Route::post('checkout/paypal',['as'=>'checkout.post-transection','uses'=>'CheckoutController@postTransection']);
    Route::post('checkout/stripe',[ 'as' => 'payment.stripe', 'uses' =>'StripeController@stripeCheckout']);
    Route::get('invoice/download/{transection_id}',[ 'as' => 'invoice.download', 'uses' =>'TransactionController@getInvoicePDF']);
    Route::get('all-invoice/download',[ 'as' => 'all-invoice.download', 'uses' =>'TransactionController@getAllInvoicePDF']);


    Route::get('card/crop-image',['as'=>'card.crop-image','uses'=>'CardController@cropImage']);
    Route::post('card/crop-upload',['as'=>'card.crop-upload','uses'=>'CardController@cropImageUpload']);
    Route::post('billing-info/update',['as'=>'billing-info.update','uses'=>'UserController@putUpdateBilling']);
    Route::post('payment-info/update',['as'=>'payment-info.update','uses'=>'UserController@putUpdatePayment']);
    Route::post('profile-info/update',['as'=>'profile-info.update','uses'=>'UserController@profileUpdate']);
    Route::post('support/send-mail',['as'=>'support.send-mail','uses'=>'UserController@sendSupportMail']);
    Route::post('support/feature-request',['as'=>'support.feature-request','uses'=>'UserController@sendRequestToFeature']);




});



Route::group(['namespace' => 'Auth', 'middleware' => ['auth']], function () {
    Route::get('delete-account',['as'=>'user.delete-account','uses'=>'AuthController@getDeactivationForm']);
    Route::get('change-password',['as'=>'user.change-password','uses'=>'AuthController@getChangePassword']);
    Route::post('change-password/update',['as'=>'user.change-password.update','uses'=>'AuthController@putChangePassword']);
    Route::get('settings',['as'=>'dashboard','uses'=>'DashboardController@index']);
    Route::get('profile', ['as'=>'profile','uses'=>'DashboardController@profile']);
});
Route::post('sendcard/mail/{id}', ['as'=>'sendcard.mail','uses'=>'HomeController@sendCardMail']);
Route::get('download/{id}', 'HomeController@downloadVcard')->name('download.vCard');
Route::post('getConnect', 'HomeController@getConnect')->name('getConnect');
Route::get('{cardurl}', ['as'=>'card.preview', 'uses'=>'HomeController@getPreview']);

