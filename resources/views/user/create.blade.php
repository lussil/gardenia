@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')

<div class="container col-8">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

            {{ Form::open(array('url' => '/user/create')) }}
            <div class="row">
                <div class="col-6">
                    {{ Form::label('name', 'Nome') }}
                    {{ Form::text('name', null , ['class' => 'form-control'] )}}
                </div>
                <div class="col-6">
                    {{ Form::label('email', 'E-mail') }}
                    {{ Form::text('email', null , ['class' => 'form-control'] ) }}
                </div>
                <div class="col-6">
                    {{ Form::label('perfil', 'Perfil' , ['class' => 'form-select ']) }} 
                    {{ Form::select('perfil', ['1' => 'Administrador', '2' => 'Ajudante'],null, array('class' => 'form-control ')) }} 
                </div>
                <div class="col-6">
                    {{ Form::label('password', 'senha') }}
                    {{ Form::password('password', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-6">
                    {{ Form::label('password', 'confirmar senha') }}
                    {{ Form::password('confirm-password', null, array('class' => 'form-control ')) }}
                </div>
            </div>
            {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success ']) }}

        
        
            {{ Form::close()  }}



        </div>

        




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


