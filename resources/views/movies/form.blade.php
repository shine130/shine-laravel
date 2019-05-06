@extends('movies.layout.master')

@section('content') 
<h1 class="page-header">{{ isset($movie)? '更新电影' : '创建电影' }}</h1>

<form action="{{isset($movie) ? '/movie/'.$movie->movie_id:'/movie'}}" method="POST" class="form-horizontal">
  @if(isset($movie))
   @method('PUT')
  @endif
   
  <div class="form-group">
    <label class="col-sm-2 control-label">电影标题</label>
     <div class="col-sm-10">
     <input name="movie_title" type="text" class="col-sm-2 form-control" value="{{isset($movie) ? $movie->movie_title:''}}">
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">电影内容</label>
     <div class="col-sm-10">
     <input name="movie_content" type="text" class="col-sm-2 form-control" value="{{isset($movie) ? $movie->movie_content:''}}">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">制作成本</label>
     <div class="col-sm-10">
     <input name="movie_budget" type="text" class="col-sm-2 form-control" value="{{isset($movie) ? $movie->movie_budget:''}}">
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">发行日期</label>
     <div class="col-sm-10">
     <input name="movie_date" type="text" class="col-sm-2 form-control" value="{{isset($movie) ? $movie->movie_date:''}}">
    </div>
  </div>

    <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
     <input type="submit" class="btn btn-default" value="{{isset($movie) ? '更新':'发布'}}">
    </div>
  </div>

</form>
@stop