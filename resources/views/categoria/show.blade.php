@extends('adminlte::page')

@section('title', 'Gardenia - detalhes da categoria')

@section('content_header')
    <h1 style="text-align: center;">Categorias</h1>
@stop

@section('content')
<div class="container col-8">
	<p>ID:                  {{ $categoria->id }}</p>
    <p>Nome:                {{ $categoria->nome }}</p>
   
    <p>Criação:             {{ Carbon\Carbon::parse($categoria->created_at)->format('d/m/Y H:i') }}</p>
    <p>Última modificação:  {{ Carbon\Carbon::parse($categoria->updated_at)->format('d/m/Y H:i') }}</p>
   
    <a class="btn btn-primary btn-lg" href="{{URL::to('categoria/')}}">Voltar</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
