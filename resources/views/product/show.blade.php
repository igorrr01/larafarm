@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <img src="/storage/app/{{ $product->photo }}" class="card-img-top img-fluid w-50 mx-auto" alt="Product Image">
                <div class="card-body">
                    <h4 class="card-title text-center fw-bold">{{ $product->name }}</h4>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="#" class="btn btn-primary">Замовити</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection