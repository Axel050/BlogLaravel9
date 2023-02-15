<x-app-layout>
   
  <div class="max-w-5xl lg:max-w-6xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
  
      <h1 class="text-center text-3xl uppercase font-bold my-4 ">Etiqueta : {{$tag->name}}</h1>
            @foreach ($posts as $post)
                <x-card-post :post="$post"/>
            @endforeach
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>