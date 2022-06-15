<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\generalcontroller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\citascontroller;
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

Route::get('/', [generalcontroller::class,'inicio'])->name('inicio');
Route::get('/citas', [citascontroller::class,'inicio'])->name('citas');
Route::post('/guardarcita', ['as' => 'save-date',
                           'uses' => 'citascontroller@showDate', 
                            function () {
                                return '';
                            }]);
Route::get('/menu', [generalcontroller::class,'menu'])->name('menu');
Route::get('/menu/{id}', [generalcontroller::class,'productos'])->name('productos');
Route::post('/eliminar/{id}', [generalcontroller::class,'eliminar'])->name('eliminar');
Route::post('/editar/{id}', [generalcontroller::class,'editar'])->name('editar');
Route::post('/guardar/{id}', [generalcontroller::class,'guardar'])->name('guardar');
Auth::routes();
Route::post('/citas', [citascontroller::class, 'guardarcita'])->name('guardarcita');
Route::post('/citas/{h}/{m}/{s}', [citascontroller::class, 'guardarhora'])->name('guardarhora');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/citas/{h}/{m}/{s}/{userconf}', [citascontroller::class, 'confirmarcita'])->name('confirmarcita');
Route::post('/citas/{id}', [citascontroller::class, 'eliminarcita'])->name('eliminarcita');
