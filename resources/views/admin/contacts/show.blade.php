@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>
            Name: {{ $contact->name }}
        </h1>
        <h3>data: {{ $contact->created_at }}</h3>
        <p>
            {{ $contact->content }}
        </p>
    </div>

@endsection
