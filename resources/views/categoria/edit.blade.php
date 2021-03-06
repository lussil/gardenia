@extends('adminlte::page')

@section('title', 'Gardenia - Editar categoria')

@section('content_header')
    <h1 style="text-align: center;">Categorias</h1>
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

    {{ Form::model($categoria,array('route' => array('categoria.update', $categoria->id), 'method' => 'PUT')) }}

    {{ Form::label('nome', 'Nome do categorias') }}
    {{ Form::text('nome', $categoria->nome , ['class' => 'form-control'] )}}
    
   
    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2 ']) }}
    <a class="btn btn-primary " href="{{URL::to('categoria/')}}">Voltar</a>
    {{ Form::close()  }}
   
 

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
