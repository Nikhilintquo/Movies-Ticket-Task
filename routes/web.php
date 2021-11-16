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

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [App\Http\Controllers\web\AdminController::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [App\Http\Controllers\web\AdminController::class, 'login'])->name('adminlogin');


Route::get('/places', ['as' => 'place','uses' => 'App\Http\Controllers\web\PlaceController@index',]);
Route::get('/cinemas', ['as' => 'cinema','uses' => 'App\Http\Controllers\web\CinemaController@index',]);
Route::get('/users', ['as' => 'user','uses' => 'App\Http\Controllers\web\UserController@index',]);



Route::get('/movies', ['as' => 'movie','uses' => 'App\Http\Controllers\web\MoviesController@index',]);
Route::get('/addmovie', ['as' => 'addmovie','uses' => 'App\Http\Controllers\web\MoviesController@create',]);
Route::post('/movieStore', ['uses' => 'App\Http\Controllers\web\MoviesController@store',])->name('addmoviepage');
Route::get('/movie/destroy/{id}', ['as' => 'moviedelete','uses' => 'App\Http\Controllers\web\MoviesController@destroy',]);
