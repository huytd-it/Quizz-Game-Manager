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
Route::get('/dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');
Route::middleware('auth')->group(function(){
    Route::get('/trang-chu', function () {
        return view('layout');
    })->name('trang-chu');
    Route::prefix('/linh-vuc')->group(function(){
        Route::name('linh-vuc.')->group(function(){
            Route::get('/','LinhVucController@index')->name('danh-sach');
            Route::get('/them-moi','LinhVucController@create')->name('them-moi');
            Route::post('/luu-tru','LinhVucController@store')->name('luu-tru');



        });
    });
    Route::prefix('/goi_credit')->group(function(){
        Route::name('goi_credit.')->group(function(){
            Route::get('/','GoiCreditController@index')->name('danh-sach');
            Route::get('/them-moi','GoiCreditController@create')->name('them-moi');
            Route::post('/luu-tru','GoiCreditController@store')->name('luu-tru');
            Route::get('{id}/chinh-sua','GoiCreditController@edit')->name('chinh-sua');
            Route::post('{id}/cap-nhat','GoiCreditController@update')->name('cap-nhat');
            Route::get('{id}/xoa','GoiCreditController@destroy')->name('xoa');
        });
    });

    Route::get('luot_choi', 'LuotChoiController@index') ->name('luot_choi');
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
