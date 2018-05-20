@component('mail::message')
# Introduction

Thanks for registration.

@component('mail::button', ['url' => 'https://google.com'])
Google
@endcomponent

@component('mail::panel', ['url' => 'https://google.com'])
Nothing is permanent except change :)
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
