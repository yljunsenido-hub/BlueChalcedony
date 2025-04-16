<x-app-layout>
    <x-slot name="header">
        
        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-1">
            <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
                Marketing Poster
            </div>

            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-1 mb-3">
                <div class="flex-1 text-left pl-40">
                    <a href="/general" class="text-yellow-300 hover:text-white">
                        General Posters
                    </a>
                </div>
                <div class="flex-1 text-center">
                    <a href="/featured" class="text-yellow-300 hover:text-white">
                        Featured Posters
                    </a>
                </div>
                <div class="flex-1 text-right pr-40">
                    <a href="/admin" class="text-yellow-300 hover:text-white">
                        Admin Posters
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Description</th>
                            <th class="border border-gray-300 px-4 py-2">Poster</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
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
