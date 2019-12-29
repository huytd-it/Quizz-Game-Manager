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
Route::get('/trang-chu', function () {
    return view('trang-chu');
})->name('trang-chu')->middleware('checklogin::class');
Route::middleware('checklogin')->group(function(){
    //Phần lĩnh vực
    Route::prefix('/linh-vuc')->group(function(){
        Route::name('linh-vuc.')->group(function(){
            Route::get('/','LinhVucController@index')->name('danh-sach');
            Route::get('/thung-rac','LinhVucController@recycle')->name('thung-rac');
            Route::get('/them-moi','LinhVucController@create')->name('them-moi');
            Route::post('/luu-tru','LinhVucController@store')->name('luu-tru');
            Route::get('{id}/chinh-sua','LinhVucController@edit')->name('chinh-sua');
            Route::post('{id}/cap-nhat','LinhVucController@update')->name('cap-nhat');
            Route::get('{id}/xoa','LinhVucController@destroy')->name('xoa');
            Route::get('{id}/khoi-phuc','LinhVucController@restore')->name('khoi-phuc');
        });
    });
    //Phần lượt chơi
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
    //Phần câu hỏi
    Route::prefix('/cau_hoi')->group(function(){
        Route::name('cau_hoi.')->group(function(){
            Route::get('/','CauHoiController@index')->name('ds_cau_hoi');
            Route::get('/them_moi','CauHoiController@create')->name('them_moi');
            Route::post('/luu_them_moi','CauHoiController@store')->name('luu_them_moi');
            Route::get('{id}/xoa','CauHoiController@destroy')->name('xoa_cau_hoi');
            Route::post('{id}/cap_nhat','CauHoiController@update')->name('cap_nhat_cau_hoi');
            Route::get('{id}/hien_thi_sua','CauHoiController@edit')->name('hien_thi_view_cap_nhat');
            Route::get('/thung_rac','CauHoiController@thungrac')->name('thung_rac_cau_hoi');
            Route::get('{id}/khoi_phuc','CauHoiController@khoiphuc')->name('khoi_phuc_cau_hoi');
        });
    });
    //Phân người chơi
    Route::prefix('/nguoi_choi')->group(function(){
        Route::name('nguoi_choi.')->group(function(){
            Route::get('/','NguoiChoiController@index')->name('ds_nguoi_choi');
            Route::get('/them_moi_nguoi_choi','NguoiChoiController@create')->name('them_moi_nguoi_choi');
            Route::post('/luu_tru_nguoi_choi','NguoiChoiController@store')->name('luu_tru_nguoi_choi');
            Route::get('{id}/xoa_nguoi_choi','NguoiChoiController@destroy')->name('xoa_nguoi_choi');
        });
    });
    //Phần gói credit
    Route::prefix('/goi_credit')->group(function(){
        Route::name('goi_credit.')->group(function(){
            Route::get('/','GoiCreditController@index')->name('danh-sach');
            Route::get('/them-moi','GoiCreditController@create')->name('them-moi');
            Route::post('/luu-tru','GoiCreditController@store')->name('luu-tru');
            Route::get('{id}/chinh-sua','GoiCreditController@edit')->name('chinh-sua');
            Route::post('{id}/cap-nhat','GoiCreditController@update')->name('cap-nhat');
            Route::get('{id}/xoa','GoiCreditController@destroy')->name('xoa');
            Route::get('{id}/khoi-phuc','GoiCreditController@restore')->name('khoi-phuc');
            Route::get('/thung_rac','GoiCreditController@recycle')->name('thung_rac');
        });
    });


    Route::get('ds_lichsumuacredit','LichSuMuaCreditController@index')->name('ds_lichsumuacredit');

});


Auth::routes();
//Route::resource('goi_credit', 'GoiCreditController');
/*
Route::get('/linh-vuc/them-moi', function () {
    return view('them-moi-linh-vuc');
})->name('linh-vuc.them-moi');*/
