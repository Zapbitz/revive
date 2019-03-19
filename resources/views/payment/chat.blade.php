@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4 ml-auto mr-auto">

                    <div class="card card-pricing bg-info">
                        <div class="card-body ">
                            <div class="icon">
                                <i class="material-icons">calender</i>
                            </div>
                            <h1 class="card-title">Monthly</h1>

                            <h3 class="card-title">Rs 100</h3>
                            
                            <p class="card-description">
                                <ul>
                                    <li>Free Chat service</li>
                                    <li>Prescription</li>
                                    <li>Medical History</li>
                                </ul>
                            </p>
                            <a href="/payment/stripe/monthly" class="btn btn-white btn-round">Choose Plan</a>
                        </div>
                    </div>

                    <div class="card card-pricing bg-info">
                            <div class="card-body ">
                                <div class="icon">
                                    <i class="material-icons">calender</i>
                                </div>
                                <h1 class="card-title">Yearly</h1>
    
                                <h3 class="card-title">Rs 899</h3>
                                
                                <p class="card-description">
                                    <ul>
                                        <li>Free Chat service</li>
                                        <li>Prescription</li>
                                        <li>Medical History</li>
                                    </ul>
                                </p>
                                <a href="/payment/stripe/yearly" class="btn btn-white btn-round">Choose Plan</a>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection