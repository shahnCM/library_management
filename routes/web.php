<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

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

Route::resource('tests', TestController::class);

//Q1JFQVRF
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
