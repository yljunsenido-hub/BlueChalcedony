    <x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Recruit
            </div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/recruit_create" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        Create New Recruit
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Unit/Sub-Unit</th>
                            <th class="border border-gray-300 px-4 py-2">Recruit</th>
                            <th class="border border-gray-300 px-4 py-2">Recruiter</th>
                            <th class="border border-gray-300 px-4 py-2">Progress Rating (%)</th>
                            <th class="border border-gray-300 px-4 py-2">For Approvals</th>
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
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <td class="space-x-2 flex justify-center w-64 p-2">
                                    <!-- View Progress Button with Text -->
                                    <a href="/admin/recruit_view_progress" 
                                        class="pt-2 pb-2 pl-1 pr-2 bg-blue-500 text-white rounded-md hover:bg-blue-700" 
                                        title="View Progress"> <!-- Add a title attribute -->
                                        <span class="text-sm font-medium ml-1 mb-1 inline-block">View Progress</span>
                                    </a>

                                    <!-- Edit Recruit Info Button with Text -->
                                    <a href="/admin/recruit_edit_recruit_info" 
                                        class="pt-2 pb-2 pl-1 pr-2 bg-green-500 text-white rounded-md hover:bg-green-700"
                                        title="Edit Recruit Info"> <!-- Add a title attribute -->
                                        <span class="text-sm font-medium ml-1 mb-1 inline-block">Edit Recruit Info</span>
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
