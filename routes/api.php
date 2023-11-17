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
    AuthenticatorTokenController,
    PointsController,
    RecoveryPasswordController
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

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('login', LoginController::class);
    Route::post('getPoints', [PointsController::class, 'getPoints']);
    Route::apiResource('challenges', CompletedChallengesController::class);
    Route::apiResource('missions', MissionsController::class);
    Route::apiResource('coupons', CouponsController::class);
    Route::apiResource('completed_missions', CompletedMissionsController::class);
    Route::apiResource('completed_challenges', CompletedChallengesController::class);
    Route::apiResource('redeemed_coupons', RedeemedCouponsController::class);
});
