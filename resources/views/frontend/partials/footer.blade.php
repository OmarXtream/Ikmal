    
    
    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bg="{{asset('frontend/img/1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>هل تبحث عن منزل أحلامك؟</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="{{ route('PropertieRequest') }}">أطلبه الآن <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="{{asset('frontend/img/logo-2.png')}}" alt="Logo">
                                </div>
                            </div>
                            <p>تعريف الشركة</p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>الموقع</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:info@ekmal-sa.com">info@ekmal-sa.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">القائمة</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">الرئيسية</a></li>
                                    <li><a href="{{ route('property') }}">العقارات</a></li>
                                    <li><a href="{{ route('PropertieRequest') }}">طلب عقار</a></li>
                                    <li><a href="{{ route('PropertiesMarkating') }}">تسويق عقار</a></li>
                                    <li><a href="{{ route('InfoForm') }}">حلول تمويلية</a></li>
                                    <li><a href="{{ route('blog') }}">المدونة</a></li>
                                    <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">الحساب الشخصي</h4>
                            <div class="footer-menu">
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
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>جميع الحقوق محفوظة @ puzzle <span class="current-year"></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-right">
                            <ul>
                                <li><a href="{{ route('policy') }}">سياسة الخصوصية</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

   

</div>
<!-- Body main wrapper end -->

  

