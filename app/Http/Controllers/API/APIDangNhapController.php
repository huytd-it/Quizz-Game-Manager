<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Hash;
use App\NguoiChoi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class APIDangNhapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        $credentials = ['ten_dang_nhap' => $request->ten_dang_nhap
        , 'password' =>$request->mat_khau];

        // try to auth and get the token using api authentication
        if (!$token = auth('api')->attempt($credentials)) {
            // if the credentials are wrong we send an unauthorized error in json format
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return response()->json(
            [
            'status' => true,
            'message'=>'Authorize',
            'data' => [
                'token' => $token,
                'type' => 'bearer', // you can ommit this
                'expires' => auth('api')->factory()->getTTL() * 60, // time to expiration
            ],
        ],200);
    }
    public function register(Request $request)
    {

        $nguoiChoi = new NguoiChoi();

        $status = true;
        if(DB::table('nguoi_chois')->where('ten_dang_nhap',$request->ten_dang_nhap)->exists()){
            $status = false;
        }
        else{
        $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoiChoi->mat_khau = Hash::make($request->mat_khau);
        $nguoiChoi->email = $request->email;

        if(isset($request->hinh_dai_dien)){
            $file = $request->hinh_dai_dien;
            $filename = $file->getClientOriginalName();
            $file->move('/images',$filename);
            $nguoiChoi->hinh_dai_dien = $filename;
        }
        else{
            $nguoiChoi->hinh_dai_dien = '';
        }

        if(isset($request->diem)){
            $nguoiChoi->diem_cao_nhat = $request->diem;
        }
        else
            $nguoiChoi->diem_cao_nhat= 0;
        if(isset($request->credit)){
            $nguoiChoi->credit = $request->credit;
        }
        else
            $nguoiChoi->credit = 0;
        $nguoiChoi->save();

        }
        return response()->json(
            [
            'status' => $status,
            'message'=>'Success',
            'data'=>[ 'ten_dang_nhap'=>$request->ten_dang_nhap,'mat_khau'=>$request->mat_khau]
        ]);
    }
    public function user()
    {
        return response()->json(
            [
            'status' => true,
            'message'=>'Success',
            'data'=>auth('api')->user(),
        ]);
    }



}
