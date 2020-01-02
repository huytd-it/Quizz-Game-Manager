<?php

namespace App\Http\Controllers;

use App\GoiCredit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
        
        $thong_diep = '';
        if($this->checkNameExit($request->ten_goi_credit)){
            $thong_diep = "Tên đã tồn tại trong cơ sở dữ liệu";
        }
        else
        {
        $goiCredit=new GoiCredit();
        $goiCredit->ten_goi=$request->ten_goi_credit;
        $goiCredit->credit=$request->so_credit;
        $goiCredit->so_tien=$request->so_tien;
        $goiCredit->save();
        $thong_diep='Thêm Gói Credit thành công';
    }
        return redirect()->route('goi_credit.danh-sach')->with('thong_diep',$thong_diep);
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
        $goiCredit=GoiCredit::find($id);
        return view('cap-nhat-goi-credit',compact('goiCredit'),['id'=>$id]);
    }
     //kiểm tra tính hợp lệ của tên gói credit
     public function checkNameExit($ten_goi_credit)
     {
         if(DB::table('goi_credit')->where('ten_goi',$ten_goi_credit)->exists())
         return true;
     return false;
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
        $thong_diep= 'cập nhật gói credit thành công';
        GoiCredit::where('id',$id)->update(['ten_goi'=> $request->ten_goi_credit,
                                         'credit'=>$request->so_credit,
                                         'so_tien'=>$request->so_tien
        ]);
    
        return redirect()->route('goi_credit.danh-sach')->with('thong_diep',$thong_diep);
    }

   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thong_diep='Xóa gói credit thành công';
        $id_xoa = GoiCredit::find($id);
        $id_xoa->delete();
        return redirect()->route('goi_credit.danh-sach')->with('thong_diep',$thong_diep);
    }
    public function restore($id){
        $goiCredit=GoiCredit::withTrashed()->find($id);
        $thong_diep="Khôi phục thành công gói credit";
        $goiCredit->restore();
        return redirect()->route('goi_credit.danh-sach')->with('thong-diep',$thong_diep);
    }
    public function recycle()
    {
        $goiCredit= DB::table('goi_credit')->get();
        return view('goicredit_thungrac',compact('goiCredit'));
    }
}
