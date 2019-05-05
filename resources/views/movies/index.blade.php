@extends('movies.layout.master')

@section('content')
  <h1 class="page-header">电影列表</h1>
  <ul>
    @foreach ($movies as $movie)
        <li>
        {{$movie->movie_title}}
        <form action="/movie/{{$movie->movie_id}}" method="POST" class="form-horizontal">
        @method('DELETE')
        <input type="submit" class="btn btn-xs btn-default" value="删除">
        </form>
        </li>
    @endforeach
  </ul>

@stop
