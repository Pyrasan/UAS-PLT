<?php

use App\Http\Controllers\PaperController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('paper');

Route::get('/paper',[PaperController::class, 'list'])->name('paper.list');
Route::get('/paper/add',[PaperController::class, 'add'])->name('paper.add');
Route::post('/paper/submit',[PaperController::class,'submit'])->name('paper.submit');
Route::get('/paper/edit/{id}',[PaperController::class,'edit'])->name('paper.edit');
Route::post('/paper/update/{id}',[PaperController::class,'update'])->name('paper.update');
Route::post('/paper/delete/{id}',[PaperController::class,'delete'])->name('paper.delete');
