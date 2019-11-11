<?php

namespace App\Http\Controllers;
use App\LuotChoi;
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
        $dsLuotChoi = DB::table('luot_chois')->get();
        return view('ds-luotchoi',compact('dsLuotChoi')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-luot-choi');
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
