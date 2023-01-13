<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", [UserController::class, 'homeShow'])->name("show.home");
Route::get("/cadastro", [UserController::class, 'homeCreate'])->name("show.create");

Route::post("/cadastrar", [UserController::class, 'create'])->name("form.create");
Route::get("/delete/{id}", [UserController::class, 'delete'])->name("form.delete");

// EDITAR
Route::get("/editar/{id}", [UserController::class, "edit"])->name("form.edit");
Route::post("/update", [UserController::class, "update"])->name("form.update");
