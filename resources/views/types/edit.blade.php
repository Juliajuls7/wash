@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Редактирование типа</div>

                <div class="panel-body">
                    <form action="/types/edit/{{ $type->id }}" method="post">
                        <div class="form-group">
                            <label for="name">Название</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ $type->name }}">
                        </div>
                        
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        
                        <button class="btn btn-default" type="submit">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop