<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-3">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Poster Maintenance
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/agent_maintenance" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        ← Back
                    </a>
                </div>
            </div>

            <!-- Form Container -->
        <div class="bg-white rounded-md shadow-md p-3 mt-3">
            <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Left Column -->
        <div class="flex flex-col space-y-4">
            <!-- Agent Code -->
            <div>
                <label class="block text-gray-700 text-sm">Agent Code:</label>
                <input type="text" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Recruiter -->
            <div>
                <label class="block text-gray-700 text-sm">Recruiter:</label>
                <input type="text" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Role -->
            <div>
                <label class="block text-gray-700 text-sm">Role:</label>
                <select class="border border-gray-300 rounded p-2 w-full text-sm">
                    <option>Select Role</option>
                    <option>Financial Advisor</option>
                    <option>Manager</option>
                </select>
            </div>

            <!-- Branch -->
            <div>
                <label class="block text-gray-700 text-sm">Branch:</label>
                <select class="border border-gray-300 rounded p-2 w-full text-sm">
                    <option>Select Branch</option>
                </select>
            </div>

            <!-- Unit -->
            <div>
                <label class="block text-gray-700 text-sm">Unit:</label>
                <select class="border border-gray-300 rounded p-2 w-full text-sm">
                    <option>Select Unit</option>
                </select>
            </div>

            <!-- SubUnit -->
            <div>
                <label class="block text-gray-700 text-sm">SubUnit:</label>
                <select class="border border-gray-300 rounded p-2 w-full text-sm">
                    <option>Select SubUnit</option>
                </select>
            </div>
        </div>

        <!-- Right Column -->
        <div class="flex flex-col space-y-4">
            <!-- First Name -->
            <div>
                <label class="block text-gray-700 text-sm">First Name:</label>
                <input type="text" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Middle Name -->
            <div>
                <label class="block text-gray-700 text-sm">Middle Name:</label>
                <input type="text" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Last Name -->
            <div>
                <label class="block text-gray-700 text-sm">Last Name:</label>
                <input type="text" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Display Name -->
            <div>
                <label class="block text-gray-700 text-sm">Display Name:</label>
                <input type="text" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 text-sm">Email:</label>
                <input type="email" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Mobile -->
            <div>
                <label class="block text-gray-700 text-sm">Mobile:</label>
                <input type="text" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Coding Date -->
            <div>
                <label class="block text-gray-700 text-sm">Coding Date:</label>
                <input type="date" class="border border-gray-300 rounded p-2 w-full text-sm" />
            </div>

            <!-- Agent Status -->
            <div>
                <label class="block text-gray-700 text-sm">Agent Status:</label>
                <select class="border border-gray-300 rounded p-2 w-full text-sm">
                    <option>Active</option>
                    <option>Delisted</option>
                    <option>Operations</option>
                </select>
            </div>
            </form>
            </div>
            <!-- Submit Button -->
            <div class="col-span-2 flex justify-end text-center mt-4">
                <button type="submit" class="bg-green-500 text-white px-3 py-2 rounded text-sm">
                    Create Agent
                </button>
        </div>

</x-app-layout>