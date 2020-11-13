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

Route::get('/', 'HomepageController@home');
Route::get('wru/forum', 'ForumpageController@forum')->name('forum');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout')->name('userLogout');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('userLogin');
Route::post('users/login', 'Auth\LoginController@login');
Route::post('users/create_micropost', 'MicropostController@store')->name('createMicropost');
Route::get('admin/', 'Auth\LoginController@showLoginForm')->name('userLogin');

