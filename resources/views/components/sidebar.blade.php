<aside class="fixed left-0 top-0 h-screen w-64 bg-gradient-to-t from-blue-600 to-blue-900 text-white p-4 overflow-y-auto custom-scrollbar">
    <h2 class="text-lg font-semibold">Blue Chalcedony Quartz</h2>
    <nav class="mt-8 space-y-2">
        @php $user = auth()->user(); @endphp

        @if($user->role == 'admin')
            
        <h2 class="text-s font-semibold">Operations</h2>

            <!-- Leads & Cases -->
        @php $leadscasesOpen = request()->is('admin/recruitment/*'); @endphp
        <div class="relative group">
            <button data-role="admin" class="dropdown-toggle w-full py-1 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 {{ $leadscasesOpen ? : '' }}">
                <span class="group-hover:text-yellow-400 md:font-bold">Leads & Cases</span>
                <svg class="w-4 h-4 transition-transform duration-300 ml-2 {{ $leadscasesOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $leadscasesOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                <div class="mt-2 space-y-2 p-2">
                    <a href="{{ url('/admin/submitted_cases') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('/admin/submitted_cases') ? : '' }}">Submitted Cases</a>
                    <a href="{{ url('/admin/issued_cases') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('/admin/issued_cases') ? : '' }}">Issued Cases</a>
                    <a href="{{ url('/admin/outreq_cases') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('/admin/outreq_cases') ? : '' }}">Outreq Cases</a>
                    <a href="{{ url('/admin/declined_postponed_cases') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('/admin/declined_postponed_cases') ? : '' }}">Declined/Postponed Cases</a>
                </div>
            </div>
        </div>

                <!-- New Business -->
            @php $newbusinessOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-1 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 {{ $newbusinessOpen ? : '' }}">
                    <span class="group-hover:text-yellow-400 md:font-bold">New Business</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $newbusinessOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $newbusinessOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 p-2">
                        <a href="{{ url('/admin/submission_approval') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/submission_approval') ? : '' }}">Submission Approval</a>
                        <a href="{{ url('/admin/new_business_maintenance') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/new_business_maintenance') ? : '' }}">New Business Maintenance</a>
                        <a href="{{ url('/admin/issued_cases_nb') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/issued_cases_nb') ? : '' }}">Issued Cases</a>
                    </div>
                </div>
            </div>


                <!-- Reports -->
            @php $reportsOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-1 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 {{ $reportsOpen ? '' : '' }}">
                    <span class="group-hover:text-yellow-400 md:font-bold">Reports</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $reportsOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $reportsOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 p-2">
                        <a href="{{ url('/admin/dashboard') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/dashboard') ? '' : '' }}">Issued Report</a>
                        <a href="{{ url('/admin/nap_report') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/nap_report') ? '' : '' }}">Nap Report</a>
                        <a href="{{ url('/admin/policy_premium_due_list_report') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/policy_premium_due_list_report') ? '' : '' }}">Policy Premium Report</a>
                        <a href="{{ url('/admin/agentMTD') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/agentMTD') ? '' : '' }}">Agent MTD</a>
                        <a href="{{ url('/admin/agentYTD') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/agentYTD') ? '' : '' }}">Agent YTD</a>
                        <a href="{{ url('/admin/subUnitSummary') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/subUnitSummary') ? '' : '' }}">Sub-Unit Summary</a>
                        <a href="{{ url('/admin/unitSummary') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/unitSummary') ? '' : '' }}">Unit Summary</a>
                        <a href="{{ url('/admin/branchSummary') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/branchSummary') ? '' : '' }}">Branch Summary</a>
                        <a href="{{ url('/admin/branchHonorRolls') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/branchHonorRolls') ? '' : '' }}">Branch Honor Rolls</a>
                        <a href="{{ url('/admin/unitHonorRolls') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/unitHonorRolls') ? '' : '' }}">Unit Honor Rolls</a>
                        <a href="{{ url('/admin/customGroup') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/customGroup') ? '' : '' }}">Custom Group</a>
                        <a href="{{ url('/admin/personalToGO') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/personalToGO') ? '' : '' }}">Personal To Go's (BETA)</a>
                        <a href="{{ url('/admin/qualifiers') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/qualifiers') ? '' : '' }}">Qualifiers</a>
                        <a href="{{ url('/admin/MDRTTracker') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/MDRTTracker') ? '' : '' }}">MDRT Tracker</a>
                        <a href="{{ url('/admin/easyReports') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/easyReports') ? '' : '' }}">Easy Reports</a>
                    </div>
                </div>
            </div>

                    <!-- Marketing -->
            @php $marketingOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-1 px-4 flex justify-between items-center rounded text-left transition-colors duration-200">
                    <span class="group-hover:text-yellow-400 md:font-bold">Marketing</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $marketingOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $marketingOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 p-2">
                        <a href="{{ url('/admin/poster_template') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/poster_template') ? 'text-yellow-400' : '' }}">Poster Templates</a>
                    </div>
                </div>
            </div>


                <!-- Proposal Bank -->
            @php $proposalbankOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-1 px-4 flex justify-between items-center rounded text-left transition-colors duration-200">
                    <span class="group-hover:text-yellow-400 md:font-bold">Proposal Bank</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $proposalbankOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $proposalbankOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 p-2">
                        <a href="{{ url('/admin/proposal_search') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/proposal_search') ? '' : '' }}">Proposal Search</a>
                        <a href="{{ url('/admin/proposal_list') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/proposal_list') ? '' : '' }}">Proposal List</a>
                    </div>
                </div>
            </div>

            <!-- Recruitment -->
            @php $recruitmentOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200{{ $recruitmentOpen ? '' : '' }}">
                    <span class="group-hover:text-yellow-400 md:font-bold">Recruitment</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $recruitmentOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $recruitmentOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 p-2">
                        <a href="{{ url('/admin/recruit') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/branchoperation/upload-issued') ? '' : '' }}">Recruit</a>
                        <a href="{{ url('/admin/recruitment_process') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400  {{ request()->is('admin/branchoperation/upload-nap') ? '' : '' }}">Recruitment Process</a>
                    </div>
                </div>
            </div>
        

            <!-- Appointments Section -->
             @php $appointmentsOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-1 px-4 flex justify-between items-center rounded text-left transition-colors duration-200{{ $appointmentsOpen ? '' : '' }}">
                    <span class="group-hover:text-yellow-400 md:font-bold">Appointments</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $appointmentsOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $appointmentsOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 p-2">
                        <a href="{{ url('/admin/appointment') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/branchoperation/upload-issued') ? '' : '' }}">Appointments Schedule</a>
                    </div>
                </div>
            </div>
      
            <!-- BCMS Maintenance Section -->
            @php $bcmsOpen = request()->is('admin/bcms/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-1 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 {{ $bcmsOpen ? '' : '' }}">
                    <span class="group-hover:text-yellow-400 md:font-bold">BCMS Maintenance</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $bcmsOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $bcmsOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 p-2">
                        <a href="{{ url('/admin/poster_template_maintenance') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/bcms/poster-template') ? 'bg-blue-600' : '' }}">Poster Template Maintenance</a>
                        <a href="{{ url('/admin/poster_maintenance') }}" class="block py-1 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/bcms/poster') ? 'bg-blue-600' : '' }}">Poster Maintenance</a>
                        <a href="{{ url('/admin/agent_maintenance') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/bcms/agent') ? 'bg-blue-600' : '' }}">Agent Maintenance</a>
                        <a href="{{ url('/admin/unit_maintenance') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/bcms/unit') ? 'bg-blue-600' : '' }}">Unit Maintenance</a>
                        <a href="{{ url('/admin/sub_unit_maintenance') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/bcms/unit') ? 'bg-blue-600' : '' }}">Sub-Unit Maintenance</a>
                        <a href="{{ url('/admin/digital_card_maintenance') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/bcms/unit') ? 'bg-blue-600' : '' }}">Digital Card Maintenance</a>
                        <a href="{{ url('/admin/scheduled_task') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('admin/bcms/unit') ? 'bg-blue-600' : '' }}">Scheduled Tasks</a>
                    </div>
                </div>
            </div>

            <!-- Branch Operations Utility Section -->
            @php $branchoperationOpen = request()->is('admin/branchoperation/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-1 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 {{ $branchoperationOpen ? '' : '' }}">
                    <span class="group-hover:text-yellow-400 md:font-bold">Branch Operations Utility</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $branchoperationOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $branchoperationOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 p-2">
                        <a href="{{ url('/admin/issued_report_upload') }}"  class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('#') ? '' : '' }}">Upload Issued</a>
                        <a href="{{ url('/admin/nap_report_upload') }}"  class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('#') ? '' : '' }}">Upload NAP</a>
                        <a href="{{ url('/admin/policy_premium_due_list_report_upload') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('#') ? '' : '' }}">Upload Due List</a>
                        <a href="{{ url('/admin/batch_photos_upload') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('#') ? '' : '' }}">Upload Batch Photos</a>
                        <a href="{{ url('/admin/update_submission_policy_record') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('#') ? '' : '' }}">Update Submission/Policy Record</a>
                    </div>
                </div>
            </div>
           

        @elseif($user->role == 'branch_manager')
            @php $bmOpen = request()->is('branch-manager/*'); @endphp
            <div class="relative group">
                <button data-role="bm" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-gray-600/30 {{ $bmOpen ? 'bg-gray-700/60' : '' }}">
                    <span>Branch Manager Reports</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $bmOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $bmOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-gray-700/60 rounded-lg p-2">
                        <a href="{{ url('/branch-manager/dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('branch-manager/dashboard') ? 'bg-gray-600' : '' }}">Issued Report</a>
                        <a href="{{ url('/branch-manager/issued_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('branch-manager/issued_report_upload') ? 'bg-gray-600' : '' }}">Issued Report</a>
                        <a href="{{ url('/admin/nap_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('admin/nap_report_upload') ? 'bg-gray-600' : '' }}">Nap Report Upload</a>
                    </div>
                </div>
            </div>

        @elseif($user->role == 'unit_manager')
            @php $umOpen = request()->is('unit-manager/*'); @endphp
            <div class="relative group">
                <button data-role="um" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-gray-600/30 {{ $umOpen ? 'bg-gray-700/60' : '' }}">
                    <span>Unit Manager Reports</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $umOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $umOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-gray-700/60 rounded-lg p-2">
                        <a href="{{ url('/unit-manager/dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('unit-manager/dashboard') ? 'bg-gray-600' : '' }}">Issued Report</a>
                        <a href="{{ url('/unit-manager/issued_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('unit-manager/issued_report_upload') ? 'bg-gray-600' : '' }}">Issued Report</a>
                        <a href="{{ url('/admin/nap_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('admin/nap_report_upload') ? 'bg-gray-600' : '' }}">Nap Report Upload</a>
                    </div>
                </div>
            </div>

        @elseif($user->role == 'agent')
            <h2 class="text-s font-semibold">Operations</h2>

            <!-- Leads & Cases -->
            @php $leadscasesOpen = request()->is('agent/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $leadscasesOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Leads & Cases</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $leadscasesOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $leadscasesOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Submitted Cases</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Issued Cases</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Outreq Cases</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Declined/Postponed Cases</a>
                    </div>
                </div>
            </div>

            <!-- New Business -->
            @php $newbusinessOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $newbusinessOpen ? 'bg-blue-200/30' : '' }}">
                    <span>New Business</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $newbusinessOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $newbusinessOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Submission Approval</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">New Business Maintenance</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Issued Cases</a>
                    </div>
                </div>
            </div>

            <!-- Reports -->
            @php $adminOpen = request()->is('admin/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $adminOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Reports</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $adminOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $adminOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('/admin/dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/dashboard') ? 'bg-blue-600' : '' }}">Issued Report</a>
                        <a href="{{ url('/admin/nap_report') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/nap_report') ? 'bg-blue-600' : '' }}">Nap Report</a>
                        <a href="{{ url('/admin/policy_premium_due_list_report') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/policy_premium_due_list_report') ? 'bg-blue-600' : '' }}">Policy Premium Report</a>
                    </div>
                </div>
            </div>

            <!-- Marketing -->
            @php $marketingOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $marketingOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Marketing</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $marketingOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $marketingOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Marketing Poster</a>
                    </div>
                </div>
            </div>

            <!-- Proposal Bank -->
            @php $proposalbankOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $proposalbankOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Proposal Bank</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $proposalbankOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $proposalbankOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Recruit</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Recruitment Process</a>
                    </div>
                </div>
            </div>

            <!-- Recruitment -->
            @php $recruitmentOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $recruitmentOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Recruitment</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $recruitmentOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $recruitmentOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/branchoperation/upload-issued') ? 'bg-blue-600' : '' }}">Recruit</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/branchoperation/upload-nap') ? 'bg-blue-600' : '' }}">Recruitment Process</a>
                    </div>
                </div>
            </div>
                
            <!-- Appointments Section -->
            @php $appointmentsOpen = request()->is('admin/appointments/*'); @endphp
            <div class="relative group">
                <a href="{{ url('/admin/appointments') }}" data-role="admin"
                class="w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $appointmentsOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Appointments</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19l7-7-7-7"/>
                    </svg>      
                </a>
            </div>

            <!-- BCMS Maintenance Section -->
            @php $bcmsOpen = request()->is('admin/bcms/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $bcmsOpen ? 'bg-blue-200/30' : '' }}">
                    <span>BCMS Maintenance</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $bcmsOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $bcmsOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('admin/bcms/poster-template') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/poster-template') ? 'bg-blue-600' : '' }}">Poster Template Maintenance</a>
                        <a href="{{ url('admin/bcms/poster') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/poster') ? 'bg-blue-600' : '' }}">Poster Maintenance</a>
                        <a href="{{ url('/admin/register') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/agent') ? 'bg-blue-600' : '' }}">Agent Maintenance</a>
                        <a href="{{ url('admin/bcms/unit') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/unit') ? 'bg-blue-600' : '' }}">Unit Maintenance</a>
                        <a href="{{ url('admin/bcms/submission') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/submission') ? 'bg-blue-600' : '' }}">Sub-Unit Submission/Policy Record</a>
                        <a href="{{ url('admin/bcms/digital-card') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/digital-card') ? 'bg-blue-600' : '' }}">Digital Card Maintenance</a>
                        <a href="{{ url('admin/bcms/scheduled-tasks') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/scheduled-tasks') ? 'bg-blue-600' : '' }}">Scheduled Tasks</a>
                    </div>
                </div>
            </div>

            <!-- Branch Operations Utility Section -->
            @php $branchoperationOpen = request()->is('admin/branchoperation/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $branchoperationOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Branch Operations Utility</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $branchoperationOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $branchoperationOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('/admin/issued_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Upload Issued</a>
                        <a href="{{ url('/admin/nap_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Upload NAP</a>
                        <a href="{{ url('/admin/policy_premium_due_list_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Upload Due List</a>
                        <a href="{{ url('/admin/batch_photos_upload') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Upload Batch Photos</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Update Submission/Policy Record</a>
                    </div>
                </div>
            </div>
        @endif
    </nav>
</aside>

<style>
    /* Hide scrollbar */
    .custom-scrollbar::-webkit-scrollbar {
        width: 0px; /* Remove the scrollbar */
    }

    /* Firefox scrollbar styling */
    .custom-scrollbar {
        scrollbar-width: none; /* Firefox */
    }
</style>

<script>
    document.querySelectorAll('.dropdown-toggle').forEach(button => {
    button.addEventListener('click', () => {
        const dropdown = button.nextElementSibling;
        const icon = button.querySelector('svg');
        const span = button.querySelector('span');
        const isOpen = dropdown.classList.contains('max-h-[1000px]');

        // Close all dropdowns
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.remove('max-h-[1000px]', 'opacity-100', 'scale-y-100');
            menu.classList.add('max-h-0', 'opacity-0', 'scale-y-95');
        });

        // Reset all dropdown buttons
        document.querySelectorAll('.dropdown-toggle').forEach(btn => {
            btn.classList.remove('bg-blue-200/30', 'bg-gray-700/60');
            const icon = btn.querySelector('svg');
            const span = btn.querySelector('span');
            icon.classList.remove('rotate-180', 'text-yellow-400');
            span.classList.remove('text-yellow-400');
        });

        // Open the clicked dropdown if not already open
        if (!isOpen) {
            dropdown.classList.remove('max-h-0', 'opacity-0', 'scale-y-95');
            dropdown.classList.add('max-h-[1000px]', 'opacity-100', 'scale-y-100');
            icon.classList.add('rotate-180', 'text-yellow-400');
            span.classList.add('text-yellow-400'); // 👈 This line adds yellow to text
        }
    });
});
</script>