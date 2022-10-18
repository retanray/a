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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">관리자 어카운트 상세정보</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="name">이름</label>
                    <div class="form-control border-0" >{{ $model->name }}</div>
                </div>
                <div class="form-group">
                    <label for="name">email</label>
                    <div class="form-control border-0" >{{ $model->email }}</div>
                </div>
                <div class="form-group">
                    <label for="name">Type</label>
                    <div class="form-control border-0 " style="background-color:gray" >{{ config('app_admin.admin_types')[$model->type] }}</div>
                </div>
                <div class="form-group">
                    <label for="name">Updated</label>
                    <div class="form-control border-0" >{{ $model->updated_at }}</div>
                </div>
                <div class="form-group">
                    <label for="name">Registered</label>
                    <div class="form-control border-0" >{{ $model->created_at }}</div>
                </div>
            </div>
            <div class="card-footer ">
                <a class="btn btn-primary btn-sm " style="color:white" href="{{ route('admin.admins.edit', ['admin' => $model]) }}"><i class="fas fa-pencil-alt"></i> 수정</a>
                <a class="btn btn-primary btn-sm " style="color:white" href="{{ route('admin.admins.index') }}"> 리스트</a>
                <button type="button" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modal-delete-{{ $model->id }}">
                        삭제
                </button>
            </div>
            @include('admin.admins.__delete_modal')
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