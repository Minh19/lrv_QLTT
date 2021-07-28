<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/TrinhGuiDuyetVanBan','HomeController@TrinhGuiDuyetVanBan')->name('home.TrinhGuiDuyetVanBan');

/*
*GET    => activity.index  => danh sách
*GET    => activity.create => form thêm mới
*POST   => activity.store  => khi submit form thêm mới
*GET    => activity.show   => xem chi tiết
*GET    => activity.edt    => hiển thị form edit
*PUT    => activity.update => khi submit form edit
*DELETE => activity.destroy => khi xóa


*/

Route::group(['prefix' => 'admin'],function(){
    Route::get('/','AdminController@dashboard')->name('admin.dashboard');
    
    Route::resources([
        'HopThuCuaToi'  => 'HopThuCuaToiController',
        'QuanLyVanBan'  => 'QuanLyVanBanController',
    ]);
});

