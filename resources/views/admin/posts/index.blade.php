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
                    <td>{{ $post->sub_title }}</td>
                    <td>{{ $post->content }}</td>
                    <td><a class="btn btn-secondary m-1"
                            href="{{ route('admin.posts.show', ['post' => $post->id]) }}">VIEW</a>
                        <a class="" href="{{ route('admin.posts.edit', $post->id) }}"><button type="button"
                                class="btn btn-primary m-1">EDIT</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
