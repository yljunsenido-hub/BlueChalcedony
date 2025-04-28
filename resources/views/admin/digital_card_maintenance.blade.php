<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Digital Card Maintenance
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

            <div class="flex items-center justify-between mb-3 bg-blue-900 rounded-md shadow-md p-2">
                    <p class="text-left text-white ml-1">Agent Personal Details</p>
                    <a href="/admin/digital_card_maintenanceCreate" class="bg-yellow-400 hover:bg-white text-blue-900 text-sm font-bold px-1 py-1 rounded-md shadow-md transition duration-100 ease-in-out">Add Agent</a>
                </div>

            <div class="bg-white rounded-md shadow-md p-3">
                <div class="flex items-center justify-between mb-3">
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md text-sm pl-2 px-5 py-1">
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

                <div id="tableContent" class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300 text-sm">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600">
                                <th class="py-2 px-4 w-20 text-center text-left border-r border-gray-300">Card_ID</th>
                                <th class="py-2 px-4 text-left border-r border-gray-300">Agent</th>
                                <th class="py-2 px-4 w-48 text-left text-center border-r border-gray-300">Status</th>
                                <th class="py-2 px-4 w-1/5 text-left border-r border-gray-300 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            <tr class="border-b border-gray-300 hover:bg-gray-100">
                                <td class="border px-4 py-2 text-center"></td>
                                <td class="border px-4 py-2"></td>
                                <td class="border px-4 py-2 text-center"></td>
                                <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-green-500 text-white rounded-md hover:bg-green-700">Update</button>
                                <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">Unlink</button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    </div>
                    </div>

            </div>
        </div>
</x-app-layout>
