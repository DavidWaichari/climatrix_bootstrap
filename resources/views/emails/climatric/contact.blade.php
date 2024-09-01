@extends('emails.climatric.layout')
@section('content')
    {{--    $message->embed(public_path('assets/emails/climatric/Climatric.png'))--}}
    <p style="font-size: 36px; font-weight: 700; color: #444444; line-height: 42px; pading: 0; margin: 0">Contact Us Form</p>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Company Name:</span> {{ $field['company_name'] ?? '' }}</p>
        </div>
    </div>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Name and surname:</span> {{ $field['name_and_surname'] ?? '' }}</p>
        </div>
    </div>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Email Address:</span> {{ $field['email'] ?? '' }}</p>
        </div>
    </div>
    <div style="display: table;margin: 0 auto; align-items: center; text-align: start">
        <div style="background: #EFF9F0; width: 655px; font-weight: 700; font-size: 1rem; line-height: 48px; color: #2CA55E; margin-top: 10px;padding-left: 20px;padding-right: 20px;">
            <p style="display: inline;"><span style="color:#344054; font-weight: 700;">Phone number:</span> {{ $field['phone_number'] ?? '' }}</p>
        </div>
    </div>
@endsection
