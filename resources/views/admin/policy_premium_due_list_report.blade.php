<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-2">
        <!-- Policies Issued Report -->
        <div class="bg-blue-900 p-3 text-white text-xl text-center rounded-t-lg">
            POLICY PREMIUM DUE LIST REPORT
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Month Year</th>
                        <th class="border border-gray-300 px-4 py-2">Dates</th>
                        <th class="border border-gray-300 px-4 py-2">Servicing Agent</th>
                        <th class="border border-gray-300 px-4 py-2">Owner</th>
                        <th class="border border-gray-300 px-4 py-2">Policy Insured</th>
                        <th class="border border-gray-300 px-4 py-2">Policy Number</th>
                        <th class="border border-gray-300 px-4 py-2">Contract Status</th>
                        <th class="border border-gray-300 px-4 py-2">Premium Status</th>
                        <th class="border border-gray-300 px-4 py-2">Mode</th>
                        <th class="border border-gray-300 px-4 py-2">Plan Code</th>
                        <th class="border border-gray-300 px-4 py-2">Plan Description</th>
                        <th class="border border-gray-300 px-4 py-2">Effectivity Date</th>
                        <th class="border border-gray-300 px-4 py-2">Currency</th>
                        <th class="border border-gray-300 px-4 py-2">Sum Assured</th>
                        <th class="border border-gray-300 px-4 py-2">Modal Premium</th>
                        <th class="border border-gray-300 px-4 py-2">Due Date</th>
                        <th class="border border-gray-300 px-4 py-2">API</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($policyPremiumPosts as $policyPremiumPost)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Month_year }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Dates }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Servicing_agent }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Owner }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Policy_insured }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Policy_number }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Contract_status }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Premium_status }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Mode }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Plan_code }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Plan_description }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Effectivity_date }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Currency }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Sum_assured }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Modal_premium }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Due_date }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->API }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="p-4">
            {{-- Display pagination controls --}}
            {{ $policyPremiumPosts->links() }}
        </div>
    </div>
</x-app-layout>
