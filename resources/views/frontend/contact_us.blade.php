
@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/career-bg.jpg') }});">
        <div class="container">
            <h2>Get In Touch</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-right"></i> Get In Touch</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header Banner End -->

<!-- inner page -->
<main>

    <div class="contact-area">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        
                        <div class="contact-title">
                            <h2>Contact Details</h2>
                        </div>

                        <div class="contact-form-bg">
                            <h6>International Student Enquires:</h6>
                            <div class="contact-form-info d-flex align-items-start justify-content-start">
                                <i class="fa-solid fa-envelope"></i>
                                <span>intstudents@rrginternational.com</span>
                            </div>
                            <div class="contact-form-info d-flex align-items-start justify-content-start">
                                <i class="fa fa-phone"></i>
                                <span>+44 7417 417482</span>
                            </div>
                        </div>
                        <div class="contact-form-bg">
                            <h6>Home Student Enquires:</h6>
                            <div class="contact-form-info d-flex align-items-start justify-content-start">
                                <i class="fa-solid fa-envelope"></i>
                                <span>homestudents@rrginternational.com</span>
                            </div>
                            <div class="contact-form-info d-flex align-items-start justify-content-start">
                                <i class="fa fa-phone"></i>
                                <span>+44 7417 417482</span>
                            </div>
                        </div>
                        <div class="contact-form-bg">
                            <h6>Other Information:</h6>
                            <div class="contact-form-info d-flex align-items-start justify-content-start">
                                <i class="fa-solid fa-envelope"></i>
                                <span>enquiry@rrginternational.com</span>
                            </div>
                            <div class="contact-form-info d-flex align-items-start justify-content-start">
                                <i class="fa fa-phone"></i>
                                <span>+44 1895 807492</span>
                            </div>
                            <div class="contact-form-info d-flex align-items-start justify-content-start">
                                <i class="fa-solid fa-mobile-screen"></i>
                                <span>+44 7417 417482</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="contact-form">
                        <div class="contact-title">
                            <h2>Quick Inquiry</h2>
                        </div>
                        <form method="POST" action="{{ url('/contact-us') }}">
                            @csrf
                            <div class="form-group">
                                <input name="name" placeholder="Your Name" type="text" required>
                            </div>
                            <div class="form-group">
                                <input name="email" placeholder="Your Email" type="email" required>
                            </div>
                            <div class="form-group">
                                <input name="phone" placeholder="Your Mobile" type="text" required>
                            </div>
                            <div class="form-group">
                                <input name="subject" placeholder="Subject" type="text" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Message" required></textarea>
                            </div>
                            <button class="submit btn-style" type="submit">Submit</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="contact-form contact-form-mt">
                        <div class="contact-title">
                            <h2>Office & Registered Address:</h2>
                        </div>
                    </div>
                </div>

                <div class="contact-form-map-mt-mb d-flex flex-wrap">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <div class="contact-form-bg">
                                <h6>RRG International</h6>
                                <div class="contact-form-info d-flex align-items-start justify-content-start">
                                    <i class="fa fa-home"></i>
                                    <span>The Atrium,<br />
                                        1 Harefield Road,<br />
                                        Uxbridge,<br />
                                        UB8 1EX England
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.0641812913304!2d-0.48475818468995985!3d51.54872211550274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48766e7b239fa87b%3A0x3b8bb44f294255ff!2sThe%20Atrium%2C%201%20Harefield%20Rd%2C%20Uxbridge%2C%20UK!5e0!3m2!1sen!2sin!4v1653546896676!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="contact-form-map-mt-mb d-flex flex-wrap">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <div class="contact-form-bg">
                                <h6>RRG International</h6>
                                <div class="contact-form-info d-flex align-items-start justify-content-start">
                                    <i class="fa fa-home"></i>
                                    <span>The Atrium,<br />
                                        1 Harefield Road,<br />
                                        Uxbridge,<br />
                                        UB8 1EX England
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.0641812913304!2d-0.48475818468995985!3d51.54872211550274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48766e7b239fa87b%3A0x3b8bb44f294255ff!2sThe%20Atrium%2C%201%20Harefield%20Rd%2C%20Uxbridge%2C%20UK!5e0!3m2!1sen!2sin!4v1653546896676!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</main>
<!-- inner page End -->




@stop