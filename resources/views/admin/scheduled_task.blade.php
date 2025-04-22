<x-app-layout>
    <x-slot name="header">
        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-1">
            <!-- Title -->
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Scheduled Tasks
            </div>

            <!-- Divider -->
            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

            <!-- Subheading -->
            <div class="bg-blue-900 text-white shadow-lg p-1 rounded-md mb-3 p-1 pl-2">
                Manually activate automated tasks
            </div>

            <!-- Filters -->
            <div class="mb-4 p-4 bg-white rounded-md shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <!-- Entries Dropdown -->
                    <div class="flex items-center">
                        <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                        <select id="entries" class="border border-gray-300 rounded-md p-1 text-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>

                    <!-- Search -->
                    <div class="flex items-center">
                        <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                        <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-00">
                        <thead>
                            <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                                <th class="py-3 px-5 border-r border-gray-300 text-left">Name</th>
                                <th class="py-3 px-5 border-r border-gray-300 text-left">Description</th>
                                <th class="py-3 px-5 border-r border-gray-300 text-left">Repitition</th>
                                <th class="py-3 px-5 flex justify-center border-r border-gray-300 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <!-- Row 1 -->
                            <tr class="border-b border-gray-300 hover:bg-gray-100">
                                <td class="py-3 px-5 border-r"></td>
                                <td class="py-3 px-5 border-r"></td>
                                <td class="py-3 px-5 border-r"></td>
                                <td class="py-3 px-5 border-r flex justify-center">
                                    <button class="bg-blue-500 text-white rounded px-4 py-1 ml-2 hover:bg-blue-700">Run</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
</x-app-layout>
