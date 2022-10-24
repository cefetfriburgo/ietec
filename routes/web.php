<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

/**
 * Rotas do index
 */

Route::get('/ietec', function () {
    return view('ietec');
})->name('home');

Route::get('/quem_somos', function () {
    return view('/quem_somos');
})->name('sobre');

Route::get('/login', function () {
    return view('/login');
})->name('login');

/*
Rotas do Login
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dash');

/*
Rotas do Dashboard
*/
Route::get('/dashboard/empresasSetor', [DashboardController::class, 'listEmpresasPorSetor'])->name("dashboardEmpresasPorSetor");


Route::get('/relatorio', function () {
    return view('/relatorio');
})->name('relatorio');

Route::get('/planejamento', function () {
    return view('/planejamento');
})->name('planejamento');

Route::get('/monitoramento', function () {
    return view('/monitoramento');
})->name('monitoramento');

Route::get('/modelo', function () {
    return view('/layouts/modelo');
})->name('modelo');
