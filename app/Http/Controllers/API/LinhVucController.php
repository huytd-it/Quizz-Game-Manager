<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;

class LinhVucController extends Controller
{
   public function index()
   {
       return LinhVuc::all();

       # code...
   }
   public function GetFieldList()
   {
       $fieldList = LinhVuc::all();

        if($fieldList->count() >=4){
            $fieldList = LinhVuc::all()->random(4);
        }


       $result = [
           'status' => true,
           'message'=>'completed',
           'data'=>$fieldList,

       ];

       return response()->json($result);
   }
}
