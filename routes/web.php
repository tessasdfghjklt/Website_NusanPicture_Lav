<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wild', function () {
    return view('pages/category/wild');
});

Route::get('/ocean', function () {
    return view('pages/category/ocean');
});

Route::get('/people', function () {
    return view('pages/category/people');
});

Route::get('/city', function () {
    return view('pages/category/city');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/campus', function () {
    return view('pages/campus');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/loadmore', function () {
    return view('pages/loadmore');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
