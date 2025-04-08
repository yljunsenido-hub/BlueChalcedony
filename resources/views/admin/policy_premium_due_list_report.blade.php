<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ Auth::user()->name }}
            </h2>
        </x-slot>

        <div class="">
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
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Month_year }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Dates }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Servicing_agent }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Owner }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Policy_insured }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Policy_number }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Contract_status }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Premium_status }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Mode }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Plan_code }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Plan_description }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Effectivity_date }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Currency }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Sum_assured }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Modal_premium }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->Due_date }}</th>
                        <th class="border border-gray-300 px-4 py-2">{{ $policyPremiumPost->API }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


</x-app-layout>