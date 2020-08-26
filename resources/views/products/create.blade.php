@extends('layouts.edit')
@section('head.title')
   Thêm một bài viết mới vào blog
@endsection
@section('body.content')
     <div class="container">
         <h3> Hãy Nhập Nội Dung Bài Viết Muốn Thêm!</h3>
     <form action="{{route('articles.store')}}" method="POST" class="was-validated">
     <input type="hidden" name="_token" value="{{csrf_token()}}">
     <div class="container col-md-8" style="background:grey; width: 500px;">
        @include('articles.form')
        <div class=" btn-sm col-sm-2">
            <button type="submit" class="btn-outline-success" >Create</button>
        </div>
    </div>
         </form>
    </div>       

@endsection