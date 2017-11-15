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
    return view('welcome');
});

Route::get('/playground/index', function () {
   return view('playground.index');
});

Route::get('/playground/vue', function () {
    return view('playground.vue');
});

Route::get('/playground/material', function () {
   return view('playground.material');
});