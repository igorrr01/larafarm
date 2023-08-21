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
                        <h3 class="card-title">Список новин</b></h3> <span style="float:right"><a class="text-success" href="{{ route('admin.blog.create') }}"><i class="fas fa-plus-circle"></i> Додати</a></span>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Фото</th>
                                            <th>Заголовок</th>
                                            <th>Короткий опис</th>
                                            <th>Дії</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr data-rowid="{{ $post->id }}">
                                            <td>{{ $post->id }}</td>
                                            <td><img src="/storage/app/{{ $post->photo }}" alt="" height="50"></td>
                                            <td id="name">{{ $post->title }}</td>
                                            <td>{{ mb_substr($post->description, 0, 50) }} @if(strlen($post->description) > 25)... @endif </td>
                                            <td>
<!--                                                 <a href="" title="show"><button class="btn btn-info btn-sm mb-1">show</button></a> -->                                                
                                                <a href="{{ route('admin.blog.edit', $post->id) }}" title="редагувати"><button class="btn btn-primary btn-sm mb-1">редагувати</button></a>
                                                <button type="button" class="btn btn-danger btn-sm mb-1" data-id="{{ $post->id }}" data-toggle="modal" data-target="#modal-delete" id="modal">видалити</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if(isset($post))
                                <form method="POST" action="{{ route('admin.blog.destroy', $post->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal fade" id="modal-delete">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Видалення новини</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Ви впевнені що хочете видалити новину <span id="modalName"></span> ?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <input type="hidden" name="id" value="">
                                                    <button type="submit" class="btn btn-primary">Видалити</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Відміна</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#modal', function() {
            let data_id = $(this).data('id');
            let name = $(`[data-rowid='${data_id}']`).find('#name').text();
            $('#modalName').html('<b>' + name + '</b>');
            $("input[name=id]").val(data_id);
        });
    });
</script>

@endsection