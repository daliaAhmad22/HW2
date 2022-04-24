<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\TaskController;


Route::get('/',[TaskController::class,'index']);
Route::post('/store',[TaskController::class,'store']);
Route::delete('delete/{id}',[TaskController::class,'delete']);




