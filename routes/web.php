<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Contributor;
use App\Models\ImpactStat;

// Homepage Route (Dynamic Landing Page)
Route::get('/', function () {
    $contributors = Contributor::orderBy('order', 'asc')->get();
    $impactStats = ImpactStat::orderBy('order', 'asc')->get();

    return view('landing', compact('contributors', 'impactStats'));
});

// Admin Guest Routes (Login)
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
});

// Admin Authenticated Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Contributor CRUD
    Route::post('/contributors', [AdminController::class, 'storeContributor'])->name('contributors.store');
    Route::patch('/contributors/{contributor}/order', [AdminController::class, 'updateContributorOrder'])->name('contributors.order');
    Route::delete('/contributors/{contributor}', [AdminController::class, 'deleteContributor'])->name('contributors.destroy');

    // Impact Stat CRUD
    Route::post('/impact-stats', [AdminController::class, 'storeImpactStat'])->name('impact-stats.store');
    Route::put('/impact-stats/{impactStat}', [AdminController::class, 'updateImpactStat'])->name('impact-stats.update');
    Route::delete('/impact-stats/{impactStat}', [AdminController::class, 'deleteImpactStat'])->name('impact-stats.destroy');
});
