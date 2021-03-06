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


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('index', ['as' => 'backend.dashboard.list', 'uses' => 'Backend\DashboardController@index']);

    Route::get('create', ['as' => 'backend.category.create', 'uses' => 'Backend\DashboardController@create']);
    Route::post('create', ['as' => 'backend.category.store', 'uses' => 'Backend\DashboardController@store']);

    Route::get('edit/{id}', ['as' => 'backend.category.edit', 'uses' => 'Backend\DashboardController@edit']);
    Route::post('edit/{id}', ['as' => 'backend.category.update', 'uses' => 'Backend\DashboardController@update']);

    Route::get('delete/{id}', ['as' => 'backend.category.destroy', 'uses' => 'Backend\DashboardController@destroy']);
});
Route::group(['prefix' => 'course'], function () {
    Route::get('index', ['as' => 'backend.course.list', 'uses' => 'Backend\CourseController@index']);

    Route::get('create', ['as' => 'backend.course.create', 'uses' => 'Backend\CourseController@create']);
    Route::post('create', ['as' => 'backend.course.store', 'uses' => 'Backend\CourseController@store']);

    Route::get('edit/{id}', ['as' => 'backend.course.edit', 'uses' => 'Backend\CourseController@edit']);
    Route::post('edit/{id}', ['as' => 'backend.course.update', 'uses' => 'Backend\CourseController@update']);

    Route::get('delete/{id}', ['as' => 'backend.course.destroy', 'uses' => 'Backend\CourseController@destroy']);
});
Route::group(['prefix' => 'lop'], function () {
    Route::get('index', ['as' => 'backend.lop.list', 'uses' => 'Backend\LopController@index']);

    Route::get('create', ['as' => 'backend.lop.create', 'uses' => 'Backend\LopController@create']);
    Route::post('create', ['as' => 'backend.lop.store', 'uses' => 'Backend\LopController@store']);

    Route::get('edit/{id}', ['as' => 'backend.lop.edit', 'uses' => 'Backend\LopController@edit']);
    Route::post('edit/{id}', ['as' => 'backend.lop.update', 'uses' => 'Backend\LopController@update']);

    Route::get('delete/{id}', ['as' => 'backend.lop.destroy', 'uses' => 'Backend\LopController@destroy']);
});
Route::group(['prefix' => 'giangvien'], function () {
    Route::get('index', ['as' => 'backend.giangvien.list', 'uses' => 'Backend\GiangVienController@index']);

    Route::get('create', ['as' => 'backend.giangvien.create', 'uses' => 'Backend\GiangVienController@create']);
    Route::post('create', ['as' => 'backend.giangvien.store', 'uses' => 'Backend\GiangVienController@store']);

    Route::get('edit/{id}', ['as' => 'backend.giangvien.edit', 'uses' => 'Backend\GiangVienController@edit']);
    Route::post('edit/{id}', ['as' => 'backend.giangvien.update', 'uses' => 'Backend\GiangVienController@update']);

    Route::get('delete/{id}', ['as' => 'backend.giangvien.destroy', 'uses' => 'Backend\GiangVienController@destroy']);
});
Route::group(['prefix' => 'hocvien'], function () {
    Route::get('index', ['as' => 'backend.hocvien.list', 'uses' => 'Backend\HocVienController@index']);

    Route::get('create', ['as' => 'backend.hocvien.create', 'uses' => 'Backend\HocVienController@create']);
    Route::post('create', ['as' => 'backend.hocvien.store', 'uses' => 'Backend\HocVienController@store']);

    Route::get('edit/{id}', ['as' => 'backend.hocvien.edit', 'uses' => 'Backend\HocVienController@edit']);
    Route::post('edit/{id}', ['as' => 'backend.hocvien.update', 'uses' => 'Backend\HocVienController@update']);

    Route::get('delete/{id}', ['as' => 'backend.hocvien.destroy', 'uses' => 'Backend\HocVienController@destroy']);
});
Route::group(['prefix' => 'category'], function () {
    Route::get('index', ['as' => 'backend.category.list', 'uses' => 'Backend\CategoryController@index']);

    Route::get('create', ['as' => 'backend.category.create', 'uses' => 'Backend\CategoryController@create']);
    Route::post('create', ['as' => 'backend.category.store', 'uses' => 'Backend\CategoryController@store']);

    Route::get('edit/{id}', ['as' => 'backend.category.edit', 'uses' => 'Backend\CategoryController@edit']);
    Route::post('edit/{id}', ['as' => 'backend.category.update', 'uses' => 'Backend\CategoryController@update']);

    Route::get('delete/{id}', ['as' => 'backend.category.destroy', 'uses' => 'Backend\CategoryController@destroy']);
});


