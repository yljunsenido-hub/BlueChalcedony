<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PolicyPremiumDueListReportImport;
use App\Models\PolicyPremiumDueListReport;
use Maatwebsite\Excel\Facades\Excel;

class PolicyPremiumDueListReportController extends Controller
{
    public function index_policyPremiumDueList()
    {
        $policyPremiumPosts = PolicyPremiumDueListReport::all();
        return view('admin.policy_premium_due_list_report', compact('policyPremiumPosts'));
    }

    public function index_PolicyPremiumDueListReportUpload()
    {
        $policyPremiumUploads = PolicyPremiumDueListReport::all();
        return view('admin.policy_premium_upload', compact('policyPremiumUploads'));
    }

    public function importExcelData(Request $request)
    {
        $request->validate([
            'import-file'=>[
                'required',
                'file'
            ],
        ]);

        try {
            Excel::import(new PolicyPremiumDueListReport, $request->file('import-file'));
            return redirect()->back()->with('status', 'Imported Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }
}
