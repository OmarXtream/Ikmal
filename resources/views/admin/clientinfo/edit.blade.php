@extends('backend.layouts.app')

@section('title', 'Edit Advanced Order')

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
                    <h2 class="text-center">{{$clientinfo->id}} تحديث طلب متقدم رقم </h2>
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

                    <form action="{{route('admin.clientinfo.update',$clientinfo->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="monthly" class="form-control" value="{{$clientinfo->monthly}}">
                                <label class="form-label">التزام القسط الشهري </label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="timeLeft" class="form-control" value="{{$clientinfo->timeLeft}}">
                                <label class="form-label">الوقت المتبقي للقسط </label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="paymentLeft" class="form-control" value="{{$clientinfo->paymentLeft}}"> 
                                <label class="form-label">المبلغ المتبقى للقسط </label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="Bank" class="form-control" value="{{$clientinfo->Bank}}">
                                <label class="form-label">البنك المعتمد</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="property" class="form-control" value="{{$clientinfo->property}}">
                                <label class="form-label">العقار المختار من العميل</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="datetime-local" name="dateToVisit" class="form-control" value="{{$clientinfo->dateToVisit}}">
                                <label class="form-label">موعد معاينة العقار</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="file" name="payCheckFile">
                            <label class="form-label">ملف تعريف الراتب </label>

                        </div>

                        <div class="form-group">
                            <label class="form-label">حالة الطلب</label>

                            <select style="border: 1px solid #333333" name="status" class="form-control show-tick">
                                <option value="1" {{ $clientinfo->status== 1 ? 'selected' : '' }}>جمع المعلومات</option>
                                <option value="2" {{ $clientinfo->status== 2 ? 'selected' : '' }}>اعتماد بيانات التمويل والبنك</option>
                                <option value="3" {{ $clientinfo->status== 3 ? 'selected' : '' }}>معاينة واختيار العقار</option>
                                <option value="4" {{ $clientinfo->status== 4 ? 'selected' : '' }}>تم التنفيذ</option>

                            </select>


                        </div>


                        <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                            <i class="material-icons">update</i>
                            <span>تحديث</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')



@endpush
