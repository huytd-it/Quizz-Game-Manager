<?php

namespace App\Http\Controllers\APi;

use App\LuotChoi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        $dsLuotChoi = DB::table('luot_chois')
        ->join('nguoi_chois','nguoi_chois.id','=','luot_chois.nguoi_choi_id')
        ->join('chi_tiet_luot_chois','chi_tiet_luot_chois.id','=','luot_chois.id')
        ->orderByDesc('chi_tiet_luot_chois.diem')->limit(30)
        ->select('luot_chois.id','nguoi_chois.ten_dang_nhap','chi_tiet_luot_chois.diem')
        ->get();

        $result = [
            'status'=>true,'message'=> 'luotchoi',
            'data' => $dsLuotChoi,
        ];

        return response()->json($result);
    }
    public function lichsu(Request $request)
    {

        $dsLuotChoi = DB::table('luot_chois')
        ->join('chi_tiet_luot_chois','chi_tiet_luot_chois.id','=','luot_chois.id')
        ->where('luot_chois.nguoi_choi_id','=',$request->nguoi_choi_id)
        ->select('luot_chois.id','luot_chois.ngay_gio','luot_chois.so_cau','chi_tiet_luot_chois.diem')
        ->get();
        $result = [
            'status'=>true,'message'=> 'Complete',
            'data' => $dsLuotChoi,
        ];

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LuotChoi  $luotChoi
     * @return \Illuminate\Http\Response
     */
    public function show(LuotChoi $luotChoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LuotChoi  $luotChoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LuotChoi $luotChoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LuotChoi  $luotChoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(LuotChoi $luotChoi)
    {
        //
    }
}
