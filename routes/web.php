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

//Маршрут для загрузки формы
Route::get('/', 'Area-parallelogram.Controller@index')->name('index');
//Маршрут для вычисления
Route::post('/', 'Area-parallelogram.Controller@area2')->name('area2');

