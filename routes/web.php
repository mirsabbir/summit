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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile', 'ProfileController@index')->name('profile');
Route::post('profile', 'ProfileController@store');
Route::get('admin','PanelController@index')->name('admin.panel');
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::get('/courses/{course_code}', 'CourseController@index')->name('course');
Route::get('/courses/{course_code}/{post_id}', 'PostController@index')->name('post');

Route::post('admin/login', 'Auth\AdminLoginController@login');
Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
