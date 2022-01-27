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
        <form action="{{ route('admin.products.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="name of product">
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
                <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId"
                    placeholder="description of product">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="price of product">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <button class="form-control w-25 m-auto" type="submit">CREATE IT!</button>
        </form>
    </div>


@endsection
