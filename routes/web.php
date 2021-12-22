<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminPageController;

use App\Http\Controllers\UserPageController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\LandingPageController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){


// });


Route::get('/choose', [ChooseRoleController::class, 'choose'])->name('choose');

Route::get('/adminx', [HomeController::class, 'admin'])->name('admin');

Route::get('/coming_soon', [HomeController::class, 'coming_soon'])->name('comming_soon');


Route::get('/{username}', [LandingPageController::class, 'index'])->name('landing_page');




Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){

    Route::get('/',  [AdminPageController::class, 'home'])->name('admin.home');

    Route::get('/members',  [AdminPageController::class, 'members'])->name('admin.members');

    Route::get('/member',  [AdminPageController::class, 'member'])->name('admin.member');

    Route::get('/subscriptions',  [AdminPageController::class, 'subscriptions'])->name('admin.subscriptions');

    Route::get('/payouts',  [AdminPageController::class, 'payouts'])->name('admin.payouts');

    Route::get('/notifications',  [AdminPageController::class, 'notifications'])->name('admin.notifications');

    Route::get('/messages',  [AdminPageController::class, 'messages'])->name('admin.messages');

    Route::get('/leads',  [AdminPageController::class, 'leads'])->name('admin.leads');

    Route::get('/settings',  [AdminPageController::class, 'settings'])->name('admin.settings');

    Route::get('/landing_pages',  [AdminPageController::class, 'landing_pages'])->name('admin.landing_pages');

    Route::get('/resources',  [AdminPageController::class, 'resources'])->name('admin.resources');




});

Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function(){

    Route::get('/',  [UserPageController::class, 'home'])->name('user.home');

    Route::get('/profile',  [UserPageController::class, 'profile'])->name('user.profile');

    Route::get('/messages',  [UserPageController::class, 'messages'])->name('user.messages');

    Route::get('/notifications',  [UserPageController::class, 'notifications'])->name('user.notifications');

    Route::get('/subscriptions',  [UserPageController::class, 'subscriptions'])->name('user.subscriptions');

    Route::get('/resources',  [UserPageController::class, 'resources'])->name('user.resources');

    Route::get('/my_leads',  [UserPageController::class, 'my_leads'])->name('user.my_leads');

    Route::get('/my_landing_page',  [UserPageController::class, 'my_landing_page'])->name('user.my_landing_page');

    
});


