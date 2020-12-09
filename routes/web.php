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

Route::get('/create/admin/' . base64_decode(env("ADMIN_CREATE_HASH")), function () {
    dd((env("ADMIN_CREATE_HASH")));
});

Route::get('/create/admin', function () {
    dd(base64_decode(env("ADMIN_CREATE_HASH")));
});

//Q1JFQVRF