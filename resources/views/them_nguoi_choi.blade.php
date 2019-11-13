@extends('layout')
@section('title')
    <h4 class="page-title"><b>Thêm Người Chơi</b></h4>
@endsection
@section('main-content')
<div class="row">
<form action ="{{route('nguoi_choi.luu_tru_nguoi_choi')}}" method ="POST" class="col-lg-12" enctype="multipart/form-data">
   @csrf
        <div class="col-lg-12 ">
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Tên Đăng Nhập: <span class="text-danger">*</span></label>
                    <input type="text" name="ten_dang_nhap" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Mật Khẩu: <span class="text-danger">*</span></label>
                    <input type="text" name="mat_khau"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Email: <span class="text-danger">*</span></label>
                    <input type="text" name="email"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <label class = "simpleinput">Ảnh Đại Diện: <span class="text-danger">*</span></label>
                <div class="form-group mb-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04" name ="hinh_dai_dien">
                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Điểm: <span class="text-danger">*</span></label>
                    <input type="text" name="diem"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Số Lương Credit: <span class="text-danger">*</span></label>
                    <input type="text" name="credit" class="form-control">
                </div>
            </div>
            <div class="col-lg-12" >
                <button type="submit" name ="btn_them" class="btn btn-success btn-rounded waves-effect waves-light"><b>Thêm</b></button>
                <button type="submit" name ="btn_sua" class="btn btn-primary btn-rounded waves-effect waves-light"><b>Sửa</b></button>

            </div>
    </div>
</form>
</div>
@endsection
