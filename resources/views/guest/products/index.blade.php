@extends('layouts.app')


@section('content')

    <div class="container text-center">
        <h2 class="mb-4">BoolPress products:</h2>
        <div class="row gy-2">
            @foreach ($products as $product)

                <div class="col-md-3">
                    <div class="card">
                        <img class="" src="{{ $product->image }}" alt="{{ $product->name }}">
                        <div class="">
                            <h4 class="">{{ $product->name }}</h4>
                            <p class=""> € {{ $product->price }}</p>
                            <a class="btn" href="{{ route('products.show', $product->id) }}">View
                                Product</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
© 2022 GitHub, Inc.
Terms
Privacy
Securi
