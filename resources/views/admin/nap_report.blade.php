<x-app-layout>
    <x-slot name="header">
        <!-- NAP Report Section -->
        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
            <div class="bg-blue-900 p-3 text-white text-xl text-center rounded-t-lg">
                NAP REPORT
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">UM</th>
                            <th class="border border-gray-300 px-4 py-2">AG</th>
                            <th class="border border-gray-300 px-4 py-2">Policy Number</th>
                            <th class="border border-gray-300 px-4 py-2">Account Type</th>
                            <th class="border border-gray-300 px-4 py-2">Contract Type Code</th>
                            <th class="border border-gray-300 px-4 py-2">Type Desc</th>
                            <th class="border border-gray-300 px-4 py-2">Transaction Date</th>
                            <th class="border border-gray-300 px-4 py-2">Temp Receipt Date</th>
                            <th class="border border-gray-300 px-4 py-2">Agent Code</th>
                            <th class="border border-gray-300 px-4 py-2">Agent Name</th>
                            <th class="border border-gray-300 px-4 py-2">SUCode</th>
                            <th class="border border-gray-300 px-4 py-2">Branch Name</th>
                            <th class="border border-gray-300 px-4 py-2">API</th>
                            <th class="border border-gray-300 px-4 py-2">CCCredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($napPosts as $napPost)
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->UM }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->AG }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Policy_number }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Account_type }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Contract_type_code }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Type_desc }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Transaction_date }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Temp_receipt_date }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Agent_code }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Agent_name }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->SUCode }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->Branch_name }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->API }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $napPost->CCCredit }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination Links -->
                <div class="p-4">
                    {{-- Ensure pagination controls are displayed --}}
                    {{ $napPosts->links() }}
                </div>
            </div>
        </div>
</x-app-layout>
