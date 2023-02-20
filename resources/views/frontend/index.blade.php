@extends('frontend.layouts.app')

@section('styles')
<style>
@import 'https://fonts.googleapis.com/css?family=Noto+Sans';

 .floating-chat {
     z-index: 999;
	 cursor: pointer;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 color: white;
	 position: fixed;
	 bottom: 120px;
	 right: 10px;
	 width: 80px;
	 height: 80px;
	 transform: translateY(70px);
	 transition: all 250ms ease-out;
	 border-radius: 50%;
	 opacity: 0;
	 background: -moz-linear-gradient(-45deg, #114962 0, #114962 25%, #114962 50%, #114962 75%, #114962 100%);
	 background: -webkit-linear-gradient(-45deg, #114962 0, #114962 25%, #114962 50%, #114962 75%, #114962 100%);
	 background-repeat: no-repeat;
	 background-attachment: fixed;
     margin-right: 5px;
}
 .floating-chat.enter:hover {
	 box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
	 opacity: 1;
}
 .floating-chat.enter {
	 transform: translateY(0);
	 opacity: 0.6;
	 box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.12), 0px 1px 2px rgba(0, 0, 0, 0.14);
}
 .floating-chat.expand {
    background-color:white !important;
     z-index: 999;
	 width: 300px;
	 max-height: 450px;
	 height: 450px;
	 border-radius: 5px;
	 cursor: auto;
	 opacity: 1;
}
 .floating-chat :focus {
	 outline: 0;
	 box-shadow: 0 0 3pt 2pt rgba(14, 200, 121, 0.3);
}
 .floating-chat button {
	 background: transparent;
	 color: white;
	 text-transform: uppercase;
	 border-radius: 3px;
	 cursor: pointer;
}
 .floating-chat .chat {
	 display: flex;
	 flex-direction: column;
	 position: absolute;
	 opacity: 0;
	 width: 1px;
	 height: 1px;
	 border-radius: 50%;
	 transition: all 250ms ease-out;
	 margin: auto;
	 top: 0;
	 left: 0;
	 right: 0;
	 bottom: 0;
}
 .floating-chat .chat.enter {
	 opacity: 1;
	 border-radius: 0;
	 margin: 10px;
	 width: auto;
	 height: auto;
}
 .floating-chat .chat .header {
	 flex-shrink: 0;
	 display: flex;
	 background: transparent;
}
 .floating-chat .chat .header .title {
	 flex-grow: 1;
	 flex-shrink: 1;
	 padding: 0 5px;
}
 .floating-chat .chat .header button {
	 flex-shrink: 0;
}
 .floating-chat .chat .messages {
	 padding: 10px;
	 margin: 0;
	 list-style: none;
	 overflow-y: scroll;
	 overflow-x: hidden;
	 flex-grow: 1;
	 border-radius: 4px;
	 background: transparent;
}
 .floating-chat .chat .messages::-webkit-scrollbar {
	 width: 5px;
}
 .floating-chat .chat .messages::-webkit-scrollbar-track {
	 border-radius: 5px;
	 background-color: rgba(25, 147, 147, 0.1);
}
 .floating-chat .chat .messages::-webkit-scrollbar-thumb {
	 border-radius: 5px;
	 background-color: rgba(25, 147, 147, 0.2);
}
 .floating-chat .chat .messages li {
	 position: relative;
	 clear: both;
	 display: inline-block;
	 padding: 14px;
	 margin: 0 0 20px 0;
	 font: 12px/16px 'Noto Sans', sans-serif;
	 border-radius: 10px;
	 background-color: rgba(25, 147, 147, 0.2);
	 word-wrap: break-word;
	 max-width: 81%;
}
 .floating-chat .chat .messages li:before {
	 position: absolute;
	 top: 0;
	 width: 25px;
	 height: 25px;
	 border-radius: 25px;
	 content: '';
	 background-size: cover;
}
 .floating-chat .chat .messages li:after {
	 position: absolute;
	 top: 10px;
	 content: '';
	 width: 0;
	 height: 0;
	 border-top: 10px solid rgba(25, 147, 147, 0.2);
}
 .floating-chat .chat .messages li.other {
	 animation: show-chat-odd 0.15s 1 ease-in;
	 -moz-animation: show-chat-odd 0.15s 1 ease-in;
	 -webkit-animation: show-chat-odd 0.15s 1 ease-in;
	 float: right;
	 margin-right: 45px;
	 color: #0ad5c1;
}
 .floating-chat .chat .messages li.other:before {
	 right: -45px;
	 background-image: url(https://github.com/Thatkookooguy.png);
}
 .floating-chat .chat .messages li.other:after {
	 border-right: 10px solid transparent;
	 right: -10px;
}
 .floating-chat .chat .messages li.self {
	 animation: show-chat-even 0.15s 1 ease-in;
	 -moz-animation: show-chat-even 0.15s 1 ease-in;
	 -webkit-animation: show-chat-even 0.15s 1 ease-in;
	 float: left;
	 margin-left: 45px;
	 color: #0ec879;
}
 .floating-chat .chat .messages li.self:before {
	 left: -45px;
	 background-image: url(https://github.com/ortichon.png);
}
 .floating-chat .chat .messages li.self:after {
	 border-left: 10px solid transparent;
	 left: -10px;
}
 .floating-chat .chat .footer {
	 flex-shrink: 0;
	 display: flex;
	 padding-top: 10px;
	 max-height: 90px;
	 background: transparent;
}
 .floating-chat .chat .footer .text-box {
	 border-radius: 3px;
	 background: rgba(25, 147, 147, 0.2);
	 min-height: 100%;
	 width: 100%;
	 margin-right: 5px;
	 color: #0ec879;
	 overflow-y: auto;
	 padding: 2px 5px;
}
 .floating-chat .chat .footer .text-box::-webkit-scrollbar {
	 width: 5px;
}
 .floating-chat .chat .footer .text-box::-webkit-scrollbar-track {
	 border-radius: 5px;
	 background-color: rgba(25, 147, 147, 0.1);
}
 .floating-chat .chat .footer .text-box::-webkit-scrollbar-thumb {
	 border-radius: 5px;
	 background-color: rgba(25, 147, 147, 0.2);
}
 @keyframes show-chat-even {
	 0% {
		 margin-left: -480px;
	}
	 100% {
		 margin-left: 0;
	}
}
 @-moz-keyframes show-chat-even {
	 0% {
		 margin-left: -480px;
	}
	 100% {
		 margin-left: 0;
	}
}
 @-webkit-keyframes show-chat-even {
	 0% {
		 margin-left: -480px;
	}
	 100% {
		 margin-left: 0;
	}
}
 @keyframes show-chat-odd {
	 0% {
		 margin-right: -480px;
	}
	 100% {
		 margin-right: 0;
	}
}
 @-moz-keyframes show-chat-odd {
	 0% {
		 margin-right: -480px;
	}
	 100% {
		 margin-right: 0;
	}
}
 @-webkit-keyframes show-chat-odd {
	 0% {
		 margin-right: -480px;
	}
	 100% {
		 margin-right: 0;
	}
}
 
</style>  
@endsection
@section('content')
        <!-- feature-style-two -->
        <section class="feature-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>العقارات</h5>
                    <h2>العقارات المميزه</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-two">
                    @foreach($properties as $property)

                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                                <figure class="image"><img src="{{Storage::url('property/'.$property->image)}}" alt=""></figure>
                                @else
                                <figure class="image"><img src="{{asset('frontend/images/feature/feature-1.jpg')}}" alt=""></figure>
                                @endif

                                <span class="category">مميز</span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="{{Storage::url('users/'.$property->user->image)}}" alt=""></figure>
                                     </div>
                                  
                                     <div class="buy-btn pull-right"><a href="{{ route('property.show',$property->slug) }}">{{ ucfirst($property->type) }} - {{ $property->purpose }}</a></div>
                                     <div class="title-text"><h4><a href="{{ route('property.show',$property->slug) }}">{{ str_limit( $property->title, 18 ) }}</a></h4></div>

                                </div>
                                 <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>تبدأ من</h6>
                                              <h4 dir="rtl">   {{ $property->price }} ريال </h4> 
                                    </div>
                                    <ul class="other-option pull-right clearfix">
                                        <li><a href="{{ route('property.show',$property->slug) }}"><i class="icon-13"></i></a></li>
                                    </ul>
                                </div>
                                 <ul class="more-details clearfix" dir="rtl">
                                 <center>

                                    <i class="icon-14"> غرف: {{ $property->bedroom}}  </i>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;

                                    <i class="icon-15"> دورات المياه : {{ $property->bathroom}}  </i>
                                    <br>
                                      <i class="icon-16"> المساحة الارضية: {{ $property->area}} </i> 
</center>

                                 </ul>
                                 <center>

                                <div class="btn-box"><a href="{{ route('property.show',$property->slug) }}" class="theme-btn btn-two">تفاصيل أكثر</a></div>
                                </center>
    </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="more-btn centred"><a href="{{ route('property') }}" class="theme-btn btn-one"> جميع العقارات</a></div>
            </div>
        </section>
        <!-- feature-style-two end -->


        <section class="feature-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>العقارات</h5>
                    <h2>أحدث العقارات</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    @foreach($Normalproperties as $Nproperty)

                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                @if(Storage::disk('public')->exists('property/'.$Nproperty->image) && $Nproperty->image)
                                <figure class="image"><img src="{{Storage::url('property/'.$Nproperty->image)}}" alt=""></figure>
                                @else
                                <figure class="image"><img src="{{asset('frontend/images/feature/feature-1.jpg')}}" alt=""></figure>
                                @endif

                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">مميز</span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="{{Storage::url('users/'.$Nproperty->user->image)}}" alt=""></figure>
                                        <h6>{{ $Nproperty->user->name }}</h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a href="{{ route('property.show',$Nproperty->slug) }}">{{ ucfirst($Nproperty->type) }} - {{ $Nproperty->purpose }}</a></div>
                                </div>
                                <div class="title-text"><h4><a href="{{ route('property.show',$Nproperty->slug) }}">{{ str_limit( $Nproperty->title, 18 ) }}</a></h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>تبدأ من</h6>
                                        <h4>{{ $Nproperty->price }}</h4>
                                    </div>
                                    <ul class="other-option pull-right clearfix">
                                        <li><a href="{{ route('property.show',$Nproperty->slug) }}"><i class="icon-12"></i></a></li>
                                        <li><a href="{{ route('property.show',$Nproperty->slug) }}"><i class="icon-13"></i></a></li>
                                    </ul>
                                </div>
                                <p>{{ str_limit( $Nproperty->title, 18 ) }}</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i>غرف: {{ $Nproperty->bedroom}}</li>
                                    <li><i class="icon-15"></i>دورات المياه: {{ $Nproperty->bathroom}}</li>
                                    <li><i class="icon-16"></i>المساحة الارضية: {{ $Nproperty->area}}</li>
                                </ul>
                                <div class="btn-box"><a href="{{ route('property.show',$Nproperty->slug) }}" class="theme-btn btn-two">تفاصيل أكثر</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="more-btn centred"><a href="{{ route('property') }}" class="theme-btn btn-one"> جميع العقارات</a></div>
            </div>
        </section>


                <!-- chooseus-section -->
                <section class="chooseus-section alternate-2 bg-color-1">
                    <div class="auto-container">
                        <div class="upper-box clearfix">
                            <div class="sec-title">
                                <h5>خدماتنا </h5>
                                <h2>لماذا تختارنا؟</h2>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-25"></i></div>
                                            <h4>التسويق العقاري</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-26"></i></div>
                                            <h4>حلول مالية بأقل هامش ربح مع فائض</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-3"></i></div>
                                            <h4>توفير العقار بالمواصفات المطلوبة</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-24"></i></div>
                                            <h4>عمل محتسب تمويل عقاري</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-19"></i></div>
                                            <h4>رفع الطلب للتمويل العقاري</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>توفير الدفعة الأولى للعقار</h4>
                                        </div>
                                    </div>
                                </div>


                                
                            </div>
                        </div>
                    </div>
                </section>



        
                <!-- chooseus-section end -->
                <section class="deals-section sec-pad text-center">
                    <div class="auto-container">
                        <div class="sec-title">
                            <h5>من نحن</h5>
                            <h2> روشم للتطوير العقاري</h2>
                        </div>
                        <div class="row gx-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3" style="padding-left: 80px !important;">
                            
                                    <h3><i class="fa fa-eye fa-lg"></i> الرؤية</h3>
                                    <p class="grey-text text-lighten-4 mt-2 text-justify">
                                        روشم للتطوير العقاري منذ تأسيسها أثرت روشم للتطوير العقاري السوق العقاري بممارسة عقارية فريدة أحدثت نقلة نوعية في سوق العقار المحلي من خلال تنفيذ وإنجاز المشاريع العملاقة فحازت بذلك على رضا عملائها وثقتهم من خلال نجاحها بتنفيذ وإنجاز العديد من المشاريع والاستثمارات العقارية الكبيرة داخل المملكة 
                                    </p>
                        </div>
                        
                    <div class="col-lg-6 col-md-6 col-sm-12 p-3 pr-5" style="padding-right: 80px !important;">

                                    <h3><i class="fa fa-bullseye fa-lg"></i> الهدف</h3>
                                    <p class="grey-text text-lighten-4 mt-2 text-justify">
                                        تهدف روشم للتطوير العقاري من خلال سلسلة الأنشطة العقارية التي تمارسها الى تقديم خدماتها في كل مجالات التطوير والاستثمار العقاري مثل التطوير العقاري والتخطيط والتسويق واثراء السوق العقاري في المملكة العربية السعودية طبقا للمعايير والمواصفات القياسية العالمية للجودة مع كامل الحرص على مواكبة التطور الذي تشهده بلادنا الغالية والمتمثل برؤية المملكة ٢٠٣٠ والتي تطمح المملكة من خلاها للوصول لأفضل عشر دول على المستوى الاقتصادي. 
                                    </p>

                        </div>
                    </div>

                    </div>
                </section>


                <section class="chooseus-section alternate-2 bg-color-1">
                    <div class="auto-container">
                        <div class="upper-box clearfix">
                            <div class="sec-title">
                                <h5>مميزاتنا</h5>
                                <h2>بماذا نتميز؟</h2>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-25"></i></div>
                                            <h4>تتميز عقارات روشم بالفخامة والتصاميم العصرية الأنيقة</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-26"></i></div>
                                            <h4>لدينا فريق متميز من أكفأ الاستشاريين والمهندسين والمصممين والمقاولين</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-3"></i></div>
                                            <h4>لدينا مجموعة كبيرة من الاختيارات المناسبة لجميع الأذواق</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-24"></i></div>
                                            <h4>لدينا فريق على دراية عالية بكافة اجراءات التمويل العقاري لضمان حصولك على منزل أحلامك بأسرع وقت ممكن</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        <!-- testimonial-style-two -->
        <section class="testimonial-style-two" style="background-color:#1B1D21;">
            <div class="auto-container">
                <div class="sec-title" style="text-align: center">
                    {{-- <h5>الشهائد والتوصيات</h5> --}}
                    <h2 style="color: #fff">ماذا يقول عنا عملائنا؟</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 inner-column">
                        <div class="single-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                            @foreach($testimonials as $testimonial)

                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>{{$testimonial->testimonial}}</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{Storage::url('testimonial/'.$testimonial->image)}}" alt=""></figure>
                                        <h4>{{$testimonial->name}}</h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->


        <section class="testimonial-section bg-color-1 centred" id="testimonial">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>شركائنا</h5>
                    <h2>في روشم نفتخر بشركاء النجاح الذين يقدمون الدعم لنا في المشاريع العقارية والتجارية المختلفة</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="row">
                                <div class="col-4"><img src="{{asset('frontend/partners/1.png')}}" alt=""></div>
                                <div class="col-4"><img src="{{asset('frontend/partners/2.png')}}" alt=""></div>
                                <div class="col-4"><img src="{{asset('frontend/partners/3.png')}}" alt=""></div>
                            </div>
                            </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="row">
                                <div class="col-4"><img src="{{asset('frontend/partners/4.png')}}" alt=""></div>
                                <div class="col-4"><img src="{{asset('frontend/partners/5.png')}}" alt=""></div>
                                <div class="col-4"><img src="{{asset('frontend/partners/6.png')}}" alt=""></div>
                            </div>
                            </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="row">
                                <div class="col-4"><img src="{{asset('frontend/partners/7.png')}}" alt=""></div>
                                <div class="col-4"><img src="{{asset('frontend/partners/8.png')}}" alt=""></div>
                                <div class="col-4"><img src="{{asset('frontend/partners/9.png')}}" alt=""></div>
                            </div>
                            </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="row">
                                <div class="col-4"><img src="{{asset('frontend/partners/10.png')}}" alt=""></div>
                                <div class="col-4"><img src="{{asset('frontend/partners/11.png')}}" alt=""></div>
                            </div>
                            </div>
                    </div>


                </div>

            </div>
        </section>




        <section class="location-section">
            <div class="map-column">
            <div class="google-map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.2197689597906!2d39.19769001494197!3d21.577342985703815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x740d236ab452f26d!2zMjHCsDM0JzM4LjQiTiAzOcKwMTEnNTkuNiJF!5e0!3m2!1sen!2ssa!4v1670094031187!5m2!1sen!2ssa" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
        </section>
@endsection

@section('scripts')
<script>
    $(function(){
        var js_properties = <?php echo json_encode($properties);?>;
        js_properties.forEach(element => {
            if(element.rating){
                var elmt = element.rating;
                var sum = 0;
                for( var i = 0; i < elmt.length; i++ ){
                    sum += parseFloat( elmt[i].rating ); 
                }
                var avg = sum/elmt.length;
                if(isNaN(avg) == false){
                    $("#propertyrating-"+element.id).rateYo({
                        rating: avg,
                        starWidth: "20px",
                        readOnly: true
                    });
                }else{
                    $("#propertyrating-"+element.id).rateYo({
                        rating: 0,
                        starWidth: "20px",
                        readOnly: true
                    });
                }
            }
        });
    })


    var element = $('.floating-chat');
var myStorage = localStorage;

if (!myStorage.getItem('chatID')) {
    myStorage.setItem('chatID', createUUID());
}

setTimeout(function() {
    element.addClass('enter');
}, 1000);

element.click(openElement);

function openElement() {
    var messages = element.find('.messages');
    var textInput = element.find('.text-box');
    element.find('>i').hide();
    element.addClass('expand');
    element.find('.chat').addClass('enter');
    element.off('click', openElement);
    element.find('.header button').click(closeElement);
    element.find('#sendMessage').click(sendNewMessage);
    messages.scrollTop(messages.prop("scrollHeight"));
}

function closeElement() {
    element.find('.chat').removeClass('enter').hide();
    element.find('>i').show();
    element.removeClass('expand');
    element.find('.header button').off('click', closeElement);
    element.find('#sendMessage').off('click', sendNewMessage);
    element.find('.text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
    setTimeout(function() {
        element.find('.chat').removeClass('enter').show()
        element.click(openElement);
    }, 500);
}

function createUUID() {
    // http://www.ietf.org/rfc/rfc4122.txt
    var s = [];
    var hexDigits = "0123456789abcdef";
    for (var i = 0; i < 36; i++) {
        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
    }
    s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
    s[8] = s[13] = s[18] = s[23] = "-";

    var uuid = s.join("");
    return uuid;
}

function sendNewMessage() {
    var userInput = $('.text-box');
    var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

    if (!newMessage) return;

    var messagesContainer = $('.messages');

    messagesContainer.append([
        '<li class="self">',
        newMessage,
        '</li>'
    ].join(''));

    // clean out old message
    userInput.html('');
    // focus on input
    userInput.focus();

    messagesContainer.finish().animate({
        scrollTop: messagesContainer.prop("scrollHeight")
    }, 250);
}

function onMetaAndEnter(event) {
    if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
        sendNewMessage();
    }
}

</script>


@endsection