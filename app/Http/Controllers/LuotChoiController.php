<?php

namespace App\Http\Controllers;
use App\LuotChoi;
use App\NguoiChoi;
use App\ChiTietLuotChoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chiTiet = DB::table('chi_tiet_luot_chois')
        ->join('luot_chois','luot_chois.id','=','chi_tiet_luot_chois.luoc_choi_id')
        ->join('cau_hois','cau_hois.id','=','chi_tiet_luot_chois.cau_hoi_id')
        ->select('chi_tiet_luot_chois.*','cau_hois.noi_dung')->get();
        $dsLuotChoi = DB::table('luot_chois')
        ->join('nguoi_chois','nguoi_chois.id','=','luot_chois.nguoi_choi_id')
        ->select('luot_chois.*','nguoi_chois.ten_dang_nhap')
        ->get();
        return view('ds-luotchoi',compact('dsLuotChoi','chiTiet')) ;
        //return $chiTiet;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsNguoiChoi = NguoiChoi::all();
        return view('them-moi-luot-choi',compact('dsNguoiChoi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dsLuotChoi = [ 'nguoi_choi_id'=>$request->nguoi_choi_id,
                        'so_cau'=>$request->so_cau,
                        'diem'=>$request->diem,
                        'ngay_gio'=>$request->ngay_gio];
        LuotChoi::create($dsLuotChoi);
        return redirect()->route('luot-choi.danh-sach');
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
        return view('cap-nhat-luot-choi',['id'=>$id]);
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
        $dsLuotChoi = [ 'nguoi_choi_id'=>$request->nguoi_choi_id,
                        'so_cau'=>$request->so_cau,
                        'diem'=>$request->diem,
                        'ngay_gio'=>$request->ngay_gio];
        LuotChoi::where('id',$id)->update($dsLuotChoi);
        return \redirect()->route('luot-choi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_xoa = LuotChoi::find($id);
        $id_xoa->delete();
        return redirect()->route('luot-choi.danh-sach')->with(['message'=>'Xóa thành công']);
    }
}
