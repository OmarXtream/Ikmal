@extends('frontend.layouts.app')



@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">العقارات</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('home')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li>قائمة العقارات</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-100 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <div class="col-lg-12 align-self-center mb-5">
                                        <div class="slide-item-car-dealer-form">
                                            <div class="ltn__car-dealer-form-tab">
                                                <div class="ltn__tab-menu  text-uppercase text-center">
                                                    <div class="nav">
                                                        <a class="active show" data-toggle="tab" href="#ltn__form_tab_1_1"><i class="fas fa-home"></i>إيجار</a>
                                                        <a data-toggle="tab" href="#ltn__form_tab_1_2" class=""><i class="fas fa-home"></i>بيع</a>
                                                    </div>
                                                </div>
                                                <div class="tab-content pb-10">
                                                    <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                                        <div class="car-dealer-form-inner">
                                                            <form action="{{ route('search')}} " method="GET" class="ltn__car-dealer-form-box row">
                                                                <input name="purpose" type="hidden" value="ايجار">
                                                                
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                                    <input class="nice-select" type="text" name="city" placeholder="مدينة-منطقة">
                                                                    
                                                                </div> 
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-building col-lg-2 col-md-6">
                                                                    <select name="type" class="nice-select">
                                                                        <option value="شقة">شقة</option>
                                                                        <option value="بيت">بيت</option>
                                                                        <option value="ملحق">ملحق</option>
                                                                        <option value="عمارة">عمارة</option>
                                                                 </select>
                                                                </div> 
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                                    <input class="nice-select" type="number" name="maxprice" placeholder="الحد الأعلى للسعر">
                                                                    
                                                                </div> 
        
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-door col-lg-2 col-md-6">
                                                                    <select  name="bedroom" class="nice-select">
                                                                        <option value="" disabled selected>عدد الغرف</option>
                                                                        @if(isset($bedroomdistinct))
                                                                             @foreach($bedroomdistinct as $bedroom)
                                                                                 <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                                                             @endforeach
                                                                         @endif
                                                                 </select>
                                                                </div> 
                                                            
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-2 col-md-6">
                                                                    <div class="btn-wrapper text-center mt-0">
                                                                       <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">بحث</button> 
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="ltn__form_tab_1_2">
                                                        <div class="car-dealer-form-inner">
                                                            <form action="{{ route('search')}} " method="GET" class="ltn__car-dealer-form-box row">
                                                                <input name="purpose" type="hidden" value="بيع">
                                                                
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                                    <input class="nice-select" type="text" name="city" placeholder="مدينة-منطقة">
                                                                    
                                                                </div> 
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-building col-lg-2 col-md-6">
                                                                    <select name="type" class="nice-select">
                                                                        <option value="شقة">شقة</option>
                                                                        <option value="بيت">بيت</option>
                                                                        <option value="ملحق">ملحق</option>
                                                                        <option value="عمارة">عمارة</option>
                                                                 </select>
                                                                </div> 
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                                    <input class="nice-select" type="number" name="maxprice" placeholder="الحد الأعلى للسعر">
                                                                    
                                                                </div> 
        
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-door col-lg-2 col-md-6">
                                                                    <select  name="bedroom" class="nice-select">
                                                                        <option value="" disabled selected>عدد الغرف</option>
                                                                        @if(isset($bedroomdistinct))
                                                                             @foreach($bedroomdistinct as $bedroom)
                                                                                 <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                                                             @endforeach
                                                                         @endif
                                                                 </select>
                                                                </div> 
                                                            
                                                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-2 col-md-6">
                                                                    <div class="btn-wrapper text-center mt-0">
                                                                       <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">بحث</button> 
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                    @foreach($properties as $property)

                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">

                                                @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                                                <a href="{{ route('property.show',$property->slug) }}"><img src="{{Storage::url('property/'.$property->image)}}" alt="{{ str_limit( $property->title, 18 ) }}"></a>
                                                @else
                                                <a href="{{ route('property.show',$property->slug) }}"><img src="{{$property->image}}" alt="{{ str_limit( $property->title, 18 ) }}"></a>
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
                                                            <a href="{{ route('property.show',$property->slug) }}" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>{{ $property->price }} <label>ريال</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            {{ $properties->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->
        
@endsection
