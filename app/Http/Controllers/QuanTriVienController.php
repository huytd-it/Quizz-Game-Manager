<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuanTriVienController extends Controller
{
    protected $rederectTo = 'trang-chu';
    public function dangnhap()
    {
       return view('dang-nhap');
    }
    public function xulyDangNhap(Request $request)
    {
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap, 'password' => $mat_khau])){
            return redirect()->route('trang-chu') ;
        }
        return redirect()->route('dang_nhap');
    }
    public function dangXuat(){
        Auth::logout();
        return redirect()->route('dang-nhap');
    }
}
