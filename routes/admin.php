<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CentroController;
use App\Http\Controllers\Admin\ClasseController;
use App\Http\Controllers\Admin\TurmaController;
use App\Http\Controllers\Admin\AlunoController;
use App\Http\Controllers\Report\ReportController;

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

Route::middleware('auth')->group(function () {

 //BEGIN OF TURMACONTROLLER
 Route::get('/turma_add',[TurmaController::class,'turma_add'])->name('turma_add');
 Route::post('/turma_store',[TurmaController::class,'turma_store'])->name('turma_store');
 Route::get('/turma_edit/{id}',[TurmaController::class,'turma_edit'])->name('turma_edit');
 Route::post('/turma_update/{id}',[TurmaController::class,'turma_update'])->name('turma_update');
 Route::get('/turma_index',[TurmaController::class,'turma_index'])->name('turma_index');
 //END OF TURMACONTROLLER

 //BEGIN OF CLASSECONTROLLER
 Route::get('/classe_add',[ClasseController::class,'classe_add'])->name('classe_add');
 Route::post('/classe_store',[ClasseController::class,'classe_store'])->name('classe_store');
 Route::get('/classe_edit/{id}',[ClasseController::class,'classe_edit'])->name('classe_edit');
 Route::post('/classe_update/{id}',[ClasseController::class,'classe_update'])->name('classe_update');
 Route::get('/classe_index',[ClasseController::class,'classe_index'])->name('classe_index');

 //END OF CLASSECONTROLLER

 //BEGIN OF ALUNOCONTROLLER
 Route::get('/aluno_add',[AlunoExameController::class,'aluno_add'])->name('aluno_add');
 Route::post('/aluno_store',[AlunoController::class,'aluno_store'])->name('aluno_store');
 Route::get('/aluno_edit/{id}',[AlunoController::class,'aluno_edit'])->name('aluno_edit');
 Route::post('/aluno_update/{id}',[AlunoController::class,'aluno_update'])->name('aluno_update');
 Route::get('/aluno_index',[AlunoController::class,'aluno_index'])->name('aluno_index');
 //END OF ALUNOCONTROLLER

 //BEGIN OF CENTROEXAMECONTROLLER 
 Route::get('/centroExame_add',[CentroController::class,'centroExame_add'])->name('centroExame_add');
 Route::post('/centroExame_store',[CentroController::class,'centroExame_store'])->name('centroExame_store');
 Route::get('/centroExame_edit/{id}',[CentroController::class,'centroExame_edit'])->name('centroExame_edit');
 Route::post('/centroExame_update/{id}',[CentroController::class,'centroExame_update'])->name('centroExame_update');
 Route::get('/centroExame_index',[CentroExameController::class,'centroExame_index'])->name('centroExame_index');

 //END OF CENTROEXAMECONTROLLER*/

 //BEGIN OF USERCONTROLLER

 //DP
 Route::get('/user_add_dp',[UserController::class,'user_add_dp'])->name('user_add_dp');
 Route::post('/store_dp',[UserController::class,'store_dp'])->name('store_dp');
 Route::get('/user_edit_dp/{id}',[UserController::class,'user_edit_dp'])->name('user_edit_dp');
 Route::post('/update_dp/{id}',[UserController::class,'update_dp'])->name('update_dp');
 Route::get('/index_dp',[UserController::class,'index_dp'])->name('index_dp');

 //DM
 Route::get('/user_add_dm',[UserController::class,'user_add_dm'])->name('user_add_dm');
 Route::post('/store_dm',[UserController::class,'store_dm'])->name('store_dm');
 Route::get('/user_edit_dm/{id}',[UserController::class,'user_edit_dm'])->name('user_edit_dm');
 Route::post('/update_dm/{id}',[UserController::class,'update_dm'])->name('update_dm');
 Route::get('/index_dm',[UserController::class,'index_dm'])->name('index_dm');

 //DC
 Route::get('/user_add_dc',[UserController::class,'user_add_dc'])->name('user_add_dc');
 Route::post('/store_dc',[UserController::class,'store_dc'])->name('store_dc');
 Route::get('/user_edit_dc/{id}',[UserController::class,'user_edit_dc'])->name('user_edit_dc');
 Route::post('/update_dc/{id}',[UserController::class,'update_dc'])->name('update_dc');
 Route::get('/index_dc',[UserController::class,'index_dc'])->name('index_dc');

 //SP_PV
 Route::get('/user_add',[UserController::class,'user_add'])->name('user_add');
 Route::post('/store',[UserController::class,'store'])->name('store');
 Route::get('/user_edit/{id}',[UserController::class,'user_edit'])->name('user_edit');
 Route::post('/update/{id}',[UserController::class,'update'])->name('update');
 Route::get('/index',[UserController::class,'index'])->name('index');
 //END OF USERCONTROLLER

 //BEGIN RELATORIOS

 //relatorios administrativos
 Route::get('/DP_PDF',[ReportController::class,'DP_PDF'])->name('DP_PDF');
 Route::get('/DM_PDF',[ReportController::class,'DM_PDF'])->name('DM_PDF');
 Route::get('/DC_PDF',[ReportController::class,'DC_PDF'])->name('DC_PDF');

 //relatorios directores provinciais
 Route::get('/DM_PDF_DP',[ReportController::class,'DM_PDF_DP'])->name('DM_PDF_DP');
 Route::get('/DC_PDF_DP',[ReportController::class,'DC_PDF_DP'])->name('DC_PDF_DP');

 //relatorios directores municipais
 Route::get('/DC_PDF_DM',[ReportController::class,'DC_PDF_DM'])->name('DC_PDF_DM');

 //relatorios directores de centros

 //relatorios de supervisores


 //relatorios de vigilantes



 //END RELATORIOS


});
