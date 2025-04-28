<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3 pb-4">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Poster Maintenance
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/poster_maintenance" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        ← Back
                    </a>
                </div>
            </div>

<div class="border-t border-gray-200 mt-4 pt-4 flex justify-between">
    <!-- Left side: Item and Upload Fields -->
<div class="w-1/2 p-6 bg-white rounded-md shadow-md">
    <!-- Item and Value Fields in a row -->
    <div class="flex mb-4 justify-between">
        <div class="text-left font-semibold w-1/3">Item</div>
        <div class="text-left font-semibold w-2/3">Value</div>
    </div>

    <!-- Template selection in a row -->
    <div class="flex mb-5 justify-between">
        <div class="w-1/3">
            <label for="template" class="block text-lg font-medium">Template</label>
        </div>
        <div class="w-2/3">
            <select id="template" class="border border-gray-300 rounded p-2 w-full">
                <option>Select Template</option>
            </select>
        </div>
    </div>

    <!-- Template for your unit (BLUE CHALCEDONY DIRECT)? and the checkbox -->
    <div class="flex items-center mb-5 justify-between">
        <div class="w-1/2">
            <label for="unit-template" class="block text-lg font-medium">
                Template for your unit <br>
                <span class="text-sm">(BLUE CHALCEDONY DIRECT)?</span>
            </label>
        </div>
        <div class="w-2/3 flex justify-end">
            <label class="inline-flex items-center mt-1 ">
                <input type="checkbox" id="unit-template" class="form-checkbox h-5 w-5 text-blue-500">
                <span class="ml-2">Yes</span>
            </label>
        </div>
    </div>

    <!-- Featured Template and the checkbox -->
    <div class="flex items-center mb-4 justify-between">
        <div class="w-1/3">
            <label for="featured-template" class="block text-lg font-medium">Featured Template</label>
        </div>
        <div class="w-2/3 flex justify-end">
            <label class="inline-flex items-center mt-1">
                <input type="checkbox" id="featured-template" class="form-checkbox h-5 w-5 text-blue-500">
                <span class="ml-2">Yes</span>
            </label>
        </div>
    </div>

    <!-- Poster Title and Input Field aligned horizontally -->
    <div class="flex mb-4 justify-between">
        <div class="w-1/3">
            <label for="poster-title" class="block text-lg font-medium">Poster Title</label>
        </div>
        <div class="w-2/3">
            <input type="text" id="poster-title" class="block w-full mt-1 rounded border border-gray-300 py-1 px-2 focus:outline-none focus:border-blue-500">
        </div>
    </div>

    <!-- Description and Textarea Field aligned horizontally -->
    <div class="flex mb-4 justify-between">
        <div class="w-1/3">
            <label for="description" class="block text-lg font-medium">Description</label>
        </div>
        <div class="w-2/3">
            <textarea id="description" class="block w-full mt-1 rounded border border-gray-300 py-1 px-2 focus:outline-none focus:border-blue-500 h-32" style="resize: none;"></textarea>
        </div>
    </div>

    <!-- File Inputs and Upload Buttons -->
    <tr class="border-t border-gray-200">
        <td class="py-2">Preview (JPG)</td>
        <td class="py-2">
            <div class="flex items-center">
                <input class="border border-gray-300 rounded p-2 w-3/4 mt-1" type="file"/>
                <button class="bg-green-500 text-white rounded px-2 py-1 ml-11">Upload</button>
            </div>
        </td>
    </tr>
    <tr class="border-t border-gray-200">
        <td class="py-2">Foreground (PNG)</td>
        <td class="py-2">
        <div class="flex items-center ">
                <input class="border border-gray-300 rounded p-2 w-3/4 mt-1" type="file"/>
                <button class="bg-green-500 text-white rounded px-2 py-1 ml-11">Upload</button>
            </div>
        </td>
    </tr>
    <tr class="border-t border-gray-200">
        <td class="py-2">Background (JPG)</td>
        <td class="py-2">
        <div class="flex items-center ">
                <input class="border border-gray-300 rounded p-2 w-3/4 mt-1" type="file"/>
                <button class="bg-green-500 text-white rounded px-2 py-1 ml-11">Upload</button>
            </div>
        </td>
    </tr>
    <tr class="border-t border-gray-200">
        <td class="py-2">Name Font (TTF or OTF)</td>
        <td class="py-2">
        <div class="flex items-center ">
                <input class="border border-gray-300 rounded p-2 w-3/4 mt-1" type="file"/>
                <button class="bg-green-500 text-white rounded px-2 py-1 ml-11">Upload</button>
            </div>
        </td>
    </tr>
    <tr class="border-t border-gray-200">
        <td class="py-2">Date Font (TTF or OTF)</td>
        <td class="py-2">
        <div class="flex items-center ">
                <input class="border border-gray-300 rounded p-2 w-3/4 mt-1" type="file"/>
                <button class="bg-green-500 text-white rounded px-2 py-1 ml-11">Upload</button>
            </div>
        </td>
    </tr>
    <tr class="border-t border-gray-200">
        <td class="py-2">Unit Font (TTF or OTF)</td>
        <td class="py-2">
        <div class="flex items-center ">
                <input class="border border-gray-300 rounded p-2 w-3/4 mt-1" type="file"/>
                <button class="bg-green-500 text-white rounded px-2 py-1 ml-11">Upload</button>
            </div>
        </td>
    </tr>
    <tr class="border-t border-gray-200">
        <td class="py-2">Custom Text Font (TTF or OTF)</td>
        <td class="py-2">
        <div class="flex items-center ">
                <input class="border border-gray-300 rounded p-2 w-3/4 mt-1" type="file"/>
                <button class="bg-green-500 text-white rounded px-2 py-1 ml-11">Upload</button>
            </div>
        </td>
    </tr>
    <tr class="border-t border-gray-200">
        <td class="py-2">Custom Text Font 2 (TTF or OTF)</td>
        <td class="py-2">
        <div class="flex items-center">
                <input class="border border-gray-300 rounded p-2 w-3/4 mt-1" type="file"/>
                <button class="bg-green-500 text-white rounded px-2 py-1 ml-11">Upload</button>
            </div>
        </td>
    </tr>
</div>


    <!-- Right side: Preview -->
    <div class="w-1/2 p-6 bg-white rounded-md shadow-md ml-4">
        <h2 class="text-2xl font-semibold mb-4">Preview</h2>
        <div class="flex flex-col space-y-2 items-center">
            <img alt="Template preview 1" class="w-32 h-32" src="https://placehold.co/128x128"/>
        </div>
    </div>
</div>


<!-- Action Buttons Section -->
<div class="mt-4 flex justify-end space-x-4">
    <button class="bg-blue-500 text-white rounded px-4 py-2">Render</button>
    <button class="bg-green-500 text-white rounded px-4 py-2">Preview &amp; Create</button>
</div>

</x-app-layout>
