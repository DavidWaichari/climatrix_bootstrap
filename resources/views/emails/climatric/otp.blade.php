@extends('emails.climatric.layout')
@section('content')
    <p style="font-size: 36px; font-weight: 700; color: #2CA55E; line-height: 42px; pading: 0; margin: 0">Enter your one time PIN</p>
    <img src="{{ $message->embed(public_path('assets/emails/climatric/EnterOTP-pana1.png')) }}" alt="OTP" />
    <p style="font-weight: 300; color: #344054; font-size: 25px; line-height: 31px">Use this unique one-time code:</p>
    <div style="display: table;margin: 0 auto;">
        <div style="background: #EFF9F0; width: 394px; font-weight: 700; font-size: 39px; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <p>{{ $otp }}</p>
        </div>
    </div>
    <p style="font-size: 18px; line-height: 22px; font-weight: 300; color: #344054;margin-top: 10px">
        *This code is valid for <span style="color:#344054; font-weight: 700">30 minutes</span>
    </p>
@endsection
