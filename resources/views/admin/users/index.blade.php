@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="alert alert-success" role="alert">
    Welcome to admin users
    </div>

    <table class="table">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($models as $model)
          <tr>
            <td>{{ $model->id }}</td>
            <td>{{ $model->name }}<br>{{ $model->email }}</td>

            <td>{{ $model->created_at }}<br>
                {{ $model->updated_at }}</td>

        </tr>
          @endforeach
        </tbody>
      </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop