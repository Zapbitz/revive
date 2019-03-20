@extends('layouts.main')

@section('content')
<div class="container">
        <div class="card mb-3">
                <img class="card-img-top" src="{{ asset('blogimages/'.$blog->image) }}" alt="Card image cap">                
                <div class="card-body">
                  <h4 class="card-title">{{$blog->title}}</h4>
                    <p class="card-text">{!!html_entity_decode($blog->article)!!}</p>
                    <p class="card-text"><b></b></p>
                    <p class="card-text"><small class="text-muted">{{$blog->updated_at}}</small></p>
                </div>
        </div>
    </div>
</div>
@endsection