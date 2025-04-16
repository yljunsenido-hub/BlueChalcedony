<x-app-layout>
    <x-slot name="header">
        
        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-1">
            <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-3">
                Proposal Search
            </div>

            <div class="bg-white flex space-x-6">
        <div class="bg-white p-3 rounded-lg shadow-lg flex-1 border-2 border-slate-300 mb-7 ">
            <div class="bg-blue-900 p-1 rounded-md mb-4">
                <h2 class="text-md text-yellow-300 font-semibold ml-2">Client Information</h2>
            </div>
                
            <div class="flex items-center mb-4">
                <label for="client-name" class="block text-md font-medium text-gray-700 w-1/4 ml-5 mt-3">Name:</label>
                <input type="text" id="client-name" placeholder="Client's Name" class="mt-3 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
                
                <div class="flex items-center mb-4">
                <label for="client-email" class="block text-dm font-medium text-gray-700 w-1/4 ml-5 mt-3">Email:</label>
                <input type="email" id="client-email" placeholder="Client's Email" class="mt-3 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
                
            <div class="flex items-center mb-4">
                <label for="client-contact" class="block text-md font-medium text-gray-700 w-1/4 ml-5 mt-3">Contact Number:</label>
                <input type="tel" id="client-contact" placeholder="Contact No." class="mt-3 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
        </div>

        <div class="bg-white p-3 rounded-lg shadow-lg flex-1 border-2 border-slate-300 mb-7">
            <div class="bg-blue-900 p-1 rounded-md mb-4">
                <h2 class="text-md text-yellow-300 font-semibold ml-2">Proposal Information</h2>
            </div>
                
            <div class="flex items-center mb-4">
                <label for="client-age" class="block text-md font-medium text-gray-700 w-1/4 ml-6 mt-3">Age:</label>
                <select id="client-age" class="mt-3 block w-2/3 border border-gray-300 rounded-md p-2">
                    <option value="" disabled selected>Select Age</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
                
            <div class="flex items-center mb-4">
                <label for="min-budget" class="block text-md font-medium text-gray-700 w-1/4 ml-6 mt-3">Minimum Budget:</label>
                <input type="text" id="min-budget" placeholder="Minimum Budget" class="mt-3 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
                
            <div class="flex items-center mb-4">
                <label for="max-budget" class="block text-md font-medium text-gray-700 w-1/4 ml-6 mt-3">Maximum Budget:</label>
                <input type="text" id="max-budget" placeholder="Maximum Budget" class="mt-3 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
        </div>  
    </div>

        <div class=" rounded-lg flex justify-center  ">
            <button type="button" class="mb-2 w-full h-9 text-md text-white bg-blue-700 hover:bg-blue-800 font-normal rounded-lg">Search</button>
        </div>

    <div class="p-3 border border-gray-200 font-medium mt-3 mb-2 text-blue-900 p-4 bg-white rounded-md shadow-md">
        <p>Sample Proposal</p>
        
            <table class="min-w-full bg-white border-2 border-gray-300 mt-4">
                <thead>
                    <tr class="bg-gray-200 text-gray-500 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 border-gray-400 border-r border-b text-left">ID</th>
                        <th class="py-3 px-6 border-gray-400 border-r border-b text-left">Product</th>
                        <th class="py-3 px-6 border-gray-400 border-r border-b text-left">Term</th>
                        <th class="py-3 px-6 border-gray-400 border-r border-b text-left">Premium</th>
                        <th class="py-3 px-6 border-gray-400 border-r border-b text-left">Sum Assured</th>
                        <th class="py-3 px-6 border-gray-400 border-r border-b text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-semibold">
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6 border border-r border-b"></td>
                        <td class="py-3 px-6 border border-r border-b"></td>
                        <td class="py-3 px-6 border border-r border-b"></td>
                        <td class="py-3 px-6 border border-r border-b"></td>
                        <td class="py-3 px-6 border border-r border-b"></td>
                        <td class="py-3 px-6 border border-r border-b"></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

                <!-- Pagination Links -->
                <div class="p-4">
                    {{-- Ensure pagination controls are displayed --}}
                </div>
            </div>
        </div>
</x-app-layout>
