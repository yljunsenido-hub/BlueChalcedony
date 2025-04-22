<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Sub-Unit Maintenance
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/#" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-3 rounded-md shadow-md transition duration-100 ease-in-out">
                        Create New Sub-Unit
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Unit</th>
                            <th class="border border-gray-300 px-4 py-2">Sub-Unit</th>
                            <th class="border border-gray-300 px-4 py-2">Officer</th>
                            <th class="border border-gray-300 px-4 py-2">Status</th>
                            <th class="border border-gray-300 px-4 py-2">Date Promoted</th>
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
                            </tr>

                    </tbody>
                </table>

            </div>
        </div>
</x-app-layout>
