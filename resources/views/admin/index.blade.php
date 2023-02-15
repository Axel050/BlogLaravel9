@extends('adminlte::page')

@section('title', 'titulo prueba')

@section('content_header')
    <h1>tiitulo</h1>
@stop

@section('content')
    
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop