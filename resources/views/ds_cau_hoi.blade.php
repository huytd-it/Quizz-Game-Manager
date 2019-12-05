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
                                <h1 class="header-title">Danh Sách Câu Hỏi</h1>
                                <a href="{{route('cau_hoi.them_moi')}}">
                                <button  type="button" class="btn btn-rounded btn-success waves-effect waves-light"><i class="fe-plus-circle"></i></button>
                                </a>
                                <h1></h1><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NỘI DUNG</th>
                                            <th>LỈNH VỰC</th>
                                            <th>PHƯƠNG ÁN A</th>
                                            <th>PHƯƠNG ÁN B</th>
                                            <th>PHƯƠNG ÁN C</th>
                                            <th>PHƯƠNG ÁN D</th>
                                            <th>ĐÁP ÁN</th>
                                            <th>XÓA/SỬA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($cauHoi as $ch)
                                       @if($ch->deleted_at == null and $ch->trang_thai == 1)
                                        <tr>
                                            <td>{{$ch->id}}</td>
                                            <td>{{$ch->noi_dung}}</td>
                                            <td>{{$ch->ten_linh_vuc}}</td>
                                            <td>{{$ch->phuong_an_A}}</td>
                                            <td>{{$ch->phuong_an_B}}</td>
                                            <td>{{$ch->phuong_an_C}}</td>
                                            <td>{{$ch->phuong_an_D}}</td>
                                            <td>{{$ch->dap_an}}</td>
                                            <td>
                                                <a href="{{route('cau_hoi.xoa_cau_hoi',['id'=>$ch->id])}}">
                                            <button  type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="fe-delete"></i></button>
                                                </a>
                                                <a href="{{route('cau_hoi.hien_thi_view_cap_nhat',['id'=>$ch->id])}}">
                                             <button type="button" class="btn btn-secondary btn-rounded waves-effect"><i class="fe-edit"></i></button>
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
