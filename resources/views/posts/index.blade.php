<x-app-layout>

<div class="mx-auto  w-full px-8 sm:px-6  bg-red-500 py-8">


  <div class="w-4/5  grid  grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($posts as $post)

     <article class="w-full h-80 bg-cover bg-center rounded-md shadow-ls" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2016/07/22/14/12/bike-1534902_640.jpg @endif)">
     {{-- <article class="w-full h-80 bg-cover bg-center rounded-md shadow-ls @if($loop->first)md:col-span-2  @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2016/07/22/14/12/bike-1534902_640.jpg @endif)"> --}}
      
      {{-- <h2 class="bg-red-100">{{$post->image->url}} :::::: {{Storage::url($post->image->url)}}</h2> --}}
      <div class="w-full h-full px-8 flex flex-col justify-center">
          {{-- tagsss --}}
      <div>
        @foreach ($post->tags as $tag)
        {{-- <a href="" class="inline-block px-3 h-6   bg-purple-600 text-white rounded-full m-1">{{$tag->name}}</a> --}}
        <a href="{{route("posts.tag", $tag)}}" class="inline-block px-3 h-6   bg-{{$tag->color}}-600 text-white rounded-full m-1">{{$tag->name}}</a>
        @endforeach
      </div>
      {{-- Title --}}
      <h1 class= "text-4xl text-white leading-9 font-bold ">
        <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>
      </div>      
    </article> 
  
    @endforeach
</div>

 <div class="mt-4">{{$posts->links( )}}</div>

</div> 
</x-app-layout>