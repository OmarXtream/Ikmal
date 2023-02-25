@extends('frontend.layouts.app')
@section('styles')
<style>
    body{
        color:black !important;
    }
</style>
@endsection

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
                                <li>طلب تسويق عقار</li>
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
    
    <h4 class="title-2">بيانات الطلب التسويقي</h4>
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
        <form action="{{route('PropertiesMarkating.create')}}" method="POST">
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
                    <div class="input-item">
                        <input class="form-control @if ($errors->has('price')) is-invalid @endif" id="price" name="price" type="number" value="{{ old('price') }}" placeholder="قيمة العقار">
                        @if ($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                </div>
    
    
              
    
            </div>
    
    
    
    
    
                <h6 class="mt-4">تفاصيل إضافية للعقار</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea id="details" name="details" class="form-control @if ($errors->has('details')) is-invalid @endif" placeholder="تفاصيل إضافيه">{{ old('details') }}</textarea>
                            @if ($errors->has('details'))
                            <span class="text-danger">{{ $errors->first('details') }}</span>
                            @endif
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
