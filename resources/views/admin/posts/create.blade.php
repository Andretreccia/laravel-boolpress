@extends('layouts.admin')


@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="title of post">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="helpId"
                    placeholder="image url">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="text" class="form-control" name="content" id="content" aria-describedby="helpId"
                    placeholder="content of post">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="sub_title of post">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <button class="form-control w-25 m-auto" type="submit">CREATE IT!</button>
        </form>
    </div>


@endsection
