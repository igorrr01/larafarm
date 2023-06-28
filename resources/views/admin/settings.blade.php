@extends('admin.app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                @if ($errors->any())
                <ul class="alert alert-danger" style="list-style:none">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('admin.settings.update') }}">
                    @csrf
                    @method('PATCH')
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Головні налаштуання</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Номер телефону</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $settings->phone }}">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Поштова скринька</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $settings->email }}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Текст першого слайдеру</label>
                                <textarea name="slider_1_text" rows="5" class="form-control @error('slider_1_text') is-invalid @enderror">{{ $settings->slider_1_text }}</textarea>
                                @error('slider_1_text')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Текст другого слайдеру</label>
                                <textarea name="slider_2_text" rows="5" class="form-control @error('slider_2_text') is-invalid @enderror">{{ $settings->slider_2_text }}</textarea>
                                @error('slider_2_text')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden">
                            <button type="submit" class="btn btn-primary">Зберегти</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection