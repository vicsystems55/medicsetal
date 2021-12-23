@component('mail::message')



<img src="{{ $data['logo'] }}" alt="well">



<p>
    Hi, {{ $data['users_name'] }} <br>
    Congratulations. You just successfully Subscribe to {{ $data['package_name'] }}.

  

</p>

<p>  {{ $data['logo'] }}</p>

<h3>Username: </h3>
<h3>Password: </h3>

<p>Please keep your credentials confidential</p>



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Warm regards,<br>
{{ config('app.name') }}
@endcomponent