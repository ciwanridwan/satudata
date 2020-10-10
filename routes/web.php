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

Route::group(['prefix' => 'data'], function (){
    Route::get('/', 'DataController@index')->name('pages-data');
    Route::get('{query}', 'DataController@index')->name('page-data-query');
});

Route::get('publikasi', 'PublikasiController@index')->name('pages-publikasi');
Route::get('galery', 'GaleryController@index')->name('pages-galery');
Route::get('infograpik', 'InfoGrapikController@index')->name('pages-infograpik');

Route::group(['prefix' => 'user'], function (){
    Route::get('login', 'PublicUsersController@formLogin')->name('users-login');
    Route::get('register', 'PublicUsersController@formRegister')->name('users-register');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
