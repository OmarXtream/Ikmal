@extends('frontend.layouts.app')

@section('content')


    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">{{ $property->title }}</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('home')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li>{{ $property->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->


  <!-- IMAGE SLIDER AREA START (img-slider-3) -->
  <div class="ltn__img-slider-area mb-90 mt-4">
    <div class="container-fluid">
        <div class="row ltn__image-slider-3-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">

            @if(!$property->gallery->isEmpty())

            @foreach($property->gallery as $gallery)

            <div class="col-lg-12">
                <div class="ltn__img-slide-item-4">
                    <a href="{{Storage::url('property/gallery/'.$gallery->name)}}" data-rel="lightcase:myCollection">
                        <img src="{{Storage::url('property/gallery/'.$gallery->name)}}" alt="{{$property->title}}">
                    </a>
                </div>
            </div>

           @endforeach

           @else
           <div class="col-lg-12">
            <div class="ltn__img-slide-item-4">
                @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)

                <a href="{{Storage::url('property/'.$property->image)}}" data-rel="lightcase:myCollection">
                    <img src="{{Storage::url('property/'.$property->image)}}" alt="{{$property->title}}">
                </a>
                @else
                
                <a href="{{$property->image}}" data-rel="lightcase:myCollection">
                    <img src="{{$property->image}}" alt="{{$property->title}}">
                </a>
                @endif
            </div>
        </div>

           <div class="single-image">
               @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
               <figure class="image-box"><img src="{{Storage::url('property/'.$property->image)}}" alt="{{$property->title}}"></figure>
               @else
               <figure class="image-box"><img src="{{$property->image}}" alt="{{$property->title}}"></figure>
               @endif
           </div>


           @endif
        </div>
    </div>
</div>

@if (session()->has('message'))
<div class="text-center alert alert-light">
    <h3 style="font-weight: bold; color:#000">{{ session('message') }}</h3>
</div>
@endif

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                @if($property->featured == 1)
                                <li class="ltn__blog-category">
                                    <a href="#">مميز</a>
                                </li>
                                @endif
                                <li class="ltn__blog-category">
                                    @if($property->purpose == 'ايجار')
                                    <a class="bg-orange" href="#">للإيجار</a>
                                    @else
                                    <a class="bg-red" href="#">للبيع</a>
                                    @endif
                                </li>

                                <li>
                                    <a href="#"><i class="fas fa-money-check"></i>{{ $property->price }} ريال</a>
                                </li>

                            </ul>
                        </div>
                        <h1>{{ $property->title }}</h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> {{ $property->address }} -  {{ $property->city }}</label>
                        <h4 class="title-2">وصف العقار</h4>
                        {!! $property->description !!}

                        <h4 class="title-2">تفاصيل العقار</h4>

                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">      
                            
                            <ul>
                                <li><label><i class="flaticon-square-shape-design-interface-tool-symbol"></i> المساحة:</label>  <span>{{ $property->area}}</span></li>
                                <li><label><i class="flaticon-location"></i> المدينة:</label> <span>{{ $property->city}}</span></li>
                                <li><label>الغرض:</label><span>{{ $property->purpose }}</span></li>
                            </ul>
                            <ul>
                                <li><label><i class="flaticon-bed"></i>  غرف:</label>  <span>{{ $property->bedroom}}</span></li>
                                <li><label><i class="flaticon-clean"></i> دورات مياه: </label> <span>{{ $property->bathroom}}</span></li>
                            </ul>
                        </div>
                                        
                        <h4 class="title-2">خصائص العقار</h4>
                        <div class="property-detail-feature-list clearfix mb-45">                            
                            <ul>
                                @foreach($property->features as $feature)
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        @if(Storage::disk('public')->exists('features/'.$feature->icon))
                                        <img src="{{Storage::url('features/'.$feature->icon)}}" width="32px" height="32px" alt="{{$feature->name}}">
                                        @endif
                                        <div>
                                            <h6>{{$feature->name}}</h6>
                                        </div>
                                    </div>
                                </li>
                         
                                @endforeach

                       
                            </ul>
                        </div>



                        <h4 class="title-2">تخطيط الارض</h4>
                        <div class="property-detail-feature-list clearfix mb-45">                            
                            <div class="col-12">
                                @if(Storage::disk('public')->exists('property/'.$property->floor_plan) && $property->floor_plan)
                                <img src="{{Storage::url('property/'.$property->floor_plan)}}" alt="{{$property->title}}" class="image-box">
                                @endif
                            </div>
                        </div>


                        @if($videoembed)
                        <h4 class="title-2">مقطع فيديو للعقار</h4>
                        <div class="property-detail-feature-list clearfix mb-45">                            
                            {!! $videoembed !!}
                        </div>
                        @endif


                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Form Widget -->
                        <div class="widget ltn__form-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">طلب العقار</h4>
                            <form class="default-form agent-message-box" action="" method="POST">
                                @csrf
                                <input type="hidden" name="agent_id" value="{{ $property->user->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="property_id" value="{{ $property->id }}">

                                <input type="text" name="name" placeholder="الإسم" required>
                                <input type="email" name="email" placeholder="البريد الإلكتروني" required>
                                <input type="text" name="phone" placeholder="رقم الهاتف" required>
                                <textarea name="message" placeholder="ملاحظة إضافية.."></textarea>
                                <button id="msgsubmitbtn" type="submit" class="btn theme-btn-1 message-btn">إرسال الطلب</button>
                            </form>
                        </div>
                        <!-- Social Media Widget -->
                        <div class="widget ltn__social-media-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2 text-center">مشاركة - مفضلة</h4>
                            <div class="ltn__social-media-2 text-center">
                                <ul>
                                    <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" title="فيس بوك"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?text= مشاركة العقار {{Request::url()}}" target="_blank" title="تويتر"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="whatsapp://send?text={{Request::url()}}" title="واتساب"><i class="fab fa-whatsapp"></i></a></li>
                                   
                                    @if(!$fav)
                                    <li><a href="{{route('favorite.create',$property->id)}}"><i class="flaticon-heart-1" title="المفضلة"></i></a></li>
                                    @else
                                    <li><a href="{{route('favorite.delete',$property->id)}}"><i class="flaticon-heart-1" title="الغاء من المفضلة"></i></a></li>
                                    @endif
      
                                </ul>
                            </div>
                        </div>
                        <!-- Tagcloud Widget -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->
@endsection

@section('scripts')

    <script>
        $(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

    
          

            // MESSAGE
            $(document).on('submit','.agent-message-box',function(e){
                e.preventDefault();

                var data = $(this).serialize();
                var url = "{{ route('property.message') }}";
                var btn = $('#msgsubmitbtn');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    beforeSend: function() {
                        $(btn).addClass('disabled');
                        $(btn).empty().append('جاري الإرسال..');
                    },
                    success: function(data) {
                        if (data.message) {
                        $('form.agent-message-box')[0].reset();
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('تم الإرسال');
                        }
                    },
                    error: function(xhr) {
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('إعادة الإرسال');
                    },
                    complete: function() {
                        $('form.agent-message-box')[0].reset();
                    },
                    dataType: 'json'
                });

            })
        })
    </script>
@endsection