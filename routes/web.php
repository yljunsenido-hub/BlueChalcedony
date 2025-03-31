<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchManagerController;
use App\Http\Controllers\UnitManagerController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\IssuedReportController;
use App\Http\Controllers\NapReportUploadController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// roles

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index']);
        Route::get('/admin/dashboard', [IssuedReportController::class, 'index']);
        Route::get('/admin/issued_report_upload', [AdminController::class, 'index_IssuedReportUpload']);
        Route::get('/admin/nap_report_upload', [AdminController::class, 'index_NapReportUpload']);
        Route::get('/admin/nap_report', [NapReportUploadController::class, 'index_NapReport']);

        Route::get('/admin/issued_report'  , [IssuedReportController::class, 'index_IssuedReport']);
        Route::post('/admin/issued_report'  , [IssuedReportController::class, 'importExcelData']);

        Route::get('/admin/nap_report_upload'  , [NapReportUploadController::class, 'index_NapReportUpload']);
        Route::post('/admin/nap_report_upload'  , [NapReportUploadController::class, 'importExcelData']);
    });

    Route::group(['middleware' => ['role:branch_manager']], function () {
        Route::get('/branch-manager/dashboard', [BranchManagerController::class, 'index']);
    });

    Route::group(['middleware' => ['role:unit_manager']], function () {
        Route::get('/unit-manager/dashboard', [UnitManagerController::class, 'index']);
    });

    Route::group(['middleware' => ['role:agent']], function () {
        Route::get('/agent/dashboard', [AgentController::class, 'index']);
    });
});

