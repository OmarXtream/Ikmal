@if(Request::is('/'))
<header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-transparent gradient-color-4---">
    <!-- ltn__header-top-area start -->
   
@else
<header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
    <!-- ltn__header-top-area start -->
    {{-- <div class="ltn__header-top-area top-area-color-white d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                            <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-right">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__language-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                        <ul>
                                            <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                <ul>
                                                    <li><a href="#">Arabic</a></li>
                                                    <li><a href="#">Bengali</a></li>
                                                    <li><a href="#">Chinese</a></li>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Hindi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            
                                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->    --}}
@endif
    
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{ route('home') }}"><img src="{{asset('frontend/img/logo-2.png')}}" alt="Logo"></a>
                        </div>
                        <div class="get-support clearfix d-none">
                            <div class="get-support-icon">
                                <i class="icon-call"></i>
                            </div>
                            <div class="get-support-info">
                                <h6>Get Support</h6>
                                <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column @if(Request::is('/')) menu-color-white @endif">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">الرئيسية</a></li>
                                    <li><a href="{{ route('property') }}">العقارات</a></li>
                                    <li><a href="{{ route('PropertiesMarkating') }}">تسويق عقار</a></li>
                                    <li class="menu-icon"><a href="{{ route('InfoForm') }}">حلول تمويلية</a></li>
                                    <li><a href="{{ route('blog') }}">المدونة</a></li>
                                    <li><a href="{{ route('contact') }}">تواصل معنا</a></li>

                                    <li class="special-link">
                                        <a href="{{ route('PropertieRequest') }}">طلب عقار</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ltn__header-options ltn__header-options-2 mb-sm-20 d-none d-md-block d-lg-block">
               
                    <!-- user-menu -->
                    <div class="ltn__drop-menu user-menu">
                        <ul>
                            <li>
                                <a href="#"><i class="icon-user"></i></a>
                                <ul>
                                    @guest
                                    <li><a href="{{route('login')}}">تسجيل الدخول</a></li>
                                    <li><a href="{{route('register')}}">تسجيل جديد</a></li>
                                    @endguest
                                    @auth
                                    <li><small>{{Auth::user()->name}}</small></li>

                                    @if(Auth::user()->role_id == 1)
                                    <li><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
                                    @endif
                                    <li>
                                        <a class="dropdownitem indigo-text" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="material-icons"></i>تسجيل الخروج
                                        </a>
            
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
            
                                        </ul>
                                    </li>     
            
                                    @endauth
                                            </ul>
                            </li>
                        </ul>
                    </div>
                 
                   
                </div>
                <div class="ltn__header-options ltn__header-options-2 ">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->


<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="{{ route('home') }}"><img src="{{asset('frontend/img/logo-2.png')}}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
   
        <div class="ltn__utilize-menu">
            <ul>
            <li><a href="{{ route('home') }}">الرئيسية</a></li>
            <li><a href="{{ route('property') }}">العقارات</a></li>
            <li><a href="{{ route('PropertieRequest') }}">طلب عقار</a></li>
            <li><a href="{{ route('PropertiesMarkating') }}">تسويق عقار</a></li>
            <li class="menu-icon"><a href="{{ route('InfoForm') }}">حلول تمويلية</a></li>
            <li><a href="{{ route('blog') }}">المدونة</a></li>
            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
            </ul>

</div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        <ul>
                            @guest
                            <li><a href="{{route('login')}}">تسجيل الدخول</a></li>
                            <li><a href="{{route('register')}}">تسجيل جديد</a></li>
                            @endguest
                            @auth
                            <li><small>{{Auth::user()->name}}</small></li>

                            @if(Auth::user()->role_id == 1)
                            <li><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
                            @endif
                            <li>
                                <a class="dropdownitem indigo-text" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="material-icons"></i>تسجيل الخروج
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
    
                                </ul>
                            </li>     
    
                            @endauth
                                    </ul>
                </li>
          
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>