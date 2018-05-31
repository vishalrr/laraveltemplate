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

Route::get('/', function () {
    return view('index');
});
Auth::routes();
Route::get('/gallery','Controller@gallery')->name('gallery');
Route::get('/fullwid','Controller@fullwid')->name('fullwid');
Route::get('/sideleft','Controller@sideleft')->name('sideleft');
Route::get('/sideright','Controller@sideright')->name('sideright');
Route::get('/basicgrid','Controller@basicgrid')->name('basicgrid');
