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
Route::post('/','QuanTriVienController@xulyDangNhap')->name('xy_ly_dang_nhap');
Route::post('/dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');
Route::middleware('auth')->group(function(){
    Route::get('/trang-chu', function () {
        return view('layout');
    })->name('trang-chu');
    Route::prefix('/linh-vuc')->group(function(){
        Route::name('linh-vuc.')->group(function(){
            Route::get('/','LinhVucController@index')->name('danh-sach');
            Route::get('/them-moi','LinhVucController@create')->name('them-moi');
            Route::post('/luu-tru','LinhVucController@store')->name('luu-tru');
            Route::get('{id}/chinh-sua','LinhVucController@edit')->name('chinh-sua');
            Route::post('{id}/cap-nhat','LinhVucController@update')->name('cap-nhat');
            Route::get('{id}/xoa','LinhVucController@destroy')->name('xoa');
        });
    });
    Route::prefix('/luot-choi')->group(function(){
        Route::name('luot-choi.')->group(function(){
            Route::get('/', 'LuotChoiController@index') ->name('danh-sach');
            Route::get('/them-moi','LuotChoiController@create')->name('them-moi');
            Route::post('/luu-tru','LuotChoiController@store')->name('luu-tru');
            Route::get('{id}/chinh-sua','LuotChoiController@edit')->name('chinh-sua');
            Route::post('{id}/cap-nhat','LuotChoiController@update')->name('cap-nhat');
            Route::get('{id}/xoa','LuotChoiController@destroy')->name('xoa');
        });
    });
    Route::get('goi_credit', 'GoiCreditController@index')->name('goi_credit');
    Route::get('ds_lichsumuacredit','LichSuMuaCreditController@index')->name('ds_lichsumuacredit');
    Route::get('/cau_hoi','CauHoiController@index')->name('cau_hoi');
    Route::get('/nguoi_choi','NguoiChoiController@index')->name('nguoi_choi');

});

Route::get('/them_cau_hoi',function(){
    return view('them_cau_hoi');
})->name('them_moi_cau_hoi');


Auth::routes();
//Route::resource('goi_credit', 'GoiCreditController');
/*
Route::get('/linh-vuc/them-moi', function () {
    return view('them-moi-linh-vuc');
})->name('linh-vuc.them-moi');*/
