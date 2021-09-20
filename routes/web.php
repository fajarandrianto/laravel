<?php

use App\magang;
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

Route::get('/home', function () {
    $jumlahdatamagang = magang::count();


    return view('home', compact('jumlahdatamagang'));
});


Route::get('magang', 'MagangController@index')->name('get.magang');
Route::post('magang/post', 'MagangController@store')->name('post.magang');
Route::get('magang', 'MagangController@index')->name('get.magang');
Route::post('magang/post', 'MagangController@store')->name('post.magang');
Route::delete('magang/delete/{id}', 'MagangController@destroy')->name('delete.magang');
Route::get('magang/edit/{id}', 'MagangController@edit');
Route::post('magang/update', 'MagangController@update');
Route::get('edit/{id}', 'MagangController@showData', 'showData');
Route::post('edit', 'MagangController@update', 'update');
Route::get('table', 'MagangController@table')->name('get.table');
Route::get('formulir', 'MagangController@formulir')->name('get.formulir');
Route::get('magang/formuir', 'HomeController@formuir');
Route::post('magang/formuir', 'HomeController@store');