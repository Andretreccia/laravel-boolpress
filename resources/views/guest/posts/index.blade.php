@extends('layouts.app')
@section('content')
    {{-- navbar categories and tags --}}
    <div class="container d-flex">
        <div class="col-md-4">
            <h3>Categories:</h3>
            <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('categories.posts', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Tags:</h3>
            {{-- <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('categories.posts', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul> --}}
        </div>
    </div>

    {{-- post cards --}}
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="card">
                        <img class="" src="{{ $post->image }}" alt="{{ $post->title }}">
                        <div class="">
                            <h4 class="">{{ $post->title }}</h4>
                            <p class=""> {{ $post->sub_title }}</p>
                            <a class="btn" href="{{ route('posts.show', $post->id) }}">
                                View post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
