<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Registration function
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => [
                    'errors' => $validator->errors(),
                ],
            ]);
        }

        // Create the user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return response()->json([
            'success' => true,
            'data' => [
                'message' => 'User registered successfully.',
            ],
        ]);
    }

    // Login function
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => [
                    'errors' => $validator->errors(),
                ],
            ]);
        }

        $user = User::where('email', $request->input('email'))->first();

        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return response()->json([
                'success' => false,
                'data' => [
                    'message' => 'The provided credentials are incorrect.',
                ],
            ]);
        }

        // Generate OTP and save it to the user's record
        $otp = rand(100000, 999999);
        $user->otp = $otp;
        $user->save();

        // Normally, you would send this OTP via email or SMS
        return response()->json([
            'success' => true,
            'data' => [
                'message' => 'OTP has been sent to your email.',
                'otp' => $otp,  // Remove this line if OTP is sent via email/SMS
            ],
        ]);
    }

    // Verify OTP function
    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => [
                    'errors' => $validator->errors(),
                ],
            ]);
        }

        $user = User::where('otp', $request->input('pin'))->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'data' => [
                    'message' => 'Invalid OTP.',
                ],
            ]);
        }

        // OTP verified, create and return the token
        $token = $user->createToken('auth_token')->plainTextToken;

        // Clear OTP after successful verification
        $user->otp = null;
        $user->save();

        return response()->json([
            'success' => true,
            'data' => [
                'access_token' => $token,
                'token_type' => 'Bearer',
            ],
        ]);
    }

// Resend OTP function
public function resendOtp(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'data' => [
                'errors' => $validator->errors(),
            ],
        ]);
    }

    $user = User::where('email', $request->input('email'))->first();

    if (!$user) {
        return response()->json([
            'success' => false,
            'data' => [
                'message' => 'No user with that email exists.',
            ],
        ]);
    }

    // Generate new OTP and save it to the user's record
    $otp = rand(100000, 999999);
    $user->otp = $otp;
    $user->save();

    // Normally, you would send this OTP via email or SMS
    return response()->json([
        'success' => true,
        'data' => [
            'message' => 'New OTP has been sent to your email.',
            'otp' => $otp,  // Remove this line if OTP is sent via email/SMS
        ],
    ]);
}

}
