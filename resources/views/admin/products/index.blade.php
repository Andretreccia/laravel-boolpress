@extends('layouts.admin')

@section('content')
    <h1>qui tutti i prodotti</h1>
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
                    <td><a class="btn btn-secondary m-1"
                            href="{{ route('admin.products.show', ['product' => $product->id]) }}">VIEW</a>
                        <a class="" href="{{ route('admin.products.edit', $product->id) }}"><button
                                type="button" class="btn btn-primary m-1">EDIT</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
