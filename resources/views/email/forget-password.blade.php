@component('mail::message')
# Reset Password

You are receiving this email because we received a password reset request for your account.

@component('mail::button', ['url' => route('reset.password.get', $token)])
Reset Password
@endcomponent

This password reset link will expire in 60 minutes.

If you did not request a password reset, no further action is required.

Regards,
Innotive

If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:
<a href="{{ route('reset.password.get', $token) }}">Reset Password</a>

© {{ date('Y') }} Innotive. All rights reserved.
@endcomponent
