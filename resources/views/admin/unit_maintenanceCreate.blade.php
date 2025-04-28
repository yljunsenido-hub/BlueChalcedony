<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Unit Maintenance Create
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/unit_maintenance" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        Back
                    </a>
                </div>
            </div>

            <div class="p-3 bg-white rounded-md shadow-md">
                <form action="/create-unit" method="POST">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="officer-code">Officer Code</label>
                        <input type="text" id="officer-code" required class="mt-1 block w-1/3 h-9 border border-gray-400 rounded-md shadow-sm p-2" placeholder="Enter Officer Code">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="unit-name">Unit Name</label>
                        <input type="text" id="unit-name" required class="mt-1 block w-1/3 h-9 border border-gray-400 rounded-md shadow-sm p-2" placeholder="Enter Unit Name">
                    </div>
                    <div class="mb-1">
                        <label class="block text-sm font-medium text-gray-700" for="promotion-date">Promotion Date</label>
                        <input type="date" id="promotion-date" required class="mt-1 block w-1/3 h-9 border border-gray-400 rounded-md shadow-sm p-2">
                    </div>
                </form>
            </div>

                <div class="flex justify-end mt-3">
                            <button type="submit" class="px-2 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Create New Unit</button>
                        </div>
            </div>

</x-app-layout>