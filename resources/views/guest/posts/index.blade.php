@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
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

            @endforeach
        </div>
    </div>

@endsection
