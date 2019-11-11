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
    //Phần lỉnh vực
    Route::prefix('/linh-vuc')->group(function(){
        Route::name('linh-vuc.')->group(function(){
            Route::get('/','LinhVucController@index')->name('danh-sach');
            Route::get('/them-moi','LinhVucController@create')->name('them-moi');
            Route::post('/luu-tru','LinhVucController@store')->name('luu-tru');
        });
    });
    //Phần câu hỏi
    Route::prefix('/cau_hoi')->group(function(){
        Route::name('cau_hoi.')->group(function(){
            Route::get('/','CauHoiController@index')->name('ds_cau_hoi');
            Route::get('/them_moi','CauHoiController@create')->name('them_moi');
            Route::post('/luu_them_moi','CauHoiController@store')->name('luu_them_moi');
            Route::get('/xoa','CauHoiController@destroy')->name('xoa_cau_hoi');
        });
    });
    Route::get('goi_credit', 'GoiCreditController@index')->name('goi_credit');
    Route::get('luot_choi', 'LuotChoiController@index') ->name('luot_choi');
    Route::get('ds_lichsumuacredit','LichSuMuaCreditController@index')->name('ds_lichsumuacredit');
    Route::get('/nguoi_choi','NguoiChoiController@index')->name('nguoi_choi');
});


Auth::routes();
//Route::resource('goi_credit', 'GoiCreditController');
/*
Route::get('/linh-vuc/them-moi', function () {
    return view('them-moi-linh-vuc');
})->name('linh-vuc.them-moi');*/
