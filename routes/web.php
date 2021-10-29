<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\categorie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('ajout', [CategoriesController::class, 'ajout']);
Route::get('/index', [CategoriesController::class, 'index']);
Route::post('/ajoutcat', [CategoriesController::class, 'ajoutcat']);