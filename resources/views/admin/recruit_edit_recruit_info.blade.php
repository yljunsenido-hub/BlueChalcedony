<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-4">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Create Recruit Record
            </div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/recruit" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        ← Back
                    </a>
                </div>
            </div>

            <div class="flex p-4 bg-white rounded-lg shadow-md">
  <form action="#" method="POST" class="w-full">
    <div class="space-y-4 ml-2 mr-2">
      
      <!-- Status Field -->
      <div class="flex items-center space-x-4">
        <label for="recruiter" class="w-1/3 text-sm font-semibold text-gray-700">Status:</label>
        <select id="unit" name="unit" class="mt-1 block w-2/3 rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm">
                        <option value="" disabled selected class="text-gray-400"></option>
                        <option value="blue_chalcedony_direct">0 - Waiting</option>
                        <option value="blue_royals">1 - Abandoned</option>
                        <option value="infinity_quest">2 - Failed</option>
                        <option value="golden_chalcedony">3 - Passed / For Coding</option>
                        <option value="chalcedony_heart">4 - Coded</option>
                    </select>
        </div>

      <!-- Recruiter Field -->
      <div class="flex items-center space-x-4">
        <label for="recruiter" class="w-1/3 text-sm font-semibold text-gray-700">Recruiter:</label>
        <select id="unit" name="unit" class="mt-1 block w-2/3 rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm">
                        <option value="" disabled selected class="text-gray-400"></option>
                        <option value="blue_chalcedony_direct">Sample</option>
                    </select>
        </div>

      <!-- First Name Field -->
      <div class="flex items-center space-x-4">
        <label for="first-name" class="w-1/3 text-sm font-semibold text-gray-700">First Name:</label>
        <input type="text" id="first-name" name="first-name" class="w-2/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <!-- Middle Name Field -->
      <div class="flex items-center space-x-4">
        <label for="middle-name" class="w-1/3 text-sm font-semibold text-gray-700">Middle Name:</label>
        <input type="text" id="middle-name" name="middle-name" class="w-2/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
      </div>

      <!-- Last Name Field -->
      <div class="flex items-center space-x-4">
        <label for="last-name" class="w-1/3 text-sm font-semibold text-gray-700">Last Name:</label>
        <input type="text" id="last-name" name="last-name" class="w-2/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <!-- Email Field -->
      <div class="flex items-center space-x-4">
        <label for="email" class="w-1/3 text-sm font-semibold text-gray-700">Email:</label>
        <input type="email" id="email" name="email" class="w-2/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <!-- Mobile Field -->
      <div class="flex items-center space-x-4">
        <label for="mobile" class="w-1/3 text-sm font-semibold text-gray-700">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" class="w-2/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <!-- Recruiter Photo Field -->
      <div class="flex items-center space-x-4">
  <label for="fileInput" class="w-1/3 text-sm font-semibold text-gray-700">Recruiter Photo:</label>

  <div class="w-2/3">
    <div class="flex items-center space-x-4">
      <!-- Custom File Input Button -->
      <label
        for="fileInput"
        class="cursor-pointer px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-900 transition"
      >
        Choose File
      </label>

      <!-- File Name Display -->
      <span id="fileName" class="text-gray-500">No file chosen</span>
    </div>

    <!-- Hidden File Input -->
    <input 
      type="file" 
      id="fileInput" 
      name="fileInput" 
      class="hidden" 
      accept="image/*" 
      required
    />

    <!-- Error Message -->
    <p id="errorMsg" class="text-red-500 text-sm hidden mt-1">Please choose a file to upload.</p>
  </div>
</form>

<script>
  const fileInput = document.getElementById('fileInput');
  const fileNameDisplay = document.getElementById('fileName');
  const errorMsg = document.getElementById('errorMsg');

  fileInput.addEventListener('change', function () {
    if (fileInput.files.length > 0) {
      fileNameDisplay.textContent = fileInput.files[0].name;
      errorMsg.classList.add('hidden');
    } else {
      fileNameDisplay.textContent = 'No file chosen';
    }
  });

  // Optional: Add validation when submitting form
  document.getElementById('uploadForm').addEventListener('submit', function (e) {
    if (fileInput.files.length === 0) {
      e.preventDefault();
      errorMsg.classList.remove('hidden');
    }
  });
</script>
</div>

      <!-- Submit Button -->
      <div class="flex items-center space-x-4">
        <button type="submit" class="w-full px-4 py-2 bg-green-600 text-white font-semibold rounded-md hover:text-white hover:bg-green-700">
          Update Recruit Record
        </button>
      </div>

    </div>
  </form>
</div>

        

            </div>
        </div>
</x-app-layout>
