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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Escritorio</h1>                        
                    </div>
                    <div class="panel-body">
                        <p>Bienvenido usuario {{ auth()->user()->usuario }}</p>
                        <form action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            <button class="btn btn-primary pull-right btn-block">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection