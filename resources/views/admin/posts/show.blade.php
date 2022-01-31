@extends('layouts.admin')

@section('content')

    <div class="container">
        <h3>{{ $post->title }}</h3>
        <img src="{{ asset('storage/' . $post->image) }} " alt="{{ $post->title }}">
        <p>{{ $post->sub_title }}</p>
        <p>{{ $post->content }}</p>
    </div>
    <div class="categories">
        @if ($post->category)
            category: <a href="">{{ $post->category->name }}</a>
        @else
            <h1>nessuna categoria</h1>
        @endif
    </div>

    <div class="tags">
        tags:
        @if (count($post->tags) > 0)
            @foreach ($post->tags as $tag)
                {{ $tag->name }}
            @endforeach
        @else
            <span>No tags</span>

        @endif

    </div>

@endsection
