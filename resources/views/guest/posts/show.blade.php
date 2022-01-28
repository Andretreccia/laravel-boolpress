@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <img class="" src="{{ $post->image }}" alt="{{ $post->title }}">
            <div class="">
                <h4 class="">{{ $post->title }}</h4>
                <p class=""> {{ $post->sub_title }}</p>
                <p>{{ $post->content }}</p>
            </div>
        </div>
        @if ($post->category)
            category: <a href="{{ route('categories.posts', $post->category->id) }}">{{ $post->category->name }}</a>
        @else
            <h1>nessuna categoria</h1>
        @endif
    @endsection
