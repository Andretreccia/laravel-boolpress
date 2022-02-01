@component('mail::message')
    # Introduction

    The body of your message.
    {{ $contact->content }}


    @component('mail::panel')
        name:{{ $contact->name }} |
        email:{{ $contact->email }}
    @endcomponent


    @component('mail::button', ['url' => $url])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
