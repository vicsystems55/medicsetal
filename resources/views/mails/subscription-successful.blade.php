@component('mail::message')



<img src="{{ $data['logo'] }}" alt="well">



<p>
    Hi, {{ $data['users_name'] }} <br>
    Congratulations. You just successfully Subscribe to {{ $data['package_name'] }}.

  

</p>

<p>  Your access to resource videos is now unlocked.</p>




{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Warm regards,<br>
{{ config('app.name') }}
@endcomponent