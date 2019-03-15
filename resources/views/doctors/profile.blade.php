@extends('layouts.admin')

@section('content')
<div class="wrapper ">
    <div class="sidebar" data-color="azure" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
       <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&rounded=true&font-size=.5&size=128" alt="Name" style="margin-left:4rem !important;">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/doctor">
              <i class="material-icons">person</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item ">
             <a class="nav-link" href="/doctor/{{Auth::user()->id}}/edit">
                <i class="material-icons">edit</i>
                <p>Edit Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="material-icons">logout</i>
                <p>Logout</p>
                 </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      {{-- Profile template --}}
       <div class="container mt-5">
          <h2 class="text-center">Appoinment list</h2>
           <div class="row">
             @include('booking.booking-table')
             {{-- <div class="container">
              <table class="table">
                <thead class="bg-info text-white">
                  <tr>
                    <th>Booking ID</th>
                    <th>Client Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="bg-white">
                  @foreach ($bookings as $booking)
                  <tr>
                    <td>{{$booking->id}}</td>
                    <td>{{$booking->user_details->name}}</td>
                    <td>{{$booking->date}}</td>
                    <td>{{$booking->time}}</td>
                    @if(!$booking->isAccept)
                    <td>
                        <form action="/booking/accept/{{$booking->id}}">
                         <button type="submit" class="btn btn-success btn-sm">Accept</button>
                       </form>   
                    </td> 
                    @else
                    <td>
                        <span class="badge badge-success">Approved</span>
                    </td>
                    @endif
                   
                  </tr>
                  @endforeach

                </tbody>
              </table>  
            </div> --}}
           </div>
       </div>
    </div>
  </div>
  
@endsection