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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['role:admin']], function(){
    Route::resource('/user','userController');
    Route::get('/user/hapus/{id}','userController@destroy');
    Route::resource('/barang','barangController');
    Route::get('/barang/hapus/{id}','barangController@destroy');
    Route::resource('/supplier','supplierController');
    Route::get('/supplier/hapus/{id}','supplierController@destroy');
    Route::resource('/akun','akunController');
    Route::get('/akun/hapus/{id}','akunController@destroy');
    Route::resource('/barangmasuk','barangmasukController');
    Route::resource('/barangkeluar','barangkeluarController');
    Route::resource('/report','LaporanController');
});
Route::get('/pdf', 'PdfController@print')->name('print');