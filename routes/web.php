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
    return view('home', compact('comics'));
})->name('home');

Route::get('/header', function () {
    return view('header');
})->name('header');



Route::get('/footer', function () {
    return view('footer');
})->name('footer');

Route::get('/single/{param}', function ($id) {
    $comics = config('comics');
    $comic = null;

    foreach ($comics as $item) {
        if ($item['id'] == $id);
        $comic = $item;
    }
    return view('single', compact('comic'));
})->name('single');
