@extends('layouts.main')

@section('content')
{{-- <div class="card bg-dark text-white " style="margin-top:-1.5em;border-radius:0px !important">
<img class="card-img" src="{{asset('/images/slider2.jpg')}}" alt="Card image">
        <div class="card-img-overlay">
          <h2 class="card-title">Get help. Get better.</h2>
          <h4 class="card-text">No matter what's troubling you, get the support you need, right here, right now.</h4>
        </div>
</div> --}}

<div class="container">
    <h2 class="text-center">Package</h2>
    <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Online Live Chat</h4>
                  <p class="category">Category subtitle</p>
                </div>
                <div class="card-body">
                  The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona...
                </div>
                <div class="card-footer">
                        <button type="button" class="btn btn-info">Chat Now</button>
                </div>
              </div>
            </div>
          
            <div class="col-md-6">
              <div class="card">
                  <div class="card-header card-header-success">
                      <h4 class="card-title">Video Chat Sessions</h4>
                      <p class="category">Category subtitle</p>
                  </div>
                  <div class="card-body">
                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona...
                  </div>
                  <div class="card-footer">
                        <button type="button" class="btn btn-success">Chat Now</button>
                </div>
              </div>
            </div>
          </div>       
</div>

<div class="container-fluid bg-light p-3">
  <div class="container">
  <h2 class="text-center">Our Fetures</h2>
  <div class="row">
  <div class="col-md">
    <div class="info ">
      <div class="icon icon-info">
        <i class="material-icons">chat</i>
      </div>
      <h4 class="info-title ">Free Chat</h4>
      <p >Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
    </div>
  </div>
  <div class="col-md">
    <div class="info ">
      <div class="icon icon-info">
        <i class="material-icons">money</i>
      </div>
      <h4 class="info-title ">Cash Effficent</h4>
      <p >Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
    </div>
  </div>
  <div class="col-md">
    <div class="info ">
      <div class="icon icon-info">
        <i class="material-icons">watch</i>
      </div>
      <h4 class="info-title ">Save Time</h4>
      <p >Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
    </div>
  </div>
  <div class="col-md">
    <div class="info ">
      <div class="icon icon-info">
        <i class="material-icons">chat</i>
      </div>
      <h4 class="info-title ">Free Chat</h4>
      <p >Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
    </div>
  </div>
</div>
</div>
</div>

@endsection