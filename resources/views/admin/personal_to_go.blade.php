<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-5">

        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            PERSONAL TO GO
        </div>

        <!-- divider -->
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <div class="pl-2 pr-2 pt-2 pb-2 mb-4 bg-blue-900 rounded-md flex justify-between items-center">
            
            <h2 class="text-lg font-semibold text-yellow-300">Personal Monitoring</h2>
                <a class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-yellow-300 hover:text-white text-sm font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-6">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </a>
        </div>

        <div class="mb-3 p-2 bg-blue-200 rounded-md flex justify-between items-center">
            <h3 class="text-xs font-semibold text-gray-600">Please note that any results presented here are for informational purposes only and are not official. These results are subject to finance validation and may change based on further analysis or updates.</h3>
        </div>

        <!-- Tabs Section -->
        <div class="mb-4 p-3 bg-white rounded-md shadow-md">
        <div class="flex border-b border-gray-300 mb-4">
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-red-500 transition-all duration-300 active-tab" id="tab1">A-AC Agent</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-red-500 transition-all duration-300" id="tab2">B-AC UM</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-red-500 transition-all duration-300" id="tab3">C-100K Club</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-red-500 transition-all duration-300" id="tab4">C-HO Incentives</a>
        </div>

        <div class="pb-4 p-4 bg-white rounded-md shadow-md">

            <!-- Show Entries and Search Section -->
            <div class="mb-2 px-2 flex items-center justify-between">
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                    <select id="entries" class="text-sm border border-gray-300 rounded-md pl-2 px-5 py-1">
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

            <!-- Table Content (Initially for Tab 1) -->
            <div id="tableContent" class="overflow-x-auto">
                
                <!-- Dynamic Table Rows will be inserted here -->
            </div>
            
        <!-- Pagination Links -->
        <div class="">
                    {{-- Ensure pagination controls are displayed --}}
                </div>
            </div>
        </div>
</x-app-layout>