@extends('layouts.admin')

@section('content')

    <div class="container">
        <h3>{{ $post->title }}</h3>
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
        <p>{{ $post->sub_title }}</p>
        <p>{{ $post->content }}</p>
    </div>


@endsection
