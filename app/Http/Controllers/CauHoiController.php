<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use Illuminate\Support\Facades\DB;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cauHoi = DB::table('cau_hois')->where('trang_thai','1')->get();
        return view('ds_cau_hoi',compact('cauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them_cau_hoi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauhoi = new CauHoi();
        $cauhoi->noi_dung = $request->noi_dung_cau_hoi;
        $cauhoi->id_linh_vuc = $request->id_linh_vuc;
        $cauhoi->phuong_an_A = $request->phuong_an_A;
        $cauhoi->phuong_an_B = $request->phuong_an_B;
        $cauhoi->phuong_an_C = $request->phuong_an_C;
        $cauhoi->phuong_an_D = $request->phuong_an_D;
        $cauhoi->dap_an = $request->dap_an;
        $cauhoi->save();
        return redirect()->route('cau_hoi.them_moi');
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
        return view('sua_cau_hoi',['id'=>$id]);
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
        CauHoi::where('id',$id)->update(['noi_dung'=>$request->noi_dung_cau_hoi,'id_linh_vuc'=>$request->id_linh_vuc,
        'phuong_an_A'=>$request->phuong_an_A,'phuong_an_B'=>$request->phuong_an_B,'phuong_an_C'=>$request->phuong_an_C,'phuong_an_D'=>$request->phuong_an_D,
        'dap_an'=>$request->dap_an]);
        return \redirect()->route('cau_hoi.ds_cau_hoi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = CauHoi::find($id);
        $id->delete();
        return redirect()->route('cau_hoi.ds_cau_hoi');
    }
}
