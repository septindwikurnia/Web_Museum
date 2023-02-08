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


Route::get('/', 'PageController@home');
Route::get('/home', 'PageController@home');
Route::get('/route', 'PageController@route');
Route::get('/hr', 'PageController@hr');
Route::get('/vision', 'PageController@vision');
Route::get('/infras', 'PageController@infras');

Route::get('/cao', 'PageController@cao');
Route::get('/crm', 'PageController@crm');
Route::get('/diorama', 'PageController@diorama');
Route::get('/statue', 'PageController@statue');
Route::get('/artific', 'PageController@artific');
Route::get('/library', 'PageController@library');

Route::get('/bhairawa', 'PageController@bhairawa');
Route::get('/durga', 'PageController@durga');
Route::get('/ganesha', 'PageController@ganesha');
Route::get('/mahakala', 'PageController@mahakala');
Route::get('/mahisha', 'PageController@mahisha');
Route::get('/nandi', 'PageController@nandi');
Route::get('/nandiswara', 'PageController@nandiswara');

//penanggung jawab
Route::get('penanggungjawab','penanggungjwbcontroller@pj');
\Route::get('create','penanggungjwbcontroller@create');
Route::post('simpan','penanggungjwbcontroller@store');
Route::get('penanggungjawab/{penanggungjawab}/delete','penanggungjwbcontroller@delete');
Route::get('penanggungjawab/{penanggungjawab}/editpj','penanggungjwbcontroller@editpj');
Route::post('penanggungjawab/{penanggungjawab}/updatepj','penanggungjwbcontroller@updatepj');

//lokasi & saran
Route::get('lokasi','PageController@lokasi');
Route::post('simpan_saran','kotaksarancontroller@store');