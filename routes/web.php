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

    $data = [
        'title' => 'ciao sono la home'
    ];
    return view('home', $data);
});

Route::get('/info', function () {
    $data = [
        'title' => 'ciao sono la info'
    ];
    return view('info', $data);});

Route::get('/about', function () {
    $data = [
        'title' => 'ciao sono la about'
    ];
    return view('about', $data);});

