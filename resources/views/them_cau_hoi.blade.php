@extends('layout')
@section('title')
    <h4 class="page-title"><b>Thêm Câu Hỏi</b></h4>
@endsection
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6">
            <div class="form-group mb-12">
            <label for="simpleinput">Chọn lĩnh vực: <span class="text-danger">*</span></label>
                <select class="form-control" data-style="btn-light">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>
            </div>
        </div>
    </div>
        <div class="col-lg-12 ">    
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Nội dung câu hỏi: <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án A: <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án B: <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án C: <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án D: <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Đáp án đúng: <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" class="form-control">
                </div>
            </div>
    </div>
</div>
@endsection