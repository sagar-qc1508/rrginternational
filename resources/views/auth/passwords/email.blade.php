@extends('layouts.default')
@section('content')
 

<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/inner-banner/our-company.jpg);">
        <div class="container">
            <h2>Forgot Password</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i> Forgot Password?</span></li>
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
                        
                        <div class="login-form-container">
                            <h5>Reset Password</h5>
                            <p>Enter your email address associated with your account and we'll help you reset your passowrd</p>
                            <div class="login-register-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your E-mail">
                                    </div>
                                     <div class="button-box">
                                        <button class="default-btn" type="submit"><span>Reset Password</span></button>
                                    </div>
                                </form>
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
