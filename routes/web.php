<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PublicController::class,'home'])->name('home');

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');

Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');


//! Rotta per recuperare gli articoli dal database e me li mostra

Route::get('/article/index',[ArticleController::class,'index'])->name('article.index');


Route::get('/article/show/{article}',[ArticleController::class,'show'])->name('article.show');

Route::get('/article/edit/{article}',[ArticleController::class,'edit'])->name('article.edit');


Route::put('/article/update/{article}',[ArticleController::class,'update'])->name('article.update');


Route::delete('/article/destroy/{article}',[ArticleController::class,'destroy'])->name('article.destroy');


//? Rotte per categorie

Route::get('/categorycreate', [CategoryController::class, 'create'])->name('category.create');

Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');


Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');

Route::get('/category/show/{category}',[CategoryController::class,'show'])->name('category.show');

Route::get('/category/edit{category}',[CategoryController::class,'edit'])->name('category.edit');

Route::put('/category/update{category}',[CategoryController::class,'update'])->name('category.update');

Route::delete('/category/destroy{category}',[CategoryController::class,'destroy'])->name('category.destroy');

//? rotta dashboard utente

Route::get('/user/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');