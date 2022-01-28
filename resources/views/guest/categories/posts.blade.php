@extends('layouts.app')


@section('content')

    <h1>CATEGORY: {{ $category->name }}</h1>
    <div class="container">
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-3">
                    <div class="card">
                        <img class="" src="{{ $post->image }}" alt="{{ $post->title }}">
                        <div class="">
                            <h4 class="">{{ $post->title }}</h4>
                            <p class=""> {{ $post->sub_title }}</p>
                            <a class="btn" href="{{ route('posts.show', $post->id) }}">View
                                post</a>
                        </div>
                    </div>
                </div>
            @empty
                <h1>VUOTO, NON C'È NIENTE </h1>
            @endforelse
        </div>
    </div>


@endsection
