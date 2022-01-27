@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <img class="" src="{{ $post->image }}" alt="{{ $post->title }}">
            <div class="">
                <h4 class="">{{ $post->title }}</h4>
                <p class=""> {{ $post->sub_title }}</p>
            </div>
        </div>

    @endsection
