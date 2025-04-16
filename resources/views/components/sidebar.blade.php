<aside class="fixed left-0 top-0 h-screen w-64 bg-gradient-to-t from-blue-600 to-blue-900 text-white p-4 overflow-y-auto custom-scrollbar">
    <h2 class="text-lg font-semibold">Blue Chalcedony Quartz</h2>
    <nav class="mt-8 space-y-2">
        @php $user = auth()->user(); @endphp

        @if($user->role == 'admin')
            
        <h2 class="text-s font-semibold">Operations</h2>

            <!-- Leads & Cases -->
            @php $leadscasesOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $leadscasesOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Leads & Cases</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $leadscasesOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $leadscasesOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('/admin/submitted_cases') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Submitted Cases</a>
                        <a href="{{ url('/admin/issued_cases') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Issued Cases</a>
                        <a href="{{ url('/admin/outreq_cases') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Outreq Cases</a>
                        <a href="{{ url('/admin/declined_postponed_cases') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Declined/Postponed Cases</a>
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
                        <a href="{{ url('/admin/submission_approval') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Submission Approval</a>
                        <a href="{{ url('/admin/new_business_maintenance') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">New Business Maintenance</a>
                        <a href="{{ url('/admin/issued_cases_nb') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Issued Cases</a>
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
                        <a href="{{ url('/admin/agentMTD') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/agentMTD') ? 'bg-blue-600' : '' }}">Agent MTD</a>
                        <a href="{{ url('/admin/agentYTD') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/agentYTD') ? 'bg-blue-600' : '' }}">Agent YTD</a>
                        <a href="{{ url('/admin/subUnitSummary') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/subUnitSummary') ? 'bg-blue-600' : '' }}">Sub-Unit Summary</a>
                        <a href="{{ url('/admin/unitSummary') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/unitSummary') ? 'bg-blue-600' : '' }}">Unit Summary</a>
                    
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
                        <a href="{{ url('/admin/poster_template') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Poster Templates</a>
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
                        <a href="{{ url('/admin/proposal_search') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Proposal Search</a>
                        <a href="{{ url('/admin/proposal_list') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Proposal List</a>
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
                        <a href="{{ url('/admin/update_submission_policy_record') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('#') ? 'bg-blue-600' : '' }}">Update Submission/Policy Record</a>
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
            const isOpen = dropdown.classList.contains('max-h-[1000px]');
            const role = button.dataset.role;
            //a
            // Close all dropdowns
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.remove('max-h-[1000px]', 'opacity-100', 'scale-y-100');
                menu.classList.add('max-h-0', 'opacity-0', 'scale-y-95');
            });

            // Reset all dropdown buttons
            document.querySelectorAll('.dropdown-toggle').forEach(btn => {
                btn.classList.remove('bg-blue-200/30', 'bg-gray-700/60');
                btn.querySelector('svg').classList.remove('rotate-180');
            });

            // Open the clicked dropdown if not already open
            if (!isOpen) {
                dropdown.classList.remove('max-h-0', 'opacity-0', 'scale-y-95');
                dropdown.classList.add('max-h-[1000px]', 'opacity-100', 'scale-y-100');
                icon.classList.add('rotate-180');

                // Apply background color based on role
                if (role === 'admin') {
                    button.classList.add('bg-blue-200/30');
                } else {
                    button.classList.add('bg-gray-700/60');
                }
            }
        });
    });
</script>