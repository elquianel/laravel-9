<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('auth/github', [GitHubController::class, 'gitRedirect']);
Route::get('oauth/github/callback', [GitHubController::class, 'gitCallback']);
Route::get('/', [HomeController::class, 'index']);



