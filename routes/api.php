<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CardController;
use App\Http\Controllers\Api\HomeController;
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


Route::middleware(['auth:api'])->group(function () {
    Route::post('/crete-first-card', [CardController::class, 'storefirstCard']);
    Route::get('/my-card', [CardController::class, 'myCard']);
    Route::post('crete-card', [CardController::class, 'postStore']);
    Route::put('/update-card/{businessCard}', [CardController::class, 'postUpdate']);
    Route::post('/add-icons', [CardController::class, 'addCardIcon']);
    Route::post('/update-icons/{icon}', [CardController::class, 'siconUpdate']);
    Route::delete('/remove-icons', [CardController::class, 'removeCardIcon']);


    Route::post('/make-card-live', [CardController::class, 'getChangeCardStatus']);


    Route::get('/insights', [HomeController::class, 'getInsights']);
    Route::post('/support-mail-send', [HomeController::class, 'sendSupportMail']);
});

Route::get('/{cardUrl}', [HomeController::class, 'getPreview']);
