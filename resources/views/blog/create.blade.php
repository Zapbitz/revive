@extends('layouts.main')

@section('content')

<div class="container">
    
<form class="bg-white p-5" action="{{url('/blogs')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3 class="text-center">Write an Article</h3>
    <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="enter the title" name="title">
    </div> 
    <div class="form-group">
            <label for="article-ckeditor">Article</label>
            <textarea class="form-control" id="article-ckeditor" rows="3" name="body"></textarea>
    </div>
    <input type="file" name="image">
    <button type="submit" class="btn btn-info btn-block">Publish</button>
</form>

</div>

@endsection