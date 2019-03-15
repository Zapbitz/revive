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
            <a class="nav-link" href="/client">
              <i class="material-icons">person</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item ">
             <a class="nav-link" href="/client/{{Auth::user()->id}}/edit">
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

           <div class="row">
              <div class="col-md-12">
                  <div class="card card-nav-tabs">
                      <h4 class="card-header card-header-warning">APPOINMENT</h4>
                      <div class="card-body">
                        <h4 class="card-title">BOOK YOUR APPOINMENT</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#0" class="btn btn-warning">Book Now</a>
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
               <div class="col-md-12">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-success">VIDEO CALL</h4>
                    <div class="card-body">
                      <h4 class="card-title">VIDEO CHAT WITH  DOCTOR</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#0" class="btn btn-success">Chat Now</a>
                    </div>
                  </div>
               </div>
               
           </div>
       </div>
    </div>
  </div>
  
@endsection
