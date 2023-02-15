<div class="form-group">
          {!! Form::label("name", "Nombre :", []) !!}
          {!! Form::text("name", null, ["class" => "form-control", "placeholder" => "Ingrese el nombre del post"]) !!}
          @error('name')
          <small class="text-danger">
            {{$message}}
          </small>
          @enderror
        </div>

        <div class="form-group">
          {!! Form::label("slug", "Slug :", []) !!}
          {!! Form::text("slug", null, ["class"=>"form-control", "placeholder" => "slug", "readonly"]) !!}
          @error('slug')
          <small class="text-danger">
            {{$message}}
          </small>
          @enderror
        </div>

        <div class="form-group">
          {!! Form::label("category_id" , "Categoría :", []) !!}
          {!! Form::select("category_id", $categories, null, ["class" => "form-control"]) !!}
          @error('category_id')
          <small class="text-danger">
            {{$message}}
          </small>
          @enderror

        </div>

        <div class="form-group">
          <p class="font-weight-bold">Etiquetas :</p>
          @foreach ($tags as $tag)
          <label class="mr-4">

            {!! Form::checkbox("tags[]", $tag->id, null) !!}
            {{$tag->name}}
          </label>
              
          @endforeach
          @error('tags')
          <br>
          <small class="text-danger">
            {{$message}}
          </small>
          @enderror
        </div>

        <div class="form-group">
          <p class="font-weight-bold">Estado :</p>
          <label class="mr-4">
            {!! Form::radio("status", 1, true, []) !!}
            Borrador
          </label>
          <label>
            {!! Form::radio("status", 2, false, []) !!}
            Publicado
          </label>
          @error('status')
          <br>
          <small class="text-danger">
            {{$message}}
          </small>
          @enderror
        </div>


<div class="row mb-3">

  <div class="col">
      <div class="image-wrapper">
        @isset ($post ->image)
        <img src="{{Storage::url($post->image->url)}}" id="picture">
        @else 
        <img src="https://cdn.pixabay.com/photo/2016/07/22/14/12/bike-1534902_640.jpg" id="picture">
        @endisset
        
      </div>
  </div>

  <div class="col">
      <div class="form-group">
        {!! Form::label("file", "Imagen para el post :", []) !!}
        {!! Form::file("file", ["class" => "form-control-file", "accept" => "image/*"]) !!}
        @error('file')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
          
      <p>Especificaciones para la imagen</p>
    </div>
  
</div>

        <div class="form-group">
          {!! Form::label("extract", "Extracto :", []) !!}
          {!! Form::textarea("extract", null, ["class" => "form-control"]) !!}
          @error('extract')
          <small class="text-danger">
            {{$message}}
          </small>
          @enderror
        </div>

        <div class="form-group">
          {!! Form::label("body", "Cuerpo del post :", []) !!}
          {!! Form::textarea("body", null, ["class" => "form-control"]) !!}
          @error('body')
          <small class="text-danger">
            {{$message}}
          </small>
          @enderror
        </div>