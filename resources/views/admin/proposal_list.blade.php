<x-app-layout>
    <x-slot name="header">
        
        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg pb-1">
            <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
                Proposal List
            </div>

            <div class="bg-blue-900 text-white shadow-lg rounded-lg p-1 mb-3 pl-2 ">
                Proposal
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Age</th>
                            <th class="border border-gray-300 px-4 py-2">Plan</th>
                            <th class="border border-gray-300 px-4 py-2">Term</th>
                            <th class="border border-gray-300 px-4 py-2">Premium</th>
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
