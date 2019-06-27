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


Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'pagecontroller@getindex'
]);

Route::get('login',[
	'as'=>'dang-nhap',
	'uses'=>'pagecontroller@login'
]);
Route::get('register',[
	'as'=>'register',
	'uses'=>'pagecontroller@getregister'
]);
Route::get('register2',[
	'as'=>'register',
	'uses'=>'pagecontroller@register'
]);

