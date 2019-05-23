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


Route::group(['prefix'=>'dashboard'], function()
{
    Route::get('index',['as'=>'backend.dashboard.list','uses'=>'Backend\DashboardController@index']);

    Route::get('create',['as'=>'admin.category.create','uses'=>'CategoryController@create']);
    Route::post('create',['as'=>'admin.category.store','uses'=>'CategoryController@store']);

    Route::get('edit/{id}',['as'=>'admin.category.edit','uses'=>'CategoryController@edit']);
    Route::post('edit/{id}',['as'=>'admin.category.update','uses'=>'CategoryController@update']);

    Route::get('delete/{id}',['as'=>'admin.category.destroy','uses'=>'CategoryController@destroy']);
});
Route::group(['prefix'=>'giangvien'], function()
{
    Route::get('index',['as'=>'backend.giangvien.list','uses'=>'Backend\GiangVienController@index']);

    Route::get('create',['as'=>'admin.giangvien.create','uses'=>'GiangVienController@create']);
    Route::post('create',['as'=>'admin.giangvien.store','uses'=>'GiangVienController@store']);

    Route::get('edit/{id}',['as'=>'admin.giangvien.edit','uses'=>'GiangVienController@edit']);
    Route::post('edit/{id}',['as'=>'admin.giangvien.update','uses'=>'GiangVienController@update']);

    Route::get('delete/{id}',['as'=>'admin.giangvien.destroy','uses'=>'GiangVienController@destroy']);
});
