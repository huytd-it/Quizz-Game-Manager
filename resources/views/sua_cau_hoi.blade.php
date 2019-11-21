@extends('layout')
@section('title')
    <h4 class="page-title"><b>Cập Nhật Câu Hỏi</b></h4>
@endsection
@section('main-content')
<div class="row">
<form action ="{{route('cau_hoi.cap_nhat_cau_hoi',['id'=>$id])}}" method ="POST" class="col-lg-12">
   @csrf
    <div class="col-lg-12">
        <div class="col-lg-6">
            <div class="form-group mb-12">
                <label for="simpleinput">Chọn lĩnh vực: <span class="text-danger">*</span></label>
                <select name ="id_linh_vuc" class="form-control" data-style="btn-light">
                    <option value="1">Toán</option>
                </select>
            </div>
        </div>
    </div>
        <div class="col-lg-12 ">
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Nội dung câu hỏi: <span class="text-danger">*</span></label>
                    <input type="text" value="{{$cauhoi->noi_dung}}" name="noi_dung_cau_hoi" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án A: <span class="text-danger">*</span></label>
                    <input type="text" value ="{{$cauhoi->phuong_an_A}}" name="phuong_an_A"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án B: <span class="text-danger">*</span></label>
                    <input type="text" value ="{{$cauhoi->phuong_an_B}}" name="phuong_an_B"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án C: <span class="text-danger">*</span></label>
                    <input type="text" value ="{{$cauhoi->phuong_an_C}}" name="phuong_an_C"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án D: <span class="text-danger">*</span></label>
                    <input type="text" value ="{{$cauhoi->phuong_an_D}}" name="phuong_an_D"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Đáp án đúng: <span class="text-danger">*</span></label>
                    <input type="text" value ="{{$cauhoi->dap_an}}" name="dap_an" class="form-control">
                </div>
            </div>
            <div class="col-lg-12" >
                <button type="submit" name ="btn_sua" class="btn btn-primary btn-rounded waves-effect waves-light"><b>Sửa Câu Hỏi</b></button>

            </div>
    </div>
</form>
</div>
@endsection
\
