@extends('layouts.admin')

@section('content')

    <div class="container">
        <h3>{{ $product->name }}</h3>
        <img src="{{ $product->image }}" alt="{{ $product->name }}">
        <p>{{ $product->price }}</p>
        <p>{{ $product->description }}</p>
    </div>


@endsection
