<x-app-layout>
  
 <div class="mx-auto max-w-7xl mt-2 sm:px-6">


  <div class=" grid  grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($posts as $post)

     <article class="w-full h-80 bg-cover bg-center rounded-md shadow-ls @if($loop->first)md:col-span-2  @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2016/07/22/14/12/bike-1534902_640.jpg @endif)"> 
     
    
        <div class="w-full h-full px-8 flex flex-col justify-center">
      
      <div>
              @foreach ($post->tags as $tag)
                  
                  <a href="{{route("posts.tag", $tag)}}" class="inline-block px-3 h-6   text-white rounded-full m-2 border" style="background-color:{{$tag->color}}">{{$tag->name}}</a>
              @endforeach
      </div>
      
      <h1 class= "text-4xl text-white leading-9 font-bold p-3 round" style="background-color: rgba(0, 0, 0, 0.2)">
        <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>
      </div>      
    </article> 
  
    @endforeach
</div>

 <div class="mt-4">{{$posts->links( )}}</div>

</div>    
</x-app-layout>