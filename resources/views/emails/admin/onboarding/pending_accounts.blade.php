@extends('emails.climatric.layout')
@section('content')
    <div style="padding: 0 5%">
        <div style="width: 100%; text-align: center; margin-top: 4rem;">
            <div
                style="display: inline-flex; align-items: center; background: #44E0AA; border-radius: 85.91px; padding: 4.436px 10.309px; text-transform: capitalize;">
                <img src="{{ asset('assets/emails/people.png') }}" alt=""
                    style="vertical-align: middle; margin-right:8px">
                <span
                    style="color: #FFF; font-family: Montserrat; font-size: 14px; font-style: normal; font-weight: 400; line-height: 14px;">
                    Account Status
                </span>
            </div>
        </div>


        <div style="color:#5063F4; font-family:Montserrat; font-size:38px; font-style:normal; font-weight:700; line-height:42px; text-align:center ;width:100%;"
            align="center">
            Pending Accounts
        </div>
        <div style="width: 100%; text-align: center;">
            <img src="{{ asset('assets/emails/pending-accounts.png') }}" class="cover-image" alt=""
                style="max-height: 400px; display: block; margin: 0 auto;">
        </div>
        <div class="w-100 d-flex justify-content-center">
            <p class="action-message"
                style="font-family:Montserrat; font-size:25px; font-style:normal; font-weight:300; line-height:normal; text-align:center"
                align="center">Please review the following accounts for approval</p>
        </div>
        @foreach ($pendingaccounts as $key => $pending_account)
            <div class="w-100 d-flex justify-content-start account-unsuspend my-2"
                style="background:#F4F5F6; font-family:Montserrat; font-size:16px; font-style:normal; font-weight:300; line-height:normal; padding:10px;width:100%;display:flex;justify-content:flex-start;margin-top:10px">
                <div class="w-100 ml-4 text-capitalize" style="text-align:start;width: 100%; margin-left-20px"> {{ $key + 1 }}. &nbsp;
                    {{ $pending_account }} </div>
            </div>
        @endforeach
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td align="center">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="center" bgcolor="#ffffff" style="border-radius: 20px; padding: 10px;">
                                <a href="{{ url('/climatrix-admin/users/users_onboard') }}"
                                    style="color: #ffffff; font-family: Montserrat, sans-serif; font-size: 16px; font-weight: 400; text-decoration: none; background-color: #5063F4; border-radius: 20px; padding: 10px 30px; display: inline-block; width: 250px;">
                                    Review Accounts
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
@endsection
