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


Route::get('/', 'HomepageController@index');


Route::post('siswa', 'SiswaController@store');
Route::get('siswa/create', 'SiswaController@create');
Route::delete('siswa/{siswa}','SiswaController@destroy');
Route::get('siswa/{siswa}', 'SiswaController@show');
Route::patch('siswa/{siswa}', 'SiswaController@update');
Route::get('siswa/{siswa}/edit', 'SiswaController@edit');
Route::get('siswa', 'SiswaController@index');

// Route::resource('siswa', 'SiswaController');

Route::get('about', 'AboutController@index');