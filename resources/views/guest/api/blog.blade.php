@extends('layouts.app')

@section('content')

    <h1>qui il blog</h1>

    <div class="container">
        <div class="row">

            <div class="col-md-3" v-for="post in posts">
                <div class="card">
                    <div class="">
                        <h4 class="">@{{ post.title }}</h4>
                        <p class=""> @{{ post.sub_title }}</p>
                        {{-- <a class="btn" href="{{ route('posts.show', $post->id) }}">
                            View post</a> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
