@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    <div class="container">
        <div>
            <h2>contattaci</h2>
            <p>inserisci qui il tuo messaggio</p>
        </div>
        <form action="{{ route('contacts.send') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Full name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Il tuo nome"
                    aria-describedby="nameHelp">
                <small id="nameHelp" class="text-muted">Name</small>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="La tua mail"
                    aria-describedby="emailHelp">
                <small id="emailHelp" class="text-muted">Email</small>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-envelope-open fa-lg fa-fw"></i>Send it</button>
        </form>
    </div>
@endsection
