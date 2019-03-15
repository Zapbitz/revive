@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5">

        <form method="POST" action="/doctor">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name" required>
          </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <div class="form-check form-check-radio form-check-inline">
          <label class="form-check-label">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
              Male
              <span class="circle">
                  <span class="check check-success"></span>
              </span>
          </label>
      </div>
      <div class="form-check form-check-radio form-check-inline">
          <label class="form-check-label">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="male" >
              Female
              <span class="circle">
                  <span class="check"></span>
              </span>
          </label>
      </div>
      <div class="form-group">
        <label for="doc_type">Specilisation</label>
        <select class="form-control selectpicker" data-style="btn btn-link" id="doc_type" name="doc_cat">
         @foreach ($doc_cats as $doc_cat)
             <option value="{{$doc_cat->id}}">{{$doc_cat->name}}</option>  
         @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="startTime">Consulting Starting Time</label>
        <input type="time" class="form-control" id="startTime" name="start_time"  placeholder="Enter Start Consulting Time" required>
      </div>
      <div class="form-group">
        <label for="endTime">Consulting Ending Time</label>
        <input type="time" class="form-control" id="endTime" name="end_time"  placeholder="Enter End Consulting Time" required>
      </div>

      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="day[]" value="mo" checked> mo
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="day[]" value="tu" checked> tu
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="day[]" value="we" checked> we
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="day[]" value="th" checked> th
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="day[]" value="fr" checked> fr
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="day[]" value="sa" checked> sa
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="day[]" value="su" checked> su
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-group">
        <label for="fee">Consulting Fee</label>
        <input type="text" class="form-control" id="fee" name="fee"  placeholder="Enter Consulting Fee" required>
      </div>

      <div class="form-group">
        <label for="license">License Number</label>
        <input type="text" class="form-control" id="license" name="license"  placeholder="e.g.:60 123456" required>
      </div>
      
        <button type="submit" class="btn btn-success btn-block">Register</button>
      </form> 
          </div>
        </div>
      </div>
</div>
@endsection