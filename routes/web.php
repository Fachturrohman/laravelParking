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




// Auth::routes();


// Route::group(['middleware' => ['web','auth']], function(){
//   Route::get('/', function () {
//       return view('welcome');
//   });

// Route::get('/home', function() {
//     if (Auth::user()->admin == 0) {
//       return view('home');
//     } else {
//       $users['users'] = \App\User::all();
//       return view('adminhome', $users);
//     }
//   });

// Route::get('/home','AdminController@index');
// Route::get('/home/tambah','AdminController@tambah');
// Route::post('/home/store','AdminController@store');
// Route::get('/home/edit/{id}','AdminController@edit');
// Route::post('/home/update','AdminController@update');
// Route::get('/home/hapus/{id}','AdminController@hapus');

// Route::get('/home/cari','AdminController@cari');

// });

Route::get('/', function(){
  return view('welcome');
});

Route::get('/admin','AdminController@index');
Route::get('/home/tambah','HomeController@tambah');
Route::post('/home/store','HomeController@store');
Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/admin/update','AdminController@update');
Route::get('/admin/hapus/{id}','AdminController@hapus');
Route::post('/proses', 'MalasngodingController@proses');

Route::get('/home/cari','HomeController@cari');
Route::get('/admin/cari','AdminController@cari');


Route::get('/admin/tambah','AdminController@tambah');
Route::post('/admin/store','AdminController@store');

Route::get('/home/cetak/{id}','CetakController@pdf');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){
  Route::resource('/','AdminController');
});