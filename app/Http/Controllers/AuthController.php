<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

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


       $this->sendOtp($user);

        return response()->json([
            'success' => true,
            'data' => [
                'message' => 'OTP has been sent to your email.',
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

    $this->sendOtp($user);

    // Normally, you would send this OTP via email or SMS
    return response()->json([
        'success' => true,
        'data' => [
            'message' => 'New OTP has been sent to your email.'
        ],
    ]);
}

public function forgetPassword(Request $request)
{
    // Validate the email input
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
            'message' => 'No user found with this email address.',
        ]);
    }

    // Generate the password reset link
    $token = app('auth.password.broker')->createToken($user);
    $link = url('/password/reset/' . $token . '?email=' . urlencode($user->email));

    // Send the password reset email
    Mail::send('emails.climatric.forgot-password', ['link' => $link], function($message) use ($user) {
        $message->to($user->email)
                ->subject('Reset Your Password');
    });

    return response()->json([
        'success' => true,
        'message' => 'Password reset link has been sent to your email.',
    ]);
}

public function resetPassword(Request $request)
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email',
        'token' => 'required|string',
        'password' => 'required|string|confirmed|min:4',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'data' => [
                'errors' => $validator->errors(),
            ],
        ]);
    }

    // Attempt to reset the user's password
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        }
    );

    // Handle the response from the password reset process
    if ($status == Password::PASSWORD_RESET) {
        return response()->json([
            'success' => true,
            'data' => [
                'message' => 'Password has been successfully reset.',
            ],
        ]);
    } else {
        return response()->json([
            'success' => false,
            'data' => [
                'message' => 'Failed to reset the password. The token may be invalid or expired.',
            ],
        ]);
    }
}

public function sendOtp($user)
{
    // Generate OTP and save it to the user's record
    $otp = rand(100000, 999999);
    $user->otp = $otp;
    $user->save();

    // // Send OTP to the user's email, passing both 'otp' and 'user' variables to the view
    // Mail::send('emails.climatric.otp', ['otp' => $otp, 'user' => $user], function($message) use ($user) {
    //     $message->to($user->email)
    //             ->subject('Your OTP Code');
    // });
}

public function logout(Request $request)
{
    // Revoke the token that was used to authenticate the current request
    $request->user()->currentAccessToken()->delete();

    return response()->json([
        'success' => true,
        'data' => [
            'message' => 'Successfully logged out.',
        ],
    ]);
}

public function authUser()
{
    $user  = Auth::user();
    if ($user) {
        return response()->json([
            'success' => true,
            'data' => [
                'user' => $user,
            ],
        ]);
    }else{
        return response()->json([
            'success' => false,
            'data' => [
                'message' => 'User is not authenticated',
            ],
        ]);
    }
}



}
