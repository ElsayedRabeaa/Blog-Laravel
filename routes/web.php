<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

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
    return view('layouts.default');
});
Route::get('/article/{id}','ArticleControllers@show');
// Crud Routes

Route::get('/admincreate', 'ArticleController@write');

Route::get('store', 'ArticleController@store');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){     

Route::group(['prefix'=>'admin'],function(){     



Route::get('/create','ArticleController@create');
Route::post('/store','ArticleController@store');
Route::put('/update','ArticleController@update');
Route::get('/destroy','ArticleController@destroy');

});