<?php

use App\Http\Controllers\Api\BerkasApiController;
use Illuminate\Support\Facades\Route;

// berkas
Route::get('/berkas', [BerkasApiController::class, 'index']);