<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
        <div class="bg-blue-900 p-3 text-white text-xl text-center rounded-t-lg mb-2">
            EASY REPORTS
        </div>

         <!-- Show Entries and Search Section -->
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
                    <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                </div>
            </div>

            <!-- Table Section -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left border-r border-gray-300">#</th>
                            <th class="py-3 px-6 text-left border-r border-gray-300">Title</th>
                            <th class="py-3 px-6 border-r border-gray-300 w-1/3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <!-- Row 1 -->
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6 border-r border-gray-300">1</td>
                            <td class="py-3 px-6 border-r border-gray-300">TOP 50 AGENTS (IN TERMS OF RECRUIT)</td>
                            <td class="py-3 px-6 border-r border-gray-300 flex justify-center">
                                <button class="text-white bg-blue-500 hover:bg-blue-600 rounded-md shadow-md py-2 px-2 mr-2">VIEW</button>
                                <button class="text-white bg-blue-500 hover:bg-blue-600 rounded-md shadow-md py-2 px-2 mr-2">PLAIN VIEW</button>
                                <button class="text-white bg-blue-500 hover:bg-blue-600 rounded-md shadow-md py-2 px-2">DOWNLOAD</button>
                            </td>
                        </tr>



                        <!-- Row 2 -->
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6 border-r border-gray-300">2</td>
                            <td class="py-3 px-6 border-r border-gray-300">BRANCH TOP 50 LIFE SAVERS (CASE COUNT)</td>
                            <td class="py-3 px-6 border-r border-gray-300 flex justify-center">
                                <button class="text-white bg-blue-500 hover:bg-blue-600 rounded-md shadow-md py-2 px-2 mr-2">VIEW</button>
                                <button class="text-white bg-blue-500 hover:bg-blue-600 rounded-md shadow-md py-2 px-2 mr-2">PLAIN VIEW</button>
                                <button class="text-white bg-blue-500 hover:bg-blue-600 rounded-md shadow-md py-2 px-2">DOWNLOAD</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>