@extends('layouts.admin')

@section('content')
    <h1>BoolPress Blog</h1>
    <a class="btn btn-primary m-2" href="{{ route('admin.posts.create') }}"> ADD A NEW POST</a>
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
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->image }}</td>
                    <td><img src="{{ asset('storage/' . $post->image) }} " alt="" class="w-100"></td>
                    <td>{{ $post->sub_title }}</td>
                    <td>{{ $post->content }}</td>
                    <td><a class="btn btn-secondary m-1"
                            href="{{ route('admin.posts.show', ['post' => $post->id]) }}">VIEW</a>
                        <a class="" href="{{ route('admin.posts.edit', $post->id) }}"><button type="button"
                                class="btn btn-primary m-1">EDIT</button></a>
                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal"
                            data-bs-target="#delete_{{ $post->id }}">
                            DELETE
                        </button>
                        <div class="modal fade" id="delete_{{ $post->id }}" tabindex="-1"
                            aria-labelledby="modal_{{ $post->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="">Are you sure?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete this post?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
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
