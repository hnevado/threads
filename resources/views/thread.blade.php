@extends('app')

@section('title',$thread->title)
@section('description',$thread->category->name)

@section('content')

<div class="leading-loose w-full mb-4">
    {{ $thread->body }}
</div>

<div class="flex gap-2 text-xs text-gray-600 font-bold">
     @foreach ($thread->tags as $tag)
        <a href="{{route('page.tag',$tag->slug)}}" class="text-black capitalize m-r-4">
            <span class="text-bold">#</span>{{$tag->name}}
        </a>
      @endforeach
</div>

<h2 class="text-3xl my-8"> {{$comments->count()}} comentarios</h2>


@foreach ($comments as $comment)

<div class="w-full">
  <div class="flex items-center text-bold">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
  </svg>

    {{ $comment->user->name }}

  </div>

  <div class="text-sm">
    {{$comment->body}}
  </div>

  <hr class="my-4"/>
</div>

@endforeach

@endsection