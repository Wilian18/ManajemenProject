<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'manajemenProject']);
Route::get('/tugas-saya', [TaskController::class, 'tugasSaya']);


