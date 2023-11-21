<?php

use App\Http\Controllers\Api\{
    CompletedChallengesController,
    CompletedMissionsController,
    CouponsController,
    LoginController,
    MissionsController,
    RedeemedCouponsController
};
use App\Http\Controllers\ApiCustom\{
    AuthenticatorLoginController,
    CouponController,
    PointsController,
    PointsHistoryController,
    RecoveryPasswordController,
    SkinTypeController,
    WeekMissionsController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('authLogin', [AuthenticatorLoginController::class, 'authenticate']);
Route::post('sendEmail', [RecoveryPasswordController::class, 'sendEmail']);
Route::post('recoveryCode', [RecoveryPasswordController::class, 'recoveryCode']);
Route::post('newPassword', [RecoveryPasswordController::class, 'newPassword']);
Route::post('register', [AuthenticatorLoginController::class, 'register']);

Route::middleware('auth:sanctum')->group(function(){
    // CUSTOM
    Route::post('upSkinType', [SkinTypeController::class, 'upSkinType']);
    Route::post('getSkinType', [SkinTypeController::class, 'getSkinType']);
    Route::post('getLoginFilter', [AuthenticatorLoginController::class, 'getLoginFilter']);
    Route::post('getPoints', [PointsController::class, 'getPoints']);
    Route::post('getHistory', [PointsHistoryController::class, 'getHistory']);
    Route::post('getMissions', [WeekMissionsController::class, 'getWeekMissions']);
    Route::post('getCoupon', [CouponController::class, 'getCoupon']);
    Route::post('setCoupon', [CouponController::class, 'setCoupon']);



    // CRUD
    Route::apiResource('login', LoginController::class);
    Route::apiResource('challenges', CompletedChallengesController::class);
    Route::apiResource('missions', MissionsController::class);
    Route::apiResource('coupons', CouponsController::class);
    Route::apiResource('completed_missions', CompletedMissionsController::class);
    Route::apiResource('completed_challenges', CompletedChallengesController::class);
    Route::apiResource('redeemed_coupons', RedeemedCouponsController::class);
});
