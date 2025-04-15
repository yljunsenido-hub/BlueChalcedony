<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function index_IssuedReportUpload()
    {
        return view('admin.issued_report_upload');
    }



    
    public function index_NapReportUpload()
    {
        return view('admin.nap_report_upload');
    }

    public function index_NapReport()
    {
        return view('admin.nap_report');
    }




    public function index_policyPremiumDueListUpload()
    {
        return view('admin.policy_premium_upload');
    }

    public function index_policyPremiumDueList()
    {
        return view('admin.policy_premium_due_list_report');
    }


    public function index_BatchPhotosUpload()
    {
        return view('admin.batch_photos_upload');
    }

    public function index_AgentMTD()
    {
        return view('admin.agentMTD');
    }

    public function index_AgentYTD()
    {
        return view('admin.agentYTD');
    }

    public function index_SubUnitSummary()
    {
        return view('admin.sub_unit_summary');
    }

    public function index_SubUnitSummaryYTD()
    {
        return view('admin.sub_unit_summaryYTD');
    }
}
