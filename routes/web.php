<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PlanejamentoController;
use App\Http\Controllers\MonitoramentoController;

/**
 * Regra para formação de rota:
 * referencia: https://www.brunobrito.net.br/api-restful-boas-praticas/
 *
 *  /[[modulo]]/[[recurso]]/[[operacao]]/[[params]]
 *  - módulo: o sistema é construído por módulos: RH, Atendidos, Patrimônio, Estoque, Sócios, etc
 *  - recurso: qualquer entidade manipulada no módulo referido. Por exemplo: rh/funcionario ou rh/voluntario
 *  - operação: apenas para navegação. Para realizar a operação, sinalize com o método HTTP referente:
 *      >> get: consulta e listagem.
 *          >>> Exemplo: pesquisar o funcionario id=1:
 *          No web.php
 *              Route::get('/rh/funcionarios/{id}', [FuncionariosController::class,'get']);
 *          No FuncionariosController:
 *              public function get(id){ ... }
 *          Chamando no navegador: wegia.org/rh/funcionarios/1
 *
 *          >>> Exemplo: listar todos funcionarios:
 *          No web.php
 *              Route::get('/rh/funcionarios', 'App\Http\Controllers\FuncionariosController@list');
 *          No FuncionariosController:
 *              public function list(){ ... }
 *          Chamando no navegador: wegia.org/rh/funcionarios
 *
 *      >> post: cadastro
 *          >>> Exemplo: cadastrar funcionario:
 *          No web.php
 *              Route::post('/rh/funcionarios', 'App\Http\Controllers\FuncionariosController@save');
 *          No FuncionariosController:
 *              public function save(){ ... }
 *
 *      >> put: edição
 *          >>> Exemplo: alterar o funcionario id=1:
 *          No web.php
 *              Route::put('/rh/funcionarios/{id}', 'App\Http\Controllers\FuncionariosController@update');
 *          No FuncionariosController:
 *              public function update(id){ ... }
 *
 *      >> delete: exclusão
 *          >>> Exemplo: remover o funcionario id=1:
 *          No web.php
 *              Route::delete('/rh/funcionarios/{id}', 'App\Http\Controllers\FuncionariosController@delete');
 *          No FuncionariosController:
 *              public function delete(id){ ... }
 *
 */

/**
 * Rotas do index
 */

Route::get('/', function () {
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
Route::get('/dashboard', [DashboardController::class, 'getDash'])->name("dash");
/*
function () {
    return view('dashboard');
})->name('dash');
*/
/*  
Rotas do Dashboard
*/
Route::get('/dashboard/listSetor'
        , [DashboardController::class, 'listSetor']);

Route::get('/dashboard/maisUtilizadas'
        , [DashboardController::class, 'maisUtilizadas'])->name("dashMaisUtilizadas");
        

Route::get('/dashboard/populacao'
        , [DashboardController::class, 'populacao']);

/*
    Rotas de EmpresaController
*/

Route::get('/empresas', [EmpresaController::class, 'list']);
Route::get('/empresas/{id}', [EmpresaController::class, 'get']);
Route::get('/empresas/nome/{nome}', [EmpresaController::class, 'getByName']);

/*
    Rotas do RelatorioController
*/        
Route::get('/relatorios', [RelatorioController::class, 'relatorio'])->name('relatorio');

Route::get('/relatorios/{id}', [RelatorioController::class, 'relEmpresa']);
Route::get('/relatorios/{setor_id}/{ano}', [RelatorioController::class, 'relFatSetor']);
/* Rotas Planejamento */

Route::get('/planejamento', [PlanejamentoController::class, 'planejamento'])->name('planejamento');

/*Rotas monitoramento*/

Route::get('/monitoramento', [MonitoramentoController::class, 'monitoramento'])->name('monitoramento');

Route::get('/modelo', function () {
    return view('/layouts/modelo');
})->name('modelo');


