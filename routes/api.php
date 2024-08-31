<?php

use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
