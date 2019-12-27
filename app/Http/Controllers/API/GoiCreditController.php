<?php

namespace App\Http\Controllers\API;

use App\GoiCredit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $goiCredit = GoiCredit::all();
      $count = GoiCredit::all()->count();
        $result = [
            'status'=>true,
            'message'=>$count,
            'data'=>$goiCredit,
            ];
        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\GoiCredit  $goiCredit
     * @return \Illuminate\Http\Response
     */
    public function show(GoiCredit $goiCredit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoiCredit  $goiCredit
     * @return \Illuminate\Http\Response
     */
    public function edit(GoiCredit $goiCredit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoiCredit  $goiCredit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoiCredit $goiCredit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoiCredit  $goiCredit
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoiCredit $goiCredit)
    {
        //
    }
}
