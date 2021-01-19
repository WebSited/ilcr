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
Route::get('/mastersfm', 'PagesController@mastersfm')->name('mastersfm');
Route::get('/pgdfm', 'PagesController@pgdfm')->name('pgdfm');
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
//Gallery section
Route::get('/admin/gallery', 'GalleryController@index')->name('admin.gallery');
Route::get('/admin/gallery/create', 'GalleryController@create')->name('admin.gallery.create');
Route::post('admin/gallery/store', 'GalleryController@store')->name('store.gallery');
Route::get('admin/gallery/edit/{id}', 'GalleryController@edit')->name('edit.gallery');
Route::post('admin/gallery/update/{id}', 'GalleryController@update')->name('update.gallery');
Route::get('/admin/gallery/delete/{gallery}', 'GalleryController@destroy');
//News section
Route::get('/admin/news', 'NewsController@index')->name('admin.news');
Route::get('/admin/news/create', 'NewsController@create')->name('admin.news.create');
Route::post('admin/news/store', 'NewsController@store')->name('store.news');
Route::get('admin/news/edit/{id}', 'NewsController@edit')->name('edit.news');
Route::post('admin/news/update/{id}', 'NewsController@update')->name('update.news');
Route::get('/admin/news/delete/{news}', 'NewsController@destroy');

