<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body style="margin: 0; padding: 0">
<div style="margin-top: 3rem;margin-left: auto; margin-right: auto; max-width: 800px; text-align: center">
    <div>
        <img src="{{ $message->embed(public_path(('/assets/emails/climatric/Logo.png')))  }}" alt="Logo">
    </div>
    <div style="margin-top: 20px; margin-bottom: 20px">
        @yield('content')
    </div>
    <div>
        <p style="padding-bottom: 2rem; font-size: 1rem; font-weight: 300">
            Not sure why you received this email?  <a href="mailto:info@climatrix.ca" style="color: #2CA55E">Email</a> us or use our <a href="{{ url('/') }}" style="color: #2CA55E">Chat</a>.
        </p>
    </div>
    <p style="color:white;opacity: 0">{{ time() }}</p>
</div>
</body>
</html>
