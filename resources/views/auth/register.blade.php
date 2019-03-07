@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-info text-center">{{ __('Client Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group row">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            {{-- </div> --}}
                        </div>

                        <div class="form-group row">
                            <label for="password" >{{ __('Password') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            {{-- </div> --}}
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            {{-- </div> --}}
                        </div>

                        <div class="form-group row">
                           
                            <div class="form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>{{ __('Male') }}
                                  <span class="circle">
                                      <span class="check "> </span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-radio form-check-inline ">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="gender" id="gender2" value="option2">  {{ __('Female') }}
                                  <span class="circle">
                                      <span class="check"> </span>
                                  </span>
                                </label>
                              </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" >{{ __('Age') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="age" type="number" class="form-control" name="age" required>
                            {{-- </div> --}}
                        </div>

                        <div class="form-group row">
                            <label for="martial_status" >{{ __('Martial Status') }}</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" id="martial_status" name="martial_status">
                                <option value="single" selected>Single</option>
                                <option value="married">Married</option>  
                                <option value="divorced">Divorced</option>             
                              </select>
                        </div>
                        
                        <div class="form-group row">
                            <label for="occupation" >{{ __('Occupation') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="occupation" type="text" class="form-control" name="occupation" required>
                            {{-- </div> --}}
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
