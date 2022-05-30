@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>Our Company</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="{{ url('/') }}">About Us</a> <span><i class="fa fa-angle-right"></i> Our Company</span></li>
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

            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <img src="{{ URL::asset('public/frontend/assets/img/global-agency.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>We are a Global Agency</h2>
                        <p>Our Education Consultants are fully experienced. They are trained by our trusted university partners and the British Council.</p>
                        <p>We are here to help guide international students through each phase of the application process for UK universities. As an official representative of UK universities operating to UK standards, students are guaranteed a high-quality service and support, wherever they maybe in the world.</p>
                        <p>RRG is one of the most trusted agencies in the world – both by students and UK universities. RRG is owned and managed by UK nationals. The company's management team ensures that, British Standards and quality remain an integral part of the company’s philosophy.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="about-content-comp">
                        <h5>“We want to be the part of all our international student's SUCCESS, and be a COMPANY of choice in this INDUSTRY Sector.”</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="sub-inner-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="main-title text-center inner-title-mt">
                        <h2>Our Company</h2>
                    </div>
                </div>

                <div class="d-flex flex-wrap">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <p><strong>RRG International (RRG)</strong> is a company that provides Higher Education Services to International Students globally.</p>
                            <p>RRG's main <strong>“Unique Selling Point” (USP)</strong> is the services it offers to all students, which no other single company is providing at present. That is, the combination of International Education, International Careers and Immigration support services.</p>
                            <p>We also have a unique client care package, designated as <strong>"Lifetime Support System" (LSS)</strong>, this provides the students, with confidence and assurance that they will be taken very good care off by the company, by this we mean, when a student comes to RRG, and becomes a client by either using our services to gain International Education, seek an International Career or Immigration Services. Our LSS initiates immediately, and the progress of each individual student is monitored; with regular communications between RRG and the student.</p>
                            <p>As the student nears the end of their course or contract, RRG will re-examine their options and advise the best solution for them, in-order for them to achieve their future goals.</p>
                            <p>This service will continue until the student has achieved their goals and does not require RRG's services any further.</p>
                            <p>RRG is currently working with over 100 Universities, across the UK (including the top 30 Universities), offering over 2000 courses; with whom we have direct links with, and have negotiated special terms for our candidates, this pertains to scholarships, discount, etc...</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <img src="{{ URL::asset('public/frontend/assets/img/our-company.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="sub-mission-mt d-flex flex-wrap">

                <div class="col-lg-4 offset-lg-2">
                    <div class="sub-mission-box">
                        <h5>Our Mission</h5>
                        <div class="sub-mission-icon">
                            <i class="fa-solid fa-rocket"></i>
                        </div>
                        <p>"Our Mission is to provide a global platform, that empowers people to develop themselves through specialized training programs, Higher Education and career support. We want to be part of their success and a company of choice in this industry sector"</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-mission-box" style="border-top: 4px solid #9b3367;">
                        <h5>Company's Value</h5>
                        <div class="sub-mission-icon">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <p>RRG is a leading business in the Education Sector, we attribute our reputation to the lasting client relationships we have developed throughout the years. We believe that all of our clients deserve the highest level of service, and we are committed to providing just that.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="about-content-comp">
                        <h5>"YOUR SUCCESS IS OUR FOCUS!"</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>
<!-- inner page End -->

@stop
