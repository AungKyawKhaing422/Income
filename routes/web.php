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

Route::get('/login', 'PageController@login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/logout','Auth\LoginController@logout');

Route::get('/', 'PageController@home');
Route::get('/home', 'PageController@home');

Route::get('/category/create', 'CategoryController@create');
Route::post('/category/create', 'CategoryController@insert');

Route::get('/category', 'CategoryController@index');

Route::get('/category/{id}/delete', 'CategoryController@destroy');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::post('/category/{id}/edit', 'CategoryController@update');