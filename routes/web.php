<?php

Route::get('/', function(){
  return view('auth.login');
});

Route::get('/admin','AdminController@index');
Route::get('/home/tambah','HomeController@tambah');

Route::post('/home/store','HomeController@store');
Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/admin/update','AdminController@update');
Route::get('/admin/hapus/{id}','AdminController@hapus');

Route::get('/home/cari','HomeController@cari');
Route::get('/admin/cari','AdminController@cari');

Route::get('/admin/tambah','AdminController@tambah');
Route::post('/admin/store','AdminController@store');

Route::get('/home/cetak/{id}','CetakController@pdf');

Route::get('/admin/tambahkendaraan','Kendaraan@tambahkendaraan');
Route::post('/admin/storekendaraan','Kendaraan@storekendaraan');
Route::get('/admin/hapuskendaraan/{id}','Kendaraan@hapus');

Route::get('/home/tambahkendaraan','KendaraanController@tambahkendaraan');
Route::post('/home/storekendaraan','KendaraanController@storekendaraan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){
  Route::resource('/','AdminController');
});