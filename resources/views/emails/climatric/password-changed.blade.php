@extends('emails.climatric.layout')
@section('content')
    <p style="font-size: 36px; font-weight: 700; color: #2CA55E; line-height: 42px; pading: 0; margin: 0">Password changed</p>
    <img src="{{ $message->embed(public_path('/assets/emails/climatric/Securelogin-pana1.png')) }}" alt="Password" />
    <p style="font-weight: 700; color: #2CA55E; font-size: 30px; line-height: 42px; margin-top: 10px; margin-bottom: 5px"> Your password was changed on {{ date('d M Y') }}</p>
    <p style="font-weight: 300; color: #252525; font-size: 20px; line-height: 25px">
        If this was you, then you can safely ignore this email. If this wasn't, your account has been compromised. <span style="font-weight: 700">Here is what you can do:</span>
    </p>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <img src="{{ $message->embed(public_path('/assets/emails/climatric/fluent_key-reset-24-filled.png')) }}" alt="Warn" style="display: inline; vertical-align: middle; margin-right: 10px;" />
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Reset Your Password:</span> and take control of your account</p>
        </div>
    </div>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <img src="{{ $message->embed(public_path('/assets/emails/climatric/mdi_email-plus.png')) }}" alt="Warn" style="display: inline; vertical-align: middle; margin-right: 10px;" />
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Email us of use our chat:</span> to help you log back into the system</p>
        </div>
    </div>
    <div style="margin-top: 20px">
        <a href="{{ url('/forgot-password') }}" style="background: #2CA55E; color: white; padding: 10px 30px 10px 30px; border: none; border-radius: 20px">Reset Password</a>
    </div>
@endsection
