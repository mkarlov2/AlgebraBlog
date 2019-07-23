@component('mail::message')
# Introduction

Pozdrav {{ $user->name}}, dobrodošli na naš blog!

@component('mail::button', ['url' => 'https://index.hr'])
Započmite s čitanjem
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
