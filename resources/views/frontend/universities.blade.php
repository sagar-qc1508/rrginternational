
@extends('layouts.default')
@section('content')



<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/universities-bg.jpg') }});">
        <div class="container">
            <h2>Universities</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-right"></i> Universities</span></li>
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

            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h2>Universities for international students</h2>
                </div>
                <div class="sub-contact-unt">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="sub-universities-filter">
                    <div class="sidebar-search">
                        <form>
                            <input type="text" placeholder="Search By Name">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="sidebar-title">
                        <h4>Filter By</h4>
                    </div>
                    <div class="sidebar-title-two">
                        <h5>Country</h5>
                    </div>
                    <div class="sidebar-check-box">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">UK</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">US</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck3">
                            <label class="form-check-label" for="exampleCheck3">Canada</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck4">
                            <label class="form-check-label" for="exampleCheck4">Australia</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="sub-universities-mt d-flex flex-wrap">
                        <div class="col-lg-4">
                            <div class="wm-banner-addswrap">
                                <a href="javascript:;">
                                    <div class="eduniversity-card__banner">
                                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="">
                                    </div>
                                    <div class="eduniversity-card__logo">
                                        <div class="eduniversity-card__logo__in">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="eduniversity-card__univname">
                                        <h5>Aston University</h5>
                                        <div class="edcard-country">
                                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt=""> United Kingdom 
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="wm-banner-addswrap">
                                <a href="javascript:;">
                                    <div class="eduniversity-card__banner">
                                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="">
                                    </div>
                                    <div class="eduniversity-card__logo">
                                        <div class="eduniversity-card__logo__in">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="eduniversity-card__univname">
                                        <h5>Aston University</h5>
                                        <div class="edcard-country">
                                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt=""> United Kingdom 
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="wm-banner-addswrap">
                                <a href="javascript:;">
                                    <div class="eduniversity-card__banner">
                                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="">
                                    </div>
                                    <div class="eduniversity-card__logo">
                                        <div class="eduniversity-card__logo__in">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="eduniversity-card__univname">
                                        <h5>Aston University</h5>
                                        <div class="edcard-country">
                                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt=""> United Kingdom 
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                         <div class="col-lg-4">
                            <div class="wm-banner-addswrap">
                                <a href="javascript:;">
                                    <div class="eduniversity-card__banner">
                                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="">
                                    </div>
                                    <div class="eduniversity-card__logo">
                                        <div class="eduniversity-card__logo__in">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="eduniversity-card__univname">
                                        <h5>Aston University</h5>
                                        <div class="edcard-country">
                                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt=""> United Kingdom 
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="wm-banner-addswrap">
                                <a href="javascript:;">
                                    <div class="eduniversity-card__banner">
                                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="">
                                    </div>
                                    <div class="eduniversity-card__logo">
                                        <div class="eduniversity-card__logo__in">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="eduniversity-card__univname">
                                        <h5>Aston University</h5>
                                        <div class="edcard-country">
                                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt=""> United Kingdom 
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="wm-banner-addswrap">
                                <a href="javascript:;">
                                    <div class="eduniversity-card__banner">
                                        <img src="{{ URL::asset('public/frontend/assets/img/middle.jpg') }}" alt="">
                                    </div>
                                    <div class="eduniversity-card__logo">
                                        <div class="eduniversity-card__logo__in">
                                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="eduniversity-card__univname">
                                        <h5>Aston University</h5>
                                        <div class="edcard-country">
                                            <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt=""> United Kingdom 
                                        </div>
                                    </div>
                                </a>
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