@extends('layouts.admin')

@section('content')
<div class="wrapper ">
    <div class="sidebar" data-color="azure" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
       <img src="https://ui-avatars.com/api/?name=Admin&rounded=true&font-size=.5&size=128" alt="Name" style="margin-left:4rem !important;">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="/admin-panel">
              <i class="material-icons">folder</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="/admin-panel/doctor">
                  <i class="material-icons">persons</i>
                  <p>Doctor</p>
                </a>
              </li>
              <li class="nav-item active ">
                <a class="nav-link" href="/admin-panel/report">
                  <i class="material-icons">R</i>
                  <p>Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin-panel/blog">
                  <i class="material-icons">B</i>
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin-panel/client">
                  <i class="material-icons">H</i>
                  <p>History Of Clients</p>
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
          <h2 class="text-center">Reports</h2>
           <div class="row">
                <div class="col-md-6">
                    <div class="card card-nav-tabs text-center">
                        <div class="card-header card-header-info">
                            Booking Report
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Select a Doctor</h4>
                            <div class="form-group">
                                    <select class="form-control selectpicker" data-style="btn btn-link" id="doctor">
                                     @foreach ($doctors as $doctor)
                                        <option value="">{{$doctor->name}}</option>
                                     @endforeach
                                    </select>
                                  </div>
                            <p class="card-text">All Booking details of a particular doctor of this month will be generated</p>
                            <a href="#0" class="btn btn-success"><i class="fa fa-download"></i> Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-info">
                                Booking Report
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Select a Client</h4>
                                <div class="form-group">
                                        <select class="form-control selectpicker" data-style="btn btn-link" id="doctor">
                                         @foreach ($clients as $client)
                                            <option value="">{{$client->name}}</option>
                                         @endforeach
                                        </select>
                                      </div>
                                <p class="card-text">All Booking details of a particular patient of this month will be generated</p>
                                <a href="#0" class="btn btn-success"><i class="fa fa-download"></i> Download</a>
                            </div>
                        </div>
                    </div>
           </div>
       </div>
    </div>
  </div>
  
@endsection