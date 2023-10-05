<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

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

Route::get('/', [RecordController::class, 'index'])->name('index');

Route::post('/update/{id}', [RecordController::class,'update'])->name('update');
Route::get('/edit/{id}', [RecordController::class,'edit'])->name('edit');
Route::post('/insert', [RecordController::class,'insert'])->name('insert');
Route::get('/delete/{id}', [RecordController::class,'delete'])->name('delete');
Route::get('/report', [RecordController::class,'report'])->name('report');
