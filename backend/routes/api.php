<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentRequestController;

Route::get('/requests', [DocumentRequestController::class, 'index']);
Route::post('/requests', [DocumentRequestController::class, 'store']);