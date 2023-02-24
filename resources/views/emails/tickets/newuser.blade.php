@component('mail::message')
<b>Attention :</b>Administrator
A new user has created an account. Kindly Have a look an apply appropriate action.<br>
The following are the details of the user.<br>
<b>Name: </b> {{$user->name}}<br>
<b>Organisation: </b> {{$user->organisation}}<br>
<b>City: </b> {{$user->city}}<br>
<b>Region: </b> {{$user->region->name}}<br>

@component('mail::button', ['url' =>route('user.index')])
View User
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
