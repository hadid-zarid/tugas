<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Route untuk halaman portfolio
Route::get('/', [PortfolioController::class, 'index']);
