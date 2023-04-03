@extends('backend.layouts.app')

@section('title', 'Client Info')

@push('styles')

    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}">

@endpush

@section('content')

   

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2 class="text-center">إدارة طلبات العميل</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الطلب</th>
                                    <th>النوع</th>
                                    <th>الحالة</th>
                                    <th>الالتزام</th>
                                    <th>الوقت المتبقي</th>
                                    <th>المبلغ المتبقي</th>
                                    <th>ملف تعريف الراتب </th>
                                    <th>البنك</th>
                                    <th>العقار</th>
                                    <th>موعد المعاينة</th>
                                    <th>-</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>الطلب</th>
                                    <th>النوع</th>
                                    <th>الحالة</th>
                                    <th>الالتزام</th>
                                    <th>الوقت المتبقي</th>
                                    <th>المبلغ المتبقي</th>
                                    <th>ملف تعريف الراتب </th>
                                    <th>البنك</th>
                                    <th>العقار</th>
                                    <th>موعد المعاينة</th>
                                    <th>-</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse( $infos as $info )
                                <tr>
                                    <td>{{$info->id}}</td>
                                    <td>    
                                        @if($info->type == 1)
                                        <a href="{{ route('admin.InfoForm') }}">الطلب التمويلي رقم 
                                        @else
                                        <a href="{{ route('admin.PropertieRequest') }}">الطلب العقاري رقم
                                        @endif
                                        {{$info->request->id}}
                                    </a>
                                    </td>
                                    <td>{!! $info->typeText() !!}</td>
                                    <td>{!! $info->pStatus() !!}</td>
                                    <td>{{$info->monthly}}</td>
                                    <td>{{$info->timeLeft}}</td>
                                    <td>{{$info->paymentLeft}}</td>
                                    @if(Storage::disk('public')->exists('clientInfo/'.$info->payCheckFile))
                                    <td><a href="{{Storage::url('clientInfo/'.$info->payCheckFile)}}" target="_blank"> <i class="material-icons">folder_special</i></a></td>
                                    @else
                                    <td>لا يوجد</td>
                                    @endif

                                    <td>{{$info->Bank}}</td>
                                    <td>{{$info->property}}</td>
                                    <td>{{$info->dateToVisit}}</td>


                                    <td class="text-center">
                                        <a href="{{route('admin.clientinfo.edit',$info->id)}}" class="btn btn-info btn-sm waves-effect">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect" onclick="deleteFeature({{$info->id}})">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        <form action="{{route('admin.clientinfo.destroy',$info->id)}}" method="POST" id="del-feature-{{$info->id}}" style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <h2 class="text-center">لا يوجد اي طلب حالياً</h2>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('backend/js/pages/tables/jquery-datatable.js') }}"></script>

    <script>
        function deleteFeature(id){
            
            swal({
            title: 'هل انت متاكد؟',
            text: "لا يمكنك التراجع بعد التأكيد",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'تأكيد الحذف'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('del-feature-'+id).submit();
                    swal(
                    'نظام ادارة العميل',
                    'تم الحذف بنجاح.',
                    'success'
                    )
                }
            })
        }
    </script>


@endpush