@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добавление работы</div>

                <div class="panel-body">
                    <form action="/works" method="post">
                        <div class="form-group">
                            <label for="type">Тип</label>
                           <select class="form-control" id="type" name = "type">
                             @foreach($types as $type)
                                 <option value="{{$type->id}}">{{$type->name}}</option>
                             @endforeach
                            </select>
                            
                        </div>
                        
                        <div class="form-group">
                        <label for="user">Исполнитель</label>
                            <select class="form-control" id="user" name="executor">
                              @foreach($users as $user)
                              <option value="{{$user->id}}">{{$user->name}}</option>
                              @endforeach
                            </select>
                        </div>
                        
                          <div class="form-group">
                        <label for="points">Баллы</label>
                            <select class="form-control" id="points" name="points">
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>
                             <option value="6">6</option>
                             <option value="7">7</option>
                             <option value="8">8</option>
                             <option value="9">9</option>
                             <option value="10">10</option>
                            </select>
                        </div>
                        {{ csrf_field() }}
                        
                        
                        
                        <button class="btn btn-default" type="submit">Создать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop