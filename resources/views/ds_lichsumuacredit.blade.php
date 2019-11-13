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
@section('title')
    <h4 class='page-title'><b>Danh Sách Mua Gói Credit</b></h4>
@endsection
<div class="row justify-content-center">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NGUOI_CHOI</th>
                                            <th>GOI_CREDIT</th>
                                            <th>CREDIT</th>
                                            <th>SO_TIEN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($LichSuMuaCredit as $ds)
                                        <tr>
                                            <td>{{$ds->id}}</td>
                                            <td>{{$ds->nguoi_choi_id}}</td>
                                            <td>{{$ds->goi_credit_id}}</td>
                                            <td>{{$ds->credit}}</td>
                                            <td>{{$ds->so_tien}}</td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
@endsection
