<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/audit', [App\Http\Controllers\AuditController::class, 'index']);