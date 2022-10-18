@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>관리자 어카운트 관리화면</h1>
@stop

@section('content')
    {{-- <div class="alert alert-success" role="alert">
    Welcome to admin users
    </div> --}}

    <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title">관리자 어카운트 작성</h3>
    
            </div>

            <form method="POST" action="{{ route('admin.admins.store') }}">
                @method('POST')
                @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">이름</label>
                    <input id="name" name="name" type="text" 
                            class="@error('name') is-invalid @enderror form-control">

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">email</label>
                    <input id="email" name="email" type="text" 
                            class="@error('email') is-invalid @enderror form-control">

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">password</label>
                    <input id="password" name="password" type="password" 
                            class="@error('password') is-invalid @enderror form-control">

                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Type</label>
                    @foreach ($types as $key => $typeName)
                        <div class="form-check">
                            <input type="radio"
                            name="type"
                            value="{{ $key }}"
                            @if ($key == 'editor')
                                checked
                            @endif
                            >
                            <label for="type">{{ $typeName }}</label>
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="card-footer clearfix">
                <input id="submit" type="submit" class="btn btn-primary btn-sm" value="등록">
                <a class="btn btn-primary btn-sm " style="color:white" href="{{ route('admin.admins.index') }}">리스트</a>
            </div>
            </form>
            <!-- form end -->

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