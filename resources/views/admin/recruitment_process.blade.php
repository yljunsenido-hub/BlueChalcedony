<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-1">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Recruit Process
            </div>

            <div class="bg-gray-400 text-white shadow-lg rounded-sm p-1 mb-3"></div>

            <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Process Description</th>
                            <th class="border border-gray-300 px-4 py-2">No. of Recruits</th>
                            <th class="border border-gray-300 px-4 py-2">Completion Rate (%)</th>
                            <th class="border border-gray-300 px-4 py-2">Status</th>
                            <th class="border border-gray-300 w-48">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2"></th>
                            <th class="border border-gray-300 px-4 py-2"></th>
                            <th class="border border-gray-300 px-4 py-2"></th>
                            <th class="border border-gray-300 px-4 py-2"></th>
                            <th class="border border-gray-300 px-4 py-2"></th>
                            <td class="space-x-2 flex justify-center w-56 p-2">
                                <!-- View Details Button with Text -->
                                <a href="/admin/recruitment_process_view_details" 
                                    class="pt-1 pb-1 pl-1 pr-2 bg-blue-500 text-white rounded-md hover:bg-blue-700" 
                                    
                                    title="View Details">
                                    <span class="text-sm font-medium ml-1 mb-1 inline-block">View Details</span>
                                </a>

                                <!-- View Recruits Button with Text -->
                                <a href="/admin/recruitment_process_view_recruits" 
                                    class="pt-1 pb-1 pl-2 pr-2 bg-green-500 text-white rounded-md hover:bg-green-700" 
                                    title="View Recruit">
                                    <span class="text-sm font-medium mb-1 inline-block">View Recruits</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination Links -->
                <div class="p-4">
                    {{-- Ensure pagination controls are displayed --}}
                </div>
            </div>
        </div>
</x-app-layout>
