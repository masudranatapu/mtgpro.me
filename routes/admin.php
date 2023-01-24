<?php

use App\Http\Controllers\Admin\MarketingMaterialsController;
use App\Http\Controllers\User\PlanController;
use App\Models\MarketingMaterials;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin'], 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    // Themes
    Route::get('themes', 'ThemeController@themes')->name('themes');
    Route::post('theme/{id}/update','ThemeController@update')->name('theme.update');
    // Plans
    Route::get('plans', 'PlanController@plans')->name('plans');
    Route::get('add-plan', 'PlanController@addPlan')->name('add.plan');
    Route::post('save-plan', 'PlanController@savePlan')->name('save.plan');
    Route::get('edit-plan/{id}', 'PlanController@editPlan')->name('edit.plan');
    Route::get('shareable-update/{id}', 'PlanController@shareableUpdate')->name('shareable-update');
    Route::post('update-plan', 'PlanController@updatePlan')->name('update.plan');
    Route::get('plan/{id}/{period}/getstripe', 'PlanController@getstripe')->name('plan.getstripe');
    Route::get('plan/{id}/{period}/getpaypal', 'PlanController@createPaypalPlan')->name('plan.getpaypal');
    Route::get('delete-plan', 'PlanController@deletePlan')->name('delete.plan');


    Route::get('plan-list',['as'=>'plan-list','uses'=>'PlanController@getPlanList']);


    // Users
    Route::get('users', 'UserController@users')->name('users');
    Route::get('edit-user/{id}', 'UserController@editUser')->name('edit.user');
    Route::post('update-user', 'UserController@updateUser')->name('update.user');
    Route::get('view-user/{id}', 'UserController@viewUser')->name('view.user');
    Route::get('change-user-plan/{id}', 'UserController@ChangeUserPlan')->name('change.user.plan');
    Route::post('update-user-plan', 'UserController@UpdateUserPlan')->name('update.user.plan');
    Route::get('update-status', 'UserController@updateStatus')->name('update.status');
    Route::get('active-user/{id}', 'UserController@activeStatus')->name('update.active-user');
    Route::get('delete-user', 'UserController@deleteUser')->name('delete.user');
    Route::get('login-as/{id}', 'UserController@authAs')->name('login-as.user');
    Route::get('user/trash-list', 'UserController@getTrashList')->name('user.trash-list');
    // user.change-status
    //Review
    Route::get('review', 'ReviewController@index')->name('review.index');
    Route::get('review/create', 'ReviewController@getCreate')->name('review.create');
    Route::post('review/store', 'ReviewController@postStore')->name('review.store');
    Route::get('review/{id}/edit', 'ReviewController@getEdit')->name('review.edit');
    Route::post('review/{id}/update', 'ReviewController@putUpdate')->name('review.update');
    Route::get('review/{id}/status-update/{status}', 'ReviewController@updateStatus')->name('review.status-update');
    Route::get('review/{id}/delete', 'ReviewController@getDelete')->name('review.delete');

    // Payment Gateways
    Route::get('payment-methods', 'PaymentMethodController@paymentMethods')->name('payment.methods');
    Route::get('delete-payment-method', 'PaymentMethodController@deletePaymentMethod')->name('delete.payment.method');
    // Transactions
    Route::get('transactions', 'TransactionsController@indexTransactions')->name('transactions');
    Route::get('transaction-status/{id}/{status}', 'TransactionsController@transactionStatus')->name('trans.status');
    Route::get('offline-transactions', 'TransactionsController@offlineTransactions')->name('offline.transactions');
    Route::get('offline-transaction-status/{id}/{status}', 'TransactionsController@offlineTransactionStatus')->name('offline.trans.status');
    Route::get('view-invoice/{id}', 'TransactionsController@viewInvoice')->name('view.invoice');

    // Account Setting
    Route::get('account', 'AccountController@account')->name('account');
    Route::get('edit-account', 'AccountController@editAccount')->name('edit.account');
    Route::post('update-account', 'AccountController@updateAccount')->name('update.account');
    Route::get('change-password', 'AccountController@changePassword')->name('change.password');
    Route::post('update-password', 'AccountController@updatePassword')->name('update.password');

    //Custom Page
    Route::get('custom-page',['as'=>'custom-page.list','uses'=>'CustomPageController@getIndex']);
    Route::get('custom-page/create',['as'=>'custom-page.create','uses'=>'CustomPageController@getCreate']);
    Route::post('custom-page/store',['as'=>'custom-page.store','uses'=>'CustomPageController@postStore']);
    Route::get('custom-page/{id}/edit',['as'=>'custom-page.edit','uses'=>'CustomPageController@getEdit']);
    Route::get('custom-page/{id}/view',['as'=>'custom-page.view','uses'=>'CustomPageController@getView']);
    Route::post('custom-page/{id}/update',['as'=>'custom-page.update','uses'=>'CustomPageController@putUpdate']);
    Route::get('custom-page/{id}/delete',['as'=>'custom-page.delete','uses'=>'CustomPageController@getDelete']);
    Route::get('ajax/text-editor/image',['as'=>'text-editor.image','uses'=>'CustomPageController@postEditorImageUpload']);

    // Setting
    Route::get('pages', 'SettingsController@pages')->name('pages');
    Route::get('page/{home}', 'SettingsController@editHomePage')->name('edit.home');
    Route::post('page/{home}/update', 'SettingsController@updateHomePage')->name('update.home');



    Route::get('settings', 'SettingsController@settings')->name('settings');
    Route::post('change-settings', 'SettingsController@changeSettings')->name('change.settings');
    Route::get('tax-setting', 'SettingsController@taxSetting')->name('tax.setting');
    Route::post('update-tex-setting', 'SettingsController@updateTaxSetting')->name('update.tax.setting');
    Route::post('update-email-setting', 'SettingsController@updateEmailSetting')->name('update.email.setting');
    Route::get('test-email', 'SettingsController@testEmail')->name('test.email');

    // Clear cache
    Route::get('clear', 'SettingsController@clear')->name('clear');
    // Contact
    Route::get('contacts', 'AdminController@ContactMsg')->name('contact');
    Route::get('contacts/delete', 'AdminController@ContactDestroy')->name('contact.destroy');
    // blog
    Route::get('blogs', 'BlogController@Index')->name('blog');
    Route::get('blog/create', 'BlogController@Create')->name('blog.create');
    Route::post('blog/store', 'BlogController@Store')->name('blog.store');
    Route::get('blog/{id}/edit', 'BlogController@Edit')->name('blog.edit');
    Route::post('blog/{id}/update', 'BlogController@Update')->name('blog.update');
    Route::get('blog/delete/', 'BlogController@Delete');
    Route::post('ajax/text-editor/image', ['as' => 'ajax.text-editor.image', 'uses' =>'BlogController@textEditorImageUpload']);


    // blog
    Route::get('categories', 'CategoryController@Index')->name('category.index');
    Route::get('category/create', 'CategoryController@Create')->name('category.create');
    Route::post('category/store', 'CategoryController@Store')->name('category.store');
    Route::get('category/{id}/edit', 'CategoryController@Edit')->name('category.edit');
    Route::post('category/{id}/update', 'CategoryController@Update')->name('category.update');
    Route::get('category/delete/', 'CategoryController@Delete');
    // subscriber list
    Route::get('subscribers', 'AdminController@SubscriberList')->name('subscriber.index');
    Route::get('user-guides', 'AdminController@userGuide')->name('user.guide');
    Route::get('user-guide/create', 'AdminController@userGuideCreate')->name('user.guide.create');
    Route::post('user-guide/store', 'AdminController@userGuideStore')->name('user.guide.store');
    Route::get('user-guide/view/{id}', 'AdminController@userGuideView')->name('user.guide.view');
    Route::get('user-guide/edit/{id}', 'AdminController@userGuideEdit')->name('user.guide.edit');
    Route::post('user-guide/update/{id}', 'AdminController@userGuideUpdate')->name('user.guide.update');
    Route::get('user/guide/delete/', 'AdminController@DeleteUserGuide');


    // social-icon
    Route::get('social-icon', 'SocialIconController@index')->name('social-icon.index');
    Route::get('social-icon/create', 'SocialIconController@create')->name('social-icon.create');
    Route::post('social-icon/store', 'SocialIconController@store')->name('social-icon.store');
    Route::get('social-icon/{id}/edit', 'SocialIconController@edit')->name('social-icon.edit');
    Route::post('social-icon/{id}/update', 'SocialIconController@update')->name('social-icon.update');
    Route::get('social-icon/{id}/delete', 'SocialIconController@destroy')->name('social-icon.destroy');


    Route::get('faq',['as'=>'faq.list','uses'=>'FaqController@getIndex']);
    Route::get('faq/create',['as'=>'faq.create','uses'=>'FaqController@getCreate']);
    Route::post('faq/store',['as'=>'faq.store','uses'=>'FaqController@postStore']);
    Route::get('faq/{id}/edit',['as'=>'faq.edit','uses'=>'FaqController@getEdit']);
    Route::get('faq/{id}/view',['as'=>'faq.view','uses'=>'FaqController@getView']);
    Route::post('faq/{id}/update',['as'=>'faq.update','uses'=>'FaqController@putUpdate']);
    Route::get('faq/{id}/delete',['as'=>'faq.delete','uses'=>'FaqController@getDelete']);


    Route::get('cards', 'CardController@index')->name('cards');
    Route::get('card/trash', 'CardController@getTrashList')->name('card.trash');
    Route::get('card/edit/{card_id}', 'CardController@edit')->name('card.edit');
    Route::get('card/delete/{card_id}', 'CardController@delete')->name('card.delete');
    Route::get('card/change-status/{card_id}', 'CardController@changeStatus')->name('card.change-status');
    Route::get('card/active/{card_id}', 'CardController@activeCard')->name('card.active');

    Route::get('admin-users',['as'=>'admin-users','uses'=>'AccountController@getAdminUser']);
    Route::get('admin-users/create',['as'=>'admin-users.create','uses'=>'AccountController@getCreate']);
    Route::post('admin-users/store',['as'=>'admin-users.store','uses'=>'AccountController@postStore']);
    Route::get('admin-users/{id}/edit',['as'=>'admin-users.edit','uses'=>'AccountController@getEdit']);
    Route::post('admin-users/{id}/update',['as'=>'admin-users.update','uses'=>'AccountController@putUpdate']);

    //Marketing Materials
    Route::prefix('marketing-material')->group(function(){
      Route::get('/',[MarketingMaterialsController::class,'index'])->name('marketing.materials');
      Route::get('/create',[MarketingMaterialsController::class,'create'])->name('marketing.material.create');
      Route::post('/store',[MarketingMaterialsController::class,'store'])->name('marketing.material.store');
      Route::get('/edit/{id}',[MarketingMaterialsController::class,'edit'])->name('marketing.material.edit');
      Route::post('/update/{id}',[MarketingMaterialsController::class,'update'])->name('marketing.material.update');
      Route::get('/delete/{id}',[MarketingMaterialsController::class,'delete'])->name('marketing.material.delete');
      Route::get('/status-update/{id}/{status}',[MarketingMaterialsController::class,'status'])->name('marketing.material.status');
    });



});