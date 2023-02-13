<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\FreshdeskController;





Route::get('/', [FreshdeskController::class,'get_tickets']);
Route::get('/word', [WordController::class,'tickets']);





