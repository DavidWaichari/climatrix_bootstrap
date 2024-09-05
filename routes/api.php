<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GHGManagementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/resend_otp', [AuthController::class, 'resendOtp']);
Route::post('/verify_otp', [AuthController::class, 'verifyOtp']);
Route::post('/forget_password', [AuthController::class, 'forgetPassword']);
Route::post('/reset_password', [AuthController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function () {
    // Get authenticated user details
    Route::get('/user', [AuthController::class, 'authUser']);
    // Logout route
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/ghg_management/gross_emmisions', [GHGManagementController::class, 'getGrossEmissions']);

});
