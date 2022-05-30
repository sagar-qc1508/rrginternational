@extends('layouts.default')
@section('content')

<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/courses-bg.jpg') }});">
        <div class="container">
            <h2>Courses</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-right"></i> Courses</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header Banner End -->

<!-- inner page -->
<main class="pb-0">

    <div class="container">
        <div class="row">
            <div class="sub-courses-main">
                <form>
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Course">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="University / School">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Locations">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="sub-courses-button">
                                <button class="default-btn" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="course-left-wrap col-lg-12">
                <div class="course-left-wrap">
                    <div class="course-tab-list nav pt-40 pb-25 mb-35">
                        <a class="active" href="#course-details-1" data-toggle="tab"><h4>Programs <span>(11500+)</span></h4></a>
                        <a href="#course-details-2" data-toggle="tab" class=""><h4>Schools <span>(1200+)</span></h4></a>
                    </div>
                    <div class="tab-content jump">
                        <!-- course-details-1 -->
                        <div class="tab-pane active" id="course-details-1">
                            
                            <div class="course-tab-content">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="sub-course-tt-box d-flex flex-wrap">
                                        <div class="sub-course-unt">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                                        </div>
                                        <div class="sub-course-unt-title">
                                            <h6>Cheshire College South and West - Ellesmere Port</h6>
                                            <div class="sub-course-country">
                                                <img src="assets/img/uk.svg" alt="" /> Ellesmere Port, North West
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="col-lg-10 p-0">
                                        <div class="sub-course-appl-text">
                                            <p>T-Level - Engineering Technologies - Manufacturing, Processing and Control Route</p>
                                        </div>
                                        <div class="sub-course-appl-bg">
                                            <div class="d-flex flex-wrap">
                                                <div class="sub-tution-text">
                                                    <h6>Tuition Fee</h6>
                                                    <p>&pound;14,250.00 GBP</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Application Fee</h6>
                                                    <p>Free</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <div class="sub-course-btn-left">
                                            <a href="javascript:;">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="col-lg-10 p-0">
                                        <div class="sub-course-appl-text">
                                            <p>T-Level - Engineering Technologies - Manufacturing, Processing and Control Route</p>
                                        </div>
                                        <div class="sub-course-appl-bg">
                                            <div class="d-flex flex-wrap">
                                                <div class="sub-tution-text">
                                                    <h6>Tuition Fee</h6>
                                                    <p>&pound;14,250.00 GBP</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Application Fee</h6>
                                                    <p>Free</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <div class="sub-course-btn-left">
                                            <a href="javascript:;">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-show-more">
                                    <a href="javascript:;">See 23 More Programs <i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>

                            <div class="course-tab-content">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="sub-course-tt-box d-flex flex-wrap">
                                        <div class="sub-course-unt">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                                        </div>
                                        <div class="sub-course-unt-title">
                                            <h6>Cheshire College South and West - Ellesmere Port</h6>
                                            <div class="sub-course-country">
                                                <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt="" /> Ellesmere Port, North West
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="col-lg-10 p-0">
                                        <div class="sub-course-appl-text">
                                            <p>T-Level - Engineering Technologies - Manufacturing, Processing and Control Route</p>
                                        </div>
                                        <div class="sub-course-appl-bg">
                                            <div class="d-flex flex-wrap">
                                                <div class="sub-tution-text">
                                                    <h6>Tuition Fee</h6>
                                                    <p>&pound;14,250.00 GBP</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Application Fee</h6>
                                                    <p>Free</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <div class="sub-course-btn-left">
                                            <a href="javascript:;">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="col-lg-10 p-0">
                                        <div class="sub-course-appl-text">
                                            <p>T-Level - Engineering Technologies - Manufacturing, Processing and Control Route</p>
                                        </div>
                                        <div class="sub-course-appl-bg">
                                            <div class="d-flex flex-wrap">
                                                <div class="sub-tution-text">
                                                    <h6>Tuition Fee</h6>
                                                    <p>&pound;14,250.00 GBP</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Application Fee</h6>
                                                    <p>Free</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <div class="sub-course-btn-left">
                                            <a href="javascript:;">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-show-more">
                                    <a href="javascript:;">See 23 More Programs <i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>

                            <div class="course-tab-content">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="sub-course-tt-box d-flex flex-wrap">
                                        <div class="sub-course-unt">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                                        </div>
                                        <div class="sub-course-unt-title">
                                            <h6>Cheshire College South and West - Ellesmere Port</h6>
                                            <div class="sub-course-country">
                                                <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt="" /> Ellesmere Port, North West
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="col-lg-10 p-0">
                                        <div class="sub-course-appl-text">
                                            <p>T-Level - Engineering Technologies - Manufacturing, Processing and Control Route</p>
                                        </div>
                                        <div class="sub-course-appl-bg">
                                            <div class="d-flex flex-wrap">
                                                <div class="sub-tution-text">
                                                    <h6>Tuition Fee</h6>
                                                    <p>&pound;14,250.00 GBP</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Application Fee</h6>
                                                    <p>Free</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <div class="sub-course-btn-left">
                                            <a href="javascript:;">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="col-lg-10 p-0">
                                        <div class="sub-course-appl-text">
                                            <p>T-Level - Engineering Technologies - Manufacturing, Processing and Control Route</p>
                                        </div>
                                        <div class="sub-course-appl-bg">
                                            <div class="d-flex flex-wrap">
                                                <div class="sub-tution-text">
                                                    <h6>Tuition Fee</h6>
                                                    <p>&pound;14,250.00 GBP</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Application Fee</h6>
                                                    <p>Free</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <div class="sub-course-btn-left">
                                            <a href="javascript:;">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-show-more">
                                    <a href="javascript:;">See 23 More Programs <i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>

                        </div>
                        <!-- course-details-1 End -->

                        <!-- course-details-2 -->
                        <div class="tab-pane" id="course-details-2">
                            
                            <div class="course-tab-content pb-0">
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- course-details-2 End -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</main>
<!-- inner page End -->

@stop