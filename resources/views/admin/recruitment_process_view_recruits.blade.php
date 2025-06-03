<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-3">

        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            Recruitment Process Recruits
        </div>

        <!-- divider -->
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <div class="text-blue-900 text-md font-bold rounded-lg mt-2 mb-2">
            Recruitment 001
        </div>

        <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/recruitment_process" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        ← Back
                    </a>
                </div>
            </div>

        <!-- Container -->
        <div class="container mx-auto rounded-md shadow-sm bg-white border pl-3 pr-3 pt-3 flex flex-col space-y-5">
        <!-- Show Entries and Search Section -->
        <div class="pt-1 px-2 flex items-center justify-between">
            <div class="flex items-center">
                <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                <select id="entries" class="border text-sm border-gray-300 rounded-md pl-2 px-5 py-1">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <div class="flex items-center">
            <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
            <input type="text" id="search" class="px-2 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
            </div>
            </div>

        <!-- Table -->
        <div class="overflow-x-auto px-5 bg-white-100 p-3 rounded-l rounded-r shadow-md mb-5 pb-5 pt-5">
                <table id="dataTable" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-14 py-2">Recruit</th>
                        <th class="border border-gray-300 px-14 py-2">Recruiter</th>
                        <th class="border border-gray-300 px-4 py-2">For Approval</th>
                        <th class="border border-gray-300 px-4 py-2">Completion Rate (%)</th>
                        <th class="border border-gray-300 w-28">Action</th>

                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="space-x-2 p-2 flex justify-center">
                                <!-- View Button with Text -->
                                <a href="/admin/recruitment_process_view_progress" 
                                    class="pt-1 pb-1 bg-blue-500 text-white rounded-md hover:bg-blue-700" 
                                    title="View Details">
                                    <span class="text-sm font-medium ml-1 mr-1  mb-1 inline-block">View Details</span>
                                </a>
                        </tr>
                        </tbody>
                    <tfoot>
                </table>
            </div>

                <!-- Pagination Links -->
                <div class="">
                    {{-- Ensure pagination controls are displayed --}}
                </div>
            </div>
        </div>
</x-app-layout>
