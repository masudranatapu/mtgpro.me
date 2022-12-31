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
Route::get('contact',['as'=>'contact','uses'=>'HomeController@getContact']);

Route::get('login/{provider}', ['as' => 'social.login', 'uses' => 'Auth\AuthController@redirectToProvider']);
Route::get('auth/{provider}/callback', ['as' => 'social.login.callback', 'uses' => 'Auth\AuthController@handleProviderCallback']);
Auth::routes();

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth'], 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('card/init-card',['as'=>'init-card','uses'=>'CardController@getInitCard']);//static
    Route::post('card/upload_avatar',['as'=>'card.upload_avatar','uses'=>'CardController@uploadCardAvatar']);
    Route::get('card',['as'=>'card','uses'=>'CardController@getIndex']);
    Route::get('card/create',['as'=>'card.create','uses'=>'CardController@getCreate']);
    Route::post('card/store',['as'=>'card.store','uses'=>'CardController@postStore']);
    Route::get('card/{id}/view',['as'=>'card.view','uses'=>'CardController@getView']);
    Route::get('card/{id}/edit',['as'=>'card.edit','uses'=>'CardController@getEdit']);
    Route::post('card/{id}/update',['as'=>'card.update','uses'=>'CardController@postUpdate']);
    Route::get('card/{id}/delete',['as'=>'card.delete','uses'=>'CardController@getDelete']);
    Route::get('insights',['as'=>'insights','uses'=>'DashboardControler@getInsights']);
    Route::get('dashboard',['as'=>'dashboard','uses'=>'DashboardControler@getIndex']);
    Route::get('setting',['as'=>'setting','uses'=>'DashboardControler@getSetting']);

});

