<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class,'index']);
Route::get('/include', [SiteController::class,'index2']);
Route::get('/sair', [SiteController::class,'exit']);
Route::get('/usuarios/{qnt}',[SiteController::class,'users']);
Route::get('/exercise',[SiteController::class,'exercicio2']);
Route::get('/comentarios',[SiteController::class,'coment']);
Route::get('/components',[SiteController::class,'component']);
Route::get('/layout',[SiteController::class,'layout']);
Route::get('/layout2',[SiteController::class,'layout2']);
