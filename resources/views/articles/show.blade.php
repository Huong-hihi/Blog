@extends('layouts.master')
@section('head.title')
    Tieu de cua bai viet:
@endsection
@section('body.content')
<a href="{{route('articles.index')}}" class="btn btn-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back </a>
                       <div class="row justify-content-xl-center">
                       <div class="card-title "> <h2>{{$articles->title}}</h2></div>
                        <div class="card-img-bottom container-fluid"><img style="width: 840px; height:500px ;" src="/storage/article_img/{{ $articles->img }}"></div>
                        <div class="card-text jumbotron-fluid"><p><b>Nội dung:</b>{{$articles->content}} </p>
                       <a href="{{route('articles.edit',$articles->id)}}" class="btn btn-success">Edit </a>
                       <a href="{{route('articles.delete',$articles->id)}}" class="btn btn-warning">Delete </a>
                       </div>
                
 @endsection          
           