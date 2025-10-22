<?php

use App\Http\Controllers\Api\BerkasController;
use Illuminate\Routing\Route;

    Route::get('/berkas',[BerkasController::class,'index']);
