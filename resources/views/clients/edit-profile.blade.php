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
          <li class="nav-item ">
            <a class="nav-link" href="/client">
              <i class="material-icons">person</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item active">
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
        <form class="bg-white p-5" method="POST" action="/client/{{$user->id}}">
            <h2 class="text-center">UPDATE PROFILE</h2>
            @csrf
            @method('PATCH')
            <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1"  name="name" placeholder="Enter Name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user->email }}">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="{{ $user->password }}">
                    </div>
                   
                    <div class="form-group">
                      <label for="martialStatus">Martial Status</label>
                      <select class="form-control selectpicker" data-style="btn btn-link" id="martialStatus" name="martial_status">
                      <option value="{{$user->martial_status}}">{{$user->martial_status}}</option>
                      @if($user->martial_status !== "single")
                       <option value="single">single</option>
                       @endif
                      @if($user->martial_status !== "married")
                        <option value="married">married</option>
                        @endif
                        @if($user->martial_status !== "divorced")
                        <option value="divorced">divorced</option>
                        @endif
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="occupation">Occupation</label>
                      <input type="text" class="form-control" id="occupation"  name="occupation" placeholder="Enter Occupation" value="{{ $user->occupation }}">
                      </div>

                    <button type="submit" class="btn btn-info btn-block">Update</button>
                    {{-- <button type="reset" class="btn btn-danger">Clear</button> --}}
            </form>
       </div>
    </div>
  </div>
  
@endsection
