<style>
.scrollbar-blue {
    scrollbar-width: thin;
    scrollbar-color: #60a5fa transparent; /* Firefox thumb + track */
}

.scrollbar-blue::-webkit-scrollbar {
    width: 10px;
}

.scrollbar-blue::-webkit-scrollbar-track {
    background: transparent;
}

.scrollbar-blue::-webkit-scrollbar-thumb {
    background-color: #60a5fa;
    border-radius: 8px;
    border: 2px solid rgba(30, 58, 138, 0.4); /* subtle border to blend with gradient */
}

.scrollbar-blue::-webkit-scrollbar-button {
    display: none; /* Removes the up and down arrows */
}

.scrollbar-blue::-webkit-scrollbar-button:vertical {
    height: 0;
}

</style>

<aside class="scrollbar-blue fixed left-0 top-0 h-screen w-64 bg-gradient-to-t from-blue-600 to-blue-900 text-white p-4 overflow-y-auto">
    <h2 class="text-lg font-semibold">  </h2>
    <nav class="mt-12 space-y-2">
        @php $user = auth()->user(); @endphp

        @if($user->role == 'admin')
            
        <h2 class="text-s font-semibold">Operations</h2>

           
            @php $adminOpen = request()->is('admin/*'); @endphp

            <div class="relative group">
                <button data-role="admin"
                    class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $adminOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Reports</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $adminOpen ? 'rotate-180' : '' }}" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
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
            @php $agentOpen = request()->is('agent/*'); @endphp
            <div class="relative group">
                <button data-role="agent" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-gray-600/30 {{ $agentOpen ? 'bg-gray-700/60' : '' }}">
                    <span>Agent Reports</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $agentOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $agentOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-gray-700/60 rounded-lg p-2">
                        <a href="{{ url('/agent/dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('agent/dashboard') ? 'bg-gray-600' : '' }}">Issued Report</a>
                        <a href="{{ url('/agent/issued_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('agent/issued_report_upload') ? 'bg-gray-600' : '' }}">Issued Report</a>
                        <a href="{{ url('/admin/nap_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-600 {{ request()->is('admin/nap_report_upload') ? 'bg-gray-600' : '' }}">Nap Report Upload</a>
                    </div>
                </div>
            </div>
        @endif
    </nav>
</aside>



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
                //a
            }
        });
    });
</script>

