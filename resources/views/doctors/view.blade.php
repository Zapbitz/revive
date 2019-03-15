@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ( $doctors as $doctor )

            <div class="col-md-4">

                    <div class="card text-center" style="width: 20rem;">
                            <div class="card-body">
                              <img src="https://ui-avatars.com/api/?name={{$doctor->name}}&rounded=true&font-size=.5&size=100" alt="Name" >
                              <h4 class="card-title" style="text-transform: uppercase;">{{$doctor->name}}</h4>
                              <p class="card-text"><b>Consulting Day</b> {{$doctor->consult->day}} </p>
                              <p class="card-text"><b>Consulting Time</b> {{ $doctor->consult->start_time .' to '.$doctor->consult->end_time  }} </p>
                            <a href="/booking/{{$doctor->id}}" class="btn btn-warning ">Book Now</a>
                            {{-- <a href="/booking/{{$doctor->id}}" class="btn btn-success ">Chat Now</a> --}}
                            </div>
                    </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection