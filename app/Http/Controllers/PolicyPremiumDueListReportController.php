<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolicyPremiumDueListReport;

class PolicyPremiumDueListReportController extends Controller
{
    public function index_policyPremiumDueList()
    {
        return view('admin.policy_premium_due_list_report');
    }
}
