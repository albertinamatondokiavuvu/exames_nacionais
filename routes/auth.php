<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;
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

 // BEGINNING OF LoginController
Route::post('terminar_sessao', [LoginController::class,'logout'])->name('logout');
Route::post('login',[LoginController::class,'login'])->name('login');
 //END OF LoginController
 Route::post('update_password/{id}', [UserController::class, 'UpdatePassword'])->name('UpdatePassword');
 Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
