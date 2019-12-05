<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
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
        $cauHoi = DB::table('cau_hois')
        ->join('linh_vuc','linh_vuc.id','=','cau_hois.id_linh_vuc')
        ->select('cau_hois.*','linh_vuc.*')->get();
        return view('ds_cau_hoi',compact('cauHoi'));
    }

    public function thungrac()
    {
        $thungrac=  DB::table('cau_hois')->get();
        return view('thung_rac_cau_hoi',compact('thungrac'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dslinhvuc = DB::table('linh_vuc')->get();
        return view('them_cau_hoi',compact('dslinhvuc'));
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
        $dslinhvuc = DB::table('linh_vuc')->get();
        $cauhoi = CauHoi::find($id);
        return view('sua_cau_hoi',['id'=>$id],compact('cauhoi','dslinhvuc'));
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
        $idch = CauHoi::find($id);
        $idch->delete();
        return redirect()->route('cau_hoi.ds_cau_hoi');
    }

    public function khoiphuc($id)
    {
        CauHoi::withTrashed()->find($id)->restore();
        return redirect()->route('cau_hoi.ds_cau_hoi');
    }


}
