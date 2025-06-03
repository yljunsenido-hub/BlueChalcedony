<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-3">

        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            Recruitment Process Details
        </div>

        <!-- divider -->    
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <div class="text-blue-900 text-md font-bold rounded-lg mt-2 mb-2">
            Government Issued ID
        </div>

        <div class="flex justify-between items-center bg-blue-900 text-white shadow-sm rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/recruit" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        ← Back
                    </a>
                </div>
            </div>

        <div class="grid grid-cols-3 gap-4 items-start bg-gray-100 text-black shadow-lg rounded-md p-4 mb-3">
        <!-- Left Column: Labels -->
        <div class="text-left space-y-1 font-semibold">
            <p>Recruitment Process:</p>
            <p>Process Details:</p>
            <p>Description:</p>
        </div>

        <!-- Middle Column: Inserted Data -->
        <div class="text-left space-y-1">
            <p>[Insert Recruitment Process]</p>
            <p>[Insert Process Details]</p>
            <p>[Insert Description]</p>
        </div>
</div>
            

        <!-- Container -->
        <div class="container mx-auto rounded-md shadow-sm bg-white border pl-3 pr-3 pt-3 flex flex-col space-y-5">
        <!-- Show Entries and Search Section -->
        <div class="pt-1 px-2 flex items-center justify-between">
            <div class="flex items-center">
                <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                <select id="entries" class="border text-sm border-gray-300 rounded-md pl-2 px-5 py-1">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <div class="flex items-center">
            <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
            <input type="text" id="search" class="px-2 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
            </div>
            </div>

        <!-- Table -->
        <div class="overflow-x-auto px-5 bg-white-100 p-3 rounded-l rounded-r shadow-md mb-5 pb-5 pt-5">
                <table id="dataTable" class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 w-12 text-center">ID</th>
                            <th class="border border-gray-300 w-40 text-center">Recruit</th>
                            <th class="border border-gray-300 w-40 text-center">Recruiter</th>
                            <th class="border border-gray-300 w-20 text-center">Status</th>
                            <th class="border border-gray-300 w-40 text-center">Completion Date</th>
                            <th class="border border-gray-300 w-20 text-center">Remarks</th>
                            <th class="border border-gray-300 w-50 text-center">Action</th>
                        </tr>
                    </thead>
                <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                            <!-- Remarks Column -->
                                        <td class="border border-gray-300 w-50 pl-1 text-center">
                                            <!-- Add Remarks Button -->
                                            <a href="javascript:void(0);" 
                                            id="openModalBtn"
                                            class="pt-2 pb-2 pl-2 pr-1 bg-blue-500 text-white rounded-md hover:bg-blue-700 mr-2"
                                            title="Add Remarks">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4.62-1.08L3 20l1.08-4.32A8.999 8.999 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                            </a>

                                            <!-- View Remarks Button -->
                                            <a href="javascript:void(0);" 
                                            id="viewRemarksBtn"
                                            class="pt-2 pb-2 pl-2 pr-2 bg-green-500 text-white rounded-md hover:bg-green-700"
                                            title="View Remarks">
                                            <svg xmlns="http://www.w3.org/2000/svg" 
                                                    class="h-5 w-5 inline-block" 
                                                    fill="none" 
                                                    viewBox="0 0 24 24" 
                                                    stroke="currentColor" 
                                                    stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" 
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" 
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            </a>
                                        </td>

                                        <!-- Action Column -->
                                        <td class="p-1 pl-1 py-3 space-x-2 w-28 text-center">
                                            <!-- Upload Proof Button -->
                                            <a href="javascript:void(0);"
                                            class="pt-2 pb-2 pl-1 bg-blue-500 text-white rounded-md hover:bg-blue-700"
                                            title="Upload Proof"
                                            id="uploadProofBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mr-1 mb-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 0L8 8m4-4l4 4" />
                                                </svg>
                                            </a>
                                            <!-- Approve Button -->
                                            <a href=""
                                            class="pt-2 pb-2 pl-1 bg-green-500 text-white rounded-md hover:bg-green-700"
                                            title="Approve">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mr-1 mb-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            </a>
                                                <!-- View Progress Button -->
                                            <a href="javascript:void(0);"
                                            class="pt-2 pb-2 pl-1 pr-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600"
                                            title="View Progress">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mr-1 mb-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 3v18h18M9 17V9m4 8v-4m4 4V5" />
                                            </svg>
                                            </a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Upload Modal -->
                        <div id="uploadModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
                            <div class="bg-white p-6 rounded-md w-1/3">
                                <h2 class="text-xl font-semibold mb-4">Upload Photo - Proof of Tin</h2>
                                <form id="uploadForm">
                                    <input type="file" id="fileInput" class="block mb-3">
                                    <p id="fileName" class="text-sm text-gray-500 mb-3">No file chosen</p>
                                    <p id="errorMsg" class="text-red-500 text-sm hidden mb-3">Please select a file.</p>
                                    <div class="flex justify-end space-x-2">
                                        <button type="button" id="closeModalBtn" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-700">Cancel</button>
                                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Remarks Modal -->
                        <div id="modalBackdrop" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

                        <div id="modalBox" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                            <div class="bg-white p-6 rounded-md w-1/3 shadow-lg">
                                <h2 class="text-xl font-semibold mb-4" id="modalTitle">Add Remarks</h2>

                                <form id="remarksForm">
                                    <div class="mb-4">
                                        <label for="remarksInput" class="block text-gray-700">Your Remarks:</label>
                                        <textarea id="remarksInput" name="remarksInput" rows="4" placeholder="Enter your remarks..."
                                                class="mt-2 w-full border border-gray-300 p-2 rounded resize-none"></textarea>
                                        <p id="remarksError" class="text-red-500 text-sm hidden mt-1">Please enter some remarks.</p>
                                    </div>

                                    <div class="flex justify-end space-x-2 mt-4">
                                        <button type="button" id="cancelModalBtn" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-700">Close</button>
                                        <button type="submit" id="saveBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Scripts -->
                        <script>
                            // Upload Proof Script
                            const uploadProofBtn = document.getElementById('uploadProofBtn');
                            const uploadModal = document.getElementById('uploadModal');
                            const closeModalBtn = document.getElementById('closeModalBtn');
                            const fileInput = document.getElementById('fileInput');
                            const fileName = document.getElementById('fileName');
                            const errorMsg = document.getElementById('errorMsg');
                            const uploadForm = document.getElementById('uploadForm');

                            uploadProofBtn.addEventListener('click', function () {
                                uploadModal.classList.remove('hidden');
                                errorMsg.classList.add('hidden');
                            });

                            closeModalBtn.addEventListener('click', function () {
                                uploadModal.classList.add('hidden');
                                fileInput.value = '';
                                fileName.textContent = 'No file chosen';
                                errorMsg.classList.add('hidden');
                            });

                            fileInput.addEventListener('change', function () {
                                const file = fileInput.files[0];
                                fileName.textContent = file ? file.name : 'No file chosen';
                                if (file) errorMsg.classList.add('hidden');
                            });

                            uploadForm.addEventListener('submit', function (e) {
                                e.preventDefault();
                                const file = fileInput.files[0];
                                if (!file) {
                                    errorMsg.classList.remove('hidden');
                                    fileName.textContent = 'No file chosen';
                                } else {
                                    errorMsg.classList.add('hidden');
                                    alert("File is ready to upload: " + file.name);
                                    uploadModal.classList.add('hidden');
                                }
                            });

                            // Remarks Script
                            const openBtn = document.getElementById('openModalBtn');
                            const viewBtn = document.getElementById('viewRemarksBtn');
                            const modalBox = document.getElementById('modalBox');
                            const backdrop = document.getElementById('modalBackdrop');
                            const cancelBtn = document.getElementById('cancelModalBtn');
                            const remarksForm = document.getElementById('remarksForm');
                            const remarksInput = document.getElementById('remarksInput');
                            const remarksError = document.getElementById('remarksError');
                            const modalTitle = document.getElementById('modalTitle');
                            const saveBtn = document.getElementById('saveBtn');

                            let savedRemarks = "";

                            openBtn.addEventListener('click', () => {
                                modalTitle.textContent = "Add Remarks";
                                remarksInput.disabled = false;
                                saveBtn.style.display = "inline-block";
                                remarksInput.value = savedRemarks;
                                remarksError.classList.add('hidden');
                                modalBox.classList.remove('hidden');
                                backdrop.classList.remove('hidden');
                            });

                            viewBtn.addEventListener('click', () => {
                                modalTitle.textContent = "View Remarks";
                                remarksInput.value = savedRemarks || "No remarks available.";
                                remarksInput.disabled = true;
                                saveBtn.style.display = "none";
                                remarksError.classList.add('hidden');
                                modalBox.classList.remove('hidden');
                                backdrop.classList.remove('hidden');
                            });

                            cancelBtn.addEventListener('click', () => {
                                modalBox.classList.add('hidden');
                                backdrop.classList.add('hidden');
                                remarksInput.value = '';
                                remarksError.classList.add('hidden');
                            });

                            backdrop.addEventListener('click', () => {
                                modalBox.classList.add('hidden');
                                backdrop.classList.add('hidden');
                            });

                            remarksForm.addEventListener('submit', function (e) {
                                e.preventDefault();
                                const value = remarksInput.value.trim();
                                if (!value) {
                                    remarksError.classList.remove('hidden');
                                } else {
                                    remarksError.classList.add('hidden');
                                    savedRemarks = value;
                                    alert("Remarks saved: " + value);
                                    modalBox.classList.add('hidden');
                                    backdrop.classList.add('hidden');
                                    remarksInput.value = '';
                                }
                            });
                        </script>


                <!-- Pagination Links -->
                <div class="">
                    {{-- Ensure pagination controls are displayed --}}
                </div>
            </div>
        </div>
</x-app-layout>
