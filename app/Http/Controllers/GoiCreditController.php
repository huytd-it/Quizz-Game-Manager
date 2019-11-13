<?php

namespace App\Http\Controllers;

use App\GoiCredit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goiCredit = DB::table('goi_credit')->get();
        return view('ds_goi_credit',compact('goiCredit')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-goi-credit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goiCredit=new GoiCredit();
        $goiCredit->ten_goi=$request->ten_goi_credit;
        $goiCredit->credit=$request->so_credit;
        $goiCredit->so_tien=$request->so_tien;
        $goiCredit->save();
        return redirect()->route('goi_credit.danh-sach');
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
        return view('cap-nhat-goi-credit',['id'=>$id]);
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
        GoiCredit::where('id',$id)->update(['ten_goi'=> $request->ten_goi_credit,
                                         'credit'=>$request->so_credit,
                                         'so_tien'=>$request->so_tien
        ]);
        return redirect()->route('goi_credit.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_xoa = GoiCredit::find($id);
        $id_xoa->delete();
        return redirect()->route('goi_credit.danh-sach');
    }
}
