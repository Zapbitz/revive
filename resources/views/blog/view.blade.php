@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        @if(count($blogs))
        @foreach ($blogs as $blog)
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ asset('blogimages/'.$blog->image) }}" alt="Card image cap">
                <div class="card-body">
                  <h4 class="text-center card-text">{{$blog->title}}</h4>
                  <a href="/blogs/{{$blog->id}}" class="btn btn-info btn-block">Read</a>
                </div>
              </div>
        </div> 
        @endforeach
        
        @else
            <h1 class="text-center text-secondary">No Blog Publish Yet</h1>
        @endif
        
    </div>
</div>
@endsection