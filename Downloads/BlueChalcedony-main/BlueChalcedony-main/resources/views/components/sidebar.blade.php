<aside class="fixed top-0 h-full w-64 text-white p-4 bg-gradient-to-b from-blue-900 via-blue-800 to-blue-700 dark:from-blue-800 dark:via-gray-700 dark:to-gray-800 border-b border-gray-100 dark:border-gray-700">
        <h2 class="text-lg font-semibold">Dashboard</h2>
        <nav class="mt-5 space-y-2">
            @if(auth()->user()->role == 'admin')
                <a href="{{ url('/admin/dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Issued Report</a>
                <a href="{{ url('/admin/nap_report') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Nap Report</a>
                <a href="{{ url('/admin/policy_premium_due_list_report') }}" class="block py-2.5 pb-10 px-4 rounded hover:bg-gray-700">Policy Premium Report</a>
                <a href="{{ url('/admin/issued_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Issued Report Upload</a>
                <a href="{{ url('/admin/nap_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Nap Report Upload</a>
                <a href="{{ url('/admin/policy_premium_due_list_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Policy Premium Due List Report Upload</a>
            @elseif(auth()->user()->role == 'branch_manager')
                <a href="{{ url('/branch-manager/dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Issued Report</a>
                <a href="{{ url('/branch-manager/issued_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Issued Report</a>
                <a href="{{ url('/admin/nap_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Nap Report Upload</a>
            @elseif(auth()->user()->role == 'unit_manager')
                <a href="{{ url('/unit-manager/dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Issued Report</a>
                <a href="{{ url('/unit-manager/issued_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Issued Report</a>
                <a href="{{ url('/admin/nap_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Nap Report Upload</a>
            @elseif(auth()->user()->role == 'agent')
                <a href="{{ url('/agent/dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Issued Report</a>
                <a href="{{ url('/agent/issued_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Issued Report</a>
                <a href="{{ url('/admin/nap_report_upload') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Nap Report Upload</a>
            @endif
        </nav>
    </aside>