<?php

use App\Http\Controllers\VlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VlogController::class, 'index'])->name('index');

Route::get('/vlogs/show/{vlog}',[VlogController::class, 'show'])->name('vlogs.show');

//create and store
Route::get('/vlogs/create', [VlogController::class, 'create'])->name('vlogs.create');
Route::post('/vlogs/store', [VlogController::class, 'store'])->name('vlogs.store');

//edit and store
Route::get('/vlogs/edit/{vlog}', [VlogController::class, 'edit'])->name('vlogs.edit');
Route::put('/edit/{vlog}',[VlogController::class, 'update'])->name('vlogs.update');

Route::delete('/vlogs/delete/{vlog}',[VlogController::class, 'destory'])->name('vlogs.delete');
