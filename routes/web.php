<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//HEHE
// Register
use App\Http\Controllers\Auth\RegisteredUserController;

// Roles
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchManagerController;
use App\Http\Controllers\UnitManagerController;
use App\Http\Controllers\AgentController;

// Controllers
use App\Http\Controllers\SubUnitsController;
use App\Http\Controllers\AdminRegisterController;   
use App\Http\Controllers\IssuedReportController;
use App\Http\Controllers\NapReportUploadController;
use App\Http\Controllers\PolicyPremiumDueListReportController;
use App\Http\Controllers\BatchPhotosUploadController;
use App\Http\Controllers\UpdateSubmissionPolicyRecordController;


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
        Route::get('/admin/policy_premium_due_list_report_upload', [AdminController::class, 'index_policyPremiumDueListUpload']);
        Route::get('/admin/policy_premium_due_list_report', [PolicyPremiumDueListReportController::class, 'index_policyPremiumDueList']);

        //new
            //BOU
        Route::get('/admin/batch_photos_upload', [AdminController::class, 'index_BatchPhotosUpload']);
        Route::get('/admin/update_submission_policy_record', [AdminController::class, 'index_UpdateSubmissionPolicyRecord']);
            //Lead&Cases
        Route::get('/admin/submitted_cases', [AdminController::class, 'index_SubmittedCases']);
        Route::get('/admin/issued_cases', [AdminController::class, 'index_IssuedCases']);
        Route::get('/admin/outreq_cases', [AdminController::class, 'index_OutreqCases']);
        Route::get('/admin/declined_postponed_cases', [AdminController::class, 'index_DeclinedPostponedCases']);
            //NewBusinessMaintenance
        Route::get('/admin/submission_approval', [AdminController::class, 'index_SubmissionApproval']);
        Route::get('/admin/new_business_maintenance', [AdminController::class, 'index_NewBusinessMaintenance']);
        Route::get('/admin/issued_cases_nb', [AdminController::class, 'index_IssuedCasesNb']);

            //MarketingPosters
        Route::get('/admin/poster_template', [AdminController::class, 'index_PosterTemplate']);

            //ProposalBank
        Route::get('/admin/proposal_search', [AdminController::class, 'index_ProposalSearch']);
        Route::get('/admin/proposal_list', [AdminController::class, 'index_ProposalList']);

        //end

        // Reports
        Route::get('/admin/agentMTD', [AdminController::class, 'index_AgentMTD']);
        Route::get('/admin/agentYTD', [AdminController::class, 'index_AgentYTD']);
        Route::get('/admin/subUnitSummary', [AdminController::class, 'index_SubUnitSummary'])->name('admin.subUnitSummary');
        Route::get('/admin/subUnitSummaryYTD', [AdminController::class, 'index_SubUnitSummaryYTD'])->name('admin.subUnitSummaryYTD');
        Route::get('/admin/unitSummary', [AdminController::class, 'index_UnitSummary'])->name('admin.unitSummary');
        Route::get('/admin/unitSummaryYTD', [AdminController::class, 'index_UnitSummaryYTD'])->name('admin.unitSummaryYTD');
        Route::get('/admin/branchSummary', [AdminController::class, 'index_BranchSummary']);
        Route::get('/admin/branchHonorRolls', [AdminController::class, 'index_BranchHonorRolls'])->name('admin.branchHonorRolls');
        Route::get('/admin/branchHonorRollsYTD', [AdminController::class, 'index_BranchHonorRollsYTD'])->name('admin.branchHonorRollsYTD');
        Route::get('/admin/unitHonorRolls', [AdminController::class, 'index_UnitHonorRolls'])->name('admin.unitHonorRolls');
        Route::get('/admin/unitHonorRollsYTD', [AdminController::class, 'index_UnitHonorRollsYTD'])->name('admin.unitHonorRollsYTD');
        Route::get('/admin/customGroup', [AdminController::class, 'index_CustomGroup']);
        Route::get('/admin/personalToGO', [AdminController::class, 'index_PersonalToGO']);
        Route::get('/admin/qualifiers', [AdminController::class, 'index_Qualifiers']);
        Route::get('/admin/MDRTTracker', [AdminController::class, 'index_MDRTTracker'])->name('admin.MDRTTracker');
        Route::get('/admin/MDRTTrackerPersonal', [AdminController::class, 'index_MDRTTrackerPersonal'])->name('admin.MDRTTrackerPersonal');
        Route::get('/admin/easyReports', [AdminController::class, 'index_EasyReports']);


        Route::get('/admin/issued_report'  , [IssuedReportController::class, 'index_IssuedReport']);
        Route::post('/admin/issued_report'  , [IssuedReportController::class, 'importExcelData']);

        Route::get('/admin/nap_report_upload'  , [NapReportUploadController::class, 'index_NapReportUpload']);
        Route::post('/admin/nap_report_upload'  , [NapReportUploadController::class, 'importExcelData']);

        Route::get('/admin/policy_premium_report_upload'  , [PolicyPremiumDueListReportController::class, 'index_PolicyPremiumDueListReportUpload']);
        Route::post('/admin/policy_premium_report_upload'  , [PolicyPremiumDueListReportController::class, 'importExcelData']);


        Route::get('/admin/register/{unit_key}', [SubUnitsController::class, 'getSubUnits']);


        Route::get('/admin/register', [AdminRegisterController::class, 'create'])->name('admin.register');
        Route::post('/admin/register', [AdminRegisterController::class, 'store'])->name('admin.register.store');
    });

    Route::group(['middleware' => ['role:unit_manager']], function () {
        Route::get('/unit-manager/dashboard', [UnitManagerController::class, 'index']);
    });

    Route::group(['middleware' => ['role:assistant_unit_manager']], function () {
        Route::get('/assistant_unit_manager/dashboard', [AgentController::class, 'index']);
    });

    Route::group(['middleware' => ['role:financial_advisor']], function () {
        Route::get('/financial_advis0r/dashboard', [AgentController::class, 'index']);
    });

    Route::group(['middleware' => ['role:branch_manager']], function () {
        Route::get('/branch-manager/dashboard', [BranchManagerController::class, 'index']);
    });
    
    Route::group(['middleware' => ['role:unit_operations']], function () {
        Route::get('/unit_operations/dashboard', [AgentController::class, 'index']);
    });

    Route::group(['middleware' => ['role:agent']], function () {
        Route::get('/agent/dashboard', [AgentController::class, 'index']);
    });

    
});

