@extends('emails.climatric.layout')
@section('content')
    <p style="font-size: 36px; font-weight: 700; color: #2CA55E; line-height: 42px; pading: 0; margin: 0">Forgot your password?</p>
    <img src="{{ $message->embed(public_path('assets/emails/climatric/Forgot-password-pana1.png')) }}" alt="OTP" />
    <p style="font-weight: 300; color: #2CA55E; font-size: 25px; line-height: 31px"> Reset your password by clicking the link below. </p>
    <div style="display: table;margin: 0 auto; align-items: center">
        <div style="background: #EFF9F0; max-width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <img src="{{ $message->embed(public_path('/assets/emails/climatric/typcn_warning.png')) }}" alt="Warn" style="display: inline; vertical-align: middle; margin-right: 10px;" />
            <p style="display: inline;">For increased account security, this link will expire in <span style="color:#344054; font-weight: 700;">30 Minutes</span></p>
        </div>
    </div>
    <div style="margin-top: 20px">
        <a href="{{ $link }}" style="background: #2CA55E; color: white; padding: 10px 30px 10px 30px; border: none; border-radius: 20px">Reset Password</a>
    </div>
@endsection
