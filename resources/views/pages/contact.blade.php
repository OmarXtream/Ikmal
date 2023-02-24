@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">تواصل معنا</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('home')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> الرئيسية</a></li>
                                <li>تواصل معنا</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <div class="ltn__contact-address-area mb-90 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{asset('frontend/img/icons/10.png')}}" alt="Icon Image">
                        </div>
                        <h3>البريد الإلكتروني</h3>
                        <p>info@ikmal-sa.com</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{asset('frontend/img/icons/11.png')}}" alt="Icon Image">
                        </div>
                        <h3>رقم الهاتف</h3>
                        <p>+0123-456789</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{asset('frontend/img/icons/12.png')}}" alt="Icon Image">
                        </div>
                        <h3>العنوان</h3>
                        <p>شارع العنوان - مدينة العنوان</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__contact-message-area mb-120 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">دعنا نتواصل معك</h4>
                        <form id="contact-us" action="" method="POST">
                            @csrf
                            @auth
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            @endauth
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" id="name" name="name" placeholder="الإسم" @auth value="{{ auth()->user()->name }}" readonly @endauth required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" id="email" name="email" placeholder="البريد الإلكتروني"  @auth value="{{ auth()->user()->email }}" readonly @endauth required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" id="phone" name="phone" placeholder="رقم الهاتف" required>
                                    </div>
                                </div>
                              
                               
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea id="message" name="message" placeholder="الرسالة"></textarea>
                            </div>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit" id="msgsubmitbtn" name="submit-form">إرسال</button>
                            </div>
                            <h1 class="text-center" id="result"></h1>

                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>

        $(function(){
            $(document).on('submit','#contact-us',function(e){
                e.preventDefault();

                var data = $(this).serialize();
                var url = "{{ route('contact.message') }}";
                var btn = $('#msgsubmitbtn');
                
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    beforeSend: function() {
                        $(btn).addClass('disabled');
                        $(btn).empty().append('جاري الإرسال');
                    },
                    success: function(data) {
                        if (data.message) {
                            $('#result').empty().append(data.message);
                        }
                    },
                    error: function(xhr) {
                        M.toast({html: 'ERROR: Failed to send message!', classes: 'red darken-4'})
                    },
                    complete: function() {
                        $('form#contact-us')[0].reset();
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('إرسال');
                    },
                    dataType: 'json'
                });

            })
        })

    </script>
@endsection