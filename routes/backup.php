<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController as ControllersWelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllersWelcomeController::class, 'welcome'])->name('welcome');

// note route
// Route::get('/note', [NoteController::class, 'index'])->name('note.index');
// Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
// Route::post('/note', [NoteController::class, 'store'])->name('note.store');
// Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
// Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
// Route::get('/note/{id}', [NoteController::class, 'update'])->name('note.update');
// Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

// short hand

Route::resource('note', NoteController::class);