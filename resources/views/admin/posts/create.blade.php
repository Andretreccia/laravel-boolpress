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
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label"></label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="title of post">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label"></label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="helpId"
                    placeholder="image url">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label"></label>
                <input type="text" class="form-control" name="content" id="content" aria-describedby="helpId"
                    placeholder="content of post">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="sub_title" class="form-label"></label>
                <input type="text" class="form-control" name="sub_title" id="sub_title" aria-describedby="helpId"
                    placeholder="sub_title of post">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            {{-- select categories --}}
            <div class="form-group">
                <label for="category_id">Categories</label>
                <select class="mb-3" name="category_id" id="category_id">
                    <option selected disabled>Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="form-control w-25 m-auto" type="submit">CREATE IT!</button>
        </form>
    </div>
@endsection
