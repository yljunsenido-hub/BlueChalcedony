<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-5">

        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            Sub-Unit Production Reports
        </div>

        <!-- divider -->
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <div class="container mx-auto rounded-md shadow-sm bg-white border pl-1 pr-1 pt-1 pb-1 mb-2 flex flex-col space-y-5">

            <!-- Year and Month Selection Section -->
            <div class="container mx-auto rounded-md shadow-sm bg-blue-900 border pt-2 pb-2 flex items-center justify-between"> <!-- Added justify-between -->
                <a href="{{ route('admin.subUnitSummaryYTD') }}">
                    <p class="ml-4 text-yellow-300 hover:underline hover:text-white">Switch To YTD</p> </h1>
                </a>
            <div class="flex space-x-5 mr-3"> <!-- Removed justify-end -->
                <select id="yearSelect" class="border border-gray-300 rounded-md p-1 w-40">
                    <option value="10">2025</option>
                    <option value="25">2024</option>
                    <option value="50">2023</option>
                    <option value="100">2022</option>
                    <option value="10">2021</option>
                    <option value="10">2020</option>
                    <option value="25">2019</option>
                </select>
                <select id="monthSelect" class="border border-gray-300 rounded-md p-1 w-40">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
        </div>
    </div>

    <div class="pb-5 p-4 bg-white rounded-md shadow-md">

    <!-- Show Entries and Search Section -->
    <div class="mb-3 px-2 flex items-center justify-between">
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

    <div class="overflow-x-auto pt-3">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left border-r border-gray-300 w-52">Branch</th>
                        <th class="py-3 px-6 text-left border-r border-gray-300 w-40">Unit</th>
                        <th class="py-3 px-6 text-left border-r border-gray-300 w-52">Sub-unit</th>
                        <th class="py-3 px-6 text-left border-r border-gray-300">Issued</th>
                        <th class="py-3 px-6 text-left border-r border-gray-300">Pending</th>
                        <th class="py-3 px-6 text-left border-r border-gray-300">Total</th>
                        <th class="py-3 px-6 text-left border-r border-gray-300">CC</th>
                        <th class="py-3 px-6 text-left border-r border-gray-300">CC Prev. Year</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6 border-r border-gray-300 w-40">BCDQ</td>
                        <td class="py-3 px-6 border-r border-gray-300 w-40">A001</td>
                        <td class="py-3 px-6 border-r border-gray-300 w-52">Finance</td>
                        <td class="py-3 px-6 border-r border-gray-300">140,000</td>
                        <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                        <td class="py-3 px-6 border-r border-gray-300">140,000</td>
                        <td class="py-3 px-6 border-r border-gray-300">2.00</td>
                        <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                    </tr>

                    <tr class="bg-gray-200 font-bold">
                        <td colspan="3" class="py-3 px-6 text-left border-r border-gray-300">Overall Total</td>
                        <td class="py-3 px-6 border-r border-gray-300">140,000</td>
                        <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                        <td class="py-3 px-6 border-r border-gray-300">140,000</td>
                        <td class="py-3 px-6 border-r border-gray-300">2.00</td>
                        <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>