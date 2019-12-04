<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuanTriVienController extends Controller
{
    protected $rederectTo = 'trang-chu';
    public function dangnhap()
    {
       return view('dang-nhap');
    }
    public function xulyDangNhap(AdminRequest $request)
    {
        //$validated =  $request->validated();
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap, 'password' => $mat_khau])){
            return \redirect()->route('trang-chu')->with('thong_diep','Đăng nhập thành công');
        }
        return redirect()->route('dang_nhap')->with('thong_diep','Đăng nhập thất bại');
    }
    public function dangXuat(){
        Auth::logout();
        return redirect()->route('dang_nhap');
    }
    public function layThongTin(){
        return Auth::user();
    }
}
