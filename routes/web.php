<?php

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/sunys/1/kategorija', 'DogController@category')->name('dogCategory');
Route::get('/kates/1/kategorija', 'CatController@category')->name('catCategory');
Route::get('/zuvys/1/kategorija', 'FishController@category')->name('fishCategory');
Route::get('/peles/1/kategorija', 'RodentController@category')->name('rodentCategory');





Route::resource('sunys', 'DogController');
Route::resource('kates', 'CatController');
Route::resource('zuvys', 'FishController');
Route::resource('peles', 'RodentController');
Route::resource('skelbimai', 'BlogController');
Route::resource('pagalba', 'HelpController');
