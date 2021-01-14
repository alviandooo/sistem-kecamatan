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
    return view('layouts.kopsurat');
});

Route::get('/pdf', function ()
{
    $pdf = PDF::loadview('admin.pdf.surat-belum-menikah');
	return $pdf->stream();
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () { 
    
    Route::get('/dashboard', 'HomeController@index')->name('home');

    // route pengajuan
    Route::get('/dashboard/pengajuan/data', 'PengajuanController@data')->name('pengajuan.data');
    Route::post('/dashboard/pengajuan/cetak_pdf', 'PengajuanController@cetakpdf')->name('pengajuan.cetakpdf');
    Route::post('/dashboard/pengajuan/store', 'PengajuanController@store')->name('pengajuan.store');
    Route::post('/dashboard/pengajuan/update', 'PengajuanController@update')->name('pengajuan.update');

    
    // route users
    Route::get('/dashboard/datapenduduk/users/select2', 'UsersController@select2users')->name('users.select2');
    Route::get('/dashboard/users/data', 'UsersController@data')->name('users.data');
    Route::get('/dashboard/users', 'UsersController@index')->name('users.index');
    Route::post('/dashboard/users/store', 'UsersController@store')->name('users.store');
    Route::post('/dashboard/users/delete', 'UsersController@destroy')->name('users.delete');
    Route::post('/dashboard/users/update', 'UsersController@update')->name('users.update');


    // route data penduduk 
    Route::get('/dashboard/datapenduduk/data/select2', 'DataController@select2datapenduduk')->name('data.select2');
    Route::get('/dashboard/datapenduduk/data', 'DataController@data')->name('data.data');
    Route::get('/dashboard/datapenduduk', 'DataController@index')->name('data.index');
    Route::post('/dashboard/datapenduduk/store', 'DataController@store')->name('data.store');
    Route::post('/dashboard/datapenduduk/edit', 'DataController@edit')->name('data.edit');
    Route::post('/dashboard/datapenduduk/update', 'DataController@update')->name('data.update');
    Route::post('/dashboard/datapenduduk/destroy', 'DataController@destroy')->name('data.destroy');

    
});
