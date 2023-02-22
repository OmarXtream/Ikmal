@extends('frontend.layouts.app')

@section('content')

<div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">العقارات</h6>
                    <h1 class="section-title">العقارات المميزه</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-three-active slick-arrow-1">

            @foreach($properties as $property)

            <div class="col-xl-4 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                        <a href="{{ route('property.show',$property->slug) }}"><img src="{{Storage::url('property/'.$property->image)}}" alt="#"></a>
                        @else
                        <a href="{{ route('property.show',$property->slug) }}"><img src="{{asset('frontend/img/product-3/1.jpg')}}" alt="#"></a>
                        @endif
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                @if($property->purpose == 'ايجار')
                                <li class="sale-badg">للإيجار</li>
                                @else
                                <li class="sale-badg">للبيع</li>
                                @endif
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="{{ route('property.show',$property->slug) }}">{{ str_limit( $property->title, 18 ) }}</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="{{ route('property.show',$property->slug) }}"><i class="flaticon-pin"></i> {{ $property->address }} -  {{ $property->city }}</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                            <li><span>{{ $property->bedroom}} </span>
                                غرف
                            </li>
                            <li><span>{{ $property->bathroom}} </span>
                                دورات المياه
                            </li>
                            <li><span>{{ $property->area}} </span>
                                المساحة الأرضية
                            </li>
                        </ul>
                        <div class="product-hover-action">
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
                                    <a href="{{ route('property.show',$property->slug) }}" title="تفاصيل أكثر">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>{{ $property->price }}<label>ريال</label></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
  









    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                        <h1 class="section-title">Our Main Focus</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="img/icons/icon-img/21.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">Buy a home</a></h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                            <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house-3"></i></span> -->
                            <img src="img/icons/icon-img/22.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">Rent a home</a></h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                            <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-deal-1"></i></span> -->
                            <img src="img/icons/icon-img/23.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">Sell a home</a></h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                            <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->


    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area">
        <div class="container-fluid">
            <div class="row ltn__image-slider-4-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/21.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/21.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Heart of NYC</h6>
                                <h1><a href="portfolio-details.html">Manhattan </a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/22.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/22.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>The luxury crib</h6>
                                <h1><a href="portfolio-details.html">Upper East Side</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/23.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/23.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>The Best City</h6>
                                <h1><a href="portfolio-details.html">Jersey City</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/24.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/24.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Friendly neighborhood</h6>
                                <h1><a href="portfolio-details.html">Queens </a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/22.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/22.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>The perfect city</h6>
                                <h1><a href="portfolio-details.html">Greenville</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- APARTMENTS PLAN AREA START -->
    <div class="ltn__apartments-plan-area pt-90 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Apartment Sketch</h6>
                        <h1 class="section-title">Apartments Plan</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center">
                        <div class="nav">
                            <a data-toggle="tab" href="#liton_tab_3_1">The Studio</a>
                            <a class="active show"  data-toggle="tab" href="#liton_tab_3_2">Deluxe Portion</a>
                            <a data-toggle="tab" href="#liton_tab_3_3" class="">Penthouse</a>
                            <a data-toggle="tab" href="#liton_tab_3_4" class="">Top Garden</a>
                            <a data-toggle="tab" href="#liton_tab_3_5" class="">Double Height</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="liton_tab_3_1">
                            <div class="ltn__apartments-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>The Studio</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="img/others/10.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>Deluxe Portion</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="img/others/10.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>Penthouse</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="img/others/10.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>Top Garden</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="img/others/10.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_5">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>Double Height</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="img/others/10.png" alt="#">
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
    <!-- APARTMENTS PLAN AREA END -->

    <!-- TESTIMONIAL AREA START (testimonial-7) -->
    <div class="ltn__testimonial-area section-bg-1--- bg-image-top pt-115 pb-70" data-bg="img/bg/20.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>
                        <h1 class="section-title">Clients Feedback</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-5-active slick-arrow-1">
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i> 
                                Precious ipsum dolor sit amet
                                consectetur adipisicing elit, sed dos
                                mod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad min
                                veniam, quis nostrud Precious ips
                                um dolor sit amet, consecte</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i> 
                                Precious ipsum dolor sit amet
                                consectetur adipisicing elit, sed dos
                                mod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad min
                                veniam, quis nostrud Precious ips
                                um dolor sit amet, consecte</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i> 
                                Precious ipsum dolor sit amet
                                consectetur adipisicing elit, sed dos
                                mod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad min
                                veniam, quis nostrud Precious ips
                                um dolor sit amet, consecte</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i> 
                                Precious ipsum dolor sit amet
                                consectetur adipisicing elit, sed dos
                                mod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad min
                                veniam, quis nostrud Precious ips
                                um dolor sit amet, consecte</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->

    <!-- BLOG AREA START (blog-3) -->
    <div class="ltn__blog-area pt-115--- pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>
                        <h1 class="section-title">Leatest News Feeds</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/1.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">10 Brilliant Ways To Decorate Your Home</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/2.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">The Most Inspiring Interior Design Of 2021</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/3.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Recent Commercial Real Estate Transactions</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/4.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Room</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/5.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">7 home trends that will shape your house in 2021</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->


@endsection