@component('mail::message')
# Introduction

Thanks so much for Signing up

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => 'https://laracasts.com'])
Electricity should be free
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
