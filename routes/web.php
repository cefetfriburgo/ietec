<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('IETEC');
})->name('home');

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dash');

Route::get('/quem_somos', function (){
    return view('/quem_somos');
})->name('sobre');

Route::get('/relatorio', function () {
    return view('/relatorio');
})->name('relatorio');

Route::get('/login', function () {
    return view('/login');
})->name('login');

Route::get('/modelo', function (){
    return view('/layouts/modelo');
})->name('modelo');

