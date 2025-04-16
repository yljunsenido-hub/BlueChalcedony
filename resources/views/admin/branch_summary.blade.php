<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
        <div class="bg-blue-900 p-3 text-white text-xl text-center rounded-t-lg">
            BRANCH PRODUCTION REPORTS
        </div>

        <div class="container shadow-md mb-3 mb-4 p-2 bg-blue-900 rounded-md flex justify-between items-center mt-2">
            <h1 class="pl-2 text-l text-yellow-300 font-semibold ">Month-to-date</h1>
        </div>
        
        <div class="mb-3 p-3 bg-white rounded-md shadow-md">
                    <div class="flex items-center justify-between mb-3">
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
                            <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" >
                        </div>
                    </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left border-r border-gray-300">Branch</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">Issued</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">Pending</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">Total</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">AA</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">MP</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">AR</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">CC</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">CC/AA</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">Ave. CS</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">Ave. SA</th>
                                <th class="py-3 px-6 text-left border-r border-gray-300">NR</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-300 hover:bg-gray-100">
                                <td class="py-3 px-6 border-r border-gray-300">BLUE CHALCEDONY QUARTZ BRANCH</td>
                                <td class="py-3 px-6 border-r border-gray-300">A001</td>
                                <td class="py-3 px-6 border-r border-gray-300">Finance</td>
                                <td class="py-3 px-6 border-r border-gray-300">Accounting</td>
                                <td class="py-3 px-6 border-r border-gray-300">Payroll</td>
                                <td class="py-3 px-6 border-r border-gray-300">John Doe</td>
                                <td class="py-3 px-6 border-r border-gray-300">100</td>
                                <td class="py-3 px-6 border-r border-gray-300">20</td>
                                <td class="py-3 px-6 border-r border-gray-300">120</td>
                                <td class="py-3 px-6 border-r border-gray-300">CC1</td>
                                <td class="py-3 px-6 border-r border-gray-300">75%</td>
                                <td class="py-3 px-6 border-r border-gray-300">75%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</x-app-layout>