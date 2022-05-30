@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>Agent Registration</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a> <span><i class="fa fa-angle-right"></i> Registration </span></li>
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
                           
                            <a class="active" data-toggle="tab" href="#lg2">
                                <h4>CREATE YOUR ACCOUNT</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                             
                            <div id="lg2" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('register') }}" id="agentRegistrationForm"  name="agentRegistrationForm">
                                        @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Full Name" name="username"  id="sausername" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="Your E-mail" name="email"  id="saemail" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Phone Number" name="phonenumber" id="saphonenumber" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" name="password" id="sapassword" required>
                                            </div>
                                            {{-- <div class="form-group">
                                                <input type="password" placeholder="Confirm Password" name="cpassword" id="sacpassword" required>
                                            </div> --}}
                                            <!-- <div class="form-group">
                                                <select class="form-control">
                                                    <option selected name="type">-- Login As --</option>
                                                    <option value="student">Student</option>
                                                    <option value="agent">Agent</option>
                                                </select>
                                            </div> -->
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                      <a  href="{{ route('agent.login') }}">
                                                            Already Exist account? Login.
                                                        </a>
                                                </div>
                                                <button class="default-btn" type="submit"><span>Sign Up</span></button>
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
