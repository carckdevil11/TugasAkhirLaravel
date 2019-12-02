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

Route::get('beranda', function () {
	return view('beranda');
});

Route::get('/form', function () {
	return view('form');
});

Route::get('login', function () {
	return view('login');
});


Route::post('/form', 'FormController@store');

Route::post('/', 'FormController@update');
Route::post('/login', 'FormController@login');


Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

Route::get('/nama','FormController@nama');
Route::post('/namabaru','FormController@namabaru');

