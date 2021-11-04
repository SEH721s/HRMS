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
});
Route::view('home','home')->middleware('auth');

Route::view('/staff','staff')->middleware('auth');
Route::view('/leaves','leaves')->middleware('auth');
Route::view('/events','events')->middleware('auth');
Route::view('/contracts','contracts')->middleware('auth');


