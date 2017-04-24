@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Редактирование работы</div>

                <div class="panel-body">
                    <form action="/works/edit/{{$work->id}}" method="post">
                        <div class="form-group">
                            <label for="type">Тип</label>
                           <select class="form-control" id="type" name = "type">
                             @foreach($types as $type)
                                 <option value="{{$type->id}}"
                                 @if($type->id == $work->type_id)
                                 selected
                                 @endif
                                 >{{$type->name}}</option>
                             @endforeach
                            </select>
                            
                        </div>
                        
                        <div class="form-group">
                        <label for="user">Исполнитель</label>
                            <select class="form-control" id="user" name="executor">
                              @foreach($users as $user)
                              <option value="{{$user->id}}"
                               @if($user->id == $work->executor_id)
                                 selected
                               @endif
                              >{{$user->name}}</option>
                              @endforeach
                            </select>
                        </div>
                        
                          <div class="form-group">
                        <label for="points">Баллы</label>
                            <select class="form-control" id="points" name="points">
                             <option value="1" @if(1 == $work->points) selected @endif>1</option>
                             <option value="2" @if(2 == $work->points) selected @endif>2</option>
                             <option value="3" @if(3 == $work->points) selected @endif>3</option>
                             <option value="4" @if(4 == $work->points) selected @endif>4</option>
                             <option value="5" @if(5 == $work->points) selected @endif>5</option>
                             <option value="6" @if(6 == $work->points) selected @endif>6</option>
                             <option value="7" @if(7 == $work->points) selected @endif>7</option>
                             <option value="8" @if(8 == $work->points) selected @endif>8</option>
                             <option value="9" @if(9 == $work->points) selected @endif>9</option>
                             <option value="10" @if(10 == $work->points) selected @endif>10</option>
                            </select>
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