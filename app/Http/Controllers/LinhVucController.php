<?php

namespace App\Http\Controllers;
use App\LinhVuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dslinhvuc = DB::table('linh_vuc')->get();
        return view('ds-linhvuc',compact('dslinhvuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-linh-vuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linhvuc = new LinhVuc();
        $linhvuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhvuc->save();
        return redirect()->route('linh-vuc.danh-sach');

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
        return view('cap-nhat-linh-vuc',['id'=>$id]);
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
        LinhVuc::where('id',$id)->update(['ten_linh_vuc'=> $request->ten_linh_vuc]);
        return \redirect()->route('linh-vuc.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_xoa = LinhVuc::find($id);
        $id_xoa->delete();
        return redirect()->route('linh-vuc.danh-sach');
    }
}
