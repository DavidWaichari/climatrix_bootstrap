@extends('emails.climatric.layout')
@section('content')
    <p style="font-size: 36px; font-weight: 700; color: #2CA55E; line-height: 42px; pading: 0; margin: 0">Welcome to Climatic</p>
    <img src="{{ $message->embed(public_path('/assets/emails/climatric/Helping-a-partner-pana1.png')) }}" alt="Welcome" />
    <p style="font-weight: 300; color: #344054; font-size: 25px; line-height: 31px">Thank you for registering for an account with Climatrix. One of our representatives will get back to you shortly regarding the next steps for your new account.</p>
    <p style="font-weight: 700; color: #2CA55E; font-size: 30px; line-height: 42px; margin-top: 20px; margin-bottom: 20px"> Here’s what you can do after that..</p>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <img src="{{ $message->embed(public_path('/assets/emails/climatric/mdi_pen-add.png')) }}" alt="Warn" style="display: inline; vertical-align: middle; margin-right: 10px;" />
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Add emission inventory:</span> to know your total green house gas emmissions</p>
        </div>
    </div>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <img src="{{ $message->embed(public_path('/assets/emails/climatric/material-symbols-light_add-notes.png')) }}" alt="Warn" style="display: inline; vertical-align: middle; margin-right: 10px;" />
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Do a self assessment:</span> see your readiness to address climate-related risks</p>
        </div>
    </div>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <img src="{{ $message->embed(public_path('/assets/emails/climatric/gravity-ui_target-dart.png')) }}" alt="Warn" style="display: inline; vertical-align: middle; margin-right: 10px;" />
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Set your target emissions?</span>  improve your tGHG numbers</p>
        </div>
    </div>
    <div style="margin-top: 20px">
        <a href="{{ url('/login') }}" style="background: #2CA55E; color: white; padding: 10px 30px 10px 30px; border: none; border-radius: 20px">Log In</a>
    </div>
@endsection
