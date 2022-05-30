
@extends('layouts.default')
@section('content')




<!-- Header Banner -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ URL::asset('public/frontend/assets/img/inner-banner/our-company.jpg') }});">
        <div class="container">
            <h2>UK</h2>
            <div class="inner-bread-text">
                <ul>
                    <li><a href="#">Home</a> <span> <i class="fa fa-angle-right"></i> Study Abroad</span> <span><i class="fa fa-angle-right"></i> UK</span></li>
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
                    
                    <div class="login-register-wrapper sub-study-abroad">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1"><h4 class="sub-study-brd-ft">Why Study in UK?</h4></a>
                            <a data-toggle="tab" href="#lg2"><h4>University Guide</h4></a>
                            <a data-toggle="tab" href="#lg3"><h4>Study Options</h4></a>
                            <a data-toggle="tab" href="#lg4"><h4>University Ranking</h4></a>
                            <a data-toggle="tab" href="#lg5"><h4 class="sub-study-brd-lt">Scholarship</h4></a>
                        </div>
                        <div class="tab-content">
                            <!-- Why Study in UK? -->
                            <div id="lg1" class="tab-pane active">
                                <div class="main-study-ab">
                                    
                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Why Study in UK?</h4>
                                                <p>The UK is one of the world’s most popular destinations for study higher education, with more than 500,000 international students enrolling each year.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/why-study-in-uk.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Best-Education-System-in-the-World.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Best Education System</h4>
                                                <p>UK universities have a remarkable global reputation and rank amongst the best in the world.</p>
                                                <p>Did you know that four of the top ten universities in the world are in the UK!</p>
                                                <p>A study undertaken in a UK university will also affect our daily life and is known globally for its excellence. You will engross yourself in centuries of high-quality learning by studying in the UK.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>UK Embraces International Students</h4>
                                                <p>The UK has a long history of welcoming international students studying at its universities; so those who choose to study in the UK will stand shoulder to shoulder with students from all corners of the world.</p>
                                                <p>The UK is a tolerant and multicultural country – in fact, you’ll find people here from all over the world.</p>
                                                <p>According to HESA, UK is the second most popular study destination in the world.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-study-top01 d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/UK-Embraces.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Incalculable-Courses.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Incalculable Courses to Study in the UK</h4>
                                                <p>Searching the number of courses available to International Students, demonstrates the emphasis placed on the significance of the international student studying in the UK; irrespective of age, capacity or desire to engage.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Short and Flexible Courses</h4>
                                                <p>UK universities offer greater flexibility across every subject – from 1-year postgraduate courses that let you qualify sooner, to ways you can modify your learning as you go.</p>
                                                <p>This contrasted against other countries, such as the USA, where an undergraduate degree takes at least 4 years to complete, and a master’s degree takes 2 years to finish.</p>
                                                <p>Courses in the UK are tailormade to support you to achieve the best from your studies, as quickly as possible.</p>
                                                <p>In the UK, flexibility is built into most courses. Many universities allow you to choose from different subject ‘modules’, so you can build a course program that suits your personal requirement, delivering a genuinely personalized experience.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Short-and-Flexible.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-study-top01 d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Strong-Teaching.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Strong Teaching Expectations</h4>
                                                <p>The Quality Assurance Agency for Higher Education inspects UK universities annually, to ensure they maintain the high teaching standards that are required.</p>
                                                <p>As a student, you will have the ability to be trained by the world's leading educators, become innovative and build new skillsets.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Access World Leading Research</h4>
                                                <p>The UK is a global powerhouse of science and research. With so many universities at the cutting edge of global discoveries and emerging technology.</p>
                                                <p>Building on an extraordinary heritage of new discoveries, UK universities continue to be globally recognized for their commitment to research. The UK is ranked second in the world for science and research, with 54 percent of output considered to be world-leading, that is more than Canada, Germany, and Japan.</p>
                                                <p>At UK universities you can hone your skills in state-of-the-art technology. With the very latest equipment and IT ready to use across a range of subjects, you can pursue your own research in some of the most sophisticated environments available anywhere.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Access-World.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Affordable-Education.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Affordable Education</h4>
                                                <p>Most UK undergraduate courses take three years to complete. Shorter courses mean faster graduation! with less time spent worrying about tuition fees. Most postgraduate programs are approximately one year in duration, with some courses offering a period of work placement in the industry.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Earn While You Study</h4>
                                                <p>Unlike European countries, UK supports and understands the need to earn while you study, to provide financial stability. International students undertaking a full-time undergraduate or postgraduate course at an accepted institution are entitled to work part-time for up to 20 hours a week and full-time during holiday periods.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Earn-Study.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-study-top02 d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Strong-Employability.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Strong Employability</h4>
                                                <p>Employers expect top-quality graduates with unique skills and knowledge including abilities that are reliable, analytical, and innovative in reasoning.</p>
                                                <p>Employers, universities, and governments all over the world recognize UK education. The world employment market is extremely competitive, and academic expectations for UK educated students are high.</p>
                                                <p>The knowledge gained during your studies will help you create a strong foundation, consequently improving your prospects for a better job, higher numeration package, and allow you to focus on your choice of occupation.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Developing Language Skill English</h4>
                                                <p>In today's global business setting, English is crucially relevant. Employers want candidates who have an understanding of English and there is no easier way to learn English than to learn English in their country of origin. You will embed yourself in the English language and learn to live, work and think, thereby improving your job prospects.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Developing-Language.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Living-UK.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Living in the UK</h4>
                                                <p>With its blend of multicultural cities and countryside villages, the UK has a wealth of heritage. There are many popular music events, a lot of diverse culinary, and other exciting activities to keep you engaged during your studies free time.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Support and Guidance</h4>
                                                <p>Traveling to the UK to study should be exciting, but it can be daunting too. Getting settle in a new country with different customs, language, food, and currency is a challenge.</p>
                                                <p>Thankfully, students from all over the world feel at home in UK.</p>
                                                <p>Last year UK supported over 500,000 students from 200 countries, even before setting off from their home country, right the way throughout their studies and beyond.</p>
                                                <p>Starting with friendly teaching staff, excellent pastoral and health care; the UK makes sure you have all the support and assistance you need.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study sub-study-top01 d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Support-Guidance.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Why Study in UK? End -->

                            <!-- University Guide -->
                            <div id="lg2" class="tab-pane">
                                <div class="main-study-ab">

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Applying to a UK University</h4>
                                                <p>Coming to study in the UK is your opportunity to gain the skills and confidence you need to fulfill your potential. Applying to study in the UK is a straightforward process and <strong>RRG</strong> will provide a step-by-step guide to all International students.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/applying-uk.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/UK-University-Subjects.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>UK University Subjects and Courses</h4>
                                                <p>Choosing a degree course at university is one of the most important decisions you will make as a student. However, the most common courses are economics, accounting, and business subjects.</p>
                                                <p>With over 50,000 courses and degrees offered by UK universities and colleges, our Education Advisors will guide you by providing insights into the subjects, career prospects, and options available for your undergraduate, postgraduate, or even your Ph.D. courses, so that you can make an informed decision.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Entry Requirements</h4>
                                                <p>The UK invites foreign students from all over the world, but a stringent visa procedure needs to be followed. It is critical that you are mindful of the entry requirements that impact UK students from around the world.</p>
                                                <p>The main two entry requirements are at English Language and Academic level.</p>
                                                <p>Additionally, motivation, a reference letter and proof of work experience or employability during gap years during studies are required for undergraduate and postgraduate studies at most of the highly reputed universities. The application paperwork needs to include all necessary documentation in the correct format, otherwise, it can lead to some delays in admission and, at times, to failure.</p>
                                                <p>For the period of your anticipated stay in the UK, you will require a valid and up to date passport.</p>
                                                <p>The application is assessed on a Points Based System, Tier 4.</p>
                                                <p>Under this system, 40 points are required based on two criteria:</p>
                                                <p>The university issues Certificate of Acceptance for Studies (CAS) post completing the requirements. This is worth 30 points. Proof of funds for the applicant (and your family if applicable) to live in the UK. This is worth 10 points.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study sub-study-top01 d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Entry-Requiremens.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Offer-Letter.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Offer Letter</h4>
                                                <p>Your university or college or our adviser will contact you (usually via email) to tell you whether or not you have received an offer to study. You can easily track the progress status of your application by contacting our advisors.</p>
                                                <p>If you are accepted with an UNCONDITIONAL OFFER, then you have place and you can accept straight away.</p>
                                                <p>If you are accepted with a CONDITIONAL OFFER, the place is yours, subject to you fulfilling the condition outlined in the offer letter.</p>
                                                <p>For some courses you may be asked undertake an interview, before any offer is made, this can be either a telephone interview or a skype interview.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Fees and Funding</h4>
                                                <p>You may be eligible for one of the many Scholarships available to help with the cost of your studies.</p>
                                                <p>The Numerous funding options available to International students add extra attractiveness towards UK universities. Students looking to study in the UK can easily obtain scholarships from various resources like Chevening Scholarships and Commonwealth Scholarships.</p>
                                                <p>We strongly recommend taking your time and doing some work to find a scholarship as it can hugely relieve financial burden.</p>
                                                <p><strong>RRG</strong> partners with many universities to provide scholarships, helping students, to attain a UK degree.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Fees-Funding.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Application-Deadlines.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Application Deadlines</h4>
                                                <p>Although certain institutions enforce strict deadlines, a few applications are approved all year-round.</p>
                                                <p>Most course providers welcome applications on a first-come, first-served basis, and may not close the application window until they have had an adequate interest.</p>
                                                <p>Each university sets its own timelines for application submissions. It can normally take between two weeks to two months to find out if you have a place.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Apply for a visa</h4>
                                                <p>As an international student, you need a visa to take your study place in the UK, <strong>RRG</strong> can assist with your Visa application.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/apply-visa.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/accommodation.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Accommodation</h4>
                                                <p>Having obtained your unconditional offer letter and visa, it is time to start checking flights and accommodation in the UK.</p>
                                                <p>International students are given a range of accommodation options. It is very important to ensure that your accommodation is right for you, as it will be difficult to change partly through the year.</p>
                                                <p>We recommend that first time International students stay in the university hall of residence as it is a good way to get climatised to the local area and to get know other students.</p>
                                                <p>For further autonomy, private accommodation like a studio flat, flat share or house share can be considered a feasible option in once to have settled down at the university.</p>
                                                <p>It is important that the accommodation is near to the university, as reduces commuting time.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- University Guide End -->

                            <!-- Study Options -->
                            <div id="lg3" class="tab-pane">
                                <div class="main-study-ab">
                                    
                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>English Language</h4>
                                                <p>It is best to study the English language from the country of its origin. Studying for a degree in English Literature helps to acquire a comprehensive knowledge of world literature, philosophy, and interpretation, and improve your perception of a diverse range of cultures and scholarly practices.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/English-Language.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Foundation-Courses.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Foundation Courses</h4>
                                                <p>A foundation course is a curriculum that will qualify you for a university undergraduate degree. Learning a foundation course will enable you to obtain the right level of skills and competence to obtain a degree at university, it will also help students who need extra support in English or needs a base related to their course.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Under Graduate</h4>
                                                <p>A bachelor's degree usually takes three to four years in other countries but that can vary. Studying for a bachelor's degree in the United States typically takes four years while in the United Kingdom students generally receive theirs within three years.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Under-Graduate.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Post-Graduate.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Post Graduate</h4>
                                                <p>A master’s degree is a second-level qualification after completed an undergraduate degree. Many UK Master's degree programmes can be accomplished in just one year, providing excellent value for money and enabling you to progress on more efficiently with the career. Also, many courses have an option of placement in the industry hence it gives an extra edge in the career.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-light-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>Pre-Masters</h4>
                                                <p>The UK 's Pre-Masters programmes are designed to completely prepare students for postgraduate study. A Pre-Masters will significantly enhance the English language and academic skills essential for efficient postgraduate study, as well as familiarise international students with UK teaching methods.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sub-study-text sub-img-study d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Pre-Masters.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-study-white-bg d-flex flex-wrap align-items-center justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="sub-study-text d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/PHD-Research.png') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="sub-study-text">
                                                <h4>PHD / Research</h4>
                                                <p>Full-time doctorates usually last three to four years, while part-time doctorates last six or seven years. Although at the decision of the university, the thesis deadline can be expanded for up to four years. Indeed, in year four several students enrol on three-year PhDs only finish the thesis.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Study Options End -->

                            <!-- University Ranking -->
                            <div id="lg4" class="tab-pane">
                                <div class="main-study-ab">
                                    <div class="sub-rank-text">
                                        <p>Three flagship university rankings are published regularly in the United Kingdom – by The Complete University Guide, The Guardian and collectively by The Times and The Sunday Times. In the past The Daily Telegraph and Financial Times also produced rankings.</p>
                                        <p>Each year since 2008, Times Higher Education has compiled a "Table of Tables" to combine the results of the 3 mainstream league tables. In the 2020 table, the top 5 universities were the University of Cambridge, University of Oxford, University of St Andrews, Imperial College London and Loughborough University.</p>
                                    </div>
                                    
                                    <div class="sub-rank-box d-flex flex-wrap">
                                        
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
                            <!-- University Ranking End -->
                            
                            <!-- Scholarship -->
                            <div id="lg5" class="tab-pane">
                                <div class="main-study-ab">
                                    <div class="sub-scholarship-bg">
                                        
                                        <div class="sub-scholarship-title">
                                            <h5>Scholarships for International Students in the UK</h5>
                                            <p>RRG can help students interested in studying in the UK secure scholarships, bursaries and funding.</p>
                                            <h6>"An investment in your future"</h6>
                                        </div>

                                        <div class="sub-scholarship-content d-flex flex-wrap">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p>Have you ever wondered what a UK education can do for you? Alongside a world-class qualification, studying in the UK will give you the opportunity to experience a new culture, network with students and professionals from all over the world, and gain skills to help further your career development.</p>
                                                    <p>There are various financial support options available to help fund your studies in the UK. This includes scholarships, grants, bursaries, fellowships, financial awards and loans.</p>
                                                    <p>The UK government offers hundreds of scholarships, bursaries and additional financial support to students from several countries.</p>
                                                    <p>Many institutions also offer their own financial assistance, and you can check their websites for more information.</p>
                                                    <p>We have been issued scholarships for international students who use our application services and RRG’s close relationship with UK universities, combined with our online resources, means all deserving applicants can find the right scholarship to benefit their future.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="sub-img-scholarship">
                                                        <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/investment-future.png') }}" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="sub-schol-box-bg d-flex flex-wrap">
                                                <div class="col-lg-8">
                                                    <div class="sub-schol-text">
                                                        <h3>UK University Scholarship Search</h3>
                                                        <p>Are you looking for a scholarship, grant or bursary to help fund your studies in the UK? Our comprehensive  scholarship search has hundreds of potential opportunities waiting for you.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="sub-schol-img-text">
                                                        <img src="{{ URL::asset('public/frontend/assets/img/study-abroad/Scholarship-Search-boy.png') }}" alt="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 offset-lg-4">
                                                <div class="sub-schol-btn">
                                                    <a href="javascript:;">Inquire about bursaries and scholarships</a>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Scholarship End -->

                        </div>

                        <div class="col-lg-12">
                            <div class="study-ab-btn">
                                <a href="javascript:;">Search Courses</a>
                                <a href="javascript:;">Search UK Universities</a>
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