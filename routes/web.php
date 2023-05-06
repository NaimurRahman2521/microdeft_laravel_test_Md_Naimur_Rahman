<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/',[CrudController::class,'index'])->name('product.add');
Route::post('/crud/create-product',[CrudController::class,'create'])->name('product.create');
Route::get('/crud/manage-product',[CrudController::class,'manage'])->name('product.manage');
Route::get('/crud/edit/{id}',[CrudController::class, 'edit'])->name('product.edit');
Route::post('/crud/update/{id}',[CrudController::class, 'update'])->name('product.update');
Route::get('/crud/delete/{id}',[CrudController::class, 'delete'])->name('product.delete');
