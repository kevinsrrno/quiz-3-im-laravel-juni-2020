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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', 'artikelController@index'); // menampilkan halaman form
Route::get('/artikel/{id}', 'artikelController@show'); // show artikel
Route::get('/artikels/creates','artikelController@create'); // menampilkan semua
Route::post('/artikel', 'artikelController@store'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/delete', 'artikelController@delete'); // menampilkan form untuk edit item
Route::put('/artikel/{id}', 'artikelController@update'); // menyimpan perubahan dari form edit
Route::get('/artikel/{id}/edit', 'artikelController@edit'); // menghapus data dengan id