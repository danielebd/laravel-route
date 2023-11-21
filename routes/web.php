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
        'dcomics' => config('db')
    ];

    return view('home', $data);
})->name('home');


Route::get('/detail/{index}', function ($index) {
    
    $comics = config('db');

    if($index > count($comics) -1){
        abort(404);
    };

    $comic_index = $comics[$index];

    return view('detail', compact('comic_index'));
})->name('detail')->where('index', '[0-9]+');


Route::get('/info', function () {
    $data = [
        'title' => 'ciao sono la info'
    ];
    return view('info', $data);
})->name('info');

