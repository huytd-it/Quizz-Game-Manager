@extends('layout')
@section('title')
    <h4 class="page-title"><b>Thêm Câu Hỏi</b></h4>
@endsection
@section('main-content')
<div class="row">
<form action ="{{route('cau_hoi.luu_them_moi')}}" method ="POST" class="col-lg-12">
   @csrf
    <div class="col-lg-12">
        <div class="col-lg-6">
            <div class="form-group mb-12">
                <label for="simpleinput">Chọn lĩnh vực: <span class="text-danger">*</span></label>
                <select name ="id_linh_vuc" class="form-control" data-style="btn-light">
                    @foreach ($dslinhvuc  as $item)
                        @if($item->deleted_at == null)
                            <option value ="{{$item->id}}">{{ $item->ten_linh_vuc }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
        <div class="col-lg-12 ">
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Nội dung câu hỏi: <span class="text-danger">*</span></label>
                    <input type="text" name="noi_dung_cau_hoi" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án A: <span class="text-danger">*</span></label>
                    <input type="text" name="phuong_an_A"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án B: <span class="text-danger">*</span></label>
                    <input type="text" name="phuong_an_B"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án C: <span class="text-danger">*</span></label>
                    <input type="text" name="phuong_an_C"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Phương án D: <span class="text-danger">*</span></label>
                    <input type="text" name="phuong_an_D"  class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-12">
                    <label for="simpleinput">Đáp án đúng: <span class="text-danger">*</span></label>
                    <input type="text" name="dap_an" class="form-control">
                </div>
            </div>
            <div class="col-lg-12" >
                <button type="submit" name ="btn_them" class="btn btn-success btn-rounded waves-effect waves-light"><b>Thêm Câu Hỏi</b></button>

            </div>
    </div>
</form>
</div>
@endsection
