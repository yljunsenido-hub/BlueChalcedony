<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Event Maintenance
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/event_maintenanceCreate" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-3 rounded-md shadow-md transition duration-100 ease-in-out">
                        Create New Event
                    </a>
                </div>
            </div>

            <div class="pb-3 p-4 bg-white rounded-md shadow-md">

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

            <div class="overflow-x-auto px-5 bg-white-100 p-3 rounded-l rounded-r shadow-md mb-2 pt-5 pb-5">
                    <table id="dataTable" class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Title</th>
                            <th class="border border-gray-300 px-4 py-2">Location</th>
                            <th class="border border-gray-300 px-4 py-2">Start</th>
                            <th class="border border-gray-300 px-4 py-2">Attendees</th>
                            <th class="border border-gray-300 px-4 py-2">Att. Policy</th>
                            <th class="border border-gray-300 px-4 py-2">Type</th>
                            <th class="border border-gray-300 px-4 py-2">Created</th>
                            <th class="border border-gray-300 px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                                <th class="border border-gray-300 px-4 py-2"></th>
                            </tr>

                    </tbody>
                </table>

            </div>
        </div>
</x-app-layout>
