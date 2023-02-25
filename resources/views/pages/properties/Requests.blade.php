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
                                <li>طلب عقار</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">

<div class="ltn__checkout-single-content mt-50">

<h4 class="title-2">بيانات الطلب</h4>
<div class="ltn__checkout-single-content-info">

    @if(Session::has('errors'))
    <div class="text-center alert alert-light">
        <h5 style="font-weight: bold;">* فضلاً قم بملىء كل الحقول</h5>
    @if($errors->any())
    {!! implode('', $errors->all('<p style="color:red">:message</p>')) !!}
    @endif
    </div>
    @endif
    @if (session()->has('message'))
    <div class="text-center alert alert-light">
        <h3 style="font-weight: bold; color:black">{{ session('message') }}</h3>
    </div>
    @endif
    <form action="{{route('PropertieRequest.create')}}" method="POST">
        @csrf
        <h6>المعلومات الشخصية</h6>
        <div class="row">
            <div class="col-md-6">
                <div class="input-item input-item-name ltn__custom-icon">
                    <input class="@if ($errors->has('name')) is-invalid @endif" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="* الإسم">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif                  </div>
            </div>
            <div class="col-md-6">
                <div class="input-item input-item-email ltn__custom-icon">
                    <input class="@if ($errors->has('email')) is-invalid @endif" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="* البريد الإلكتروني" required>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-item input-item-phone ltn__custom-icon">
            <input class="@if ($errors->has('phone')) is-invalid @endif" id="phone" name="phone" type="text" value="{{ old('phone') }}" placeholder="*  رقم الهاتف">
            @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif   
                </div>
            </div>

         
        </div>


        <h6>تفاصيل العقار</h6>
        <div class="row">

            <div class="col-md-6">
                <div class="input-item input-item-subject ltn__custom-icon">
                    <input class="@if ($errors->has('type')) is-invalid @endif" id="type" name="type" type="text" value="{{ old('type') }}" placeholder="نوع العقار">
                    @if ($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                    @endif                                        

                </div>
            </div>


            <div class="col-md-6">
                <div class="input-item input-item-website ltn__custom-icon">
                    <input class="@if ($errors->has('city')) is-invalid @endif" id="city" name="city" type="text" value="{{ old('city') }}" placeholder="مدينة العقار">
                    @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif

                </div>
            </div>

            <div class="col-md-6">
                <div class="input-item">
                    <input class="mb-3 form-control @if ($errors->has('rooms')) is-invalid @endif" id="rooms" name="rooms" type="number" value="{{ old('rooms') }}" placeholder="عدد الغرف">
                    @if ($errors->has('rooms'))
                    <span class="text-danger">{{ $errors->first('rooms') }}</span>
                    @endif                                        

                </div>
            </div>


            <div class="col-md-6">
                <div class="input-item">
                    <input class="mb-3 form-control @if ($errors->has('baths')) is-invalid @endif" id="baths" name="baths" type="number" value="{{ old('baths') }}" placeholder="دورات المياه">
                    @if ($errors->has('baths'))
                    <span class="text-danger">{{ $errors->first('baths') }}</span>
                    @endif                                        
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-item input-info-save ltn__custom-icon">
                    <input class="form-control @if ($errors->has('min_price')) is-invalid @endif" id="min_price" name="min_price" type="text" value="{{ old('min_price') }}" placeholder="أقل قيمة للعقار">
                    @if ($errors->has('min_price'))
                    <span class="text-danger">{{ $errors->first('min_price') }}</span>
                    @endif
                </div>
            </div>


            <div class="col-md-6">
                <div class="input-item input-info-save ltn__custom-icon">
                    <input class="form-control @if ($errors->has('max_price')) is-invalid @endif" id="max_price" name="max_price" type="text" value="{{ old('max_price') }}" placeholder="أعلى قيمة للعقار">
                    @if ($errors->has('max_price'))
                    <span class="text-danger">{{ $errors->first('max_price') }}</span>
                    @endif
                </div>
            </div>

        </div>





            <h6>الأحياء</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-item input-item-website ltn__custom-icon">
                        <input id="first_district" name="first_district" type="text" value="{{ old('first_district') }}" placeholder="الحي الاول">
                    </div>
                </div>
    

                <div class="col-md-6">
                    <div class="input-item input-item-website ltn__custom-icon">
                        <input id="Second_district" name="Second_district" type="text" value="{{ old('Second_district') }}" placeholder="الحي الثاني">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-item input-item-website ltn__custom-icon">
                        <input class="form-control" id="Third_district" name="Third_district" type="text" value="{{ old('Third_district') }}" placeholder="الحي الثالث">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-item input-item-website ltn__custom-icon">
                           <input class="form-control" id="Fourth_district" name="Fourth_district" type="text" value="{{ old('Fourth_district') }}" placeholder="الحي الرابع">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="input-item input-item-textarea ltn__custom-icon">
                        <textarea id="details" name="details" class="form-control" placeholder="تفاصيل إضافيه">{{ old('details') }}</textarea>
                    </div>
                </div>

       
                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">إرسال</button>

            </div>

    </form>
</div>
</div>
</div>
</div>
</div>


@endsection
