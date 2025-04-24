<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">

        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            Agent Production Reports
        </div>

        <!-- divider -->
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <div class="bg-blue-900 text-white shadow-lg rounded-lg p-1 mb-3 pl-1">
            <h1 class="pl-2 text-l text-white font-semibold ">Agent YTD</h1>
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
                        <th class="border border-gray-300 px-4 py-2">Rank</th>
                        <th class="border border-gray-300 px-4 py-2">Code</th>
                        <th class="border border-gray-300 px-4 py-2">Branch</th>
                        <th class="border border-gray-300 px-4 py-2">Unit</th>
                        <th class="border border-gray-300 px-4 py-2">Sub-Unit</th>
                        <th class="border border-gray-300 px-4 py-2">Coding</th>
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">NAP</th>
                        <th class="border border-gray-300 px-4 py-2">Issued</th>
                        <th class="border border-gray-300 px-4 py-2">Pending</th>
                        <th class="border border-gray-300 px-4 py-2">Total</th>
                        <th class="border border-gray-300 px-4 py-2">CC</th>
                        <th class="border border-gray-300 px-4 py-2">Ave. SA</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
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
