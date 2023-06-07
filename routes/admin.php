<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TurmaController;
use App\Http\Controllers\Admin\AlunoController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\Admin\CentroExameController;
use App\Http\Controllers\Admin\MedReportController;
use App\Http\Controllers\Admin\ItenSelectionController;
use App\Http\Controllers\Admin\ItenConstructionController;

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
 Route::get('/delete_turma/{id}', [TurmaController::class, 'delete_turma'])->name('delete_turma');
 //END OF TURMACONTROLLER

 //BEGIN OF ItensCONTROLLER
 Route::get('/ItenSelection_add/{id}',[ItenSelectionController::class,'ItenSelection_add'])->name('ItenSelection_add');
 Route::post('/ItenSelection_store/{id}',[ItenSelectionController::class,'ItenSelection_store'])->name('ItenSelection_store');
 Route::get('/ItenSelection_edit/{id}',[ItenSelectionController::class,'ItenSelection_edit'])->name('ItenSelection_edit');
 Route::post('/ItenSelection_update/{id}',[ItenSelectionController::class,'ItenSelection_update'])->name('ItenSelection_update');
 Route::get('/ItenSelection_index/{id}',[ItenSelectionController::class,'ItenSelection_index'])->name('ItenSelection_index');
//
Route::get('/ItenConstruction_add/{id}',[ItenConstructionController::class,'ItenConstruction_add'])->name('ItenConstruction_add');
Route::post('/ItenConstruction_store/{id}',[ItenConstructionController::class,'ItenConstruction_store'])->name('ItenConstruction_store');
Route::get('/ItenConstruction_edit/{id}',[ItenConstructionController::class,'ItenConstruction_edit'])->name('ItenConstruction_edit');
Route::post('/ItenConstruction_update/{id}',[ItenConstructionController::class,'ItenConstruction_update'])->name('ItenConstruction_update');
Route::get('/ItenConstruction_index/{id}',[ItenConstructionController::class,'ItenConstruction_index'])->name('ItenConstruction_index');

 //END OF ItensCONTROLLER

 //BEGIN OF ALUNOCONTROLLER
 Route::get('/aluno_add',[AlunoController::class,'aluno_add'])->name('aluno_add');

 Route::post('/aluno_store',[AlunoController::class,'aluno_store'])->name('aluno_store');
 Route::get('/aluno_edit/{id}',[AlunoController::class,'aluno_edit'])->name('aluno_edit');
 Route::post('/aluno_update/{id}',[AlunoController::class,'aluno_update'])->name('aluno_update');
 Route::get('/aluno_index',[AlunoController::class,'aluno_index'])->name('aluno_index');
 Route::get('/delete_aluno/{id}', [AlunoController::class, 'delete_aluno'])->name('delete_aluno');
 //END OF ALUNOCONTROLLER

 //BEGIN OF centroExameEXAMECONTROLLER
 Route::get('/centroExameExame_add',[CentroExameController::class,'centro_add'])->name('centro_add');
 Route::post('/centroExameExame_store',[CentroExameController::class,'centro_store'])->name('centro_store');
 Route::get('/centroExameExame_index',[CentroExameController::class,'centro_index'])->name('centro_index');
 Route::get('/delete_centro/{id}', [CentroExameController::class, 'delete_centro'])->name('delete_centro');
 //END OF centroExameEXAMECONTROLLER*/

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
 Route::get('/aluno_centroAdmin',[ReportController::class,'aluno_centroAdmin'])->name('aluno_centroAdmin');


 //relatorios directores provinciais
 Route::get('/DM_PDF_DP',[ReportController::class,'DM_PDF_DP'])->name('DM_PDF_DP');
 Route::get('/DC_PDF_DP',[ReportController::class,'DC_PDF_DP'])->name('DC_PDF_DP');

 //relatorios directores municipais
 Route::get('/DC_PDF_DM',[ReportController::class,'DC_PDF_DM'])->name('DC_PDF_DM');

 //relatorios directores de centroExames
 Route::get('/sp_dc_report',[ReportController::class,'sp_dc_report'])->name('sp_dc_report');
 Route::get('/v_dc_report',[ReportController::class,'v_dc_report'])->name('v_dc_report');
 //relatorios de supervisores
 Route::get('/searchAluno', [AlunoController::class, 'searchAluno'])->name('searchAluno');
 Route::post('/TakeAluno', [AlunoController::class, 'TakeAluno'])->name('TakeAluno');
 Route::get('/Aluno_pdf_sp/{turma}',[ReportController::class,'Aluno_pdf_sp'])->name('Aluno_pdf_sp');
 Route::get('/Aluno_pdf_sp_def',[ReportController::class,'Aluno_pdf_sp_def'])->name('Aluno_pdf_sp_def');

 //relatorios de vigilantes
 Route::get('/Aluno_presence_med/{id}',[ReportController::class,'ListAluno'])->name('Aluno_presences');

 //med
 Route::get('/Aluno_pdf_sp_med/{id}',[MedReportController::class,'Aluno_pdf_sp_med'])->name('Aluno_pdf_sp_med');



 //END RELATORIOS


 //alunos na visao do vigilante
 Route::post('/prova_update/{id}',[AlunoController::class,'prova_update'])->name('prova_update');
 Route::post('/resposta_update/{id}',[AlunoController::class,'resposta_update'])->name('resposta_update');
 Route::get('/V_aluno',[AlunoController::class,'V_aluno'])->name('V_aluno');


 //med
 Route::get('/viewsearch',[MedReportController::class,'viewsearch'])->name('viewsearch');
Route::post('/takeProvince',[MedReportController::class,'takeProvince'])->name('takeProvince');
 Route::get('/view_provincia/{provincia}/{municipio}',[MedReportController::class,'view_provincia'])->name('view_provincia');
Route::get('/view_turmas_pr/{centroexame}',[MedReportController::class,'view_turmas_pr'])->name('view_turmas_pr');



Route::get('/delete_item/{id}', [ItenSelectionController::class, 'delete_item'])->name('delete_item');
});
