@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $product->name }}</h2>
        <img src="{{ $product->image }}" alt="{{ $product->name }}">
        <p>€ {{ $product->price }}</p>
        <p>{{ $product->description }}</p>
    </div>


@endsection
