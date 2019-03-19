@extends('layouts.main')
@section('content')
<div class="container">
        <table class="table">
          <thead class="bg-info text-white">
            <tr>
              <th>Prescription ID</th>
              @role('admin')
                <th>Doctor Name</th>
                <th>Patient Name</th>
              @endrole
              @role('client')
                <th>Doctor Name</th>
              @else
                <th>Patient Name</th>
              @endrole
              <th>Disease</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach($prescriptions as $prescription)
            <tr>
              <td>{{$prescription->id}}</td>
              @role('admin')
                <td>{{ $prescription->DoctorDetails->name }}</td>
                <td>{{ $prescription->clientDetails->name }}</td>
              @endrole
              @role('client')
                <td>{{ $prescription->DoctorDetails->name }}</td>
              @else
                <td>{{ $prescription->clientDetails->name }}</td>
              @endrole
              <td>{{ $prescription->diseaseDetails->name }}</td>
              <td>{{$prescription->date}}</td>
              <td>
                <a href="/prescriptions/pdf/{{$prescription->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View PDF</a> 
                {{-- <a href="/prescriptions/{{$prescription->id}}" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Download</a>  --}}
              </td> 
            </tr>
            @endforeach
    
          </tbody>
        </table>  
      </div>
      @endsection