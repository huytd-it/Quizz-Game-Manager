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

        <script>
                $(document).ready(function(){
                    $("#basic1-datatable").DataTable({
                        language:{
                            paginate:{
                                previous:"<i class='mdi mdi-chevron-left'>",
                                next:"<i class='mdi mdi-chevron-right'>"
                            }
                        },
                        drawCallback:function(){
                            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                        }
                    });
                });
            </script>



@endsection
@section('main-content')
@foreach($chitiet as $ctnc)
<div id="myModal{{ $ctnc->nguoi_choi_id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="myModalLabel">Chi Tiết Người Chơi</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>Điểm</h4>
                    <p>{{$ctnc->diem}}</p>
                    <h4>Số Credit đã mua </h4>
                    <p{{$ctnc->credit}}></p>
                    <h4>Tổng số tiền</h4>
                    <p{{$ctnc->so_tien}}></p>
                    <hr>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">OK</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endforeach
<div class="row justify-content-center">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="header-title">Danh Sách Người Chơi</h1><br>
                                <table id="basic1-datatable" class="table dt-responsive nowrap">
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
                                            <td>
                                                {{$nc->hinh_dai_dien}}
                                            </td>
                                            <td>{{$nc->diem_cao_nhat}}</td>
                                            <td>{{$nc->credit}}</td>
                                            <td>
                                                <a>
                                                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#myModal{{$nc->id }}"><i class="fe-info"></i></button>
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
