<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaitlistController;

Route::post('/leads', [WaitlistController::class, 'store']);
