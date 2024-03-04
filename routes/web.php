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

// tentang
Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/programstudi', function () {
    return view('programstudi');
});

Route::get('/programstudiD3TK', function () {
    return view('programstudiD3TK');
});

Route::get('/programstudiD4TRPL', function () {
    return view('programstudiD4TRPL');
});

Route::get('/programstudiD3TI', function () {
    return view('programstudiD3TI');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});
