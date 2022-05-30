@extends('layouts.default')
@section('content')



<!-- inner page -->
<main class="pb-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                
                <div class="sub-course-deta-title">
                    <h2 class="pt-0">City, University Of London: Career Success Starts Here</h2>
                </div>

                <div class="sub-course-deta-slider">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active"> 
                                <img class="d-block w-100" src="{{ URL::asset('public/frontend/assets/img/inner-banner/courses-bg.jpg') }}" alt="" /> 
                            </div>
                            <div class="carousel-item"> 
                                <img class="d-block w-100" src="{{ URL::asset('public/frontend/assets/img/inner-banner/institutes.jpg') }}" alt="" />
                            </div>
                            <div class="carousel-item"> 
                                <img class="d-block w-100" src="{{ URL::asset('public/frontend/assets/img/inner-banner/universities-bg.jpg') }}" alt="" /> 
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                    </div>
                </div>

                <div class="sub-univer-bg">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="sub-univer-content">
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <div class="col-lg-8">
                                <div class="sub-univer-content">
                                    <h3>Why Choose City, University Of London?</h3>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <ul>
                                        <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                        <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                        <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="sub-univer-content">
                                    <img src="{{ URL::asset('public/frontend/assets/img/university/university-01.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="sub-univer-content">
                                <h3>INTO City, University Of London Admissions</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="sub-univer-btn">
                                <a href="javascript:;">Apply</a>
                                <a href="javascript:;">Apply to Course</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-univer-videos">
                        <div class="about-img default-overlay text-center">
                            <img src="{{ URL::asset('public/frontend/assets/img/university/univer-videos.jpg') }}" alt="" />
                            <a class="video-btn" href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter">
                                <img class="animated" src="{{ URL::asset('public/frontend/assets/img/university/play-circle-white.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="sub-study-text">
                            <h4>What’s Life Like In The City Of London For Students?</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="sub-univer-content">
                                <ul>
                                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                            <img src="{{ URL::asset('public/frontend/assets/img/university/university-04.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                    <div class="col-lg-4">
                        <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                            <img src="{{ URL::asset('public/frontend/assets/img/university/university-02.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="sub-study-text">
                            <h4>How Will INTO City Support Me?</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="sub-univer-content">
                                <ul>
                                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="sub-study-text">
                            <h4>Where Will I Live At City, University Of London?</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                            <img src="{{ URL::asset('public/frontend/assets/img/university/university-03.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-univer-icon">
                        <ul>
                            <li><a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="javascript:;"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="javascript:;"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>
<!-- inner page End -->



@stop