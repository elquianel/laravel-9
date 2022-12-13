<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// para chamar um controller, primeiro passa o controller e referencia como classe
// depois você diz qual metodo daquela classe referenciada vc quer usar
Route::get('/', [SiteController::class, 'index']);

Route::get('/sair', [SiteController::class, 'out']);
Route::get('/usuarios/{qtd}', [SiteController::class, 'users']);


