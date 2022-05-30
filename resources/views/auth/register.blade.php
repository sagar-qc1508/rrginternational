@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>Registration</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a> <span><i class="fa fa-angle-right"></i> Student Registration </span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header Banner End -->

<!-- inner page -->
<main>

    <div class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                           
                            <a class="active" data-toggle="tab" href="#lg2">
                                <h4>CREATE YOUR ACCOUNT</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                             
                            <div id="lg2" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('register') }}" id="studentRegistrationForm"  name="studentRegistrationForm">
                                        @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Full Name" name="fullname" id="srusername" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}"  >
                                                @error('fullname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="Your E-mail" name="email" id="sremail" class="form-control @error('email') is-invalid @enderror"  >
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Phone Number" name="phonenumber" id="srphonenumber" class="form-control @error('phonenumber') is-invalid @enderror"  >
                                                @error('phonenumber')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" name="password" id="srpassword" class="form-control @error('password') is-invalid @enderror"  >
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            {{-- <div class="form-group">
                                                <input type="password" placeholder="Confirm Password" name="cpassword" id="srcpassword"  >
                                            </div> --}}
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                      <a  href="{{ route('login') }}">
                                                            Already Exist account? Login.
                                                        </a>
                                                </div>
                                                <!-- <button class="default-btn" type="submit"><span>Sign Up</span></button> -->
                                                <input type="submit" value="Sign Up"  class="default-btn submit-btn">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>




@stop
