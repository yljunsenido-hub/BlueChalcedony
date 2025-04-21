<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
        <div class="bg-blue-900 p-3 text-white text-xl text-center rounded-t-lg mb-2">
            AGENT GROUP MAINTENANCE
        </div>

        <!-- Personal Monitoring Section -->
        <div class="mb-4 p-4 bg-blue-900 rounded-md flex justify-between items-center">
            <h2 class="text-lg font-semibold text-yellow-300">Groups</h2>
            <a class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-yellow-300 hover:text-white text-sm font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-6">
                    <path d="M12 5v14M5 12h14"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
            </a>
        </div>

        <!-- Table Section -->
        <div class="p-3 bg-white rounded-md shadow-md">
            <div class="mb-4 flex items-center justify-between">
                <!-- Entries Dropdown -->
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600 py-1">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md p-2 px-1 py-1">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <!-- Search Input -->
                <div class="flex items-center">
                    <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                    <input type="text" id="search" class="px-4 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                </div>
            </div>

            <!-- Data Table -->
            <div class="overflow-x-auto">
                <table id="dataTable" class="min-w-full bg-white border border-gray-300">
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
                </table>
            </div>
        </div>

    </div>
</x-app-layout>