<x-app-layout>
    <x-slot name="header">

        <div class="max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-3">
            <div class="text-blue-900 text-4xl font-bold rounded-lg p-2 pl-1">
                Create New Event
            </div>

            <div class="bg-gray-400 text-white shadow-lg p-1 rounded-sm mb-3"></div>
            
            <div class="flex justify-between items-center bg-blue-900 text-white shadow-lg rounded-lg p-2 mb-3">
                <div class="flex-1 text-left">
                    <a href="/admin/event_maintenance" class="bg-yellow-400 hover:bg-white text-blue-900 font-bold py-1 px-2 rounded-md shadow-md transition duration-100 ease-in-out">
                        Back to List
                    </a>
                </div>
            </div>

            <!-- Form -->
<div class="p-3 bg-white rounded-md shadow-md text-gray-600">
    <form action="/create-unit" method="POST">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div class="space-y-4">
                <div>
                    <label for="title" class="block font-semibold">Title:</label>
                    <input type="text" id="title" name="title" class="w-full border-gray-300 p-2 rounded" required>
                </div>

                <div>
                    <label for="guest" class="block font-semibold">Guest/Intro:</label>
                    <input type="text" id="guest" name="guest" class="w-full border-gray-300 p-2 rounded">
                </div>

                <div>
                    <label for="start_date" class="block font-semibold">Start Date:</label>
                    <input type="date" id="start_date" name="start_date" class="w-full border-gray-300 p-2 rounded" required>
                </div>

                <div>
                    <label for="start_time" class="block font-semibold">Start Time:</label>
                    <input type="time" id="start_time" name="start_time" class="w-full border-gray-300 p-2 rounded" required>
                </div>

                <div>
                    <label for="end_date" class="block font-semibold">End Date:</label>
                    <input type="date" id="end_date" name="end_date" class="w-full border-gray-300 p-2 rounded" required>
                </div>

                <div>
                    <label for="end_time" class="block font-semibold">End Time:</label>
                    <input type="time" id="end_time" name="end_time" class="w-full border-gray-300 p-2 rounded" required>
                </div>

                <div>
                    <label for="location" class="block font-semibold">Location:</label>
                    <input type="text" id="location" name="location" class="w-full border-gray-300 p-2 rounded" required>
                </div>

                <div>
                    <label for="event_type" class="block font-semibold">Event Type:</label>
                    <select id="event_type" name="event_type" class="w-full border-gray-300 p-2 rounded" required>
                        <option value="">Select</option>
                        <option value="Public">Public</option>
                        <option value="Branch">Branch</option>
                        <option value="Unit">Unit</option>
                        <option value="SubUnit">SubUnit</option>
                    </select>
                </div>

                <div>
                    <label class="block font-semibold mb-1">Required Event:</label>
                    <div class="flex space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="required_event" value="Yes" class="peer hidden" required>
                            <span class="px-4 py-2 border rounded cursor-pointer peer-checked:bg-blue-600 peer-checked:text-white">Yes</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="required_event" value="No" class="peer hidden">
                            <span class="px-4 py-2 border rounded cursor-pointer peer-checked:bg-blue-600 peer-checked:text-white">No</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label for="registration_end" class="block font-semibold">Registration Ends on:</label>
                    <input type="date" id="registration_end_date" name="registration_end_date" class="w-full border-gray-300 p-2 rounded" required>
                    <input type="time" id="registration_end_time" name="registration_end_time" class="w-full border-gray-300 p-2 rounded" required>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <div>
                    <label for="time_rate" class="block font-semibold">Time Rate for Attendance:</label>
                    <input type="text" id="time_rate" name="time_rate" class="w-full border-gray-300 p-2 rounded">
                </div>

                <div>
                    <label for="registration_email_instruction" class="block font-semibold">Registration Email Instruction:</label>
                    <textarea id="registration_email_instruction" name="registration_email_instruction" class="w-full border-gray-300 p-2 rounded" rows="4"></textarea>
                </div>

                <div>
                    <label for="public_message" class="block font-semibold">Public Message:</label>
                    <textarea id="public_message" name="public_message" class="w-full border-gray-300 p-2 rounded" rows="4"></textarea>
                </div>

                <div>
                    <label for="status" class="block font-semibold">Status:</label>
                    <select id="status" name="status" class="w-full border-gray-300 p-2 rounded" required>
                        <option value="">Select</option>
                        <option value="Active">Active</option>
                        <option value="Cancelled">Cancelled</option>
                        <option value="Postponed">Postponed</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Submit button -->
        <div class="flex justify-end mt-6">
            <button type="submit" class="text-sm px-2 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Create Event</button>
        </div>

    </form>
</div>

</x-app-layout>