<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

Route::get('/calcs/{value1}/{operator}/{value2}', [CalcController::class, 'result']);
