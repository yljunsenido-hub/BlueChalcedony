<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ Auth::user()->name }}
            </h2>
        </x-slot>

        <div class="py-12">
<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <!-- Policies Issued Report -->
    <div class="bg-gray-600 p-3 text-white text-xl text-center rounded-t-lg">
        POLICY PREMIUM DUE LIST REPORT
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">UM</th>
                    <th class="border border-gray-300 px-4 py-2">AG</th>
                    <th class="border border-gray-300 px-4 py-2">Policy Number</th>
                    <th class="border border-gray-300 px-4 py-2">Plan Code</th>
                    <th class="border border-gray-300 px-4 py-2">Currency</th>
                    <th class="border border-gray-300 px-4 py-2">Client Name</th>
                    <th class="border border-gray-300 px-4 py-2">First Issue Date</th>
                    <th class="border border-gray-300 px-4 py-2">Mode</th>
                    <th class="border border-gray-300 px-4 py-2">Modal Premium</th>
                    <th class="border border-gray-300 px-4 py-2">Sum Assured</th>
                    <th class="border border-gray-300 px-4 py-2">API</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>


</x-app-layout>
