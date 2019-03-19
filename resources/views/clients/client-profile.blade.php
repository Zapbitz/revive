@extends('layouts.admin')

@section('content')
<div class="wrapper ">
    <div class="sidebar" data-color="azure" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
     @include('inc.client-nav')
    <div class="main-panel">
      {{-- Profile template --}}
       <div class="container mt-5">

           <div class="row">
              <div class="col-md-12">
                  <div class="card card-nav-tabs">
                      <h4 class="card-header card-header-warning">APPOINMENT</h4>
                      <div class="card-body">
                        @if(count($bookings) > 0)
                          @php $date = date("Y-m-d"); @endphp 
                          @foreach ($bookings as $booking)
                            @if($booking->date >= $date)
                              @if($booking->isAccept)
                               <h4 class="card-title text-success">Your Booking is Completed </h4>
                               <p class="card-text">Your Booking ID: {{$booking->id}}</p>
                              @else
                                @if($booking->isReject)
                                  <h4 class="card-title text-danger">Your Booking is Canceled </h4>
                                  <p class="card-text">Sorry the Doctor you booked could in make the consulting on the requested date,The Amount which is deducted from you will be refunded</p>
                                  @else
                                  <h4 class="card-title text-warning">Your Booking is on Proccess </h4>
                                  <p class="card-text">We check with doctor and complete your booking shortly</p>
                                @endif
                              @endif  
                            @endif
                          @endforeach
                        @else
                        <h4 class="card-title">BOOK YOUR APPOINMENT</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="/doctors/all" class="btn btn-warning">Book Now</a>
                        @endif
                      </div>
                    </div>
                 </div>
               <div class="col-md-12">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-info">LIVE CHAT</h4>
                    <div class="card-body">
                      <h4 class="card-title">CHAT WITH DOCTOR</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="/chats" class="btn btn-info">Chat Now</a>
                    </div>
                  </div>
               </div>
               {{-- <div class="col-md-12">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-success">VIDEO CALL</h4>
                    <div class="card-body">
                      <h4 class="card-title">VIDEO CHAT WITH  DOCTOR</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#0" class="btn btn-success">Chat Now</a>
                    </div>
                  </div>
               </div> --}}
               
           </div>
       </div>
    </div>
  </div>
  
@endsection
