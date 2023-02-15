@extends('adminlte::page')

@section('title', 'titulo prueba')

@section('content_header')
    @can('admin.categories.create')
    <a href="{{route("admin.categories.create")}}" class="btn btn-success float-right">Agregar nueva categoria</a>
    @endcan
    <h1>Listas de Categorias</h1>
@stop


@section('content')
@if (session("info"))
<div class="alert alert-success"><strong>{{session("info")}}</strong></div>
    
@endif
<div class="card">



  <div class="card-body">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->name}}</td>
          <td width="10px">
            @can('admin.categories.edit')                
            <a href="{{route("admin.categories.edit", $category)}}" class="btn btn-sm btn-primary">Editar</a>
            @endcan
          </td>
          <td width="10px">
            @can('admin.categories.destroy')
            <form action="{{route("admin.categories.destroy", $category)}}" method="post">
              @csrf
              @method("delete")
              
              <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
            @endcan
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
      
  </div>
</div>
    
@stop

