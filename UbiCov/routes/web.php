<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'/','as'=>'/'],function(){
    Route::get('', function () {return view('client.index');});
    Route::get('/index', function () {return view('client.index');});
    Route::get('/conocenos', function () {return view('client.conocenos');});
    Route::get('/avisos', [App\Http\Controllers\Client\avisosController::class,'index']);
    Route::resource('avisos', App\Http\Controllers\Client\avisosController::class);
});

Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/', function () {return view('admin.index');});
    Route::get('/usuarios', function () {return view('admin.users');});
    Route::get('/mapa', function () {return view('admin.mapa');});
    Route::get('/graficos', function () {return view('admin.graficos');});
    Route::get('/semaforizacion', [App\Http\Controllers\Admin\semaforizacionController::class,'index']);
    Route::resource('semaforizacion', App\Http\Controllers\Admin\semaforizacionController::class);
    Route::get('/avisos', [App\Http\Controllers\Admin\avisosController::class,'index']);
    Route::resource('avisos', App\Http\Controllers\Admin\avisosController::class);
    Route::get('/reportes', function () {return view('admin.reportes');});
    Route::get('/config', function () {return view('admin.configuracion');});
    Route::get('/usuarios', [App\Http\Controllers\Admin\usersController::class,'index']);
    Route::resource('usuarios', App\Http\Controllers\Admin\usersController::class);

    Route::get('/PDFnegocio', [App\Http\Controllers\Admin\usersController::class,'generar']);
    Route::get('/PDFaviso', [App\Http\Controllers\Admin\avisosController::class,'generar']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
