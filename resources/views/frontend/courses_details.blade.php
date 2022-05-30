@extends('layouts.default')
@section('content')

<!-- inner page -->
<main class="pb-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                
                <div class="sub-course-deta">
                    <div class="sub-course-tt-box d-flex flex-wrap">
                        <div class="sub-course-unt">
                            <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="">
                        </div>
                        <div class="sub-course-unt-title">
                            <h6>Cheshire College South and West - Ellesmere Port</h6>
                            <div class="sub-course-country">
                                <img src="{{ URL::asset('public/frontend/assets/img/uk.svg') }}" alt=""> Ellesmere Port, North West
                            </div>
                        </div>    
                    </div>
                </div>

                <div class="sub-course-deta-title">
                    <h2>T-Level - Engineering Technologies - Manufacturing, Processing And Control Route</h2>
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

                <div class="sub-course-deta-two-tab">

                    <div class="sub-course-board-two-tab d-flex flex-wrap">
                        <div class="sub-course-dtn-two">
                            <a href="javascript:;">Overview</a>
                            <a href="#Similar-Programs">Similar Programs</a>
                        </div>
                        <div class="sub-course-dtn-check-now">
                            <a href="javascript:;">Check Eligibility Now</a>
                        </div>
                    </div>

                    <div class="row main-prog-mt">
                        
                        <div class="col-lg-8">
                            <div class="sub-prog-dtl">
                                <h5>Program Summary</h5>
                                <p>T Levels are new two-year, Level 3 study programmes combining classroom theory, practical learning and a minimum 315 hours of industry placement with an employer to make sure students have real experience of the workplace. At the end of the Technical Qualification, students are expected to demonstrate threshold competence, which means that they have gained the core knowledge and skills related to construction design and surveying and are well placed to develop full occupational competence with additional development and support once in employment in the engineering sector. Learners will develop an understanding of a broad range of issues relevant to the sector, including:</p>
                                <ul>
                                    <li>working within the Engineering and Manufacturing Sectors – an understanding of how materials, conditions and context influence design processes and products</li>
                                    <li>essential mathematics for engineering and manufacturing – a knowledge and understanding of mathematics including standard matrices and determinants and standard trigonometry</li>
                                    <li>materials and their properties – understanding material processing techniques and their effects on materials and material quality, the condition of materials, how these are managed, and materials testing methods and techniques</li>
                                    <li>business, commercial and financial awareness - basic commercial principles including commercial priorities and markets, customers/clients/partners and resource allocation</li>
                                </ul>
                                <p>T Levels are new two-year, Level 3 study programmes combining classroom theory, practical learning and a minimum 315 hours of industry placement with an employer to make sure students have real experience of the workplace. At the end of the Technical Qualification, students are expected to demonstrate threshold competence, which means that they have gained the core knowledge and skills related to construction design and surveying and are well placed to develop full occupational competence with additional development and support once in employment in the engineering sector. Learners will develop an understanding of a broad range of issues relevant to the sector, including:</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            
                            <div class="sub-prog-years-bg">

                                <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                    <div class="sub-course-unt">
                                        <img src="{{ URL::asset('public/frontend/assets/img/courses/Certificate-file.png') }}" alt="" />
                                    </div>
                                    <div class="sub-course-unt-title">
                                        <h6>1-Year Post-Secondary Certificate</h6>
                                        <div class="sub-course-country">
                                            Program Level
                                        </div>
                                    </div>    
                                </div>
                                <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                    <div class="sub-course-unt">
                                        <img src="{{ URL::asset('public/frontend/assets/img/courses/calender.png') }}" alt="" />
                                    </div>
                                    <div class="sub-course-unt-title">
                                        <h6>2 year T-Level program including a work placement</h6>
                                        <div class="sub-course-country">
                                            Program Length
                                        </div>
                                    </div>    
                                </div>
                                <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                    <div class="sub-course-unt">
                                        <img src="{{ URL::asset('public/frontend/assets/img/courses/money-2.png') }}" alt="" />
                                    </div>
                                    <div class="sub-course-unt-title">
                                        <h6>£9,207.00 GBP / Year</h6>
                                        <div class="sub-course-country">
                                            Cost of Living
                                        </div>
                                    </div>    
                                </div>
                                <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                    <div class="sub-course-unt">
                                        <img src="{{ URL::asset('public/frontend/assets/img/courses/money.png') }}" alt="" />
                                    </div>
                                    <div class="sub-course-unt-title">
                                        <h6>£14,250.00 GBP / Year</h6>
                                        <div class="sub-course-country">
                                            Tuition
                                        </div>
                                    </div>    
                                </div>
                                <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                    <div class="sub-course-unt">
                                        <img src="{{ URL::asset('public/frontend/assets/img/courses/money-GBP.png') }}" alt="" />
                                    </div>
                                    <div class="sub-course-unt-title">
                                        <h6>£0.00 GBP</h6>
                                        <div class="sub-course-country">
                                            Application Fee
                                        </div>
                                    </div>    
                                </div>

                            </div>

                            <div class="sub-prog-intake-bg">
                                <h5>Program Intakes</h5>
                                
                                <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="sub-intake-open-btn">
                                        <span>Open</span>
                                    </div>
                                    <div class="sub-intake-date d-flex flex-wrap">
                                        <a href="javascript:;"><i class="fa fa-angle-down"></i></a>
                                        <p>Sep 2022</p>
                                    </div>
                                    <div class="sub-opne-date-text">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Open date <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-solid fa-circle-info"></i></a></p>
                                            <span>2021-12-17 12:00 AM GMT</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Submission deadline</p>
                                            <span>No data available</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="sub-intake-open-btn sub-intake-open-btn-blue">
                                        <span>Likely open</span>
                                    </div>
                                    <div class="sub-intake-date d-flex flex-wrap">
                                        <a href="javascript:;"><i class="fa fa-angle-down"></i></a>
                                        <p>Sep 2022</p>
                                    </div>
                                    <div class="sub-opne-date-text">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Open date <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-solid fa-circle-info"></i></a></p>
                                            <span>2021-12-17 12:00 AM GMT</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Submission deadline</p>
                                            <span>No data available</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="sub-intake-open-btn sub-intake-open-btn-blue">
                                        <span>Likely open</span>
                                    </div>
                                    <div class="sub-intake-date d-flex flex-wrap">
                                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-angle-down"></i></a>
                                        <p>Sep 2022</p>
                                    </div>
                                    <div class="sub-opne-date-text">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Open date <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-solid fa-circle-info"></i></a></p>
                                            <span>2021-12-17 12:00 AM GMT</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Submission deadline</p>
                                            <span>No data available</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="sub-check-now-btn">
                                <a href="javascript:;">Check Eligibility Now</a>
                            </div>
                        </div>

                        <div class="col-lg-8" id="Similar-Programs">

                            <div class="sub-similar-pr-title d-flex flex-wrap align-items-center">
                                <h3>Similar Programs</h3>
                                <span>5</span>
                            </div>
                            
                            <div class="sub-similar-prog-bg">
                                <div class="sub-course-tt-box d-flex flex-wrap">
                                    <div class="sub-course-unt">
                                        <img src="assets/img/Cambridge_ Education.png" alt="">
                                    </div>
                                    <div class="sub-course-unt-title">
                                        <h6>Cheshire College South and West - Ellesmere Port</h6>
                                        <div class="sub-course-country">
                                            Manchester Metropolitan University (INTO)
                                        </div>
                                        <div class="sub-course-appl-bg">
                                            <div class="d-flex flex-wrap">
                                                <div class="sub-tution-text">
                                                    <h6>Tuition Fee</h6>
                                                    <p>£14,250.00 GBP</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Tuition</h6>
                                                    <p>$25,380.00 AUD</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Application Fee</h6>
                                                    <p>Free</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub-check-now-btn sub-check-now-pd">
                                            <a href="javascript:;">Check Eligibility Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-similar-prog-bg">
                                <div class="sub-course-tt-box d-flex flex-wrap">
                                    <div class="sub-course-unt">
                                        <img src="{{ URL::asset('public/frontend/assets/img/Cambridge_ Education.png') }}" alt="">
                                    </div>
                                    <div class="sub-course-unt-title">
                                        <h6>Cheshire College South and West - Ellesmere Port</h6>
                                        <div class="sub-course-country">
                                            Manchester Metropolitan University (INTO)
                                        </div>
                                        <div class="sub-course-appl-bg">
                                            <div class="d-flex flex-wrap">
                                                <div class="sub-tution-text">
                                                    <h6>Tuition Fee</h6>
                                                    <p>£14,250.00 GBP</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Tuition</h6>
                                                    <p>$25,380.00 AUD</p>
                                                </div>
                                                <div class="sub-tution-text">
                                                    <h6>Application Fee</h6>
                                                    <p>Free</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub-check-now-btn sub-check-now-pd">
                                            <a href="javascript:;">Check Eligibility Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- inner page End -->

<!-- Program Intakes -->
<div class="sub-intakes-content-modal">
    <div class="modal fade VideoPopup" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Open Date Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                        <span aria-hidden="true">&times;</span> 
                    </button>
                </div>
                <div class="modal-body">
                    <p>The school has started to accept applications for this intake on 2021-12-17 12:00 AM GMT.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop