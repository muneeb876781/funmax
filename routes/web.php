<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/careers', [IndexController::class, 'career'])->name('career');
Route::get('/services', [IndexController::class, 'services'])->name('services');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/Experties', [IndexController::class, 'Experties'])->name('Experties');
Route::get('/review', [IndexController::class, 'review'])->name('review');
Route::get('/careers', [IndexController::class, 'career'])->name('career');
Route::get('/careers', [IndexController::class, 'career'])->name('career');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
