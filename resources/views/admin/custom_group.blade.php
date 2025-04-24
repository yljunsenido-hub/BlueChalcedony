<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-5">

        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            AGENT GROUP MAINTENANCE
        </div>

        <!-- divider -->
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <div class="container mx-auto rounded-md shadow-sm bg-white border pl-1 pr-1 pt-1 pb-1 mb-2 flex flex-col space-y-5">

        <!-- Personal Monitoring Section -->
        <div class="p-2 bg-blue-900 rounded-md flex justify-between items-center">
            <h2 class="text-lg font-semibold text-yellow-300">Groups</h2>
            <a class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-yellow-300 hover:text-white text-sm font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-6">
                    <path d="M12 5v14M5 12h14"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
            </a>
        </div>
        
    </div>

        <div class="pb-4 p-4 bg-white rounded-md shadow-md">

            <!-- Show Entries and Search Section -->
            <div class="mb-2 px-2 flex items-center justify-between">
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md pl-2 px-5 py-1">
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

            <!-- Data Table Section -->
            <div class="overflow-x-auto pt-3">
                    <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200 text-black text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Group Name</th>
                                    <th class="py-3 px-6 text-left">Tracking Start</th>
                                    <th class="py-3 px-6 text-left">Tracking End</th>
                                    <th class="py-3 px-6 text-left">Action</th>
                                </tr>
                            </thead>

                            <tbody id="tableBody" class="text-gray-600 text-sm font-light">
                                <!-- Dynamic content will be inserted here -->
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