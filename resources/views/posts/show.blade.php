<x-app-layout>
  <div class="container py-8">
    <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
    <div class="text-lg text-gray-500">
      {!!$post->extract!!}
    </div>
     <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      {{-- Contenido princial --}}
      <div class="lg:col-span-2">
        <figure>
          <img src="@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2016/07/22/14/12/bike-1534902_640.jpg @endif" class="w-full h-80 object-cover object-center">
        </figure>
        <div class="text-base text-gray-500 mt-4">{!!$post->body!!}</div>
      </div>
       {{-- Contenido relacionado --}}
      <aside>
        <h1 class="text-2xl font-bold text-gray-600 mb-4 ">Más en {{$post->category->name}}</h1>
        <ul>
            @foreach ($similares as $similar)
                <li class="mb-4 border">
                  <a href="{{route("posts.show", $similar)}}" class="flex">
                    <img class="w-1/3 h-auto   object-cover object-center" src="@if($similar->image) {{Storage::url($similar->image->url)}} @else https://cdn.pixabay.com/photo/2016/07/22/14/12/bike-1534902_640.jpg @endif" >
                    <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                  </a>
                  
                  </li>
            @endforeach
            </ul>
        
      </aside>
     </div>
  </div>
</x-app-layout>