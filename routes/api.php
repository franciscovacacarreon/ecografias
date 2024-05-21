<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;

Route::get('/roles', [RolController::class, 'index']);
Route::post('/roles/store', [RolController::class, 'store']);
Route::put('/roles/update/{id}', [RolController::class, 'update']);



