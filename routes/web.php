<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', [recipeController::class,'index'])->name('recipe.index');
Route::post('/recipes', [recipeController::class,'store'])->name('recipe.store');
Route::get('/recipes/{recipe}/edit', [recipeController::class,'edit'])->name('recipe.edit');
Route::put('/recipes/{recipe}/update', [recipeController::class,'update'])->name('recipe.update');
