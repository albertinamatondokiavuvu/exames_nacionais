<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
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


 //END OF TURMACONTROLLER

 //BEGIN OF CLASSECONTROLLER


 //END OF CLASSECONTROLLER

 //BEGIN OF ALUNOCONTROLLER


 //END OF ALUNOCONTROLLER

 //BEGIN OF CENTROEXAMECONTROLLER


 //END OF CENTROEXAMECONTROLLER

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
