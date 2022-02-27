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
    return view('contacts');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/create', function () {
    return view('create');
});

Route::resource('contacts', 'App\Http\Controllers\ContactController');
