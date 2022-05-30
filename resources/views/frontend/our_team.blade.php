
@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>Our Company</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="javascript:;">About Us</a> <span><i class="fa fa-angle-right"></i> Our Team</span></li>
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
                <div class="main-title text-center">
                    <h2>Founders</h2>
                </div>
            </div>

            <div class="sub-team-found-mt">
                <div class="col-lg-4 offset-lg-4">
                    <div class="sub-team-box sub-tem-mb" style="border-top: 4px solid #FF7839;">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal"><img src="{{ URL::asset('public/frontend/assets/img/our-team/Divyesh-Panchal.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal">Divyesh Panchal</a>
                        <p>Founder & CEO</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="main-title text-center mt-5">
                    <h2>Leadership Team</h2>
                </div>
            </div>

            <div class="sub-team-found-mt d-flex flex-wrap">
                
                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/Faisal-UL.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Faisal UL Uddin</a>
                        <p>Chief Legal Officer CFO</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/Jayesh-Patel.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Jayesh Patel</a>
                        <p>Country Director<br /> (India)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/user-profile.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Michaela Ognfowokan</a>
                        <p>Regional Manager<br /> (Africa & UK)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/user-profile.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Sudath</a>
                        <p>Country Manager<br /> (Sri Lanka)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/user-profile.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Jurina</a>
                        <p>Country Manager<br /> (Nepal)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/user-profile.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Hansha Vaya</a>
                        <p>Country Manager<br /> (UAE)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/user-profile.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Michael Okubasu</a>
                        <p>Country Manager<br /> (Kenya)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/user-profile.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Rita Kotech</a>
                        <p>International Consultant</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/user-profile.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Suki Sunner</a>
                        <p>International Consultant</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/Bhavna-IVY-Masih.jpg') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Bhavna IVY Masih</a>
                        <p>Home & International Student Recruitment Officer</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/Arpitkumar-Parekh.png') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Arpitkumar Parekh</a>
                        <p>Web Developer & Data Analyst</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="sub-team-box">
                        <div class="sub-img-teamuser">
                            <a href="javascript:;"><img src="{{ URL::asset('public/frontend/assets/img/our-team/Nazia-Vohra.jpg') }}" alt="" /></a>
                        </div>
                        <a href="javascript:;">Nazia Vohra</a>
                        <p>Student Recruitment Officer</p>
                    </div>
                </div>

            </div>


        </div>    
    </div>

</main>
<!-- inner page End -->



@stop