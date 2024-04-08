<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\OportunidadesController;
use App\Http\Controllers\VestibulinhoController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\ContatoController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/departamentos', [DepartamentosController::class, 'departamentos'])->name('site.departamentos');
Route::get('/cursos', [CursosController::class, 'cursos'])->name('site.cursos');
Route::get('/oportunidades', [OportunidadesController::class, 'oportunidades'])->name('site.oportunidades');
Route::get('/vestibulinho', [VestibulinhoController::class, 'vestibulinho'])->name('site.vestibulinho');
Route::get('/instituicao', [InstituicaoController::class, 'instituicao'])->name('site.instituicao');
Route::get('/contato',[ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function () {return 'Login';})->name('site.login');
