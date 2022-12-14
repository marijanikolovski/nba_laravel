<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlayersControllers;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [TeamsController::class, 'index']);
Route::get('/teams/{id}', [TeamsController::class, 'show'])->name('teams-show');
Route::post('/teams/{id}/comments', [CommentsController::class, 'store'])->middleware('words');
Route::get('/player/{id}', [PlayersControllers::class, 'show'])->name('players-show');
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy']);
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/login/{id}', [RegisterController::class, 'update'])->name('verification');
Route::get('/news', [NewsController::class, 'index']);
Route::get('news/teams/{team}', [NewsController::class , 'index'])->name('teams-index');
Route::get('/news/create', [NewsController::class, 'create']);
Route::post('/news', [NewsController::class, 'store']);
Route::get('/news/{id}', [NewsController::class, 'show']);