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
    return view('welcome');
})->name('welcome');


Route::get('/platos','App\Http\Controllers\PlatoController@index')->name('platos.index');

Route::group(['middleware' => 'role:admin|editor'], function () {
    Route::get('/platos/create','App\Http\Controllers\PlatoController@create')->name('platos.create');
    Route::get('/platos/{id}/edit','App\Http\Controllers\PlatoController@edit')->name('platos.edit');
    Route::patch('/platos/{id}','App\Http\Controllers\PlatoController@update')->name('platos.update');
    Route::post('/platos','App\Http\Controllers\PlatoController@store')->name('platos.store');
    Route::delete('/platos/{id}','App\Http\Controllers\PlatoController@destroy')->name('platos.destroy');
    Route::get('/platosAdmin','App\Http\Controllers\PlatoController@index')->name('platos.adminIndex');
});

Route::get('/reservas/create','App\Http\Controllers\ReservaController@create')->name('reservas.create');
Route::get('/reservas/{id}','App\Http\Controllers\ReservaController@edit')->name('reservas.edit');
Route::delete('/reservas/{id}','App\Http\Controllers\ReservaController@destroy')->name('reservas.destroy');
Route::post('/reservas/{id}','App\Http\Controllers\ReservaController@update')->name('reservas.update');
Route::post('/reservas','App\Http\Controllers\ReservaController@store')->name('reservas.store');

Route::group(['middleware' => 'role:admin|editor'], function () {
    Route::get('/reservas','App\Http\Controllers\ReservaController@index')->name('reservas.index');
});

Route::get('/restaurantes','App\Http\Controllers\RestauranteController@index')->name('restaurantes.index');

Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/restaurantes/{id}/edit','App\Http\Controllers\RestauranteController@edit')->name('restaurantes.edit');
    Route::patch('/restaurantes/{id}','App\Http\Controllers\RestauranteController@update')->name('restaurantes.update');
});

require __DIR__.'/auth.php';
