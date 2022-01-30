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
                <label for="title" class="form-label"></label>
                <input type="text" class="form-control " name="title" id="title" aria-describedby="helpId"
                    value="{{ $post->title }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label"></label>
                <input type="text" class="form-control " name="image" id="image" aria-describedby="helpId"
                    value="{{ $post->image }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label"></label>
                <input type="text" class="form-control " name="content" id="content" aria-describedby="helpId"
                    value="{{ $post->content }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="sub_title" class="form-label"></label>
                <input type="text" class="form-control " name="sub_title" id="sub_title" aria-describedby="helpId"
                    value="{{ $post->sub_title }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" name="tags[]" id="tags">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? 'selected' : '' }}>
                            {{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('tags')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="form-control w-25 m-auto" type="submit">EDIT IT!</button>
        </form>
    </div>


@endsection
