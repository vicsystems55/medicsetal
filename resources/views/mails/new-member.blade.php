@component('mail::message')

<h3></h3>

<p>
    Hi, {{ $data['name'] }} <br>
    Congratulations. Welcome to Medicsetal. <br>

</p>

<p>
    <u>Let's get started</u>
</p>

<p>
    Login to your account with the following credentials.
    <br>
    <br>
    <span><b> Email: </b></span> {{$data['email']}} <br>
    <span><b> Temporary  Password: </b></span> {{$data['phone']}}
</p>



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent