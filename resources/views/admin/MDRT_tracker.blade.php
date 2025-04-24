<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-5">

        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            MDRT Tracker
        </div>

        <!-- divider -->
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <h1 class="container mx-auto max-w-8xl bg-blue-900 p-2 rounded-l rounded-r shadow-md mb-3">
            <a href="{{ route('admin.MDRTTrackerPersonal') }}">
                <p class="ml-1 text-yellow-300 hover:underline hover:text-white">Go to Personal Tracker</p> 
            </a>
        </h1>
        

        <div class="p-3 bg-white rounded-md shadow-md">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 border-l border-gray-300 text-left">Policy No.</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">Client</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">Mode</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">Effectivity</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">JAN</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">FEB</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">MAR</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">APR</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">MAY</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">JUN</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">JUL</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">AUG</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">SEP</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">OCT</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">NOV</th>
                        <th class="py-3 px-6 border-l border-gray-300 text-left">DEC</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-semibold">
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6">MONTHLY TOTAL</td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                    </tr>
                    <!-- Overall summary row -->
                    <tr class="font-semibold">
                        <td class="py-3 px-6" colspan="15">ASSUMED TOTAL FYP</td>
                        <td class="py-3 px-6">0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>