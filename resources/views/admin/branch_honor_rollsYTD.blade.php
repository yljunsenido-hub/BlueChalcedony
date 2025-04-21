<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
        <div class="bg-blue-900 p-3 text-white text-xl text-center rounded-t-lg">
            BRANCH TOP AGENTS YEAR-TO-DATE REPORT
        </div>

        <div class="container mx-auto rounded-md shadow-sm bg-white border pl-3 pr-3 pt-3 pb-3 mb-2 flex flex-col space-y-5">

            <!-- Year and Month Selection Section -->
            <div class="container mx-auto rounded-md shadow-sm bg-blue-900 border pt-2 pb-2 flex items-center justify-between"> <!-- Added justify-between -->
                <a href="{{ route('admin.branchHonorRolls') }}">
                    <p class="ml-4 text-yellow-300 hover:underline hover:text-white">Switch To MTD</p> </h1>
                </a>
        </div>
    </div>       

    <!-- Data Table Section -->
    <div class="overflow-x-auto px-5 bg-white-100 p-3 rounded-l rounded-r shadow-md mb-5 pb-5">
        <table id="dataTable" class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left border-r border-gray-300">Rank</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Branch</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Unit</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Name</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">CC</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">APE</th>
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
                </tr>
            </tbody>
        </table>
    </div>

    </div>
</x-app-layout>