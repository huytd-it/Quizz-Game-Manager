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
                                    @if(session('thong_diep'))
                                    <div class="alert alert-success">
                                    {{session('thong_diep')}}
                                    </div>
                                    @endif
                                <h2>Danh sách lĩnh vực</h2>
                                <p class="text-muted font-13 mb-4">
                                </p>
                                <a href="{{route('linh-vuc.them-moi')}}">
                                        <button  type="button" class="btn btn-rounded btn-success waves-effect waves-light"><i class="fe-plus-circle"></i></button>
                                    </a>
                                    <a href="{{route('linh-vuc.thung-rac')}}">
                                        <button  type="button" class="btn btn-rounded btn btn-purple waves-effect waves-light"><i class="fe-trash-2"></i></button>
                                    </a>
                                <h1></h1><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên lĩnh vực</th>
                                            <th>Xóa/Sữa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dslinhvuc as $linhvuc)
                                        @if($linhvuc->deleted_at == null)
                                        <tr>
                                            <td>{{$linhvuc->id}}</td>
                                            <td>{{$linhvuc->ten_linh_vuc}}</td>
                                            <td>
                                                <a href="{{ route('linh-vuc.xoa',['id'=>$linhvuc->id])}}"><button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="fe-delete"></i></button></a>
                                                <a href="{{ route('linh-vuc.chinh-sua',['id'=>$linhvuc->id] ) }}"><button type="button" class="btn btn-secondary btn-rounded waves-effect"><i class="fe-edit"></i></button></a>
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
