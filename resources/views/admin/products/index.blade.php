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
                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal"
                            data-bs-target="#delete_{{ $product->id }}">
                            DELETE
                        </button>
                        <div class="modal fade" id="delete_{{ $product->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="">Are you sure?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete this product?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">DELETE</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
