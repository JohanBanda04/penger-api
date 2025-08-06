<x-mail::message>
    <p>
        <br>
        Hi {{ $user->name }},
        <br>
        Your 6-digit code is:
        <br>
        <br>
    <p>
        <strong>{{ $otp->code }}</strong>
    </p>
    <br>
    @if($otp->type=='password-reset')
        <p>Use this code to reset your password in the app.</p>
    @else
        <p>Use this code to complete the verification proccess in the app.</p>
    @endif
    <br>
    <p>Do not share this code. Penger representatives will never reach out to you to verify this code over the phone or
        SMS.</p>
    <br>
    <p>
        <strong>The code is valid for 10 minutes</strong>
    </p>
    Thanks,
    <br>
    {{ config('app.name') }}
    </p>

</x-mail::message>
