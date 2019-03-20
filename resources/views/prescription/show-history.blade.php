@extends('layouts.main')
@section('content')
    <div class="container">
            <div class="card card-nav-tabs text-center my-5">
                    <div class="card-header card-header-info">
                      Medical History Details
                    </div>
                    <div class="card-body">
                      <h3 class="card-title"><b>Doctor Name:</b> {{$prescription->doctorDetails->name}}</h3>
                      <h3 class="card-title"><b>Pacient Name:</b> {{$prescription->clientDetails->name}}</h3>
                      <h3 class="card-title"><b>Disease Name:</b> {{$prescription->diseaseDetails->name}}</h3>
                      <h3 class="card-title"><b>Date:</b> {{$prescription->date}}</h3>
                        <hr>
                      <h3 class="card-title"><b>Treatment Details</b></h3>
                      <hr>
                       @foreach ($prescription->medicineDetails as $medicine)
                       <div class="card card-nav-tabs p-2" >
                            {{-- <div class="card-header card-header-info">
                             Medicine Name : {{$medicine->medicine_name}}
                            </div>  --}}
                            <h4 class="card-title"><b>Medicine Name :</b> {{$medicine->medicine_name}} </h4>
                            <h4 class="card-title"><b>Medicine Type :</b> {{$medicine->medicine_type}} </h4>
                            <h4 class="card-title"><b>Medicine Dose:</b> {{$medicine->dose}} </h4>
                          </div>
                       @endforeach 
                    </div>
            </div>
    </div>
@endsection