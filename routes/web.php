<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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
    return view('frontend.layouts.master');
});

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');
    Route::get('/allproduct', [ProductController::class, 'allproduct'])->name('allproduct');
    Route::post('/storeproduct', [ProductController::class, 'storeproduct'])->name('storeproduct');
    Route::get('/editproduct/{id}', [ProductController::class, 'editproduct'])->name('editproduct');
    Route::put('/updateproduct/{id}', [ProductController::class, 'updateproduct'])->name('updateproduct');
    Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');



});

require __DIR__.'/auth.php';
