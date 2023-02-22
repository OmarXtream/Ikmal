@extends('frontend.layouts.app')

@section('content')
<div class="ltn__login-area pb-110 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">سجل <br>حسابك الآن</h1>
                    <p>التسجيل مع إكمال</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form method="POST" action="{{ route('register') }}" class="ltn__form-box contact-form-box">
                        <input type="hidden" name="agent" value="3" />

                        @csrf
                        <input type="text" id="name" type="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="الاسم*">
                        @if ($errors->has('name'))
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                        <input type="text" id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="البريد الإلكتروني*">
                        @if ($errors->has('email'))
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        <input type="password" id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required placeholder="كلمة المرور*">
                        @if ($errors->has('password'))
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <input type="password" id="password_confirmation" type="password" name="password_confirmation" required placeholder="تأكيد كلمة المرور*">

                       
                        <label class="checkbox-inline">
                            بالنقر فوق "إنشاء حساب" ، ف انت توافق على <a href="{{ route('policy') }}">سياسة الخصوصية</a>                        
                        </label>
                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">إنشاء حساب</button>
                        </div>
                    </form>
                    <div class="by-agree text-center">
                        <div class="go-to-btn">
                            لديك حساب بالفعل ؟  <a href="{{route('login')}}">دخول الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->
@endsection