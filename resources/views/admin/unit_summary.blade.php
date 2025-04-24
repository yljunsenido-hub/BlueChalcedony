<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">
        
        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            UNIT PRODUCTION REPORTS
        </div>

        <!-- divider -->
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <div class="container mx-auto rounded-md shadow-sm bg-white border pl-1 pr-1 pt-1 pb-1 mb-2 flex flex-col space-y-5">

            <!-- Year and Month Selection Section -->
            <div class="container mx-auto rounded-md shadow-sm bg-blue-900 border pt-2 pb-2 flex items-center justify-between"> <!-- Added justify-between -->
                <a href="{{ route('admin.unitSummaryYTD') }}">
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

    <div class="pb-4 p-4 bg-white rounded-md shadow-md">
        
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

    <!-- Data Table Section -->
    <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left border-r border-gray-300">Branch</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Unit</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Issued</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Pending</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Total</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">AA</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">MP</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">AR</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">CC</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">CP</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">AVE. CS</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">AVE. SA</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">NR</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-300 hover:bg-gray-100">
                    <td class="py-3 px-6 border-r border-gray-300">BCDQ</td>
                    <td class="py-3 px-6 border-r border-gray-300">Blue Royals</td>
                    <td class="py-3 px-6 border-r border-gray-300">730,290.52</td>
                    <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">730,290.52</td>
                    <td class="py-3 px-6 border-r border-gray-300">9.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">75.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">12.00%</td>
                    <td class="py-3 px-6 border-r border-gray-300">12.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">1.33</td>
                    <td class="py-3 px-6 border-r border-gray-300">60,857.54</td>
                    <td class="py-3 px-6 border-r border-gray-300">1,969,264.17</td>
                    <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                </tr>
            </tbody>
            <tfoot>
                <!-- Total Row -->
                <tr id="totalRow" class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <td class="py-3 px-6 text-left">Total</td>
                    <td class="py-3 px-6 text-left border-r border-gray-300"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalIssued"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalPending"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAmount"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAA"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalMP"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAR"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalCC"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalCP"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAVE_CS"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAVE_SA"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalNR"></td>
                </tr>
                <!-- Average Row -->
                <tr id="averageRow" class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <td class="py-3 px-6 text-left">Average</td>
                    <td class="py-3 px-6 text-left border-r border-gray-300"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageIssued"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averagePending"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAmount"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAA"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageMP"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAR"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageCC"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageCP"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAVE_CS"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAVE_SA"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageNR"></td>
                </tr>
            </tfoot>
        </table>
    </div>

    </div>
</x-app-layout>