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

        <!-- Trigger Button -->
        <div class="p-2 bg-blue-900 rounded-md flex justify-between items-center">
            <h2 class="text-lg font-semibold text-yellow-300">Groups</h2>
            <button
                onclick="document.getElementById('popupModal').classList.remove('hidden')"
                class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-yellow-300 hover:text-white text-sm font-bold"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                    class="w-3 h-6">
                    <path d="M12 5v14M5 12h14"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
            </button>
        </div>

<!-- Modal -->
<div id="popupModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50 overflow-y-auto">
<div class="bg-white rounded-md p-6 w-full max-w-lg relative">

        <!-- Close Button -->
        <button
            onclick="document.getElementById('popupModal').classList.add('hidden')"
            class="absolute top-2 right-2 text-gray-500 hover:text-black text-xl font-bold"
        >&times;</button>

        <!-- Title -->
        <h3 class="text-xl font-semibold mb-4 text-center">Create Custom Group</h3>

        <!-- Form -->
        <form>
            <!-- Group Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">*Group Name</label>
                <input type="text" required class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Group Description -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Group Description</label>
                <textarea class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Tracking Start Date -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">*Tracking Start Date</label>
                <input type="date" required class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Tracking End Date -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">*Tracking End Date</label>
                <input type="date" required class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Report Section -->
            <label class="block text-sm font-medium text-gray-700 mb-2">*Report</label>
            <div class="border border-gray-500 p-3 rounded-lg mb-4">
                
                <div class="grid grid-cols-2 gap-2 text-sm text-gray-800">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="report" value="APE" class="accent-blue-600">
                        <span>APE</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="report" value="NAP" class="accent-blue-600">
                        <span>NAP</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="report" value="CC" class="accent-blue-600">
                        <span>CC</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="report" value="NR" class="accent-blue-600">
                        <span>NR</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="report" value="AR" class="accent-blue-600">
                        <span>AR</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="report" value="Total SA" class="accent-blue-600">
                        <span>Total SA</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="report" value="Avg. SA" class="accent-blue-600">
                        <span>Avg. SA</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="report" value="Pending" class="accent-blue-600">
                        <span>Pending</span>
                    </label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="document.getElementById('popupModal').classList.add('hidden')"
                    class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</button>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
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
                                    <th class="py-3 px-6 border-r border-gray-300 text-left">Group Name</th>
                                    <th class="py-3 px-6 border-r border-gray-300 text-left">Tracking Start</th>
                                    <th class="py-3 px-6 border-r border-gray-300 text-left">Tracking End</th>
                                    <th class="py-3 px-6 border-r border-gray-300 text-left w-1/3">Action</th>
                                </tr>
                            </thead>

                            <tbody id="tableBody" class="text-gray-600 text-sm font-light">
                                <!-- Dynamic content will be inserted here -->
                                <td class="py-3 px-6 border-r border-gray-300"></td>
                                <td class="py-3 px-6 border-r border-gray-300"></td>
                                <td class="py-3 px-6 border-r border-gray-300"></td>
                                <td class="py-3 px-6 border-r border-gray-300 flex justify-center">
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