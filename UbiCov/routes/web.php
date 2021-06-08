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
    Route::get('/admin', function () {return view('admin.index');});
    Route::get('/admin/usuarios', function () {return view('admin.users');});

    Route::get('', function () {return view('client.index');});
    Route::get('/index', function () {return view('client.index');});
    Route::get('/conocenos', function () {return view('client.conocenos');});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
