@extends('layouts.admin')

@section('content')
<div class="wrapper ">
    
      @include('inc.doctor-nav')
      {{-- <div class="sidebar-wrapper">
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
    </div> --}}
    <div class="main-panel">
      {{-- Profile template --}}
       <div class="container mt-5">
        <form class="bg-white p-5" method="POST" action="/doctor/{{$doctor->id}}">
            <h2 class="text-center">UPDATE PROFILE</h2>
            @csrf
            @method('PATCH')
            <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1"  name="name" placeholder="Enter Name" value="{{ $doctor->name }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $doctor->email }}">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="{{ $doctor->password }}">
                    </div>
                   
                    <div class="form-group">
                      <label for="docCat">Martial Status</label>
                     
                      <select class="form-control selectpicker" data-style="btn btn-link" id="docCat" name="doc_cat">
                            <option value="{{$doctor->doctorTypes->id}}">{{$doctor->doctorTypes->name}}</option>
                            @foreach ($doctor_cats as $doctor_cat)
                                @if($doctor->doctorTypes->name !== $doctor_cat->name)
                                    <option value="{{$doctor_cat->id}}">{{$doctor_cat->name}}</option>
                                @endif 
                            @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="fee">Consult Fee</label>
                      <input type="number" class="form-control" id="fee"  name="fee"  value="{{ $doctor->con_fee }}">
                    </div>

                    <button type="submit" class="btn btn-info btn-block">Update</button>
                    {{-- <button type="reset" class="btn btn-danger">Clear</button> --}}
            </form>
       </div>
    </div>
  </div>
  
@endsection
