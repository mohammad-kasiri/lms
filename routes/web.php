<?php

use Illuminate\Support\Facades\Route;

Route::any('/{any}', [\App\Http\Controllers\HomeController::class, 'index'])->where('any', '^(?!api).*$');
