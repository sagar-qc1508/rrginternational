@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>Accreditation & Affiliation</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="javascript:;">Home</a><span> <i class="fa fa-angle-right"></i> <a href="javascript:;">About Us</a> <span> <i class="fa fa-angle-right"></i> Accreditation & Affiliation</span></li>
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
                <div class="sub-contact-unt">
                    <p>Our university core team and Adviser / councilors are fully experienced and trained by our trusted partners' university. RRG is committed to providing free independent advice and support to international students apply to study in the UK.</p>
                </div>    
            </div>

            <div class="sub-uns-bg d-flex flex-wrap">
                <h5>ICEF:</h5>
                <div class="col-lg-3">
                    <div class="sub-uns-contant">
                        <img src="{{ URL::asset('public/frontend/assets/img/icef.jpg')}}" alt="" />
                    </div>        
                </div>
                <div class="col-lg-9">
                    <div class="sub-uns-contant">
                        <p>RRG International, Chief Executive is an ICEF Trained Agent counselor (ITACs), RRG’s have accomplished the ICEF agent status. ITACs are agency-based student counselors who have successfully passed the IATC formal test.</p>
                    </div>        
                </div>
            </div>

            <div class="sub-uns-bg d-flex flex-wrap">
                <h5>British Council:</h5>
                <div class="col-lg-3">
                    <div class="sub-uns-contant">
                        <img src="{{ URL::asset('public/frontend/assets/img/britesh.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="sub-uns-contant">
                        <p>RRG International (RRG)’s Chief Executives and team member is a trained agent of British Council is listed in the Global Agent List (GAL).</p>
                        <p>The British Council provide school counselors, college counselors, teacher, and education agent to provide a practical and professional training program for agents and counselors to enable the team to recommend the UK as a study destination to international students.</p>
                    </div>        
                </div>
            </div>

            <div class="sub-uns-bg d-flex flex-wrap">
                <h5>QISAN (Quality International Study Abroad Network)</h5>
                <div class="col-lg-3">
                    <div class="sub-uns-contant">
                        <img src="{{ URL::asset('public/frontend/assets/img/qisan.png') }}" alt="" />
                    </div>        
                </div>
                <div class="col-lg-9">
                    <div class="sub-uns-contant">
                        <p>RRG’s as accredited by QISAN, QISAN agents will be recognized by your peers, students, education institutions worldwide, VISA offices, and other government bodies as someone who cares for students, acts in a professional manner, and gives ethical counsel to students. Education Institutions will recognize you are someone they can trust to represent them without tarnishing their image, and who will recruit students with the appropriate qualification, English language levels and financial means to be enrolled in the most appropriate program of study.</p>
                    </div>        
                </div>
            </div>

            <div class="col-lg-12">
                <div class="main-title text-center sub-inner-mt-mb">
                    <h2>Government & Licenses</h2>
                </div>
            </div>

            <div class="sub-uns-bg d-flex flex-wrap">
                <h5>OISC:</h5>
                <div class="col-lg-3">
                    <div class="sub-uns-contant">
                        <img src="{{ URL::asset('public/frontend/assets/img/oisc.jpg') }}" alt="" />
                    </div>        
                </div>
                <div class="col-lg-9">
                    <div class="sub-uns-contant">
                        <p>We are an OISC covered by the Immigration and Asylum Act 1999. Members of professional bodies give immigration advice without registering with OISC. We have one of the best UK immigration advice providers.</p>
                    </div>        
                </div>
            </div>

            <div class="sub-uns-bg d-flex flex-wrap">
                <h5>ICO: Information Commissioner's office</h5>
                <div class="col-lg-3">
                    <div class="sub-uns-contant">
                        <img src="{{ URL::asset('public/frontend/assets/img/ico.jpg') }}" alt="" />
                    </div>        
                </div>
                <div class="col-lg-9">
                    <div class="sub-uns-contant">
                        <p>We are register with ICO, ICO is the UK’s independent authority for data Protection</p>
                    </div>        
                </div>
            </div>

        </div>    
    </div>

</main>
<!-- inner page End -->



@stop