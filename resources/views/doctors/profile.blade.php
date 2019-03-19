@extends('layouts.admin')

@section('content')
<div class="wrapper ">
    {{-- <div class="sidebar" data-color="azure" >
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
    </div> --}} @include('inc.doctor-nav')
    <div class="main-panel">
    <div class="container">
        <div class="card card-nav-tabs text-center mt-5">
            <div class="card-header card-header-info">
             {{$doctor->name}}
            </div>
            <div class="card-body text-left mx-auto" style="width:350px">
              <h4 class="card-title my-2"><b>Email : </b>{{$doctor->email}}</h4>
              <h4 class="card-title my-2"><b>Gender : </b>{{$doctor->gender}}</h4> 
              <h4 class="card-title my-2"><b>License No. : </b>{{$doctor->license}}</h4> 
              <h4 class="card-title my-2"><b>Fee : </b>Rs.{{$doctor->con_fee}}</h4> 
              <h4 class="card-title my-2"><b>Specialization : </b>{{$doctor->doctorTypes->name}}</h4>  
              <h4 class="card-title my-2"><b>Consulting Days : </b>{{$doctor->consult->day}}</h4> 
              <h4 class="card-title my-2"><b>Consulting Start Time : </b>{{$doctor->consult->start_time}}</h4>   
              <h4 class="card-title my-2"><b>Consulting End Time : </b>{{$doctor->consult->end_time}}</h4> 
            </div>
          </div>
    </div>
    </div>
@endsection