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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

//Team section
Route::get('/admin/team', 'TeamController@index')->name('admin.team');
Route::get('/admin/team/create', 'TeamController@create')->name('admin.team.create'); 
Route::post('admin/team/store', 'TeamController@store')->name('store.team');
Route::get('admin/team/edit/{id}', 'TeamController@edit')->name('edit.team');
Route::post('admin/team/update/{id}', 'TeamController@update')->name('update.team');
Route::get('/admin/team/delete/{team}', 'TeamController@destroy');

