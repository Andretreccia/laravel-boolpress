@extends('layouts.admin')

@section('content')



@section('content')
    <h1>BoolPress Categories</h1>
    <a class="btn btn-primary m-2" href="{{ route('admin.categories.create') }}"> ADD A NEW CATEGORY</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td scope="row">{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>

                    <td>
                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal"
                            data-bs-target="#delete_{{ $category->id }}">
                            DELETE
                        </button>
                        <div class="modal fade" id="delete_{{ $category->id }}" tabindex="-1"
                            aria-labelledby="modal_{{ $category->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="">Are you sure?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete this category?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                            method="post">
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
@endsection
