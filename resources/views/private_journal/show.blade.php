@extends('layouts.main')
@section('content')
<div class="container my-5">
    <div class="card card-nav-tabs">
        <h4 class="card-header card-header-info text-center">Private Journal</h4>
        <div class="card-body">
            <h4 class="card-title text-center">Client Name : {{$pjournal->clientDetails->name}}</h4>
            <h4 class="card-title text-center">Key Note : {{$pjournal->key_note}} </h4>
            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
            {{-- <a href="#0" class="btn btn-primary">Go somewhere</a> --}}
        </div>
    </div>
</div>
@endsection