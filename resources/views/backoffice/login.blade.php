@extends('layouts.default')
@section('content')

<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>Admin Login</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a> <span> <i class="fa fa-angle-right"></i> Admin Login </span></li>
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
                                <h4>Login</h4>
                            </a>

                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <h5>Admin Login</h5>
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('backoffice.login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="User Name OR Email" value="" name="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" value="" name="password">
                                           
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="button-box">
                                                <button class="default-btn" type="submit"><span>Submit</span></button>
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