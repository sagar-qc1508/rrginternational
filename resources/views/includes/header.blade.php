
<!-- Header -->
<header class="header-area">
    <div class="header-top bg-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa-brands fa-whatsapp"></i> +44 7417 417482</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                        @if (Route::has('login'))
                            
                                @auth
                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form></li>
                                    {{-- @if(Auth::user()->type == 'student')
                                    <li><a href="{{ url('/student/dashboard') }}">Go To Dashboard</a></li>
                                    @elseif (Auth::user()->type == 'admin' || Auth::user()->type == 'superadmin')
                                    <li><a href="{{ url('/backoffice/dashboard') }}">Go To Dashboard</a></li>
                                    @endif --}}
                                @else
                                <li><a href="{{ route('login') }}">Studunt Login</a></li> | <li><a href="{{ route('agent.login') }}">Agent Login</a></li>
                                @endauth
                            
                        @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ URL::asset('public/frontend/assets/img/logo.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <!-- <li><a href="javascript:;">Home</a></li> -->
                                    <li><a href="javascript:;">About RRG <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('/our-company') }}">Our Company</a></li>
                                            <li><a href="{{ url('/our-team') }}">Leadership Team</a></li>
                                            <li><a href="{{ url('/accreditation-affiliation') }}">Accreditation & Affiliation</a></li>
                                            <!--<li><a href="#">Partner Universities</a></li>-->
                                            <li><a href="javascript:;">Global Location</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Study Abroad <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('/study/uk') }}">UK</a></li>
                                            <li><a href="{{ url('/study/canada') }}">Canada</a></li>
                                            <li><a href="{{ url('/study/us') }}">USA</a></li>
                                            <li><a href="{{ url('/study/australia') }}">Australia</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/courses') }}">Courses</a></li>
                                    <li><a href="{{ url('/universities') }}">Universities</a></li>
                                    <li><a href="javascript:;">Services <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('/about-students') }}">Students</a></li>
                                            <li><a href="{{ url('/about-institutes') }}">Institutes</a></li>
                                            <li><a href="{{ url('/about-agents') }}">Agents</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="javascript:;">Resources <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="javascript:;">News</a></li>
                                            <li><a href="javascript:;">Events</a></li>
                                            <li><a href="javascript:;">Picture Gallery</a></li>
                                            <li><a href="javascript:;">Video Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Contact Us <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="javascript:;">Get In Touch</a></li>
                                            <li><a href="javascript:;">Career</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                        <div class="cart-search-wrap">
                            <div class="cart-wrap">
                                <a href="javascript:;" class="apply-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <!-- <li><a href="javascript:;">Home</a></li> -->
                            <li><a href="javascript:;">About RRG </a>
                                <ul>
                                    <li><a href="{{ url('/our-company') }}">Our Company</a></li>
                                    <li><a href="javascript:;">Leadership Team</a></li>
                                    <li><a href="javascript:;">Accreditation &amp; Affiliation</a></li>
                                    <li><a href="javascript:;">Partner Universities</a></li>
                                    <li><a href="javascript:;">Global Location</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Study Abroad</a>
                                <ul>
                                    <li><a href="javascript:;">UK</a></li>
                                    <li><a href="javascript:;">Canada</a></li>
                                    <li><a href="javascript:;">USA</a></li>
                                    <li><a href="javascript:;">Australia</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Courses</a></li>
                            <li><a href="javascript:;">Universities</a></li>
                            <li><a href="javascript:;">Services</a>
                                <ul>
                                    <li><a href="javascript:;">Students</a></li>
                                    <li><a href="javascript:;">Institutes</a></li>
                                    <li><a href="javascript:;">Agents</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="javascript:;">Resources</a>
                                <ul>
                                    <li><a href="javascript:;">News</a></li>
                                    <li><a href="javascript:;">Events</a></li>
                                    <li><a href="javascript:;">Picture Gallery</a></li>
                                    <li><a href="javascript:;">Video Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Contact Us</a>
                                <ul>
                                    <li><a href="javascript:;">Get In Touch</a></li>
                                    <li><a href="javascript:;">Career</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->