@extends('layouts.main')
@section('content')
<div class="container bg-white shadow p-2">
    <h2 class="text-center">Medical History</h2>
    <table class="table table-hover table-striped">
        <thead class="bg-info text-white">
            <tr>
                @role('doctor')
                <th>Patient Name</th>
                @endrole
                @role('admin')
                <th>Patient Name</th>
                <th>Doctor Name</th>
                @endrole
                @role('client')
                <th>Doctor Name</th>
                @endrole
                <th>Disease Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prescriptions as $prescription)
            <tr>
                    @role('doctor')
                    <td>{{$prescription->clientDetails->name}}</td>
                    @endrole
                    @role('admin')
                    <td>{{$prescription->clientDetails->name}}</td>
                    <td>{{$prescription->doctorDetails->name}}</td>
                    @endrole
                    @role('client')
                    <td>{{$prescription->doctorDetails->name}}</td>
                    @endrole
                    <td>{{$prescription->diseaseDetails->name}}</td>
                    <td>{{$prescription->date}}</td>
                    <td>
                        <a href="/history/{{$prescription->id}}" class="btn btn-sm btn-info">View</a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
</div>
@endsection