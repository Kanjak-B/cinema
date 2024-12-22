<?php

use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\Banque\PaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/banque/form-payment-ticket/{id}', [PaymentController::class, 'form_payment'])->name('banque.form-payment');
Route::post('/banque/payment', [PaymentController::class, 'check'])->name('banque.check');
Route::get('/test', [PaymentController::class, 'truc'])->name('test');

Route::prefix('admin')->group(function(){
    Route::get('films', [FilmController::class, 'index'])->name('films.index');
    Route::get('films/create', [FilmController::class, 'create'])->name('films.create');
    Route::post('films/store', [FilmController::class, 'store'])->name('films.store');
});