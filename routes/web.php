<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\PageController;

Route::get('/', function () {
    return redirect()->route('monopanel.dashboard');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('monopanel.dashboard');

    // ÖZEL ROUTELAR -> önce
    Route::get('pages/trashed', [PageController::class, 'trashed'])->name('pages.trashed');
    Route::post('pages/{id}/restore', [PageController::class, 'restore'])->name('pages.restore');
    Route::delete('pages/{id}/force-delete', [PageController::class, 'forceDelete'])->name('pages.forceDelete');
    Route::post('pages/{page}/revisions/{revision}/restore', [PageController::class, 'restoreRevision'])->name('pages.revision-restore');

    // RESOURCE -> sonra
    Route::resource('pages', PageController::class);

    Route::post('pages/bulk-delete', [PageController::class, 'bulkDelete'])->name('pages.bulk-delete');
});


Route::get('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['tr', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('setLocale');


require __DIR__.'/auth.php';
