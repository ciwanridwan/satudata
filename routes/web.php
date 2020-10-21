<?php

use App\Http\Controllers\PublikasiController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('index');

Route::group(['prefix' => 'data'], function () {
	Route::get('/', 'DataController@index')->name('pages-data');
	Route::get('{query}', 'DataController@index')->name('page-data-query');
	
});

Route::get('details/data/{judul}', 'DataController@details')->name('page-data-details');
Route::get('/download/{file}', 'DataController@unduhFile')->name('download-file-data');

Route::group(['prefix' => 'data-{category}'], function () {
	Route::get('/', 'DataController@category')->name('pages-category-data');
	Route::get('{query}', 'DataController@category')->name('page-category-data-query');
});

Route::group(['prefix' => 'publikasi'], function () {
	Route::get('/', 'PublikasiController@index')->name('pages-publikasi');
	Route::get('{query}', 'PublikasiController@index')->name('page-publikasi-query');
});

Route::group(['prefix' => 'publikasi-{year}'], function () {
	Route::get('/', 'PublikasiController@year')->name('pages-year-publikasi');
	Route::get('{query}', 'PublikasiController@year')->name('page-year-publikasi-query');
});

Route::group(['prefix' => 'galeri'], function () {
	Route::get('/', 'GaleryController@index')->name('pages-galery');
	Route::get('/details/{judul}', 'GaleryController@details')->name('pages-details-galery');
});


Route::group(['prefix' => 'infograpik'], function () {
	Route::get('/', 'InfoGrapikController@index')->name('pages-infograpik');
	Route::get('/details', 'InfoGrapikController@details')->name('pages-details-infograpik');
	Route::get('{year}', 'InfoGrapikController@index')->name('pages.infograpik.year');
});

Route::get('about', 'AboutController@index')->name('pages-about');

Route::group(['prefix' => 'user'], function () {
	Route::get('login', 'PublicUsersController@formLogin')->name('users-login');
	Route::get('register', 'PublicUsersController@formRegister')->name('users-register');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
