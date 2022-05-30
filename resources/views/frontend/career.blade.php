
@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/career-bg.jpg') }});">
        <div class="container">
            <h2>Career</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-right"></i> Career</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header Banner End -->

<!-- inner page -->
<main>

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="main-title text-center inner-title-mt pt-0">
                    <h2>Apply for a Job</h2>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="sub-inner-bg">
                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                        <div class="col-lg-7">
                            <div class="about-content about-text-secnd-mt">
                                <p>RRG was founded in the UK in 2017 and quickly grew into a global leader in the recruitment of international students to the UK University. We assisted over 1000 students from different countries to join a UK university.</p>
                                <p>RRG is recognized globally as the top recruitment of international students to UK University. Our future success depends on the ability to recruit, retain, and develop the best people to meet the needs of the business in a highly competitive market.</p>
                                <p>RRG is an equal opportunity employer and will ensure that no application or employee receives less favorable treatment because of gender, age, disability, religion, or race. This is your opportunity to be part of a strong, diverse team working in one of the biggest networks in the world.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-content">
                                <img src="{{ URL::asset('public/frontend/assets/img/apply-job-01.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="sub-apply-md-mt d-flex flex-wrap">
                
                <div class="col-lg-3">
                    <div class="sub-apply-box">
                        <div class="sub-apply-icon">
                            <img src="{{ URL::asset('public/frontend/assets/img/apply-job/recruitment-process.png') }}" alt="" />
                        </div>
                        <a href="javascript:;">Recruitment Process</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sub-apply-box">
                        <div class="sub-apply-icon" style="background:#F5EAF8;">
                            <img src="{{ URL::asset('public/frontend/assets/img/apply-job/equal-opportunities.png') }}" alt="" />
                        </div>
                        <a href="javascript:;">Equal Opportunities</a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="sub-apply-box">
                        <div class="sub-apply-icon" style="background:#FEEEEE;">
                            <img src="{{ URL::asset('public/frontend/assets/img/apply-job/life-rrg.png') }}" alt="" />
                        </div>
                        <a href="javascript:;">Life at RRG</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sub-apply-box">
                        <div class="sub-apply-icon" style="background:#E9F9EE;">
                            <img src="{{ URL::asset('public/frontend/assets/img/apply-job/recruitment-update.png') }}" alt="" />
                        </div>
                        <a href="javascript:;">Covid-19 Recruitment Update</a>
                    </div>
                </div>

            </div>
            
            <div class="col-lg-12">
                <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                    <div class="col-lg-4">
                        <div class="sub-study-text sub-study-top01 d-flex flex-wrap align-items-center justify-content-center">
                            <img src="{{ URL::asset('public/frontend/assets/img/apply-job-02.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="sub-study-text">
                            <h4>Apply for a Job</h4>
                            <p>Take a look through to our fair and easy to follow application process.</p>
                            <p>If you aren't quite ready to apply for a vacancy yet but want to express interest, or if you want to find out more about QA, then please send in your CV and cover letter via the link below and one of our recruiters will be in touch.</p>
                            <a href="javascript:;">The Application Process</a>
                            <a href="javascript:;">Submit Your Cv & Cover Letter</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="study-ab-btn">
                    <a href="javascript:;">View our vacancies here</a>
                </div>
            </div>

        </div>
    </div>

</main>
<!-- inner page End -->



@stop