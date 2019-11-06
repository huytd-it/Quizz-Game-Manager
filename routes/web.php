<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('layout');
})->name('dashboard');
*/

Route::get('/', 'QuanTriVienController@dangnhap')->name('dang_nhap');
Route::name('linh-vuc.')->group(function(){
    Route::get('/linh-vuc', function () {
        return view('ds-linhvuc');
    })->name('danh-sach');

    Route::get('/linh-vuc/them-moi', function () {
        return view('them-moi-linh-vuc');
    })->name('them-moi');

});
Route::get('goi_credit', 'GoiCreditController@index')->name('goi_credit');

Auth::routes();
//Route::resource('goi_credit', 'GoiCreditController');
/*Route::get('/linh-vuc', function () {
    return view('ds-linhvuc');
})->name('linh-vuc.danh-sach');

Route::get('/linh-vuc/them-moi', function () {
    return view('them-moi-linh-vuc');
})->name('linh-vuc.them-moi');*/

