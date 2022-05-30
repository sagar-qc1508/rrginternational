
@extends('layouts.default')
@section('content')


<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/student-services.jpg') }});">
        <div class="container">
            <h2>Student Services</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="javascript:;">Home</a> <span><i class="fa fa-angle-right"></i> <a href="javascript:;">Services</a> <span><i class="fa fa-angle-right"></i> Student Services</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header Banner End -->

<!-- inner page -->
<main>
    <div class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ml-auto mr-auto">
                    
                    <div class="login-register-wrapper sub-study-abroad student-services-tab">

                        <div class="row">
                        
                            <div class="col-lg-4">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1"><h4>University Application Services</h4></a>
                                    <a data-toggle="tab" href="#lg2"><h4>UCAS Applications & UCAS Clearing Advice</h4></a>
                                    <a data-toggle="tab" href="#lg3"><h4>Student Finance and Scholarship</h4></a>
                                    <a data-toggle="tab" href="#lg4"><h4>Student Visa Application Service</h4></a>
                                    <a data-toggle="tab" href="#lg5"><h4>Student Accommodation services</h4></a>
                                    <a data-toggle="tab" href="#lg6"><h4>Airport pickup services</h4></a>
                                    <a data-toggle="tab" href="#lg7"><h4>Career Service</h4></a>
                                    <a data-toggle="tab" href="#lg8"><h4>LSS (Lifetime Support Systems) Services</h4></a>
                                </div>
                            </div>

                            <div class="col-lg-8">

                                <div class="tab-content">
                                    
                                    <!-- University application Services -->
                                    <div id="lg1" class="tab-pane active">
                                        <div class="main-study-ab student-services-content">
                                            <h5>University application Services</h5>
                                            <div class="student-serv-accordinon-box">

                                                <div class="accordion" id="faq">
                                                    <div class="card">
                                                        <div class="card-header" id="faqhead1"> 
                                                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">Free university and course search with online application</a> 
                                                        </div>
                                                        <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                                            <div class="student-services-white-box">
                                                                <p>We provide free advice for International, Home and EU students desiring to study in the UK.</p>
                                                                <p>RRG’s free online application support service will maximize your chances of being accepted for the University course. This service is free to all International, Home, and EU students.</p>
                                                                <p>Register, find the university and the course, and submit your online application.</p>
                                                                <p><strong>Benefits of registering online with RRG:</strong></p>
                                                                <ul>
                                                                    <li>Free 45-minute consultancy with our adviser on an online platform or in one of our offices.</li>
                                                                    <li>A list of the recommended universities to make an online application and to upload your documents.</li>
                                                                    <li>Critical review your application and personal statement</li>
                                                                    <li>Advice on what additional documents will be required.</li>
                                                                    <li>Information and advice on available scholarships</li>
                                                                    <li>Guidance on deciding which offer to accept.</li>
                                                                    <li>Support through the application process until enrolment</li>
                                                                </ul>
                                                                <p>If you are interested in studying in the UK. <span>Register Online Here</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="faqhead2"> 
                                                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">Medical Application </a> 
                                                        </div>
                                                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                                            <div class="student-services-white-box">
                                                                <p>Medicine courses are among the hardest and most competitive programs for International Students. RRG’s Education Advisers will assist you in choosing your medical school from our partner institutes and also assess your suitability for studying medicine.</p>
                                                                <p>The UK is home to two of the top three medical schools in the world, however, right across the country, you will find many excellent universities providing world-class medical tuition.</p>
                                                                <p>In the UK you can access some of the most advanced learning environments in the world, with leadership from some of the most knowledgeable minds in every discipline.</p>
                                                                <p>So whichever field of medicine you are most passionate about, a degree from a UK University will provide you the best possible launch platform for a successful career.</p>
                                                                <p>Employers worldwide, feel confident that you have the language skills, research insights, and high level of practical training, needed to hit the ground running.</p>
                                                                <p><strong>In the UK you can choose from the following specialism categories:</strong></p>
                                                                <ul>
                                                                    <li>General Practice</li>
                                                                    <li>Anaesthetics</li>
                                                                    <li>Medicine</li>
                                                                    <li>Pathology</li>
                                                                    <li>Psychiatry</li>
                                                                    <li>Radiology</li>
                                                                    <li>Surgery</li>
                                                                </ul>
                                                                <p>With over 60 specialisms within the above categories, on offer to international medical students.</p>
                                                                <p>Modular course structures allow you to adapt your learning, providing flexibly, to fit around your interests and focus.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="faqhead3"> 
                                                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">Nursing application </a> 
                                                        </div>
                                                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                                            <div class="student-services-white-box">
                                                                <p>International students wishing to register and work in the UK nursing profession are required to complete the overseas nursing programme (ONP) as part of their studies. The ONP enables international students to become registered nurses in the UK, where they are then registered to work in either the NHS or the private sector.</p>
                                                                <p>The ONP may be integrated as part of the Bachelor and Master course in international nursing studies and students can gain an undergraduate/postgraduate degree in international nursing studies, obtaining registration with the Nursing and Midwifery council (NMC) to work in the UK.</p>
                                                                <p>RRG can help you to apply for nursing in the UK, <span>Register Online</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="faqhead4"> 
                                                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4">PHD & DBA Application</a> 
                                                        </div>
                                                        <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                                            <div class="student-services-white-box">
                                                                <p>PhD (Doctor of Philosophy) is the most common type of doctoral degree and requires a student to complete a thesis on a substantial piece of research, that is judged by a team of examiners. The PhD is one of the highest awarded degrees at the UK University.</p>
                                                                <p><strong>RRG’s PhD service includes the following:</strong></p>
                                                                <ul>
                                                                    <li>Pre-screen your transcripts and ensure you will be eligible to apply.</li>
                                                                    <li>Advice on choosing a suitable university.</li>
                                                                    <li>Provide a checklist of documents required.</li>
                                                                    <li>Edit all supporting documents, including your personal statement, cv and reference letter.</li>
                                                                    <li>Review and edit your research proposal.</li>
                                                                    <li>Online application</li>
                                                                    <li>Interview preparation</li>
                                                                </ul>
                                                                <p><span>Register online</span> for Ph.D. and DBA application.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="faqhead5"> 
                                                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="true" aria-controls="faq5">Premium Application Services</a> 
                                                        </div>
                                                        <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                                            <div class="student-services-white-box">
                                                                <p>Making an application to a UK University can be time-consuming and challenging, for an international student.</p>
                                                                <p>That is why our Premium university application service, will carry out the hard work on your behalf, and get a guaranteed place at the UK University of choice.</p>
                                                                <p><strong>Our premium service includes:</strong></p>
                                                                <ul>
                                                                    <li>Unlimited consultancy with our Education Adviser, on our online platform or at one of our offices.</li>
                                                                    <li>Evaluation of your study goals and advice on your supporting documents.</li>
                                                                    <li>A list of the recommended universities for your online applications and uploading your supporting documents.</li>
                                                                    <li>Professional Preparation of your personal statement and CV by our professional writers.</li>
                                                                    <li>Guidance on the additional document requirement</li>
                                                                    <li>Offer letters from your chosen Universities.</li>
                                                                    <li>Advice on deciding which offer to accept</li>
                                                                    <li>Scholarship Guidance and application submittal</li>
                                                                    <li>Support through the application process until actual enrolment</li>
                                                                </ul>
                                                                <p><span>Register online</span> for Premium application services.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="faqhead6"> 
                                                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="true" aria-controls="faq6">UK Top Ranking University application services  </a> 
                                                        </div>
                                                        <div id="faq6" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                                            <div class="student-services-white-box">
                                                                <p>RRG specialises making applications to the Top UK ranking Universities; Cambridge University, Oxford University, Imperial College of London, University College of London, London School of Economics and Political Science, Kings College of London, including all Russell Group Universities.</p>
                                                                <p>Oxford & Cambridge universities are amongst the best universities in the world, however, making an application to Oxford & Cambridge university, is extremely tough, since there is fierce competition for the limited spaces.</p>
                                                                <p>Our Top-Ranking University Application Service will maximise your prospects of making a successful application to one of the UK's top universities or business schools.</p>
                                                                <p>Our Education Consultants have helped hundreds of students to join the world’s best universities and have the experience to make a winning application.</p>
                                                                <p>Whether you wish to study undergraduate or postgraduate level, our experts will ensure you are successful.</p>
                                                                <p><span>Register online</span> to learn about UK Top Ranking University application, entry requirement, and required documents.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- University application Services End -->

                                    <!-- UCAS Applications & UCAS Clearing Advice -->
                                    <div id="lg2" class="tab-pane">
                                        <div class="main-study-ab student-services-content">
                                            <h5>UCAS Applications & UCAS Clearing Advice</h5>
                                            <div class="student-services-white-box">
                                                <p>RRG International is an Authorised UCAS Application Centre, we guide International, Home and EU students applying to study Undergraduate and Postgraduate programs in the UK.</p>
                                                <p>Since we are an Authorised UCAS Application Centre, we provide full support throughout your UCAS application process, including helping you choose the correct Undergraduate and Postgraduate program and the correct University.</p>
                                                <p>We will provide guidance on writing your Personal Statement (SOP), your reference and preparing for any interviews or University Open Day visits.</p>
                                                <span>Contact RRG to make your UCAS application</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- UCAS Applications & UCAS Clearing Advice End -->

                                    <!-- Student Finance and Scholarship -->
                                    <div id="lg3" class="tab-pane">
                                        <div class="main-study-ab student-services-content">
                                            <h5>Student Finance and Scholarship</h5>
                                            <div class="student-services-white-box">
                                                <p>We provide general advice and assistance to International Students wishing to obtain a UK Visa either, whist in the UK or from their home country.</p>
                                                <ul>
                                                    <li>We will support you for your Credibility Interview by providing extensive training beforehand.</li>
                                                    <li>We assist UK & EU students in making their Student Finance Application</li>
                                                </ul>
                                                <p>Universities in the UK have many criteria, to offer scholarships to the students.</p>
                                                <p>Academic Education helps the students to fulfil the UK University requirements according to their performance, so that they do not miss the chance of receiving a financial waiver.</p>
                                                <p>Apart from that, students can be awarded scholarships on different terms and conditions whilst studying in the UK.</p>
                                                <span><strong>Register Online</strong>, Search scholarship and apply</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Student Finance and Scholarship End -->

                                    <!-- Student Visa Application Service -->
                                    <div id="lg4" class="tab-pane">
                                        <div class="main-study-ab student-services-content">
                                            <h5>Student Visa Application Service</h5>
                                            <div class="student-services-white-box">
                                                <p>RRG Student Visa Services offers advice and assistance to International Students wishing to obtain a UK visa.</p>
                                                <p><strong>We specialise in:</strong></p>
                                                <ul>
                                                    <li>Tier 4 General / Child student visa application from outside of the UK</li>
                                                    <li>Tier 4 General / Child student visa extension within UK</li>
                                                    <li>Student Visitor Visa</li>
                                                    <li>Student Dependent Visa</li>
                                                </ul>
                                                <p>Our sister company RRG Legal & Immigration Services Limited has extensive knowledge of all the latest immigration legislation, rules and regulations.</p>
                                                <p>In order to complete your UK study visa application, quickly register online, and check our Student Visa Guidance Section.</p>
                                                <span><strong>Register Online</strong>, Search scholarship and apply</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Student Visa Application Service End -->
                                    
                                    <!-- Student Accommodation services -->
                                    <div id="lg5" class="tab-pane">
                                        <div class="main-study-ab student-services-content">
                                            <h5>Student Accommodation services</h5>
                                            <div class="student-services-white-box">
                                                <p>RRG provides accommodation services for international students in the UK, who are seeking safe, convenient, and high-quality accommodation.</p>
                                                <p>We have partnered with a number of student accommodation providers across the UK.</p>
                                                <p>Whether you are looking for your own studio flat, a flat, a room in a private house, or a house that you can share with friends, we can provide you the finest choice in location and accommodation.</p>
                                                <span>Register online and book your accommodation</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Student Accommodation services End -->

                                    <!-- Airport pickup services -->
                                    <div id="lg6" class="tab-pane">
                                        <div class="main-study-ab student-services-content">
                                            <h5>Airport pickup services</h5>
                                            <div class="student-services-white-box">
                                                <p>We fully understand that arriving in a new country can be exciting, but also daunting, that’s reason why RRG International provides an airport pick-up service for new International Students.</p>
                                                <p>If you arrive on the day and have not pre-booked the airport pick-up service, we will try to accommodate you, however, this is not guaranteed and may involve a long waiting time.</p>
                                                <p>We strongly advise all our new International Students to pre-book an airport pickup service before departing their home country.</p>
                                                <span>Pre-book airport pickup service online.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Airport pickup services End -->

                                    <!-- Career Service -->
                                    <div id="lg7" class="tab-pane">
                                        <div class="main-study-ab student-services-content">
                                            <h5>Career Service</h5>
                                            <div class="student-services-white-box">
                                                <p>Our sister partner company RRG Recruitment and Placement Limited offers a range of services to students:</p>
                                                <ul>
                                                    <li>CV Reviewing</li>
                                                    <li>Find a suitable job for you</li>
                                                    <li>Interview preparation</li>
                                                    <li>Student internship</li>
                                                    <li>Job offers, contracts, and starting work</li>
                                                    <li>Working for yourself (self-employed or start your own business)</li>
                                                    <li>Interviews tips and advice to help you</li>
                                                </ul>
                                                <p>Register online and Arrange free consultation with <span>RRG Recruitment consultants.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Career Service End -->

                                    <!-- LSS (Lifetime Support Systems) Services -->
                                    <div id="lg8" class="tab-pane">
                                        <div class="main-study-ab student-services-content">
                                            <h5>LSS (Lifetime Support Systems) Services</h5>
                                            <div class="student-services-white-box">
                                                <p>We also have a unique client care package which we have designated "Lifetime Support System" (LSS), this provides the students, with confidence and assurance that they will be taken very good care off by the company, by this we mean, when a member of the public comes to RRG, and becomes a client by either using our services to gain International Education, seek an International Career or Immigration Services.</p>
                                                <p>Our LSS initiations immediately, and the progress of each individual student is monitored, with regular communications between RRG and the student. As the student nears the end of their course or contract, RRG will re-examine their options and advise the best solution for them, in-order for them to achieve their future goals. This service will continue until the student has achieved their goals and does not require RRG's services any further.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- LSS (Lifetime Support Systems) Services End -->

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





@stop