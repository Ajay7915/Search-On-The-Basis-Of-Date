<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('student/{id?}',[StudentController::class,'index'])->name('student');
Route::get('create',[StudentController::class,'create'])->name('create');
Route::post('store',[StudentController::class,'store'])->name('store');
