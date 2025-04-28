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


    //new
    //BOU
    public function index_BatchPhotosUpload()
    {
        return view('admin.batch_photos_upload');
    }

    public function index_UpdateSubmissionPolicyRecord()
    {
        return view('admin.update_submission_policy_record');
    }

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

    public function index_PosterTemplateFeatured()
    {
        return view('admin.poster_template_featured');
    }

    public function index_PosterTemplateAdmin()
    {
        return view('admin.poster_template_admin');
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

    //Recruit
    public function index_Recruit()
    {
        return view('admin.recruit');
    }

    public function index_RecruitmentProcess()
    {
        return view('admin.recruitment_process');
    }
    public function index_RecruitCreate()
    {
        return view('admin.recruit_create');
    }

    //Appointment
    public function index_Appointment()
    {
        return view('admin.appointment');
    }

    //BCSM
    public function index_PosterTemplateMaintenance()
    {
        return view('admin.poster_template_maintenance');
    }

    public function index_PosterMaintenanceCreateTemplate()
    {
        return view('admin.poster_maintenance_createTemplate');
    }

    //new
    
    public function index_PosterMaintenance()
    {
        return view('admin.poster_maintenance');
    }

    public function index_PosterMaintenanceCreatePoster()
    {
        return view('admin.poster_maintenance_createPoster');
    }


    public function index_AgentMaintenance()
    {
        return view('admin.agent_maintenance');
    }

    public function index_AgentMaintenanceCreate()
    {
        return view('admin.agent_maintenanceCreate');
    }

    public function index_UnitMaintenance()
    {
        return view('admin.unit_maintenance');
    }

    public function index_UnitMaintenanceCreate()
    {
        return view('admin.unit_maintenanceCreate');
    }

    public function index_SubUnitMaintenance()
    {
        return view('admin.sub_unit_maintenance');
    }

    public function index_SubUnitMaintenanceCreate()
    {
        return view('admin.sub_unit_maintenanceCreate');
    }

    public function index_DigitalCardMaintenance()
    {
        return view('admin.digital_card_maintenance');
    }

    public function index_DigitalCardMaintenanceCreate()
    {
        return view('admin.digital_card_maintenanceCreate');
    }

    public function index_ScheduledTask()
    {
        return view('admin.scheduled_task');
    }


    //end


    // Reports

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

    public function index_BranchSummary()
    {
        return view('admin.branch_summary');
    }

    public function index_BranchHonorRolls()
    {
        return view('admin.branch_honor_rolls');
    }

    public function index_BranchHonorRollsYTD()
    {
        return view('admin.branch_honor_rollsYTD');
    }

    public function index_UnitHonorRolls()
    {
        return view('admin.unit_honor_rolls');
    }

    public function index_UnitHonorRollsYTD()
    {
        return view('admin.unit_honor_rollsYTD');
    }

    public function index_CustomGroup()
    {
        return view('admin.custom_group');
    }

    public function index_PersonalToGO()
    {
        return view('admin.personal_to_go');
    }

    public function index_Qualifiers()
    {
        return view('admin.qualifiers');
    }

    public function index_MDRTTracker()
    {
        return view('admin.MDRT_tracker');
    }

    public function index_MDRTTrackerPersonal()
    {
        return view('admin.MDRT_trackerPersonal');
    }

    public function index_EasyReports()
    {
        return view('admin.easy_reports');
    }
}
