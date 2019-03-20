@extends('layouts.main')

@section('content')

<div class="container">
{{-- @include('flash-msg')    --}}
<!--<form class="bg-white p-5" action="/payment/booking" method="POST"> -->
<form class="bg-white p-5" action="/booking" method="POST"> 

    @csrf
    <h3 class="text-center">Booking Form</h3>
    <h4><b>Doctor Name </b> {{ $doctor->name }} </h4>
    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}" >
    <input type="hidden" name="doctor_fee" value="{{ $doctor->con_fee }}">
    <div class="form-group">
            <label class="label-control">Datetime Picker</label>
            <input type="date" class="form-control datetimepicker" name="date" />
    </div>

    <div class="form-group">
        @foreach ( $start_op_times as $start_op_time )
        <div class="form-check form-check-radio form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="time" id="exampleRadios1" value=" {{$start_op_time}} " required>
                   {{$start_op_time}}
                    <span class="circle">
                        <span class="check"></span>
                    </span>
                </label>
            </div> 
        @endforeach
       
       
        
    </div>
        
        <button type="submit" class="btn btn-primary"> Make Payment </button>
      </form>
</div>
{{-- 

<script>
$('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});
</script> --}}
@endsection