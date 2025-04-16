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


<<<<<<< HEAD
    //new
    //BOU
=======
    //new added
>>>>>>> 2ca38232a5fbfc913727fbd0e6f62ad8c94a3142
    public function index_BatchPhotosUpload()
    {
        return view('admin.batch_photos_upload');
    }

    public function index_UpdateSubmissionPolicyRecord()
    {
        return view('admin.update_submission_policy_record');
    }
<<<<<<< HEAD

    //Lead&Cases
    public function index_SubmittedCases()
    {
        return view('admin.submitted_cases');
    }

    public function index_IssuedCases()
    {
        return view('admin.issued_cases');
    }

    public function index_OutreqCases()
    {
        return view('admin.outreq_cases');
    }

    public function index_DeclinedPostponedCases()
    {
        return view('admin.declined_postponed_cases');
    }

    //NewBusiness
    public function index_SubmissionApproval()
    {
        return view('admin.submission_approval');
    }

    public function index_NewBusinessMaintenance()
    {
        return view('admin.new_business_maintenance');
    }

    public function index_IssuedCasesNb()
    {
        return view('admin.issued_cases_nb');
    }

    //MarketingPoster
    public function index_PosterTemplate()
    {
        return view('admin.poster_template');
    }

    //ProposalBank
    public function index_ProposalSearch()
    {
        return view('admin.proposal_search');
    }

    public function index_ProposalList()
    {
        return view('admin.proposal_list');
    }

    //end

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

    public function index_UnitSummary()
    {
        return view('admin.unit_summary');
    }

    public function index_UnitSummaryYTD()
    {
        return view('admin.unit_summaryYTD');
    }
=======
>>>>>>> 2ca38232a5fbfc913727fbd0e6f62ad8c94a3142
}
