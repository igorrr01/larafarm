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

                <form method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Редагування товару/продукту</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Назва</label>
                                <input type="text" value="{{ $product->name }}" name="name" class="form-control @error('name') is-invalid @enderror"">
                                @error('name')
                                <div class=" alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Опис</label>
                                <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-group row m-1">
                                    <label class="col-sm-0 col-form-label" for="price">Ціна</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="price" value="{{ $product->price }}" class="form-control @error('price') is-invalid @enderror"">
                                    </div>
                                    <label class="col-sm-0 col-form-label" for="price_type">За (кг/т)</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="price_type" value="{{ $product->price_type }}" class="form-control @error('price_type') is-invalid @enderror"">
                                    </div>
                                </div>
                                @error('price')
                                <div class=" alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-group row m-1">
                                    <label class="col-sm-0 col-form-label">Тип</label>
                                    <div class="col-sm-2">
                                        <select name="market_type"  class="form-control @error('description') is-invalid @enderror">
                                        <option @if($product->market_type == 'by') selected @endif value="by">Купля</option>
                                        <option @if($product->market_type == 'sell') selected @endif value="sell">Продажа</option>
                                        </select>
                                    </div>
                                @error('market_type')
                                <div class=" alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Зображення</label>
                                @if($product->photo)
                                <div class="m-2">
                                    <img src="/storage/app/{{ $product->photo }}" alt="" height="200">
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