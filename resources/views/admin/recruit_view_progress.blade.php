<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-3">

        <!-- Policies Issued Report -->
        <div class="text-blue-900 text-4xl font-bold rounded-lg mt-2 mb-2">
            Recruitment Progress
        </div>

        <!-- divider -->    
        <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>

        <div class="text-blue-900 text-md font-bold rounded-lg mt-2 mb-2">
            View Progress
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
            <p>Name:</p>
            <p>Recruiter:</p>
            <p>Team (Unit/Sub-unit):</p>
            <p>Email:</p>
            <p>Status:</p>
            <p>Recruit URL:</p>
        </div>

        <!-- Middle Column: Inserted Data -->
        <div class="text-left space-y-1">
            <p>[Insert Name]</p>
            <p>[Insert Recruiter]</p>
            <p>[Insert Team]</p>
            <p>[Insert Email]</p>
            <p>[Insert Status]</p>
            <p><a href="[Insert URL]" class="text-blue-500 underline">View</a></p>
        </div>

        <!-- Right Column: Completion Rate -->
        <div class="text-right">
            <p class="text-lg font-bold">Completion Rate:</p>
            <p class="text-xl">[Insert %]</p>
        </div>
        </div>


        <!-- Container -->
        <div class="container mx-auto rounded-md shadow-sm bg-white border pl-3 pr-3 pt-3 flex flex-col space-y-5">
        
        <!-- Table -->
        <div class="overflow-x-auto px-5 bg-white-100 p-3 rounded-l rounded-r shadow-md mb-5 pb-5 pt-5">
                <table id="dataTable" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Steps</th>
                        <th class="border border-gray-300 w-36">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex items-start justify-between w-full">
                                <span class="font-medium">Proof of Tin</span>
                                
                                <!-- Toggle Button -->
                                <button 
                                type="button" 
                                onclick="const info = this.closest('td').querySelector('.tin-info'); info.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180')"
                                class="text-gray-600 hover:text-black focus:outline-none transition-transform duration-200"
                                aria-label="Toggle Info">
                                
                                <!-- Chevron Icon -->
                                <svg class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                </button>
                            </div>

                            <!-- Hidden Info -->
                            <div class="mt-2 text-sm text-gray-700 hidden tin-info">
                                (Proof of TIN / TIN ID / BIR 2316 with stamp and signature)<br>
                                If TIN ID is used as a Government-issued ID, it cannot be used as Proof of TIN.
                            </div>
                            </td>
                            <td class="py-3 px-2 space-x-2 w-20">
                                <!-- Upload Proof -->
<!-- Upload Proof -->
<a href="javascript:void(0);"
   class="pt-2 pb-2 pl-1 bg-blue-500 text-white rounded-md hover:bg-blue-700"
   title="Upload Proof"
   id="uploadProofBtn">
   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mr-1 mb-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 0L8 8m4-4l4 4" />
   </svg>
</a>

<!-- Modal -->
<div id="uploadModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-md w-1/3">
        <h2 class="text-xl font-semibold mb-4">Upload Photo - Proof of Tin</h2>
        
        <!-- File Upload Form -->
        <form id="uploadForm">
            <div class="mb-4">
                <label for="fileInput" class="block text-gray-700">Choose Photo: </label>
                <input type="file" id="fileInput" name="fileInput" class="mt-2 border border-gray-300 p-2 w-full" />
                <span id="fileName" class="text-gray-500 mt-2 block">No file chosen</span>
                <p id="errorMsg" class="text-red-500 text-sm hidden mt-1">Please choose a file to upload.</p>
            </div>
            <div class="flex justify-end space-x-2">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Upload</button>
                <button type="button" id="closeModalBtn" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-700">Close</button>
            </div>
        </form>
    </div>
</div>

<!-- Script to Handle Modal & File Validation -->
<script>
    const uploadProofBtn = document.getElementById('uploadProofBtn');
    const uploadModal = document.getElementById('uploadModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const fileInput = document.getElementById('fileInput');
    const fileName = document.getElementById('fileName');
    const errorMsg = document.getElementById('errorMsg');
    const uploadForm = document.getElementById('uploadForm');

    // Open Modal
    uploadProofBtn.addEventListener('click', function () {
        uploadModal.classList.remove('hidden');
        errorMsg.classList.add('hidden'); // Hide error when modal opens
    });

    // Close Modal
    closeModalBtn.addEventListener('click', function () {
        uploadModal.classList.add('hidden');
        fileInput.value = '';
        fileName.textContent = 'No file chosen';
        errorMsg.classList.add('hidden');
    });

    // Update file name display
    fileInput.addEventListener('change', function () {
        const file = fileInput.files[0];
        fileName.textContent = file ? file.name : 'No file chosen';
        if (file) errorMsg.classList.add('hidden'); // Hide error if file is selected
    });

    // Handle form submission
    uploadForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const file = fileInput.files[0];

        if (!file) {
            errorMsg.classList.remove('hidden');
            fileName.textContent = 'No file chosen';
        } else {
            errorMsg.classList.add('hidden');
            // TODO: Handle actual upload logic here, e.g., send the file via AJAX or form submit.
            alert("File is ready to upload: " + file.name);
            uploadModal.classList.add('hidden'); // Optionally close modal after upload
        }
    });
</script>

                            <!-- Approve -->
                            <a href=""
                            class="pt-2 pb-2 pl-1 bg-blue-500 text-white rounded-md hover:bg-blue-700"
                            title="Approve">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mr-1 mb-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            </a>

                            <!-- Add Remarks -->
<a href="javascript:void(0);" 
   id="openModalBtn"
   class="pt-2 pb-2 pl-1 pr-1 bg-blue-500 text-white rounded-md hover:bg-blue-700"
   title="Add Remarks">
   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mr-1 mb-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4.62-1.08L3 20l1.08-4.32A8.999 8.999 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
   </svg>
</a>

<!-- Modal Backdrop -->
<div id="modalBackdrop" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

<!-- Modal Box -->
<div id="modalBox" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-white p-6 rounded-md w-1/3 shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Add Remarks</h2>

        <form id="remarksForm">
            <!-- Textarea -->
            <div class="mb-4">
                <label for="remarksInput" class="block text-gray-700">Your Remarks:</label>
                <textarea id="remarksInput" name="remarksInput" rows="4" placeholder="Enter your remarks..."
                          class="mt-2 w-full border border-gray-300 p-2 rounded resize-none"></textarea>
                <p id="remarksError" class="text-red-500 text-sm hidden mt-1">Please enter some remarks.</p>
            </div>

            <!-- Button Group (Right-Aligned) -->
            <div class="flex justify-end space-x-2 mt-4">
                <button type="button" id="cancelModalBtn" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-700">Close</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Script -->
<script>
    const openBtn = document.getElementById('openModalBtn');
    const modalBox = document.getElementById('modalBox');
    const backdrop = document.getElementById('modalBackdrop');
    const cancelBtn = document.getElementById('cancelModalBtn');
    const remarksForm = document.getElementById('remarksForm');
    const remarksInput = document.getElementById('remarksInput');
    const remarksError = document.getElementById('remarksError');

    // Open Modal
    openBtn.addEventListener('click', () => {
        modalBox.classList.remove('hidden');
        backdrop.classList.remove('hidden');
        remarksError.classList.add('hidden'); // Reset error
    });

    // Close Modal
    cancelBtn.addEventListener('click', () => {
        modalBox.classList.add('hidden');
        backdrop.classList.add('hidden');
        remarksInput.value = '';
        remarksError.classList.add('hidden');
    });

    // Optional: Click outside to close
    backdrop.addEventListener('click', () => {
        modalBox.classList.add('hidden');
        backdrop.classList.add('hidden');
    });

    // Handle form submission
    remarksForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const value = remarksInput.value.trim();

        if (!value) {
            remarksError.classList.remove('hidden');
        } else {
            remarksError.classList.add('hidden');
            // ✅ You can process/save the remark here
            alert("Remarks saved: " + value);
            modalBox.classList.add('hidden');
            backdrop.classList.add('hidden');
            remarksInput.value = '';
        }
    });
</script>


                        </tr>
                        </tbody>
                    <tfoot>
                </table>
            </div>

                <!-- Pagination Links -->
                <div class="">
                    {{-- Ensure pagination controls are displayed --}}
                </div>
            </div>
        </div>
</x-app-layout>
