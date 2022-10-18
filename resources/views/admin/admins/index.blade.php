@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>관리자 어카운트 관리화면</h1>
@stop

@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
    @php
        Session::forget('success');
    @endphp
</div>

@endif


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">관리자 리스트</h3>
                <div class=" float-right">
                    <div class="btn-group">
                        <a class="btn btn-primary btn-sm" style="color:white" href="{{ route('admin.admins.create') }}"><i class="fas fa-plus"></i> Create</a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>이름</th>
                        <th>email</th>
                        <th>관리자 타입</th>
                        <th>등록일</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($models as $model)
                    <tr>
                        <td>{{ $model->id }}</td>
                        <td>{{ $model->name }}</td>
                        <td>{{ $model->email }}</td>
                        <td>{{ config('app_admin.admin_types')[$model->type] }}</td>
                        <td>{{ $model->created_at }}</td>
                        <td>
                            <a class="btn btn-success btn-sm " style="color:white" href="{{ route('admin.admins.edit', ['admin' => $model]) }}"><i class="fas fa-pencil-alt"></i> 수정</a>
                            <a class="btn btn-primary btn-sm " style="color:white" href="{{ route('admin.admins.show' , ['admin'=>$model])}}"><i class="fas fa-eye"></i> 보기</a>
                            <button type="button" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modal-delete-{{ $model->id }}">삭제</button>
                        </td>
                        @include('admin.admins.__delete_modal')
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $models->links('pagination::bootstrap-4') }}
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
@stop

@section('footer')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop
