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

        Route::get('create',['as'=>'backend.category.create','uses'=>'CategoryController@create']);
        Route::post('create',['as'=>'backend.category.store','uses'=>'CategoryController@store']);

        Route::get('edit/{id}',['as'=>'backend.category.edit','uses'=>'CategoryController@edit']);
        Route::post('edit/{id}',['as'=>'backend.category.update','uses'=>'CategoryController@update']);

        Route::get('delete/{id}',['as'=>'backend.category.destroy','uses'=>'CategoryController@destroy']);
    });
    Route::group(['prefix'=>'giangvien'], function()
    {
        Route::get('index',['as'=>'backend.giangvien.list','uses'=>'Backend\GiangVienController@index']);

        Route::get('create',['as'=>'backend.giangvien.create','uses'=>'Backend\GiangVienController@create']);
        Route::post('create',['as'=>'backend.giangvien.store','uses'=>'Backend\GiangVienController@store']);

        Route::get('edit/{id}',['as'=>'backend.giangvien.edit','uses'=>'Backend\GiangVienController@edit']);
        Route::post('edit/{id}',['as'=>'backend.giangvien.update','uses'=>'Backend\GiangVienController@update']);

        Route::get('delete/{id}',['as'=>'backend.giangvien.destroy','uses'=>'Backend\GiangVienController@destroy']);
    });
