@extends('adminlte::page')

@section('title', 'titulo prueba')

@section('content_header')
<a href="{{route("admin.posts.create")}}" class="btn btn-success btn-sm float-right">Crear nuevo post</a>
    <h1>Listado de posts</h1>
@stop

@section('content')
      @if (session("info"))
      <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
      </div>
      @endif

@livewire("admin.posts-index")
@stop
