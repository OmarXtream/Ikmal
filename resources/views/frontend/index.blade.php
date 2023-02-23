@extends('frontend.layouts.app')

@section('content')
    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">العقارات</h6>
                        <h1 class="section-title">العقارات المميزه</h1>
                        </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    @foreach($properties as $property)

                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                            <a href="{{ route('property.show',$property->slug) }}"><img src="{{Storage::url('property/'.$property->image)}}" alt="{{ str_limit( $property->title, 18 ) }}"></a>
                            @else
                            <a href="{{ route('property.show',$property->slug) }}"><img src="{{$property->image}}" alt="{{ str_limit( $property->title, 18 ) }}"></a>
                            @endif
                                <div class="product-badge">
                                <ul>
                                @if($property->purpose == 'ايجار')
                                <li class="sale-badg bg-green">للإيجار</li>
                                @else
                                <li class="sale-badg bg-green---">للبيع</li>
                                @endif
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href="{{ route('property.show',$property->slug) }}"><i class="flaticon-pin"></i> {{ $property->address }} -  {{ $property->city }}</a>
                                        </li>
                                    </ul>
                                </div>                             
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>{{ $property->price }} <label>ريال</label></span>
                            </div>
                            <h2 class="product-title"><a href="{{ route('property.show',$property->slug) }}">{{ str_limit( $property->title, 18 ) }}</a></h2>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>{{ $property->bedroom}} <i class="flaticon-bed"></i></span>
                                    غرف
                                </li>
                                <li><span>{{ $property->bathroom}} <i class="flaticon-clean"></i></span>
                                    دورات المياه
                                </li>
                                <li><span>{{ $property->area}} <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    المساحة الأرضية
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-hover-action mx-auto">
                                <ul>
                                    <li>
                                        <a href="{{ route('property.show',$property->slug) }}" title="Quick View">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('property.show',$property->slug) }}" title="Wishlist">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('property.show',$property->slug) }}" title="Product Details">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
          
             
                <!--  -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->
    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">خدماتنا</h6>
                        <h1 class="section-title">لماذا تختارنا؟</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="{{asset('frontend/img/icons/icon-img/21.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="#">العقار المناسب</a></h3>
                            <p>توفير العقار بالمواصفات المطلوبة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house-3"></i></span> -->
                            <img src="{{asset('frontend/img/icons/icon-img/22.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="#">الحلول المالية</a></h3>
                            <p>حلول مالية بأقل هامش ربح مع فائض</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-deal-1"></i></span> -->
                            <img src="{{asset('frontend/img/icons/icon-img/23.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="#">نصنع الحلم</a></h3>
                            <p> فريق التمويل العقاري لضمان منزل أحلامك</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- TESTIMONIAL AREA START (testimonial-7) -->
    <div class="ltn__testimonial-area section-bg-1--- bg-image-top pt-115 pb-70" data-bg="img/bg/20.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">عملائنا</h6>
                        <h1 class="section-title">ماذا يقول عنا عملائنا؟</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-5-active slick-arrow-1">

                @foreach($testimonials as $testimonial)
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i> 
                                {{$testimonial->testimonial}}</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{Storage::url('testimonial/'.$testimonial->image)}}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>{{$testimonial->name}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach

                <!--  -->
            </div>
        </div>
    </div>

    <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-110 pb-110 plr--9 d-none---">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('frontend/partners/1.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('frontend/partners/2.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('frontend/partners/3.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('frontend/partners/4.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('frontend/partners/5.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('frontend/partners/6.png')}}" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- FEATURE AREA START ( Feature - 6) -->
        <div class="ltn__feature-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">مميزاتنا</h6>
                            <h1 class="section-title">بماذا نتميز؟</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__custom-gutter">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-apartment"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="#">التصميم الحديث</a></h4>
                                <p>تتميز عقارات إكمال بالفخامة والتصاميم العصرية الأنيقة</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 active">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-park"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="#">الاستدامة</a></h4>
                                <p>لدينا فريق متميز من أكفأ الاستشاريين والمهندسين والمصممين والمقاولين</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-maps-and-location"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="#">التنوع اللوجستي</a></h4>
                                <p>لدينا مجموعة كبيرة من الاختيارات المناسبة لجميع الأذواق</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-excavator"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="#">قدرات التنفيذ</a></h4>
                                <p>أصول المعدات والموارد البشريه الكبيرة وإدارة المشاريع لدعم تحقيق أهدافك</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE AREA END -->
    

@endsection