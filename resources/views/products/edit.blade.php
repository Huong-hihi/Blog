@extends('layouts.edit')
@section('head.title')
  Chỉnh sửa nội dung bài viết
@endsection
@section('body.content')
     <div class="container">
         <h3> Cập nhật bài viết</h3>
     <form action="{{route('articles.update',$article->id)}}" class="was-validated" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}">
     <div class="container col-md-8" style="background :grey; width: 500px;">
        <div class="form-group">
            <label for='title'>Tiêu đề bài viết :</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$article->title}}">
            <div class="valid-feedback">Hợp lệ :v</div>
            <div class="invalid-feedback">bạn chưa nhập Tiêu đề</div>
        </div>
        <div class="form-group">
            <label for='content'>Nội dung bài viết :</label>
            <input type="text" class="form-control" id="content"  name="content" value="{{$article->content}}">
            <div class="valid-feedback">Hợp lệ :v</div>
            <div class="invalid-feedback">bạn chưa nhập Nội dung</div>
        </div>
        <div class=" btn-sm col-sm-2">
            <button type="submit" class="btn-outline-success" >Update</button>
        </div>
    </div>
         </form>
    </div>       

@endsection