@extends('movies.layout.master')

@section('content')
  <h1 class="page-header">{{$movie->movie_title}}</h1>
  <h5>人物</h5>
  <ul>
    @foreach ($movie->people as $person)
        <li>{{$person->people_name}} - {{$person->pivot->job}}</li>
    @endforeach
  </ul>
  <h5>评论</h5>
  <ul>
    @foreach ($movie->reviews as $review)
        <li>{{$review->review_content}}</li>
    @endforeach
  </ul>
  <h2 class="page-header">评论</h2>
  <form action="{{'/movie/'.$movie->movie_id.'/reviews'}}"  method="POST" class="form-horizontal">


    <div class="form-group">
    <label class="col-sm-2 control-label">评分</label>
     <div class="col-sm-10">
     <input type="text" name="review_rate" class="col-sm-2 form-control" value="">
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">评论内容</label>
     <div class="col-sm-10">
     <textarea name="review_content" class="col-sm-2 form-control" rows="3" value=""></textarea>
    </div>
  </div>
  

    <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
     <input type="submit" class="btn btn-default" value="发表评论">
    </div>
  </div>

  </form>
@stop
