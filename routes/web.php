<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Register
use App\Http\Controllers\Auth\RegisteredUserController;

// Roles
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchManagerController;
use App\Http\Controllers\UnitManagerController;
use App\Http\Controllers\AgentController;

// Controllers
use App\Http\Controllers\SubUnitsController;
use App\Http\Controllers\IssuedReportController;
use App\Http\Controllers\NapReportUploadController;
use App\Http\Controllers\PolicyPremiumDueListReportController;


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
        Route::get('/admin/register', [RegisteredUserController::class, 'index_Register']);
        Route::get('/admin/dashboard', [AdminController::class, 'index']);
        Route::get('/admin/dashboard', [IssuedReportController::class, 'index']);
        Route::get('/admin/issued_report_upload', [AdminController::class, 'index_IssuedReportUpload']);
        Route::get('/admin/nap_report_upload', [AdminController::class, 'index_NapReportUpload']);
        Route::get('/admin/nap_report', [NapReportUploadController::class, 'index_NapReport']);
        Route::get('/admin/policy_premium_due_list_report_upload', [AdminController::class, 'index_policyPremiumDueListUpload']);
        Route::get('/admin/policy_premium_due_list_report', [PolicyPremiumDueListReportController::class, 'index_policyPremiumDueList']);

        Route::get('/admin/issued_report'  , [IssuedReportController::class, 'index_IssuedReport']);
        Route::post('/admin/issued_report'  , [IssuedReportController::class, 'importExcelData']);

        Route::get('/admin/nap_report_upload'  , [NapReportUploadController::class, 'index_NapReportUpload']);
        Route::post('/admin/nap_report_upload'  , [NapReportUploadController::class, 'importExcelData']);

        Route::get('/admin/policy_premium_report_upload'  , [PolicyPremiumDueListReportController::class, 'index_PolicyPremiumDueListReportUpload']);
        Route::post('/admin/policy_premium_report_upload'  , [PolicyPremiumDueListReportController::class, 'importExcelData']);


        Route::get('/admin/register/{unit_key}', [SubUnitsController::class, 'getSubUnits']);
    });

    Route::group(['middleware' => ['role:agent']], function () {
        Route::get('/agent/dashboard', [AgentController::class, 'index']);
    });

    Route::group(['middleware' => ['role:unit_manager']], function () {
        Route::get('/unit_manager/dashboard', [AgentController::class, 'index']);
    });

    Route::group(['middleware' => ['role:unit_manager_aspirant']], function () {
        Route::get('/unit_manager_aspirant/dashboard', [AgentController::class, 'index']);
    });

    Route::group(['middleware' => ['role:assistant_unit_manager']], function () {
        Route::get('/assistant_unit_manager/dashboard', [AgentController::class, 'index']);
    });
    
    Route::group(['middleware' => ['role:financial_adviser']], function () {
        Route::get('/financial_adviser/dashboard', [AgentController::class, 'index']);
    });

    Route::group(['middleware' => ['role:unit_operations']], function () {
        Route::get('/unit_operations/dashboard', [AgentController::class, 'index']);
    });

    Route::group(['middleware' => ['role:branch_manager']], function () {
        Route::get('/branch-manager/dashboard', [BranchManagerController::class, 'index']);
    });

    Route::group(['middleware' => ['role:senior_assistant_unit_manager']], function () {
        Route::get('/senior_assistant_unit_manager/dashboard', [BranchManagerController::class, 'index']);
    });

    Route::group(['middleware' => ['role:branch_manager_operations']], function () {
        Route::get('/branch_manager_operations/dashboard', [BranchManagerController::class, 'index']);
    });

    Route::group(['middleware' => ['role:branch_nb_officer']], function () {
        Route::get('/branch_nb_officer/dashboard', [BranchManagerController::class, 'index']);
    });

    Route::group(['middleware' => ['role:junior_unit_manager']], function () {
        Route::get('/junior_unit_manager/dashboard', [BranchManagerController::class, 'index']);
    });



    
    Route::group(['middleware' => ['role:unit_manager']], function () {
        Route::get('/unit-manager/dashboard', [UnitManagerController::class, 'index']);
    });

    
});

