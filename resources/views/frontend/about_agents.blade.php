@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>Agents</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="javascript:;">Home</a><span> <i class="fa fa-angle-right"></i> Services <span><i class="fa fa-angle-right"></i> Agents</span></li>
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
                    <h2>Our Services For The Agent</h2>
                </div>
            </div>

            <div class="sub-serv-agent d-flex flex-wrap">
                
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Robust and reliable digital platform for relationship management</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Dedicated page on the portal for the agent with profile, contact details</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Assistance in Promoting the Study in UK Concept</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Assistance in UK University Search & Selection</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Student Admission and Visa Processing</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Off-Line & On-Line Product & Process Training</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Conduct E-Learning Webinars</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Industry Knowledge Sharing</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Carry-out Presentations and Provide Learning Materials to Boost Recruitment</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>We Have Industry’s’ Highest Revenue Sharing Program</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Become an Our IELTS Training Centre (Online or offline)</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a class="default-btn" href="{{ route('agent.register') }}">Become an Agent</a>
                </div>

            </div>

        </div>
    </div>

    <section class="sub-inner-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="main-title text-center agent-title-mt">
                        <h2>Become an Agent</h2>
                    </div>
                </div>

                <div class="sub-serv-agent d-flex flex-wrap pb-0">
                
                    <div class="col-lg-6">
                        <div class="sub-agent-content">
                            <div>
                                <div class="sub-agent-icon">
                                    <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="sub-agent-text">
                                    <h5>RRG welcomes representatives from around the world to help with the recruitment & placement of students in UK Universities.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-agent-content">
                            <div>
                                <div class="sub-agent-icon">
                                    <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="sub-agent-text">
                                    <h5>If you are interested in becoming an agent for RRG, Submit your application.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-agent-content">
                            <div>
                                <div class="sub-agent-icon">
                                    <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="sub-agent-text">
                                    <h5>We only work with professional agents or counsellors who share our values.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-agent-content">
                            <div>
                                <div class="sub-agent-icon">
                                    <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="sub-agent-text">
                                    <h5>Agents are required to undertake due diligence check and supply references.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-agent-content">
                            <div>
                                <div class="sub-agent-icon">
                                    <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="sub-agent-text">
                                    <h5>Agents will earn Commission for each student recruited successfully.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-agent-content">
                            <div>
                                <div class="sub-agent-icon">
                                    <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="sub-agent-text">
                                    <h5>If you are interested in becoming an agent, then please complete the Agency Application form and we will be in touch to begin the application process.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-agent-content">
                            <div>
                                <div class="sub-agent-icon">
                                    <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="sub-agent-text">
                                    <h5>All new Agents must go through an initial screening process, where you will meet with a member of our team for an interview.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a class="default-btn" href="{{ route('agent.register') }}">Become an Agent</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="main-title text-center sub-agent-mt">
                    <h2>What will you get from working with <span>RRG</span> International?</h2>
                </div>
            </div>

            <div class="sub-serv-agent d-flex flex-wrap">
                
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Support from a local RRG International office</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Communication in the local language</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Localised marketing and support materials</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>The widest possible portfolio of UK University and Colleges</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Agent Training support program</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Attractive Commission Structure</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Company Policies and Procedures</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Special Fees and Scholarships for Students</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>Key Selling Points for our Partners Universities</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sub-agent-content">
                        <div>
                            <div class="sub-agent-icon">
                                <img src="{{ URL::asset('public/frontend/assets/img/agent-icon/agent.png') }}" alt="" />
                            </div>
                        </div>
                        <div>
                            <div class="sub-agent-text">
                                <h5>University Specific Marketing Materials</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-agent-text-bottom">
                        <p>RRG prides itself for providing a fast response to questions and queries whether online, by telephone or face-to-face.</p>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <section class="ab-agent-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="ab-agent-info">
                        <h5>If you are interested in becoming RRG International agent, Please complete our New Agent Registration Form</h5>
                        <p>For further information contact us at <a href="mailto:agent@rrginternational.com">agent@rrginternational.com</a></p>
                        <a class="agent-btn" href="{{ route('agent.register') }}" >Become an Agent</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ab-agent-info">
                        <img src="{{ URL::asset('public/frontend/assets/img/agent-user.png') }}" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<!-- inner page End -->



@stop