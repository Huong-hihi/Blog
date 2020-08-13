@extends('layouts.master')
@section('head.title')
    Tieu de cua bai viet:
@endsection
@section('body.content')
<a href="{{route('articles.index')}}" class="btn btn-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back </a>
                 <div class="card">
                       <div class="row">
                        <div class="col-md-2">
                            <div class="card-header"> <img class="card-img-bottom"src="https://dotobjyajpegd.cloudfront.net/photo/5d3a66f962710e25dc99ffa3" width="200px" height="100px">
                              </div>
                        </div>
                       <div class="col-md-8">
                       <div class="card-title"> <p><b>Tiêu đề :</b> {{$articles->title}}</p></div>
                        <div class="card-text jumbotron-fluid"><p><b>Nội dung:</b>{{$articles->content}} </p>
                        <img src="{{$articles->img}} ">
                       </div>
                       <a href="{{route('articles.edit',$articles->id)}}" class="btn btn-success">Edit </a>
                       <a href="{{route('articles.delete',$articles->id)}}" class="btn btn-warning">Delete </a>
                       </div>
                       </div>
                </div> 
 @endsection          
           