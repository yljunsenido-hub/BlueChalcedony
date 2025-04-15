<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
        <!-- Policies Issued Report -->
        <div class="bg-blue-900 p-3 text-white text-xl text-center rounded-t-lg">
            AGENTS PRODUCTION REPORTS MTD
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Rank</th>
                        <th class="border border-gray-300 px-4 py-2">Code</th>
                        <th class="border border-gray-300 px-4 py-2">Branch</th>
                        <th class="border border-gray-300 px-4 py-2">Unit</th>
                        <th class="border border-gray-300 px-4 py-2">Sub-Unit</th>
                        <th class="border border-gray-300 px-4 py-2">Name</th>
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
                        </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="p-4">
            {{-- Display pagination controls --}}
        </div>
    </div>
</x-app-layout>
