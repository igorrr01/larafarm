@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="bg-light rounded-3">
      <div class="container-fluid">
        <h1 class="display-6 fw-bold">{{ $post->title }}</h1>
        <img src="/storage/app/{{ $post->photo }}" class="card-img-top img-fluid w-50 mx-auto" alt="News Image">
        <p class="text-dark col-md-12 fs-4">{!! nl2br($post->description) !!}</p>
      </div>
    </div>

    </div>
</div>
@endsection