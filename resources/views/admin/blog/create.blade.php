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

                <form method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Добавити новину</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Заголовок</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"">
                                @error('title')
                                <div class=" alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Опис</label>
                                <textarea name="description" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Зображення</label>
                                <div class="custom-file">
                                    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror custom-file-input" id="customFile">
                                    @error('photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="custom-file-label" for="customFile">Виберіть файл</label>
                                </div>
                            </div>
                        </div>
                            <div class="card-footer">
                                <input type="hidden">
                                <button type="submit" class="btn btn-primary">Добавити</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection