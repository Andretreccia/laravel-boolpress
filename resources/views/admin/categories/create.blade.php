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
        <form action="{{ route('admin.categories.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="Name of category">
                <small id="helpId" class="form-text text-muted">Category name</small>
            </div>
            <button class="form-control w-25 m-auto" type="submit">CREATE IT!</button>
        </form>
    </div>
@endsection
