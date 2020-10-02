@component('mail::message')
# Hello Je m'appelle {{ $data['name'] }} 
Mon email : {{ $data['email'] }}

Mon message : 
{{ $data['message'] }}

@component('mail::button', ['url' => '', 'color' => 'green'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
