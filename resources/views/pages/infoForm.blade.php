@extends('frontend.layouts.app')

@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">حلول تمويلية</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('home')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li>حلول تمويلية</li>
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
    
    <h4 class="title-2">بيانات الطلب التمويلي</h4>
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
        <form action="{{route('InfoForm.create')}}" method="POST">
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
    
                <div class="col-md-6">
                    <div class="input-item input-item-subject ltn__custom-icon">
                        <input class="form-control @if ($errors->has('Age')) is-invalid @endif" id="Age" name="Age" type="number"  value="{{ old('Age') }}" placeholder="العمر">
                        @if ($errors->has('Age'))
                        <span class="text-danger">{{ $errors->first('Age') }}</span>
                        @endif
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="input-item">
                        <select name="type" class="nice-select @if ($errors->has('type')) is-invalid @endif">
                            <option value="" disabled selected>* قطاع الوظيفة</option>
                            <option value="1">قطاع عسكري</option>
                            <option value="2">قطاع مدني</option>
                            <option value="3">قطاع خاص</option>
                        </select>
                        @if ($errors->has('type'))
                        <span class="text-danger">{{ $errors->first('type') }}</span>
                        @endif
                    </div>
                </div>

             
            </div>
    
    
            <h6>المعلومات المالية</h6>
            <div class="row">
    
                <div class="col-md-6">
                    <div class="input-item">
                        <input id="commitments" value="{{ old('commitments') }}" placeholder="الإلتزامات الشهرية" name="commitments" type="text" class="form-control @if ($errors->has('commitments')) is-invalid @endif">
                        @if ($errors->has('commitments'))
                        <span class="text-danger">{{ $errors->first('commitments') }}</span>
                        @endif

                    </div>
                </div>
    
    
                <div class="col-md-6">
                    <div class="input-item">
                        <input id="bank" placeholder="البنك" value="{{ old('bank') }}" name="bank" type="text" class="form-control @if ($errors->has('bank')) is-invalid @endif">
                        @if ($errors->has('bank'))
                        <span class="text-danger">{{ $errors->first('bank') }}</span>
                        @endif

                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="input-item">
                        <input id="salary" placeholder="الراتب الاساسي " value="{{ old('salary') }}" name="salary" type="text" class="form-control @if ($errors->has('salary')) is-invalid @endif">
                        @if ($errors->has('salary'))
                        <span class="text-danger">{{ $errors->first('salary') }}</span>
                        @endif

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-item">
                        <input id="salaryTotal" placeholder="الراتب الصافي" value="{{ old('salaryTotal') }}" name="salaryTotal" type="text" class="form-control @if ($errors->has('salaryTotal')) is-invalid @endif">
                        @if ($errors->has('salaryTotal'))
                        <span class="text-danger">{{ $errors->first('salaryTotal') }}</span>
                        @endif

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-item">
                        <input id="homeAllowance" placeholder="بدل السكن" value="{{ old('homeAllowance') }}" name="homeAllowance" type="text" class="form-control @if ($errors->has('homeAllowance')) is-invalid @endif">
                        @if ($errors->has('homeAllowance'))
                        <span class="text-danger">{{ $errors->first('homeAllowance') }}</span>
                        @endif

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-item">
                        <input id="Allowances" placeholder="بدلات اخرى" value="{{ old('Allowances') }}" name="Allowances" type="text" class="form-control @if ($errors->has('Allowances')) is-invalid @endif">
                        @if ($errors->has('Allowances'))
                        <span class="text-danger">{{ $errors->first('Allowances') }}</span>
                        @endif

                    </div>
                </div>
    
    
                <div class="col-md-6">
                    <div class="input-item">
                        <select name="supported" class="nice-select @if ($errors->has('supported')) is-invalid @endif">
                            <option value="" disabled selected>* مدعوم من سكني؟</option>
                            <option value="1">لا</option>
                            <option value="2">نعم</option>
                        </select>
                        @if ($errors->has('supported'))
                        <span class="text-danger">{{ $errors->first('supported') }}</span>
                        @endif
                    </div>
                </div>
            </div>
    
    
    
    
    
            <h6 class="mt-4">تفاصيل إضافية</h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-item input-item-textarea ltn__custom-icon">
                        <textarea id="notes" name="notes" class="form-control @if ($errors->has('notes')) is-invalid @endif" placeholder="تفاصيل إضافيه">{{ old('notes') }}</textarea>
                        @if ($errors->has('notes'))
                        <span class="text-danger">{{ $errors->first('notes') }}</span>
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
