<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductCheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\DashboardControler;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use OpenAI\Laravel\Facades\OpenAI;

Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    return 'DONE';
});
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});


Route::get('ask/{question}', function ($question) {
    $result = OpenAI::completions()->create([
        'model' => 'text-davinci-003',
        'prompt' => $question,
        'max_tokens' => 20,
        'temperature' => 0,
        'n' => 2,

    ]);

    return response()->json($result['choices'][0]['text']);
});

Route::get('/ask-me', [HomeController::class, 'ask'])->name('user.ask');


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);
Route::get('/qr/{id}', ['as' => 'qr', 'uses' => 'HomeController@getQRImage']);
Route::get('/rss/rss.xml', ['as' => 'rss', 'uses' => 'HomeController@rss']);
Route::get('privacy-policy', ['as' => 'privacy-policy', 'uses' => 'HomeController@getPrivacyPolicy']);
Route::get('terms-conditions', ['as' => 'terms-conditions', 'uses' => 'HomeController@getTermsCondition']);
Route::get('about-us', ['as' => 'about-us', 'uses' => 'HomeController@getAboutUs']);
Route::get('pricing', ['as' => 'pricing', 'uses' => 'HomeController@getPricing']);
Route::get('contact-us', ['as' => 'contact-us', 'uses' => 'HomeController@getContact']);
Route::post('contact', ['as' => 'contact-us.post', 'uses' => 'HomeController@contactUs']);
Route::get('help', ['as' => 'help', 'uses' => 'HomeController@getHelp']);
Route::get('tutorials', ['as' => 'tutorials', 'uses' => 'HomeController@tutorials']);
Route::get('tutorials/details/{slug}', ['as' => 'tutorials.details', 'uses' => 'HomeController@tutorialDetails']);
Route::get('shop', ['as' => 'shop', 'uses' => 'ShopController@index']);
Route::get('shop/details/{product:product_slug}', ['as' => 'product.details', 'uses' => 'ShopController@details']);



Route::get('disclaimer', ['as' => 'disclaimer', 'uses' => 'HomeController@getDisclaimer']);
Route::get('cart', ['as' => 'cart', 'uses' => 'ProductController@cart']);
Route::get('add-to-cart/{id}', ['as' => 'add.to.cart', 'uses' => 'ProductController@addToCart']);
Route::post('add-to-cart/', ['as' => 'addtocart', 'uses' => 'ProductController@addToCartPost']);
Route::patch('update-cart', ['as' => 'update.cart', 'uses' => 'ProductController@update']);
Route::delete('remove-from-cart', ['as' => 'remove.from.cart', 'uses' => 'ProductController@remove']);
Route::post('check/coupon', ['as' => 'check.coupon', 'uses' => 'ProductController@checkCoupon']);
Route::post('remove/coupon', ['as' => 'remove.coupon', 'uses' => 'ProductController@removeCoupon']);
Route::get('products/checkout', ['as' => 'product.checkout', 'uses' => 'ProductCheckoutController@checkout']);
Route::post('products/transection', ['as' => 'product.orderCheckout', 'uses' => 'ProductCheckoutController@orderCheckout']);




//Blog
// Route::get('blog',['as'=>'blog','uses'=>'BlogController@getBlogList']);
// Route::get('category/{slug}',['as'=>'blog.category','uses'=>'BlogController@getCategortyBlog']);
// Route::get('blog/{blog_slug}',['as'=>'blog.details','uses'=>'BlogController@getBlogDetails']);
Route::get('data-deletion-instructions', ['as' => 'data-deletion-instructions', 'uses' => 'HomeController@getdDataDeletion']);

Route::get('login/{provider}', ['as' => 'social.login', 'uses' => 'Auth\AuthController@redirectToProvider']);
Route::get('auth/{provider}/callback', ['as' => 'social.login.callback', 'uses' => 'Auth\AuthController@handleProviderCallback']);
Route::post('post-register', ['as' => 'post-register', 'uses' => 'Auth\AuthController@postRegister']);
Route::post('post-login', ['as' => 'post-login', 'uses' => 'Auth\AuthController@postLogin']);
Auth::routes();

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth'], 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('card/init-card', ['as' => 'card.init-card', 'uses' => 'CardController@getInitCard']); //static
    Route::post('card/upload_avatar', ['as' => 'card.upload_avatar', 'uses' => 'CardController@uploadCardAvatar']);
    Route::get('card/check_link/{text}', ['as' => 'card.check_link', 'uses' => 'CardController@checkPerLink']);
    Route::get('card', ['as' => 'card', 'uses' => 'CardController@getIndex']);
    Route::get('card/create', ['as' => 'card.create', 'uses' => 'CardController@getCreate']);
    Route::post('card/store', ['as' => 'card.store', 'uses' => 'CardController@postStore']);
    Route::post('card/store-first-card', ['as' => 'card.store-first-card', 'uses' => 'CardController@storeFirstCard']);
    Route::get('card/{id}/view', ['as' => 'card.view', 'uses' => 'CardController@getView']);
    Route::get('card/{id}/edit', ['as' => 'card.edit', 'uses' => 'CardController@getEdit']);
    Route::post('card/change-status', ['as' => 'card.change-status', 'uses' => 'CardController@getChangeCardStatus']);
    Route::post('card/sicon_update', ['as' => 'card.sicon_update', 'uses' => 'CardController@siconUpdate']);
    Route::get('card/sicon_create', ['as' => 'card.sicon_create', 'uses' => 'CardController@getSiconCreateForm']);
    Route::get('card/color-highlighter', ['as' => 'card.color-highlighter', 'uses' => 'CardController@colorHighlighter']);

    Route::get('card/sicon_edit', ['as' => 'card.sicon_edit', 'uses' => 'CardController@siconEdit']);
    Route::post('card/sicon_remove', ['as' => 'card.sicon_remove', 'uses' => 'CardController@siconRemove']);
    Route::post('card/add_icon', ['as' => 'card.add_icon', 'uses' => 'CardController@addCardIcon']);
    Route::post('card/{id}/update', ['as' => 'card.update', 'uses' => 'CardController@postUpdate']);
    Route::get('card/{id}/delete', ['as' => 'card.delete', 'uses' => 'CardController@getDelete']);
    Route::get('insights', ['as' => 'insights', 'uses' => 'DashboardControler@getInsights']);
    Route::get('card/view/history', ['as' => 'card.view.history', 'uses' => 'DashboardControler@viewHistory']);
    Route::get('card/download/history', ['as' => 'card.download.history', 'uses' => 'DashboardControler@downloadHistory']);
    Route::get('qr/download/history', ['as' => 'qr.download.history', 'uses' => 'DashboardControler@qrdownloadHistory']);
    // Route::get('dashboard',['as'=>'dashboard','uses'=>'DashboardControler@getIndex']);
    Route::get('setting', ['as' => 'setting', 'uses' => 'DashboardControler@getSetting']);
    Route::get('plans', ['as' => 'plans', 'uses' => 'DashboardControler@getPlanList']);
    Route::get('suggest-feature', ['as' => 'suggest-feature', 'uses' => 'DashboardControler@suggestFeature']);

    Route::get('free-marketing-material', ['as' => 'free-marketing-material', 'uses' => 'DashboardControler@getFreeMarketing']);
    Route::get('calculator', ['as' => 'calculator', 'uses' => 'DashboardControler@getCalculator']);
    Route::get('/my-order', ['as' => 'myorder', 'uses' => 'DashboardControler@myOrder']);
    Route::get('/invoice/{id}', ['as' => 'orders.invoice', 'uses' => 'DashboardControler@invoice']);
    Route::get('free-marketing-material-details/{id}', ['as' => 'marketing.materials.details', 'uses' => 'DashboardControler@marketingMaterialDetails']);


    Route::get('cancel-plan/stripe', ['as' => 'cancel-plan.stripe', 'uses' => 'StripeController@cancelCurrentPlan']);

    Route::get('checkout', ['as' => 'checkout', 'uses' => 'CheckoutController@checkout']);
    Route::post('checkout/paypal', ['as' => 'checkout.post-transection', 'uses' => 'CheckoutController@postTransection']);
    Route::post('checkout/stripe', ['as' => 'payment.stripe', 'uses' => 'StripeController@stripeCheckout']);
    Route::get('transactions', ['as' => 'transactions', 'uses' => 'TransactionController@getIndex']);
    Route::get('plan-invoice/{transection_id}', ['as' => 'planinvoice', 'uses' => 'TransactionController@getInvoice']);
    Route::get('invoice/download/{transection_id}', ['as' => 'invoice.download', 'uses' => 'TransactionController@getInvoicePDF']);
    Route::get('all-invoice/download', ['as' => 'all-invoice.download', 'uses' => 'TransactionController@getAllInvoicePDF']);

    Route::get('card/crop-image', ['as' => 'card.crop-image', 'uses' => 'CardController@cropImage']);
    Route::post('card/crop-upload', ['as' => 'card.crop-upload', 'uses' => 'CardController@cropImageUpload']);
    Route::post('billing-info/update', ['as' => 'billing-info.update', 'uses' => 'UserController@putUpdateBilling']);
    Route::post('payment-info/update', ['as' => 'payment-info.update', 'uses' => 'UserController@putUpdatePayment']);
    Route::post('profile-info/update', ['as' => 'profile-info.update', 'uses' => 'UserController@profileUpdate']);
    Route::post('support/send-mail', ['as' => 'support.send-mail', 'uses' => 'UserController@sendSupportMail']);
    Route::post('support/feature-request', ['as' => 'support.feature-request', 'uses' => 'UserController@sendRequestToFeature']);

    Route::get('crm', ['as' => 'crm', 'uses' => 'ConnectionController@getIndex']);
    Route::get('crm/{id}/view', ['as' => 'crm.details', 'uses' => 'ConnectionController@getView']);
    Route::get('crm/{id}/edit', ['as' => 'crm.edit', 'uses' => 'ConnectionController@getEdit']);
    Route::get('crm/{id}/download', ['as' => 'crm.download', 'uses' => 'ConnectionController@getDownloadVcf']);
    Route::post('crm/{id}/update', ['as' => 'crm.update', 'uses' => 'ConnectionController@putUpdate']);

    Route::post('crm/{id}/send-mail', ['as' => 'connection.reply-mail', 'uses' => 'ConnectionController@sendConnectReplyEmail']);

    Route::post('crm/bulk-export', ['as' => 'crm.bulk-export', 'uses' => 'ConnectionController@getExportCsv']);
    Route::get('crm/download-csv/{name}', ['as' => 'crm.download-csv', 'uses' => 'ConnectionController@getDownloadCsv']);

    Route::post('deletion-request', ['as' => 'deletion-request', 'uses' => 'UserController@postDeletionRequest']);
    Route::get('card/sicon_sorting', ['as' => 'sicon.sorting', 'uses' => 'UserController@siconSorting']);

    // user controller
    Route::get('review', ['as' => 'review', 'uses' => 'UserController@getReview']);
    Route::post('review', ['as' => 'review.store', 'uses' => 'UserController@storeReview']);
    Route::post('review/{id}', ['as' => 'review.update', 'uses' => 'UserController@updateReview']);

    //Login User Password Reset
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'UserController@passwordReset']);
    Route::get('password/password-reset/{token}', ['as' => 'password.password-reset', 'uses' => 'UserController@getresetPassword']);
    Route::post('reset/new/password', ['as' => 'reset.new.password', 'uses' => 'UserController@resetNewPassword']);
    Route::get('notification-status', ['as' => 'notification-status', 'uses' => 'UserController@putNitificationStatus']);
    Route::post('/morgaged-email', ['as' => 'morgaged.email', 'uses' => 'UserController@mortgagedEmail']);



    Route::post('/equal-housing-view', ['as' => 'equal.housing.update', 'uses' => 'UserController@equalhousingShow']);
    Route::post('/user-disclaimer-view', ['as' => 'disclaimer.update', 'uses' => 'UserController@userdisclaimerShow']);
    Route::post('/user-nmls-view', ['as' => 'nmls.update', 'uses' => 'UserController@userNmlsShow']);
    Route::post('/user-nmls-add', ['as' => 'nmls.add', 'uses' => 'UserController@userNmlsAdd']);
    Route::post('/user-credit-auth-view', ['as' => 'credit_auth.update', 'uses' => 'UserController@usercraditAuthShow']);
    Route::post('/user-quick-application-view', ['as' => 'quick.application.update', 'uses' => 'UserController@quickApplication']);
});



Route::group(['namespace' => 'Auth', 'middleware' => ['auth']], function () {
    Route::get('delete-account', ['as' => 'user.delete-account', 'uses' => 'AuthController@getDeactivationForm']);
    Route::get('change-password', ['as' => 'user.change-password', 'uses' => 'AuthController@getChangePassword']);
    Route::post('change-password/update', ['as' => 'user.change-password.update', 'uses' => 'AuthController@putChangePassword']);
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    Route::get('profile', ['as' => 'profile', 'uses' => 'DashboardController@profile']);
});



// Route::post('sendcard/mail/{id}', ['as' => 'sendcard.mail', 'uses' => 'HomeController@sendCardMail']);
Route::post('getConnect', 'HomeController@getConnect')->name('getConnect');
Route::post('credit-report', [HomeController::class, 'creditReport'])->name('credit-report');
Route::post('quick-report', [HomeController::class, 'quickReport'])->name('quick-report');
Route::get('download/{id}', 'HomeController@downloadVcard')->name('download.vCard');
Route::get('{cardurl}', ['as' => 'card.preview', 'uses' => 'HomeController@getPreview']);
