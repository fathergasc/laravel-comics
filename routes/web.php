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

    $comics = config('comics');

    return view('comics', ['comics' => $comics]);

})->name('comics');

Route::get('/Characters', function () {

    return view('characters');

})->name('characters');

Route::get('/Collectibles', function () {

    return view('collectibles');

})->name('collectibles');

Route::get('/Fans', function () {

    return view('fans');

})->name('fans');

Route::get('/Games', function () {

    return view('games');

})->name('games');

Route::get('/News', function () {

    return view('news');

})->name('news');

Route::get('/Shop', function () {

    return view('shop');

})->name('shop');

Route::get('/TV', function () {

    return view('tv');

})->name('tv');

Route::get('/Videos', function () {

    return view('videos');

})->name('videos');

Route::get('/Movies', function () {

    return view('movies');

})->name('movies');
