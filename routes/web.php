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
Route::get('siswa/{siswa}', 'SiswaController@show');
Route::get('siswa', 'SiswaController@index');

Route::get('about', 'AboutController@index');