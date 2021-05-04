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
    return view('home');
});

Route::get('/pribadi', function () {
    return view('menu.pribadi');
});

Route::get('/publik', function () {
    return view('menu.publik');
});

Route::get('/group', function () {
    return view('menu.group');
});
