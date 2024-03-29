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


Route::group(['namespace'=>'App\Http\Controllers'],function (){
    Route::get('/','LoginController@index')->name('home');
    Route::get('blogs','LoginController@blogs')->name('blogs');
    Route::post('createinit', 'LoginController@createInit')->name('createInit');
    Route::get('update/{id}','LoginController@update')->name('update');
    Route::post('updateinit', 'LoginController@updateInit')->name('updateInit');
    Route::get('delete/{id}','LoginController@delete')->name('delete');
    Route::get('force-delete/{id}','LoginController@forceDelete')->name('forcedelete.user');



});

