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
      
      <!-- Recruiter Field -->
      <div class="flex items-center space-x-4">
        <label for="recruiter" class="w-1/3 text-sm font-semibold text-gray-700">Recruiter:</label>
        <input type="text" id="recruiter" name="recruiter" class="w-2/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
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

      <!-- Recruitment Date Field -->
      <div class="flex items-center space-x-4">
        <label for="recruitment-date" class="w-1/3 text-sm font-semibold text-gray-700">Recruitment Date:</label>
        <input type="date" id="recruitment-date" name="recruitment-date" class="w-2/3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <!-- Submit Button -->
      <div class="flex items-center space-x-4">
        <button type="submit" class="w-full px-4 py-2 bg-blue-900 text-white font-semibold rounded-md hover:text-blue-900 hover:bg-blue-100 border border-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
          Create Recruit
        </button>
      </div>

    </div>
  </form>
</div>

        

            </div>
        </div>
</x-app-layout>
