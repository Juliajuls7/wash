@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Рейтинг</div>
                <div class="panel-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Имя</th>
                          <th>Баллы</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($rating as $rate)
                             <tr>
                                 <td>{{ $rate['name'] }}</td>
                                 <td>{{ $rate['points'] }}</td>
                             </tr>
                         @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Последние работы</div>
                <div class="panel-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Выполнил</th>
                          <th>Работа</th>
                          <th>Баллы</th>
                          <th>Дата</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($works as $work)
                        <tr>
                          <td>{{ $work->executor->name }}</td>
                          <td>{{ $work->type->name }}</td>
                          <td>{{ $work->points }}</td>
                          <td>{{ \Carbon\Carbon::parse($work->created_at)->format('d.m.Y h:m:s') }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $works->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
