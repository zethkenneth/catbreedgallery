<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/  

Route::get('/cats',
    [CatController::class, 'index']
);

Route::get('/cats/create',
    [CatController::class, 'create']
);

Route::post('/cats',
    [CatController::class, 'store']
);

Route::get('/cats/{id}',
    [CatController::class, 'show']
);

Route::post('/update',
    [CatController::class, 'update']
);

Route::get('/cats/delete/{id}',
    [CatController::class, 'destroy']
);
