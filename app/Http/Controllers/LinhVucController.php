<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinhVucRequest;
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
    public function recycle()
    {
        $dslinhvuc = DB::table('linh_vuc')->get();
        return view('linhvuc_thungrac',compact('dslinhvuc'));
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
        $request->validate([
            'ten_linh_vuc'=>'required|max:20|min:5',
        ]);
        $thong_diep = '';
        if($this->CheckLinhVucNameExist($request->ten_linh_vuc)){
            $thong_diep = "Tên đã tồn tại trong cơ sở dữ liệu";
        }
        else{
            $linhvuc = new LinhVuc();
            $linhvuc->ten_linh_vuc = $request->ten_linh_vuc;
            $linhvuc->save();
            $thong_diep = 'Thêm lĩnh vực thành công';

        }
        return redirect()->route('linh-vuc.danh-sach')->with('thong_diep',$thong_diep);

    }
    public function CheckLinhVucNameExist($tenlinhvuc)
    {
        if(DB::table('linh_vuc')->where('ten_linh_vuc',$tenlinhvuc)->exists())
            return true;
        return false;
        # code...
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
        $lv = LinhVuc::find($id);
        return view('cap-nhat-linh-vuc',compact('lv'),['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LinhVucRequest $request, $id)
    {
        if($this->CheckLinhVucNameExist($request->ten_linh_vuc)){
            $thong_diep = 'Tên lĩnh vực này đã tồn tại trong cơ sở dữ liệu';
        }
        else{
            LinhVuc::where('id',$id)->update(['ten_linh_vuc'=> $request->ten_linh_vuc]);
            $thong_diep= 'Cập nhật lĩnh vực thành công';
        }
        return \redirect()->route('linh-vuc.danh-sach')->with('thong_diep',$thong_diep);
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
        $thong_diep = 'Xóa thành công '.$id_xoa->ten_linh_vuc;
        $id_xoa->delete();

        return redirect()->route('linh-vuc.danh-sach')->with('thong_diep',$thong_diep);
    }
    public function restore($id)
    {
        $lv = LinhVuc::withTrashed()->find($id);
        $thong_diep = 'Khôi phục thành công lĩnh vực '.$lv->ten_linh_vuc;
        $lv->restore();
        return  \redirect()->route('linh-vuc.danh-sach')->with('thong_diep',$thong_diep);
    }
  
}
