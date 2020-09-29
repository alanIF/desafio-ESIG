<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('tasks/atualizar',  [TaskController::class, 'update'] )->name('tasks.update');
Route::delete('tasks/{id}', [TaskController::class, 'delete'])->name('tasks.delete');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('tasks/store',  [TaskController::class, 'store'] )->name('tasks.store');