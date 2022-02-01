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
    return view('Home', [
        'title' => 'Home'
    ]);
});

Route::get('/Product', function () {
    return view('Product', [
        'title' => 'Product'
    ]);
});

Route::get('/About', function () {
    return view('Company/Tentang', [
        'title' => 'About-Us'
    ]);
});

Route::get('/Story', function () {
    return view('story', [
        'title' => 'Story-Us'
    ]);
});

Route::get('/Service', function () {
    return view('Service/Singgle', [
        'title' => 'Service-Us'
    ]);
});

Route::get('/Contact', function () {
    return view('Service/Contact', [
        'title' => 'Contact-Us'
    ]);
});

Route::get('/Absensi', function () {
    return view('Source/fitur_absensi', [
        'title' => 'Fitur-Absensi'
    ]);
});

Route::get('/Gateway', function () {
    return view('Source/fitur_wa', [
        'title' => 'Fitur-Watshap-Gateway'
    ]);
});

