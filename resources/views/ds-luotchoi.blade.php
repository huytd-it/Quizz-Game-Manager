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

        <script>
            $(document).ready(function(){
                $("#basic-datatable").DataTable({
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
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 >DANH SÁCH LƯỢT CHƠI</h1>
                                <p class="text-muted font-13 mb-4">
                                </p>
                                <a href="{{route('luot-choi.them-moi')}}">
                                        <button  type="button" class="btn btn-rounded btn-success waves-effect waves-light"><i class="fe-plus-circle"></i></button>
                                    </a>
                                <h1></h1><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID Người chơi </th>
                                            <th>Số câu</th>
                                            <th>Điểm</th>
                                            <th>Ngày giờ</th>
                                            <th>Xóa/Sữa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dsLuotChoi as $luotchoi)
                                        @if($luotchoi->deleted_at == null)
                                        <tr>
                                            <td>{{$luotchoi->id}}</td>
                                            <td>{{$luotchoi->nguoi_choi_id}}</td>
                                            <td>{{$luotchoi->so_cau}}</td>
                                            <td>{{$luotchoi->diem}}</td>
                                            <td>{{$luotchoi->ngay_gio}}</td>
                                            <td>
                                                <a href="{{ route('luot-choi.xoa',['id'=>$luotchoi->id]) }}">
                                                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">
                                                        <i class="fe-delete"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('luot-choi.chinh-sua',['id'=>$luotchoi->id])}}">
                                                    <button type="button" class="btn btn-secondary btn-rounded waves-effect">
                                                        <i class="fe-edit"></i>
                                                    </button>
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
