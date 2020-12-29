<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TaxController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos',[TodoController::class,'index']);

Route::get('/tax', [TaxController::class, 'index'])->name('tax.index');
Route::post('/validation', [TaxController::class, 'check'])->name('tax.check');


