<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [InformationController::class,'index']);
Route::post('/form', [InformationController::class,'registration']);

Route::get('/information', [InformationController::class,'information'])->name('information');

Route::get('/delete/{id}', [InformationController::class,'delete'])->name('delete');



