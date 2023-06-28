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
                <div class="card card-light">
                    <div class="card-header">
                        <h3 class="card-title">Список товарів/продуктів</b></h3> <span style="float:right"><a class="text-success" href="{{ route('admin.product.create') }}"><i class="fas fa-plus-circle"></i> Додати</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection