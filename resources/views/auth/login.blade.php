@extends('frontend.layouts.app')
@section('content')
<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">تسجيل الدخول</h1>
                    <p>الدخول مع إكمال</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                <form method="POST" action="{{ route('login') }}" class="ltn__form-box contact-form-box">
                    @csrf
                        <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="البريد الإلكتروني*">
                        @if ($errors->has('email'))
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                        <input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required placeholder="كلمة المرور*">
                        @if ($errors->has('password'))
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">دخول</button>
                        </div>
                        {{-- <div class="go-to-btn mt-20">
                            <p>ليس لديك حساب ؟  <a href="{{route('register')}}">سجل الآن</a></p>
                        </div> --}}
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>ليس لديك حساب ؟</h4>
                    <div class="btn-wrapper">
                        <a href="{{route('register')}}" class="theme-btn-1 btn black-btn">سجل الآن</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->
@endsection
