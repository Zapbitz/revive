@extends('layouts.main')
@section('content')
<div class="container">

    <form method="POST" action="/prescription" class="bg-white p-3">
        @csrf
          <div class="container mx-auto">
            <h2 class="text-center text-info ">Revive</h2>
            {{-- <small class="text-center">Online Consulting Support Software</small> --}}
          </div>
        <div class="container">
          <h4 class="pull-left"><b>Patient Name : {{ $client->name }}</b></h4>
            <input type="hidden" name="client_id" value="{{ $client->id }}">
          <h4 class="pull-right"><b>Patient Age : {{ $client->age }}</b></h4>
          <br>
          <br>
          <h4><b>Date: {{date("d/m/Y")}}</b></h4>
        </div>
        <hr>
        <div class="form-group">
          <label for="diseasesName">Diseases Name</label>
          <input type="text" class="form-control" id="diseasesName" name="diseases_name" placeholder="Hypochondriasis,Neurosis,etc..." required>
        </div>
        <div id="medicine-details">
          <div class="form-group">
            <label for="medicineName">Medicine Name</label>
            <input type="text" class="form-control" id="medicineName" name="medicine_name[]" placeholder="Please enter medicine name" required>
          </div>
          <div class="form-group">
            <label for="medicineType">medicine Type</label>
            <select class="form-control selectpicker" data-style="btn btn-link" id="medicineType" name="medicine_type[]" required>
              <option value="tablet">Tablet</option>
              <option value="syrup">Syrup</option>
            </select>
          </div>
          <div class="form-group">
            <label for="medicineTime">Medicine Dose</label>
            <input type="text" class="form-control" id="medicineTime" name="medicine_dose[]" placeholder="1/2,1/2,1/2" required>
            <small class="form-text text-muted">please follow comma separated formate and if it is <i>Syrup add ml like <b>(example 1/2 ml,1/2 ml, 1/2 ml)</b></i>.</small>
          </div>
      </div>
        <button type="button" class="mx-auto btn btn-success" id="medicineAdd"><i class="fa fa-add"></i>Add New Medicine</button>
        <button type="submit" class="btn btn-info btn-block">Send Prescription</button>
    </form>
</div>


<script>
    $(document).ready(function(){
      var addDiv =  '<span class="badge badge-success">Add New Medicine</span><div class="form-group">'+
          '<label for="medicineName">Medicine Name</label>'+
          '<input type="text" class="form-control" id="medicineName" name="medicine_name[]" placeholder="Please enter medicine name" required>'+
          '</div>'+
              '<div class="form-group">'+
                '<label for="medicineType">medicine Type</label>'+
                '<select class="form-control selectpicker" data-style="btn btn-link" id="medicineType" name="medicine_type[]" required>'+
                  '<option value="tablet">Tablet</option>'+
                  '<option value="syrup">Syrup</option>'+
                '</select>'+
              '</div>'+
              '<div class="form-group">'+
                '<label for="medicineTime">Medicine Times And Frequency</label>'+
                '<input type="text" class="form-control" id="medicineTime" name="medicine_dose[]" placeholder="1/2,1/2,1/2" required>'+
                '<small class="form-text text-muted">please follow comma separated formate and if it is <i>Syrup add ml like <b>(example 1/2 ml,1/2 ml, 1/2 ml)</b></i>.</small>'+
              '</div>';                  
      $("#medicineAdd").click(function(){
        // console.log(addDiv);
        $("#medicine-details").append(addDiv);
      });
    });
    </script>


@endsection