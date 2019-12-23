<?php

namespace App\Http\Controllers\API;

use App\CauHoi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllQuestion = CauHoi::all();
        $result = [
            'success'=>true,
            'data' => $AllQuestion,
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
     * @param  \App\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function show(CauHoi $cauHoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CauHoi $cauHoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(CauHoi $cauHoi)
    {
        //
    }

    public function GetQuestionList(Request $request)
    {
        $idlinhvuc = $request->query('linh_vuc_id');
        $QuestionList = CauHoi::where('id_linh_vuc',$idlinhvuc)->get()->random(15);
        $result =[
            'success'=>true,
            'data'=>$QuestionList,
        ];

        return response()->json($result);
    }
}
