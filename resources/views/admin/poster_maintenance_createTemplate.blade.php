<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-4">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Poster Maintenance
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/poster_template_maintenance" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        ← Back
                    </a>
                </div>
            </div>

            <div class="flex h-full mt-4">

            <!-- Left Container (Template, Description, and Related Fields) -->
            <div class="w-full md:w-1/2 pr-8 flex flex-col h-full">
                <!-- Template Selection -->
                <div class="mb-6 p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm flex-grow">
                    <div class="mb-3">
                        <label for="template" class="block text-xl font-medium mb-3 ">Template</label>
                        <select id="template" class="block w-full mt-1 rounded border border-gray-300 py-1 px-2 focus:outline-none focus:border-blue-500">
                            <option>Select Template</option>
                        </select>
                    </div>

                    <div class="mb-3 flex items-center justify-center">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Preview" class="border border-gray-300 mt-1 " style="height: 150px; width: 200px;">
                    </div>

                    <!-- Template for Unit -->
                    <div class="mb-2">
                        <label for="unit-template" class="block text-lg font-medium">Template for your unit <br>(BLUE CHALCEDONY DIRECT)?</label>
                        <label class="inline-flex items-center mt-1">
                            <input type="checkbox" id="unit-template" class="form-checkbox h-5 w-5 text-blue-500">
                            <span class="ml-2">Yes</span>
                        </label>
                    </div>

                    <!-- Featured Template -->
                    <div class="mb-2">
                        <label for="featured-template" class="block text-lg font-medium">Featured Template</label>
                        <label class="inline-flex items-center mt-1">
                            <input type="checkbox" id="featured-template" class="form-checkbox h-5 w-5 text-blue-500">
                            <span class="ml-2">Yes</span>
                        </label>
                    </div>

                    <!-- Poster Title -->
                    <div class="mb-2">
                        <label for="poster-title" class="block text-lg font-medium">Poster Title</label>
                        <input type="text" id="poster-title" class="block w-full mt-1 rounded border border-gray-300 py-1 px-2 focus:outline-none focus:border-blue-500">
                    </div>

                    <!-- Description -->
                    <div class="">
                        <label for="description" class="block text-lg font-medium">Description</label>
                        <textarea id="description" class="block w-full mt-1 rounded border border-gray-300 py-1 px-2 focus:outline-none focus:border-blue-500 h-32" style="resize: none;"></textarea>
                    </div>
                </div>
            </div>

            <!-- Right Container (File Uploads & Action Buttons) -->
            <div class="w-full md:w-1/2 flex flex-col h-full">
                <!-- File Uploads Container -->
                <div class="p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm flex-grow">
                    <h2 class="text-xl font-medium mb-2 ">File Uploads</h2>

                    <div class="grid grid-cols-1 gap-4">
                        <!-- File Upload Item -->
                        <div class="flex flex-col mb-2 border-t border-gray-300">
                            <label for="preview" class="block text-lg font-medium mt-2">Preview (JPG)</label>
                            <div class="flex items-center mt-1">
                                <label class="block flex-grow">
                                    <input type="file" id="preview" class="hidden">
                                    <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                                    <span class="ml-2 text-gray-500">No file chosen</span>
                                </label>
                            </div>
                            <button class="bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded text-sm mt-4 w-20 ml-auto">Upload</button>
                        </div>

                        <div class="flex flex-col mb-2">
                            <label for="foreground" class="block text-lg font-medium">Foreground (PNG)</label>
                            <div class="flex items-center mt-1">
                                <label class="block flex-grow">
                                    <input type="file" id="foreground" class="hidden">
                                    <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                                    <span class="ml-2 text-gray-500">No file chosen</span>
                                </label>
                            </div>
                            <button class="bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded text-sm mt-4 w-20 ml-auto">Upload</button>
                        </div>

                        <div class="flex flex-col mb-2">
                            <label for="background" class="block text-lg font-medium">Background (JPG)</label>
                            <div class="flex items-center mt-1">
                                <label class="block flex-grow">
                                    <input type="file" id="background" class="hidden">
                                    <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                                    <span class="ml-2 text-gray-500">No file chosen</span>
                                </label>
                            </div>
                            <button class="bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded text-sm mt-4 w-20 ml-auto">Upload</button>
                        </div>

                        <div class="flex flex-col mb-2">
                            <label for="name-font" class="block text-lg font-medium">Name Font (TTF or OTF)</label>
                            <div class="flex items-center mt-1">
                                <label class="block flex-grow">
                                    <input type="file" id="name-font" class="hidden">
                                    <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                                    <span class="ml-2 text-gray-500">No file chosen</span>
                                </label>
                            </div>
                            <button class="bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded text-sm mt-4 w-20 ml-auto">Upload</button>
                        </div>

                        <div class="flex flex-col mb-2">
                            <label for="title-font" class="block text-lg font-medium">Title Font (TTF or OTF)</label>
                            <div class="flex items-center mt-1">
                                <label class="block flex-grow">
                                    <input type="file" id="title-font" class="hidden">
                                    <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                                    <span class="ml-2 text-gray-500">No file chosen</span>
                                </label>
                            </div>
                            <button class="bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded text-sm mt-4 w-20 ml-auto">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Action Buttons -->
                <div class="flex justify-end w-full space-x-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Render
                </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Preview & Create
                </button>
            </div>
</x-app-layout>
