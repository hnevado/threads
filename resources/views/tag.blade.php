@extends('app')

@section('title',$tag->name)
@section('description','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque illum repellat sit expedita distinctio earum possimus, praesentium fugit quidem voluptatum vero iste voluptates esse doloribus ratione, nobis nisi sequi inventore?')

@section('content')

    @foreach($threads as $thread)
      @include('_item')
    @endforeach

    <div class="mb-12">
      {{$threads->links()}}
    </div>
    
@endsection