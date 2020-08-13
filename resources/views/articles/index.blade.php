@extends('layouts.master')
@section('head.title')
    Danh sach cac bai viet:
@endsection
@section('body.content')
             @foreach ($articles as $item)
                    <div class="card">
                       <div class="row">
                        <div class="col-md-2">
                            <div class="card-header"> <img class="card-img-bottom"src="https://dotobjyajpegd.cloudfront.net/photo/5d3a66f962710e25dc99ffa3" width="200px" height="100px">
                              </div>
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