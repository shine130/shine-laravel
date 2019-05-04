@extends('layout.master')

@section('title',$title)

@section('head')
  @parent
  <link rel="stylesheet" href="movie-page.css">
@endsection

@section('content')
  <h1>{{$title}}</h1>
  {{-- @foreach ($movie_list as $movie)
      <li>{{$movie}}</li>
  @endforeach --}}

  @each('view.li',$movie_list,'item','layout.empty')

  @if(false)
    <div class="ui violet message">
      如果是真的就显示我！
    </div>
  @elseif(false)
    <div class="ui green message">
      如果另外一件事是真的，就显示我！
    </div>
  @else
    <div class="ui red message">
      谁都不是真的，就显示我！
    </div>
  @endif
@endsection