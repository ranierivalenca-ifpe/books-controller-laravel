<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/book/create', [BookController::class, 'index']);

Route::post('/book/create', [BookController::class, 'store'])->middleware(['auth'])->name('create_book');
Route::get('/book/remove/{book}', [BookController::class, 'destroy'])->middleware(['auth'])->name('remove_book');

require __DIR__.'/auth.php';
