@extends('layouts.master')
@section('head.title')
    Danh sach cac bai viet:
@endsection
@section('body.content')
             @foreach ($articles as $item)
                    <div class="card">
                       <div class="row">
                        <div class="col-md-2">
                            <div class="card-img-top"><img style="width: 130px; height: 140px;" src="/storage/article_img/{{$item->img}}"></div>
                        </div>
                       <div class="col-md-8">
                       <div class="card-title"> <h5>{{$item->title}}</h5></div>
                       <div class="card-text jumbotron-fluid"><p>{{$item->content}}</p>
                       <a href="{{route('baiviet',$item->id)}}" >Read More</a></div>
                       </div>
            </div>
     </div> 
@endforeach
  <br><br>
 {!!$articles->render()!!}
@endsection