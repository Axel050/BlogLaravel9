@extends('adminlte::page')

@section('title', 'titulo prueba')

@section('content_header')
    <h1>Editar post</h1>

@stop

@section('content')

@if (session("info"))
<div class="alert alert-success"><strong>{{session("info")}}</strong></div>
    
@endif

    <div class="card">
      <div class="card-body">
        {!! Form::model($post,["route" => ["admin.posts.update", $post], "autocomplete" => "off", 'files' => true, "method" => "put"]) !!}

      @include("admin.posts.partials.form") ;

        {!! Form::submit("Actualizar post", ["class" => "btn btn-primary "]) !!}

        {!! Form::close() !!}
      </div>
    </div>
    
@stop

@section('js')

      <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script> 
     <script src="{{asset("vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js")}}"></script>
     <script>
      $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});

    ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

        // change image
        document.getElementById("file").addEventListener("change", cambiarImagen);

        function cambiarImagen(e) {
          var file =e.target.files[0];

          var reader = new FileReader();
          reader.onload=(e) => {
            document.getElementById("picture").setAttribute("src", e.target.result);
          }
          reader.readAsDataURL(file);
          
        }
     </script>

     
@endsection


@section('css')
    <style>
      .image-wrapper{
        position: relative;
        padding-bottom: 56.25%;
      }

      .image-wrapper img{
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
      }
    </style>