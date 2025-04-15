<x-app-layout>
    <x-slot name="header">
        <!-- NAP Report Section -->
        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-1">
            <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
                New Business
            </div>

            <div class="bg-blue-900 text-white shadow-lg rounded-lg p-1 mb-3 pl-2 ">
                Agents Submission for Approval
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">First Name</th>
                            <th class="border border-gray-300 px-4 py-2">Last Name</th>
                            <th class="border border-gray-300 px-4 py-2">Date Submitted</th>
                            <th class="border border-gray-300 px-4 py-2">Application No.</th>
                            <th class="border border-gray-300 px-4 py-2">Policy No.</th>
                            <th class="border border-gray-300 px-4 py-2">Agent</th>
                            <th class="border border-gray-300 px-4 py-2">Status</th>
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
