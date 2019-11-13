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
                                <h1 class="header-title">Danh Sách Người Chơi</h1>
                                <a href="{{route('linh-vuc.them-moi')}}">
                               
                                </a>
                                <h1></h1><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TÊN ĐĂNG NHẬP</th>
                                            <th>MẬT KHẨU</th>
                                            <th>EMAIL</th>
                                            <th>HINH ĐẠI DIỆN</th>
                                            <th>ĐIỂM CAO NHẤT</th>
                                            <th>CREDIT</th>
                                            <th>XÓA/SỮA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($nguoiChoi as $nc)
                                        <tr>
                                            <td>{{$nc->id}}</td>
                                            <td>{{$nc->ten_dang_nhap}}</td>
                                            <td>{{$nc->mat_khau}}</td>
                                            <td>{{$nc->email}}</td>
                                            <td>{{$nc->hinh_dai_dien}}</td>
                                            <td>{{$nc->diem_cao_nhat}}</td>
                                            <td>{{$nc->credit}}</td>
                                            <td>
                                            <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="fe-delete"></i></button>
                                             <button type="button" class="btn btn-secondary btn-rounded waves-effect"><i class="fe-edit"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
@endsection
