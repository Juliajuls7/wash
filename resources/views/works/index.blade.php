@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Все работы <a href="/works/create" class="btn btn-warning">Добавить</a></div>

                <div class="panel-body">
                  
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>Тип</th>
                          <th>Исполнитель</th>
                          <th>Баллы</th>
                          <th>Создал</th>
                          <th>Действие</th>
                        </tr>
                    </thead>
                 
                     <tbody>
                           @foreach ($works as $work)
                        <tr>
                          <td>{{$work->type->name}}</td>
                          <td>{{$work->executor->name}}</td>
                          <td>{{$work->points}}</td>
                          <td>{{$work->user->name}}</td>
                          <td>
                               <a class="btn btn-info" href="/works/edit/{{ $work->id }}">Редактирование</a>
                               <a class="btn btn-danger" href="#" id="deleteBtn">Удалить</a>
                    
                                <form id="destroy-form" action="/works/{{ $work->id }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>      
                            
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                    </table>
                   
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