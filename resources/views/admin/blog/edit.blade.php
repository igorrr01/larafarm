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

                <form method="POST" action="{{ route('admin.blog.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Редагування новини</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Заголовок</label>
                                <input type="text" value="{{ $post->title }}" name="title" class="form-control @error('title') is-invalid @enderror"">
                                @error('title')
                                <div class=" alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Опис</label>
                                <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror">{{ $post->description }}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <div class="form-group">
                                <label for="name">Зображення</label>
                                @if($post->photo)
                                <div class="m-2">
                                    <img src="/storage/app/{{ $post->photo }}" alt="" height="200">
                                </div>
                                @endif
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input" id="customFile">
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