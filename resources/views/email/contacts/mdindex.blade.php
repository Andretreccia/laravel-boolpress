@component('mail::message')
# Introduction

The body of your message.
{{ $data['content'] }}


@component('mail::panel')
{{ $data['name'] }}
{{ $data['email'] }}
@endcomponent


@component('mail::button', ['url' => $url])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent