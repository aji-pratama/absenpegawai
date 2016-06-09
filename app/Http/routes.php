<?php



Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['web']], function () {

#route Belajar 
Route::resource('biodata', 'BiodataController');

#Route Absen
Route::resource('absen', 'AbsenController');

Route::resource('kegiatan', 'KegiatanController');

Route::get('laporan/excel', 'LaporanController@excel');
Route::get('laporan/excelkeg', 'LaporanController@excelkeg');
Route::auth();
Route::get('/home', 'HomeController@index');
});
