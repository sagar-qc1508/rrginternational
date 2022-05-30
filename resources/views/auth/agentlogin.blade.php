@extends('layouts.default')
@section('content')

<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>Agent Login</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a> <span><i class="fa fa-angle-right"></i> Agent Login </span></li>
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
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4>Sign In</h4>
                            </a>
                             
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif

                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('agent.login') }}" id="agentLoginForm" name="agentLoginForm">
                                        @csrf
                                            <div class="form-group">
                                                <input type="email" placeholder="Enter Your Email" name="email" id="aEmail" required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Enter Your Password" name="password" id="apassword" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                             <div class="button-box">
                                                <div class="login-toggle-btn">
                                                @if (Route::has('password.request'))
                                                        <a  href="{{ route('agent.password.reset') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="login-toggle-btn">
                                                    
                                                        <a  href="{{ route('agent.register') }}">
                                                        Don't Have account? Create a new account.
                                                        </a>
                                                    
                                                </div>
                                                <!-- <button class="default-btn" type="submit"><span>Submit</span></button> -->
                                                <input type="submit" value="Submit"  class="default-btn submit-btn">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <h5>CREATE YOUR ACCOUNT TODAY</h5>
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="Your User Name" name="username">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="Your E-mail" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Phone Number" name="phonenumber">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" name="password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Confirm Password" name="cpassword">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option selected name="type">-- Login As --</option>
                                                    <option value="student">Student</option>
                                                    <option value="agent">Agent</option>
                                                </select>
                                            </div>
                                            <div class="button-box">
                                                <button class="default-btn" type="submit"><span>Create Account</span></button>
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


<!-- inner page End -->
@stop