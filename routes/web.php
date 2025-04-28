<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\PageController;

Route::get('/', function () {
    return redirect()->route('monopanel.dashboard');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('monopanel.dashboard');
    Route::resource('pages', PageController::class);
});

require __DIR__.'/auth.php';

=======

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

Route::prefix('panel')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('panel.dashboard');
});


require __DIR__.'/auth.php';
>>>>>>> a64a8eb913ba664bd82454c14ce0a4ea193cf137
