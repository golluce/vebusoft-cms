<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\PageController;

Route::get('/', function () {
    return redirect()->route('monopanel.dashboard');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('monopanel.dashboard');
    Route::resource('pages', PageController::class);
    Route::post('/pages/bulk-delete', [PageController::class, 'bulkDelete'])->name('pages.bulk-delete');

});

require __DIR__.'/auth.php';
