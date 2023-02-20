        <!-- main-footer -->
        <footer class="main-footer">
            @if(Request::is('/'))
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>القائمة</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li class="uppercase {{ Request::is('/') ? 'underline' : '' }}">
                                            <a href="{{ route('home') }}" class="grey-text text-lighten-3">الرئيسية</a>
                                        </li>
                                        <li class="uppercase {{ Request::is('property*') ? 'underline' : '' }}">
                                            <a href="{{ route('property') }}" class="grey-text text-lighten-3">العقارات</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('PRequests*') ? 'underline' : '' }}">
                                            <a href="{{ route('PropertieRequest') }}" class="grey-text text-lighten-3">طلب عقار</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('PMarketing*') ? 'underline' : '' }}">
                                            <a href="{{ route('PropertiesMarkating') }}" class="grey-text text-lighten-3">تسويق عقار</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('InfoForm*') ? 'underline' : '' }}">
                                            <a href="{{ route('InfoForm') }}" class="grey-text text-lighten-3">حلول تمويلية</a>
                                        </li>

                                        <li class="uppercase {{ Request::is('blog*') ? 'underline' : '' }}">
                                            <a href="{{ route('blog') }}" class="grey-text text-lighten-3">المدونة</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('contact') ? 'underline' : '' }}">
                                            <a href="{{ route('contact') }}" class="grey-text text-lighten-3">تواصل معنا</a>
                                        </li>
                                                        </ul>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>العقارات الأخيرة</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach($footerproperties as $property)
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{ route('property.show',$property->slug) }}"><img src="{{Storage::url('property/'.$property->image)}}" alt=""></a></figure>
                                        <h5><a href="{{ route('property.show',$property->slug) }}">{{ str_limit($property->title,40) }}</a></h5>
                                        <p>: غرف  {{ $property->bedroom }} دورات المياه: {{ $property->bathroom }} </p>
                                    </div>
                                    @endforeach
                
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column mt-5">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-content">
                                    
                                    <div class="team-block-one">
                                        <div class="inner-box" >
                                            <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                            <div class="lower-content">
                                                <div class="inner" dir="ltr" style="background-color:#1b1d21 !important;">
                                                    <h3 class="mb-4" style="color:#fff">التواصل الاجتماعي</h3>
                                                    <ul class="social-links clearfix">
                                                        <center>
                                                        <li><a href="https://www.instagram.com/roshemcompany/" target="_blank"><i class="fab fa-instagram" dir="rtl"></i> </a></li>
                                                        <li><a href="https://www.twitter.com/roshemcompany/" target="_blank"><i class="fab fa-twitter" dir="rtl"></i> </a></li>
                                                        <li><a href="https://www.snapchat.com/add/roshemcompany" target="_blank"><i class="fab fa-snapchat" dir="rtl"></i></a></li>
                                                        <li><a href="https://www.tiktok.com/@roshemcompany" target="_blank"><img src="https://d.top4top.io/p_2578y1a0p1.png"></a></li>
                                                        <li><a href="https://www.facebook.com/people/roshemcompany/100087543796287/" target="_blank"><i class="fab fa-facebook-f" dir="rtl"></i> </a></li>


                                                        
                                                        {{-- <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li> --}}
                                                    </center>
                                                    </ul>
                                                    <hr>
                                                    <li><a href="#" target="_blank"> :التواصل <i class="fa fa-phone"></i><br>   0531852852 <br> 0531853853  </a></li>
                
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
            @endif
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        {{-- <figure class="footer-logo"><a href="{{route('home')}}"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a></figure> --}}
                        <div class="copyright pull-left">
                            @if(isset($footersettings[0]) && $footersettings[0]['footer'])
                            {{ $footersettings[0]['footer'] }}
                        @else
                            © 2022 Developer puzzle.
                        @endif
                            </div>
                            <ul class="footer-nav pull-right clearfix">
                                <li><a href="{{ route('policy') }}">سياسة الخصوصية</a></li>
                            </ul>
                                    </div>
                </div>
            </div>
        </footer>


        <!-- main-footer end -->

       <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button> 

        @if(Request::is('/'))

        <div class="floating-chat text-right">
            <i class="fa fa-search fa-lg" aria-hidden="true"></i>
            <div class="chat">
                <div class="header">
                    <span class="title">
                        البحث عن عقار
                    </span>
                    <button>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                                 
                </div>
                <div class="messages">
                    <form action="{{ route('search')}} " method="GET" class="search-form">
                        <input name="purpose" type="hidden" value="بيع">
                        <div class="row clearfix">

                        <div class="col-12 column mb-2">
                            <div class="form-group">
                                <div class="select-box">
                                    <select class="form-control" name="bedroom" class="wide">
                                       <option value="" disabled selected>عدد الغرف</option>
                                       @if(isset($bedroomdistinct))
                                            @foreach($bedroomdistinct as $bedroom)
                                                <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 column mb-2">
                            <div class="form-group">
                                <div class="select-box">
                                    <select class="form-control" name="type" class="wide">
                                       <option value="" data-display=" نوع العقار" disabled selected>نوع العقار </option>
                                       <option value="شقة">شقة</option>
                                       <option value="بيت">بيت</option>
                                       <option value="ملحق">ملحق</option>
                                       <option value="عمارة">عمارة</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                            <div class="col-12 column">
                                <div class="form-group">
                                    <div class="field-input">
                                        <input class="form-control" type="search" name="city" placeholder="مدينة-منطقة">
                                    </div>
                                </div>
                            </div>

                        <div class="col-12 column">
                                <div class="form-group">
                                    <div class="field-input">
                                        <input class="form-control" type="search" name="maxprice" placeholder="اعلى سعر مطلوب">
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        
                <div class="footer">
                    <button id="sendMessage" class="btn btn-secondary" type="submit"><i class="fas fa-search"></i>  بحث</button>
                </form>
            </div>
                </div>
            </div>
            @endif
        </div>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.js')}}"></script>
    <script src="{{asset('frontend/js/wow.js')}}"></script>
    <script src="{{asset('frontend/js/validation.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/js/appear.js')}}"></script>
    <script src="{{asset('frontend/js/scrollbar.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.paroller.min.js')}}"></script>
    <script src="{{asset('frontend/js/nav-tool.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('frontend/js/script.js')}}"></script>
