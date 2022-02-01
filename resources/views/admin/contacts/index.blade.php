@extends('layouts.admin')

@section('content')
    <h1>
        tutti i messaggi ricevuti
    </h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td scope="row">{{ $contact->id }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <th>
                        <a class="btn btn-secondary m-1"
                            href="{{ route('admin.contacts.show', ['contact' => $contact->id]) }}">VIEW</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
