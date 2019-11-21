
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
<div class="wrapper">
        @if(session('thong_diep'))
        <div class="alert alert-success">
        <h1>{{session('thong_diep')}}</h1>
        </div>
        @endif
        <div class="container-fluid">
                <h1 class="justify-content-center" > TEAM 36</h1>
        <div class="row">
        <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/small/img-1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lương Võ Khôi Hưng</h5>
                        <p class="card-text">0306171251</p>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">Thông tin</a>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-6">
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/small/img-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Nguyễn Hoàng Giang</h5>
                            <p class="card-text">0306171237</p>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">Thông tin</a>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-6 col-xl-3">
                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="images/small/img-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Trần Đình Huy</h5>
                                <p class="card-text">0306171249</p>
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">Thông tin</a>
                            </div>
                        </div>
                    </div><!-- end col -->
        </div>
        </div>
</div>
@endsection

