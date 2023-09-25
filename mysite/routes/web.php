<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/login', function () {
//     return view('index');
// });

// Route::get('/logout', function () {
//     return view('index');
// });

Route::get('/account', function () {
    return view('account', ['email' => 'temp@example.com']);
});

Route::get('/change', function () {
    return view('change', ['email' => 'temp@example.com']);
});