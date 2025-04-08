<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-10 text-gray-900 dark:text-gray-100 flex justify-center">
                    <div class="bg-white p-6 rounded-lg shadow-md w-96">
                        <h2 class="text-lg font-semibold mb-4">Upload Issued Report</h2>
                        <form action="{{url('/admin/issued_report')}}" method="POST" enctype="multipart/form-data">
                            @csrf    
                            <div class="mb-4">
                                <label for="file-upload" class="block text-sm font-medium text-gray-700">Choose a file</label>
                                <input type="file" id="file-upload" name="import-file" class="mt-1 block w-full text-sm text-gray-500 
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100" required>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
