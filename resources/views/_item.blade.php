<div class="rounded shadow mb-4 w-5/12 hover:bg-gray-200 p-4 inline-block m-4 ml-0 mr-12">

        <h2 class="text-2-xl mb-4">{{$thread->title}}</h2>
        
        <div class="text-xs text-gray-600 items-center justify-between">
         <a href="{{route('page.category',$thread->category->slug)}}" class="flex items-center uppercase">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
            </svg>

            {{$thread->category->name}}
         </a>

         <div class="mt-4">
            @foreach ($thread->tags as $tag)
             <a href="{{route('page.tag',$tag->slug)}}" class="text-black capitalize m-r-4">

                <span class="text-bold">#</span>{{$tag->name}}
             </a>
            @endforeach
         </div>
        </div>

        <div class="mt-4">
            <span class="text-xs font-bold">
                Autor: {{$thread->user->name}}
            </span>

        </div>

        <div class="mt-2">

            <span class="text-xs">
              {{$thread->comments->count()}} comentarios
            </span>

        </div>

        <div class="mt-2 text-right">

            <a class="text-indigo-600 mr-2" href="#">
              Ver &rarr;
            </a>

        </div>

    </div>