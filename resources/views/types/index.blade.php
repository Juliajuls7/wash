@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Все типы <a href="/types/create" class="btn btn-warning">Добавить</a></div>

                <div class="panel-body">
                   @foreach ($types as $type)
                    <ul>
                       <li>{{ $type->name }}
                       <a class="btn btn-default" href="/types/{{ $type->id }}">Просмотр</a> <a class="btn btn-info" href="/types/edit/{{ $type->id }}">Редактирование</a>
                   <a class="btn btn-danger" href="#" id="deleteBtn">Удалить</a>
                    

                    <form id="destroy-form" action="/types/{{ $type->id }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>    
                       </li> 
                   </ul>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(function() {
    $('#deleteBtn').click(function(event) {
        if (confirm("Действительно хотите удалить этот тип?")) {
            event.preventDefault(); 
            document.getElementById('destroy-form').submit();
        }
    });
});
</script>
@stop