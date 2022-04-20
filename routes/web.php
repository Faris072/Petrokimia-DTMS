<?php

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
    return view('login');
});

Route::get('/harga', function () {
    return view('harga',[
        'title' => 'harga',
        'css' => 'hrg.css',
        'js' => 'hrg.js'
    ]);
});

Route::get('/gudang', function (){
    return view('gudang',[
        'title' => 'gudang',
        'css' => 'hrg.css',
        'js' => 'hrg.js'
    ]);
});

Route::get('/truk', function(){
    return view('truk',[
        'title' => 'truk',
        'css' => 'hrg.css',
        'js' => 'hrg.js'
    ]);
});

Route::get('/driver', function(){
    return view('driver',[
        'title' => 'driver',
        'css' => 'hrg.css',
        'js' => 'hrg.js'
    ]);
});

Route::get('/transportir', function(){
    return view('transportir',[
        'title' => 'transportir',
        'css' => 'hrg.css',
        'js' => 'hrg.js'
    ]);
});

Route::get('/kota', function(){
    return view('kota',[
        'title' => 'kota',
        'css' => 'hrg.css',
        'js' => 'hrg.js'
    ]);
});

Route::get('/users', function(){
    return view('users',[
        'title' => 'users',
        'css' => 'hrg.css',
        'js' => 'hrg.js'
    ]);
});


