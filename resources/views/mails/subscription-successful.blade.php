@component('mail::message')



<img src="{{ $data['logo'] }}" alt="well">



<p>
    Hi, {{ $data['users_name'] }} <br>
    Congratulations. You just successfully Subscribe to {{ $data['package_name'] }}.

  

</p>

<p>  You now have access to the LMS Platform with the following credentials</p>

<p>https://edu.medicsetal.org</p>

<h3>Username: {{ $data['lms_username'] }}</h3>
<h3>Password: {{ $data['lms_password'] }}</h3>

<p>Please keep your credentials confidential</p>



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Warm regards,<br>
{{ config('app.name') }}
@endcomponent