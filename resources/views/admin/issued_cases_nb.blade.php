<x-app-layout>
    <x-slot name="header">
        <!-- NAP Report Section -->
        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-1">
            <div class="bg-blue-900 text-white text-3xl font-bold rounded-lg p-2 pl-3 mt-2 mb-3q">
                Team Issued Cases
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Agent</th>
                            <th class="border border-gray-300 px-4 py-2">Unit</th>
                            <th class="border border-gray-300 px-4 py-2">Sub-Unit</th>
                            <th class="border border-gray-300 px-4 py-2">Client Name</th>
                            <th class="border border-gray-300 px-4 py-2">Policy No.</th>
                            <th class="border border-gray-300 px-4 py-2">APE</th>
                            <th class="border border-gray-300 px-4 py-2">Issued Date</th>
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

                <!-- Pagination Links -->
                <div class="p-4">
                    {{-- Ensure pagination controls are displayed --}}
                </div>
            </div>
        </div>
</x-app-layout>
