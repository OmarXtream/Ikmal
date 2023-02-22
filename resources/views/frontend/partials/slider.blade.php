
    <!-- SLIDER AREA START (slider-4) -->
    <div class="ltn__slider-area ltn__slider-4 position-relative">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">
            <video autoplay muted loop id="myVideo">
                <source src="{{asset('frontend/media/3.mp4')}}" type="video/mp4">
            </video>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-7 bg-image--- bg-overlay-theme-black-30" data-bg="img/slider/41.jpg">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-car-dealer-form">
                                    <div class="section-title-area ltn__section-title-2 text-center">
                                        <h1 class="section-title  text-color-white">ابحث عن منزلك <span class="ltn__secondary-color-3">المثالي</span> </h1>
                                    </div>
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
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-2 col-md-6">
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

                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-2 col-md-6">
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
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-2 col-md-6">
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

                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-2 col-md-6">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->
