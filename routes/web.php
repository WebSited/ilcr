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
//front section
Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/masters', 'PagesController@masters')->name('masters');
Route::get('/training', 'PagesController@training')->name('training');
Route::get('/pgd', 'PagesController@pgd')->name('pgd');
Route::get('/activities', 'PagesController@activities')->name('activities');
Route::get('/activity/single/{id}', 'PagesController@singleshow')->name('show.single.activity');
Route::post('/contact', 'PagesController@mail')->name('sendmail');


//Admin section
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin.home');
//Team section
Route::get('/admin/team', 'TeamController@index')->name('admin.team');
Route::get('/admin/team/create', 'TeamController@create')->name('admin.team.create');
Route::post('admin/team/store', 'TeamController@store')->name('store.team');
Route::get('admin/team/edit/{id}', 'TeamController@edit')->name('edit.team');
Route::post('admin/team/update/{id}', 'TeamController@update')->name('update.team');
Route::get('/admin/team/delete/{team}', 'TeamController@destroy');
//Activity section
Route::get('/admin/activity', 'ActivityController@index')->name('admin.activity');
Route::get('/admin/activity/create', 'ActivityController@create')->name('admin.activity.create'); 
Route::post('admin/activity/store', 'ActivityController@store')->name('store.activity');
Route::get('/admin/activity/{id}', 'Activity@show')->name('show.activity');
Route::get('admin/activity/edit/{id}', 'ActivityController@edit')->name('edit.activity');
Route::post('admin/activity/update/{id}', 'ActivityController@update')->name('update.activity');
Route::get('admin/activity/delete/{id}', 'ActivityController@destroy')->name('delete.activity');
Route::get('/admin/activity/{id}', 'ActivityController@show')->name('show.activity');

