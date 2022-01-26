@extends('layouts.admin')

@section('content')
    <h1>qui tutti i prodottii</h1>
    <a class="btn btn-primary m-2" href="{{ route('admin.products.create') }}"> ADD A NEW PRODUCT</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td scope="row">{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
