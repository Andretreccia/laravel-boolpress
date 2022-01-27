@extends('layouts.admin')


@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" class="form-control " name="name" id="name" aria-describedby="helpId"
                    value="{{ $post->title }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="text" class="form-control " name="image" id="image" aria-describedby="helpId"
                    value="{{ $post->image }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="text" class="form-control " name="description" id="description" aria-describedby="helpId"
                    value="{{ $post->content }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="text" class="form-control " name="price" id="price" aria-describedby="helpId"
                    value="{{ $post->sub_title }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <button class="form-control w-25 m-auto" type="submit">EDIT IT!</button>
        </form>
    </div>


@endsection
