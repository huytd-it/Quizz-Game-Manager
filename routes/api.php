<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/linh_vuc','API\LinhVucController@GetFieldList')->name('lay-ds');

Route::get('cau_hoi_theo_linh_vuc','API\CauHoiController@GetQuestionList');
Route::get('tat_ca_cau_hoi','API\CauHoiController@index');
Route::get('luot_choi','API\LuotChoiController@index');
Route::post('lich_su','API\LuotChoiController@lichsu');
Route::post('login','API\APIDangNhapController@login');
Route::post('register','API\APIDangNhapController@register');
Route::get('goi_credit','API\GoiCreditController@index');
Route::middleware(['assign.guard:api','jwt.auth'])->group(function () {
   return Route::get('user','API\APIDangNhapController@user');
 });
