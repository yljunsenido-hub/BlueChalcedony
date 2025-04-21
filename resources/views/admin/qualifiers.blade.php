<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
        <div class="bg-blue-900 p-3 text-white text-xl text-center rounded-t-lg mb-2">
            QUALIFIERS
        </div>

        <div class="mb-4 p-4 bg-blue-900 rounded-md flex justify-between items-center">
            <h2 class="text-lg font-semibold text-yellow-300">Team Monitoring</h2>
                <a class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-yellow-300 hover:text-white text-sm font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-6">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </a>
        </div>

        <!-- Tabs Section -->
        <div class="mb-4 p-3 bg-white rounded-md shadow-md">
        <div class="flex border-b border-gray-300 mb-4">
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300 active-tab" id="tab1">A-AC Agent</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300" id="tab2">B-AC UM</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300" id="tab3">C-100K Club</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300" id="tab4">C-HO Incentives</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300" id="tab5">C-Promotions</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300" id="tab6">D-Branch Incentives</a>
            <a href="#" class="tab py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300" id="tab7">Z-Others</a>
        </div>

        <!-- Table Section -->
        <div class="p-4 bg-white rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md p-1 text-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                    <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                </div>
            </div>

            <!-- Table Content (Initially for Tab 1) -->
            <div id="tableContent" class="overflow-x-auto">
                <!-- Dynamic Table Rows will be inserted here -->
            </div>
        </div>

    </div>
</x-app-layout>