@extends('layout')
@section('css')
         <!-- third party css -->
         <link href="{{ asset('libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection
@section('js')
       <!-- third party js -->
       <script src="{{ asset('libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.select.min.js')}}"></script>
        <script src="{{ asset('libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{ asset('libs/pdfmake/vfs_fonts.js')}}"></script>
        <!-- third party js ends -->
        <script src="{{asset('js/pages/datatables.init.js')}}"></script>
@endsection
@section('main-content')
<div class="row justify-content-center">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="header-title">Danh Sách Người Chơi</h1><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TÊN ĐĂNG NHẬP</th>
                                            <th>EMAIL</th>
                                            <th>HINH ĐẠI DIỆN</th>
                                            <th>ĐIỂM CAO NHẤT</th>
                                            <th>CREDIT</th>
                                            <th>XEM CHI TIẾT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($nguoiChoi as $nc)
                                       @if($nc->deleted_at==null)
                                        <tr>
                                            <td>{{$nc->id}}</td>
                                            <td>{{$nc->ten_dang_nhap}}</td>
                                            <td>{{$nc->email}}</td>
                                            <td>{{$nc->hinh_dai_dien}}</td>
                                            <td>{{$nc->diem_cao_nhat}}</td>
                                            <td>{{$nc->credit}}</td>
                                            <td>
                                                <a href="{{route('nguoi_choi.xoa_nguoi_choi',['id'=>$nc->id])}}" >
                                                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="fe-delete"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
@endsection
