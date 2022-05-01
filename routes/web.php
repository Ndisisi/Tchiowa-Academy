<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', [EventController::Class, 'index'])
;
Route::get('/events/create', [EventController::Class, 'create']) 
->middleware('auth.admin')
->middleware('auth.prof')
-> middleware('auth');
Route::get('/events/{id}', [EventController::Class, 'show']);
Route::post('/events', [EventController::Class, 'store']);
Route::delete('/events/{id}', [EventController::Class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::Class, 'edit'])
->middleware('auth');
Route::put('/events/update/{id}', [EventController::Class, 'update'])->middleware('auth');

Route::get('/contact', [EventController::Class, 'contact']);

Route::get('/dashboard', [EventController::Class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::Class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}', [EventController::Class, 'leaveEvent'])->middleware('auth');

Route::get('/Admin',[AdminController::Class,'inde'])
->middleware('auth.admin');

Route::get('/cursos', [EventController::Class, 'cursos']);

Route::put('/users/{id}',[UserController::Class,'update'])->name('users.update');

Route::get('/users/{id}/edit',[UserController::Class,'edit'])->name('users.edit');

Route::get('/users',[UserController::Class,'index'])->name('users.index')
->middleware('auth.admin');

Route::get('/users/create',[UserController::Class,'create'])->name('users.create')
->middleware('auth.admin');

Route::post('/users',[UserController::Class,'store'])->name('users.store');

Route::get('/users/{id}',[UserController::Class,'show'])->name('users.show')
->middleware('auth.admin');

Route::delete('/users/{id}',[UserController::Class,'delete'])->name('users.delete');





