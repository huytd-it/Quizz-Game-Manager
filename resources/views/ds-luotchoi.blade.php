@extends('layout')
@section('css')
        <!-- Custom box css -->
        <link href="{{ asset('libs/custombox/custombox.min.css') }}" rel="stylesheet">
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
        <script src="{{ asset('libs/custombox/custombox.min.js') }}"></script>

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
<!-- sample modal content -->
@foreach($chiTiet as $ct)
<div id="myModal{{ $ct->luoc_choi_id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="myModalLabel">Chi tiết lượt chơi</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>Lượt chơi</h4>
                    <p>{{ $ct->luoc_choi_id}}</p>
                    <hr>
                    <h4>Câu hỏi</h4>
                    <p>{{ $ct->noi_dung }}</p>
                    <h4>Phương án</h4>
                    <p>{{ $ct->phuong_an}}</p>
                    <hr>
                    <h4>Điểm</h4>
                    <p>{{ $ct->diem}}</p>
                    <hr>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endforeach

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>Danh sách lượt chơi</h2>
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
                                            <th>Người chơi </th>
                                            <th>Số câu</th>
                                            <th>Điểm</th>
                                            <th>Ngày giờ</th>
                                            <th>Xóa/Sữa</th>
                                            <th>Xem chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dsLuotChoi as $luotchoi)
                                        @if($luotchoi->deleted_at == null)
                                        <tr>
                                            <td>{{$luotchoi->id}}</td>
                                            <td>{{$luotchoi->ten_dang_nhap}}</td>
                                            <td>{{$luotchoi->so_cau}}</td>
                                            <td>{{$luotchoi->diem}}</td>
                                            <td>{{$luotchoi->ngay_gio}}</td>
                                            <td>
                                                <a href="{{ route('luot-choi.xoa',['id'=>$luotchoi->id]) }}">
                                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                                        <i class="fe-delete"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('luot-choi.chinh-sua',['id'=>$luotchoi->id])}}">
                                                    <button type="button" class="btn btn-secondary waves-effect">
                                                        <i class="fe-edit"></i>
                                                    </button>
                                                </a>

                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal{{ $luotchoi->id }}"><i class="fe-info"></i></button>
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
