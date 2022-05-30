@extends('layouts.default')
@section('content')

<!-- Header Banner -->
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="d-flex  flex-wrap align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2><span>RRG</span> Will Assist You In Making Your UK University Application.</h2>
                        </div>
                        <p>Speak to us today to make an informed decision for your higher education in the UK. Apply for the right course at the right university using portal with help and guidance from our staff.</p>
                        <div class="about-btn mt-45">
                            <a class="default-btn" href="javascript:;">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ URL::asset('public/frontend/assets/img/UK-university.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Banner End -->

<!-- How to Apply -->
<div class="sub-how-apply">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>How to apply?</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sub-img-apply">
                    <img src="{{ URL::asset('public/frontend/assets/img/how-to-apply.png') }}" alt="" />
                </div>
            </div>

        </div>
    </div>
</div>
<!-- How to Apply End -->

<!-- Find Your Perfect Course -->
<div class="perfect-course">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title text-center title-mb">
                    <h2>Find Your Perfect Course</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="perfect-course-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Business & Marketing</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="perfect-course-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Accounting & Finance</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="perfect-course-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Arts & Design</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="perfect-course-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Biological & Medical</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="perfect-course-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Medicine & Health</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="perfect-course-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Architecture & Engineering</a>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="perfect-course-btn">
                    <a href="{{ url('/find-courses') }}">Explore All</a>
                </div>
            </div>

        </div>    
    </div>
</div>
<!-- Find Your Perfect Course -->

<!-- RRG Services for Students -->
<div class="sub-services-bg-mt">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title text-center title-mb">
                    <h2><span>RRG</span> Services for Students</h2>
                    <p>RRG International provides a <strong>FREE</strong> specialist service to assist International Students with their UK University applications.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sub-services-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Our Premium</a>
                    <p>We guide you through a maze of questions to find solutions best suited to your profile ensuring you choose the best academic path to achieve your career goals based on your aptitude, ability and interest.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sub-services-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Career Counselling</a>
                    <p>We give special attention to your application whether it is paper-based or online. We see to it that your required documents are thoroughly compiled, attested, highlighting the areas essential for a well-presented error-free application.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sub-services-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Medical Application</a>
                    <p>Popular courses vary from country to country. We assist in identifying what are the industry trends and guide you in subject selection based on parameters of skills required in the industry. We also help to identify the correct institutions for these popular courses.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sub-services-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Loan & Scholarship</a>
                    <p>We give complete guidance on Educational Loans offered by Financial Institute and Banks. We also provide information to students about the various International, Institutional and National scholarships.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sub-services-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">University application</a>
                    <p>We provide free advice for International, Home and EU students desiring to study in the UK. RRG’s free online application support service will maximize your chances of being accepted for the University course.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sub-services-box">
                    <img src="{{ URL::asset('public/frontend/assets/img/perfect-course/business-marketing.png') }}" alt="" />
                    <a href="javascript:;">Visa Application</a>
                    <p>RRG Student Visa Services offers advice and assistance to International Students wishing to obtain a UK visa. Our sister company RRG Legal & Immigration Services Limited has extensive knowledge of all the latest immigration...</p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="perfect-course-btn">
                    <a href="javascript:;">Explore All</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- RRG Services for Students End -->

<!-- Admissions Opens -->
<div class="about-us sub-background">
    <div class="container">
        <div class="row">
            <div class="d-flex  flex-wrap align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-img default-overlay">
                        <img src="{{ URL::asset('public/frontend/assets/img/admissions-opens.png') }}" alt="" />
                        <a class="video-btn" href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter">
                            <img class="animated" src="{{ URL::asset('public/frontend/assets/img/play-circle.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>Admissions Opens For 2022</h2>
                        </div>
                        <p>Speak to us today to make an informed decision for your higher education in the UK. Apply for the right course at the right university using portal with help and guidance from our staff.Speak to us today to make an informed decision for your higher education in the UK. Apply for the right course.</p>
                        <div class="about-btn mt-45">
                            <a class="default-btn" href="javascript:;">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Admissions Opens End -->

<!-- Count Number -->
<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3 single-count">
                <div class="count-content">
                    <div class="d-flex align-items-center justify-content-center">
                        <h2 class="count">10</h2>
                        <p class="count-one-cn">K+</p>
                    </div>
                    <span>Students</span>
                </div>
            </div>
            <div class="col-6 col-lg-3 single-count">
                <div class="count-content">
                    <div class="d-flex align-items-center justify-content-center">
                        <h2 class="count">15</h2>
                        <p class="count-two-cn">+</p>
                    </div>
                    <span>Years of Experience</span>
                </div>
            </div>
            <div class="col-6 col-lg-3 single-count">
                <div class="count-content">
                    <div class="d-flex align-items-center justify-content-center">
                        <h2 class="count">50</h2>
                        <p class="count-three-cn">+</p>
                    </div>
                    <span>University</span>
                </div>
            </div>
            <div class="col-6 col-lg-3 single-count"  style="border-right: 0px;">
                <div class="count-content">
                    <div class="d-flex align-items-center justify-content-center">
                        <h2 class="count">9</h2>
                        <p class="count-four-cn">+</p>
                    </div>
                    <span>Office Location</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Count Number End -->

<!-- University Partners -->
<div class="sub-services-bg-mt sub-background">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title text-center title-mb pb-4">
                    <h2>University Partners</h2>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="wm-banner-addswrap">
                    <div class="eduniversity-card__banner">
                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="" />
                    </div>
                    <div class="eduniversity-card__logo">
                        <div class="eduniversity-card__logo__in">
                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="eduniversity-card__univname">
                        <h5>Aston University</h5>
                        <div class="edcard-country">
                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt="" /> United Kingdom 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wm-banner-addswrap">
                    <div class="eduniversity-card__banner">
                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="" />
                    </div>
                    <div class="eduniversity-card__logo">
                        <div class="eduniversity-card__logo__in">
                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="eduniversity-card__univname">
                        <h5>Aston University</h5>
                        <div class="edcard-country">
                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt="" /> Canada 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wm-banner-addswrap">
                    <div class="eduniversity-card__banner">
                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="" />
                    </div>
                    <div class="eduniversity-card__logo">
                        <div class="eduniversity-card__logo__in">
                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="eduniversity-card__univname">
                        <h5>Aston University</h5>
                        <div class="edcard-country">
                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt="" /> Australia
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="perfect-course-btn mt-btn">
                    <a href="javascript:;">Explore All</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- University Partners End -->

<!-- Our Testimonials -->
<div class="testimonials-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title text-center title-mb">
                    <h2>Our Testimonials</h2>
                </div>
            </div>

            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ URL::asset('public/frontend/assets/img/testimonial/ekta-panchal.jpeg') }}" alt="" />
                        </div>
                        <h3 class="title">Ekta Panchal <br /><span class="post"> International Student</span></h3>
                        <p class="description">I just wanted to thank you for the beautiful guides! We are in the midst of Family Weekend check-in and have had RAVE from our parents!</p>
                    </div>
     
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ URL::asset('public/frontend/assets/img/testimonial/Dipesh-Panchal.jpeg') }}" alt="" />
                        </div>
                        <h3 class="title">Dipesh Panchal <br /><span class="post"> International Student</span></h3>
                        <p class="description">I just wanted to thank you for the beautiful guides!</p>
                    </div>

                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ URL::asset('public/frontend/assets/img/testimonial/ekta-panchal.jpeg') }}" alt="" />
                        </div>
                        <h3 class="title">Ekta Panchal <br /><span class="post"> International Student</span></h3>
                        <p class="description">I just wanted to thank you for the beautiful guides! We are in the midst of Family Weekend check-in and have had RAVE from our parents!</p>
                    </div>
     
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ URL::asset('public/frontend/assets/img/testimonial/Dipesh-Panchal.jpeg') }}" alt="" />
                        </div>
                        <h3 class="title">Dipesh Panchal <br /><span class="post"> International Student</span></h3>
                        <p class="description">I just wanted to thank you for the beautiful guides!</p>
                    </div>

                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ URL::asset('public/frontend/assets/img/testimonial/ekta-panchal.jpeg') }}" alt="" />
                        </div>
                        <h3 class="title">Ekta Panchal <br /><span class="post"> International Student</span></h3>
                        <p class="description">I just wanted to thank you for the beautiful guides! We are in the midst of Family Weekend check-in and have had RAVE from our parents!</p>
                    </div>
     
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ URL::asset('public/frontend/assets/img/testimonial/Dipesh-Panchal.jpeg') }}" alt="" />
                        </div>
                        <h3 class="title">Dipesh Panchal <br /><span class="post"> International Student</span></h3>
                        <p class="description">I just wanted to thank you for the beautiful guides!</p>
                    </div>

                </div>
            </div>
        
        </div>
    </div>
</div>
<!-- Our Testimonials End -->

<!-- Latest News -->
<div class="blog-area sub-background">
    <div class="container">
        <div class="row">
        
            <div class="col-lg-12">
                <div class="section-title text-center title-mb">
                    <h2>Latest News</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/blog/blog-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="fa-regular fa-calendar-days"></i> 24<sup>th</sup> Jun 2018</li>
                                </ul>
                            </div>
                            <h4><a href="javascript:;">What And Where Choosing To Study...</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/blog/blog-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="fa-regular fa-calendar-days"></i> 24<sup>th</sup> Jun 2018</li>
                                </ul>
                            </div>
                            <h4><a href="javascript:;">What And Where Choosing To Study...</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/blog/blog-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="fa-regular fa-calendar-days"></i> 24<sup>th</sup> Jun 2018</li>
                                </ul>
                            </div>
                            <h4><a href="javascript:;">What And Where Choosing To Study...</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Latest News End -->

<!-- Questions about studying -->
<!-- <div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="sub-que-study-bg">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="sub-que-study-text">
                            <h3>Questions about studying with us?</h3>
                            <p>We have a team of student advisers & officers to answer all your questions:</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="sub-que-study-text">
                            <a href="javascript:;">Ask Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> -->
<!-- Questions about studying End -->
@stop