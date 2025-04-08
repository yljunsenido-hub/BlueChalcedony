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
        POLICIES ISSUED REPORT
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">UM</th>
                    <th class="border border-gray-300 px-4 py-2">AG</th>
                    <th class="border border-gray-300 px-4 py-2">Policy Number</th>
                    <th class="border border-gray-300 px-4 py-2">Plan Code</th>
                    <th class="border border-gray-300 px-4 py-2">Currency</th>
                    <th class="border border-gray-300 px-4 py-2">Client Name</th>
                    <th class="border border-gray-300 px-4 py-2">First Issue Date</th>
                    <th class="border border-gray-300 px-4 py-2">Mode</th>
                    <th class="border border-gray-300 px-4 py-2">Modal Premium</th>
                    <th class="border border-gray-300 px-4 py-2">Sum Assured</th>
                    <th class="border border-gray-300 px-4 py-2">API</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->UM }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->AG }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->Policy_number }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->Plan_code }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->Currency }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->Client_name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->First_issued_date}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->Mode }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->Modal_premium }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->Sum_assured }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->API }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


    </x-app-layout>