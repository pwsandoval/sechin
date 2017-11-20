@extends('layout')

@section('style')
    <style>
        .vertical-center {
            min-height: 100vh; 
            display: flex;
            align-items: center;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="vertical-center">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                @if(session()->has('sesion'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>{{ session('sesion') }}</strong>
                    </div>               
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><strong>{{ $error }}</strong></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Iniciar Sesión</h1>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}" class="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Usuario</label>
                                <input class="form-control"
                                    type="text"
                                    name="usuario"
                                    value="{{ old('usuario')}}"
                                    placeholder="Ingresa tu usario">
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input class="form-control"
                                    type="password"
                                    name="password"
                                    placeholder="Ingresa tu contraseña">
                            </div>
                            <button class="btn btn-primary pull-right btn-block">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- https://www.youtube.com/watch?v=_vfIXJsqrIo --}}