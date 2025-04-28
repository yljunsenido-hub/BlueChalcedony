<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Digital Card Maintenance
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/digital_card_maintenance" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        ← Back
                    </a>
                </div>
            </div>

            <!-- Agent Form Section -->
        <form id="agentForm" onsubmit="return validateForm()" class="bg-white p-3 rounded-lg shadow-md mt-3 ">

        <h4 class="text-l mb-5 font-bold text-green-600">ADD AGENT DETAIL</h4>
            
            <!-- Digital Card ID Input -->
            <div class="mb-4 mr-2">
                <div class="flex items-center space-x-4">
                    <!-- Label aligned to the left with margin to the right for spacing -->
                    <label for="digitalCardId" class="text-sm font-medium text-gray-700 mr-10">Digital Card ID:</label>
                    
                    <!-- Input aligned beside the label -->
                    <input type="text" id="digitalCardId" name="digitalCardId" required
                        class="mt-1 block flex-1 border border-gray-300 rounded-md p-2 text-left" />
                </div>
            </div>

            <!-- Agent Details Section -->
            <div class="mb-4 mr-2">
                <div class="flex items-center space-x-4">
                    <!-- Label aligned to the left with margin to the right for spacing -->
                    <label for="agentCode" class="text-sm font-medium text-gray-700 mr-24">Agent:</label>

                    <!-- Agent Code Input (aligned beside the label) -->
                    <input type="text" id="agentCode" name="agentCode" placeholder="Agent Code" required
                        class="flex-1 border border-gray-300 rounded-md p-2 text-left" />
                    
                    <!-- Agent Name Input (aligned beside the agent code input) -->
                    <input type="text" id="agentName" name="agentName" placeholder="Agent Name" required
                        class="flex-1 border border-gray-300 rounded-md p-2 text-left" />
                </div>
            </div>

    <!-- Form Buttons Section -->
    <div class="flex items-center justify-end mr-2">
        <button type="submit" class="bg-green-500 text-md text-white py-1 px-4 rounded-md hover:bg-green-600">
            Link
        </button>
        
    </div>
</form>
</div>

</x-app-layout>