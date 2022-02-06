<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RTVRSEnumerationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\UserWalletController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\LeadController;

use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\CourseController;









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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/registerx', [ApiAuthController::class, 'register']);

Route::post('/login', [ApiAuthController::class, 'login']);


Route::post('/create_package', [PackageController::class, 'create_package']);

Route::get('/packages', [PackageController::class, 'packages']);

Route::post('/package', [PackageController::class, 'package']);

Route::post('/payment_callback', [SubscriptionController::class, 'register_subscription'])->middleware('auth:sanctum');

Route::post('/verify_otp', [ApiAuthController::class, 'verify_otp'])->middleware('auth:sanctum');

Route::get('/get_faqs', [FAQController::class, 'get_faqs']);

Route::get('/add_faq', [FAQController::class, 'add_faq'])->middleware('auth:sanctum');

Route::get('/wallet_balance', [UserWalletController::class, 'wallet_balance'])->middleware('auth:sanctum');

Route::get('/get_notifications', [NotificationController::class, 'get_notifications'])->middleware('auth:sanctum');

Route::get('/get_leads', [LeadController::class, 'get_leads'])->middleware('auth:sanctum');

Route::post('/create_enumeration', [RTVRSEnumerationController::class, 'create_enumeration']);

Route::post('/user_stats', [UserProfileController::class, 'user_stats']);

Route::post('/user_profile', [UserProfileController::class, 'update_profile'])->middleware('auth:sanctum');

Route::post('/get_profile', [UserProfileController::class, 'get_profile'])->middleware('auth:sanctum');

Route::post('/courses', [CourseController::class, 'courses']);







