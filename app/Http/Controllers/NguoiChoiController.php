<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use Illuminate\Support\Facades\DB;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoiChoi = DB::table('nguoi_chois')->where('trang_thai','1')->get();
        return view('ds_nguoi_choi',compact('nguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them_nguoi_choi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoiChoi = new NguoiChoi();

        $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoiChoi->mat_khau = $request->mat_khau;
        $nguoiChoi->email = $request->email;

        $file = $request->hinh_dai_dien;
        $filename = $file->getClientOriginalName();
        $file->move('/images',$filename);
        $nguoiChoi->hinh_dai_dien = $filename;

        $nguoiChoi->diem_cao_nhat = $request->diem;
        $nguoiChoi->credit = $request->credit;
        $nguoiChoi->save();
        return redirect()->route('nguoi_choi.ds_nguoi_choi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = NguoiChoi::find($id);
        $id->delete();
        return redirect()->route('nguoi_choi.ds_nguoi_choi');
    }
}
