<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;

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
})->name('welcome');

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('admin.dashboard');

// Route::get('/creditCards', function () {
//     return view('admin.creditCards');
// })->middleware(['auth', 'verified'])->name('admin.creditCards');

// Route::resource('cards', CardController::class);

Route::middleware('auth')->group(function () {
    Route::get('/creditCards', [CardsController::class, 'create'])->name('creditCards');
    Route::get('/dumps', [CardsController::class, 'dumps'])->name('dumps');
    Route::get('/checkcc', [CardsController::class, 'checkcc'])->name('checkcc');
    Route::get('/admin', [CardsController::class, 'news'])->name('news');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

