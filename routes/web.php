<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy-policy', [HomeController::class, 'getPrivacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [HomeController::class, 'getTermsCondition'])->name('terms-conditions');
Route::get('/about-us', [HomeController::class, 'getAboutUs'])->name('about-us');
Route::get('/pricing', [HomeController::class, 'getPricing'])->name('pricing');
Route::get('/contact', [HomeController::class, 'getContact'])->name('contact');

Route::get('login/{provider}', ['as' => 'social.login', 'uses' => 'Auth\AuthController@redirectToProvider']);
Route::get('auth/{provider}/callback', ['as' => 'social.login.callback', 'uses' => 'Auth\AuthController@handleProviderCallback']);
Auth::routes();

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth'], 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('card',['as'=>'card','uses'=>'CardController@getIndex']);
    Route::get('card/new',['as'=>'card.create','uses'=>'CardController@getCreate']);
    Route::get('card/{id}/view',['as'=>'card.view','uses'=>'CardController@getView']);
    Route::get('card/{id}/edit',['as'=>'card.edit','uses'=>'CardController@getEdit']);
    // new card
    Route::post('card/{id}/update',['as'=>'card.update','uses'=>'CardController@postUpdate']);
    Route::get('card/{id}/delete',['as'=>'card.delete','uses'=>'CardController@getDelete']);
    Route::post('card/store',['as'=>'card.store','uses'=>'CardController@postStore']);

});

