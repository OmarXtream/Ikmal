@extends('backend.layouts.app')

@section('title', 'Create Info')

@push('styles')

    
@endpush


@section('content')

    <div class="block-header">
        <a href="{{route('admin.clientinfo.index')}}" class="waves-effect waves-light btn btn-danger right m-b-15">
            <i class="material-icons left">arrow_back</i>
            <span>رجوع</span>
        </a>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2 class="text-center">إضافة معلومات متقدمة للطلب</h2>
                </div>
                <div class="body">
                    @if(Session::has('errors'))
                    <div class="text-center alert alert-light">
                        {{-- <h5 style="font-weight: bold;color:black">* فضلاً قم بملىء كل الحقول</h5> --}}
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
    
                    <form action="{{route('admin.clientinfo.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="orderID" value="{{request()->orderID}}">
                        <input type="hidden" name="type" value="{{request()->type}}">

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="monthly" class="form-control">
                                <label class="form-label">التزام القسط الشهري </label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="timeLeft" class="form-control">
                                <label class="form-label">الوقت المتبقي للقسط </label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="paymentLeft" class="form-control">
                                <label class="form-label">المبلغ المتبقى للقسط </label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="Bank" class="form-control">
                                <label class="form-label">البنك المعتمد</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="property" class="form-control">
                                <label class="form-label">العقار المختار من العميل</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="datetime-local" name="dateToVisit" class="form-control">
                                <label class="form-label">موعد معاينة العقار</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <input type="file" name="payCheckFile">
                            <label class="form-label">ملف تعريف الراتب </label>

                        </div>
                        
                        <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                            <i class="material-icons">save</i>
                            <span>إرسال</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')



@endpush
