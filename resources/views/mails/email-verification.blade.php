@component('mail::message')

<h1> Hello {{$data['name']}}, </h1>

<p>
    Welcome to Phoenixgn, use the OTP below to verify your email.
</p>
  
    
<h1> {{$data['otp']}} </h1>

<p>
    If you have any complaints please contact our support.
</p>
    

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent