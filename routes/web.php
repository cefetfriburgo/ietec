<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers;
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
    return view('dashboard');
});

Route::get('/empresa/planejamento', 'App\Http\Controllers\EmpresaController@listaPlanejamento');
Route::get('/empresa/planejamento/{plano_id}', 'App\Http\Controllers\EmpresaController@detalharPlano')->where('plano_id', '[0-9]+');
Route::get('/empresa/planejamento/edit/{plano_id}', 'App\Http\Controllers\EmpresaController@editarPlano')->where('plano_id', '[0-9]+');
Route::get('/empresa/planejamento/remove/{plano_id}', 'App\Http\Controllers\EmpresaController@removerPlano')->where('plano_id', '[0-9]+');

Route::get('/empresa/monitoramento', function () {
    return view('empresa.monitoramento');
});

Route::get('/empresa/relatorio', function () {
    return view('empresa.relatorio');
});
