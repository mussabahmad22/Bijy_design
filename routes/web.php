<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('dashboard');
})->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/admin_logout', [AdminController::class, 'logout'])->name('admin_logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/owners', [AdminController::class, 'owners'])->name('owners');
    Route::get('/owner_flags', [AdminController::class, 'owner_flags'])->name('owner_flags');
    Route::get('/user_flags', [AdminController::class, 'user_flags'])->name('user_flags');

  

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
