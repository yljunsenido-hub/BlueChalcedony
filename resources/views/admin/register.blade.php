<x-app-layout>
    <form method="POST" action="{{ route('admin.register.store') }}">
        @csrf

        Sampleeeeee
        <!-- Agent Code -->
        <div class="mt-4">
            <x-input-label for="agent_code" :value="__('Agent Code')" />
            <x-text-input id="agent_code" class="block mt-1 w-full" type="text" name="agent_code" :value="old('agent_code')" required autofocus autocomplete="agent_code" />
            <x-input-error :messages="$errors->get('agent_code')" class="mt-2" />
        </div>

        <!-- Recruiter Code -->
        <div class="mt-4">
            <x-input-label for="recruiter_code" :value="__('Recruiter Code')" />
            <x-text-input id="recruiter_code" class="block mt-1 w-full" type="text" name="recruiter_code" :value="old('recruiter_code')" />
            <x-input-error :messages="$errors->get('recruiter_code')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
             <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Role</label>
             <select id="role" name="role" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                 <option value="" disabled selected class="text-gray-400"></option>
                 <option value="admin">Admin</option>
                 <option value="agent">Agent</option>
                 <option value="unit_manager">Unit Manager</option>
                 <option value="branch_manager">Unit Manager Aspirant</option>
                 <option value="assistant_unit_manager">Assistant Unit Manager</option>
                 <option value="financial_advisor">Financial Advisor</option>
                 <option value="unit_operations">Unit Operations</option>
                 <option value="branch_manager">Branch Manager</option>
                 <option value="senior_assistant_unit_manager">Senior Assistant Unit Manager</option>
                 <option value="branch_manager_operations">Branch Manager Operations</option>
                 <option value="branch_nb_officer">Branch NB Officer</option>
                 <option value="junior_unit_manager">Junior Unit Manager</option>
             </select>
         </div>
                    
        <!-- Branch -->
        <div class="mt-4">
             <label for="branch" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Branch</label>
             <select id="branch" name="branch" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                 <option value="" disabled selected class="text-gray-400"></option>
                 <option value="blue_chalcedony_quartz_branch">BLUE CHALCEDONY QUARTZ BRANCH</option>
             </select>
         </div>

         <!-- Unit -->
         <div class="mt-4">
             <label for="unit" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Unit</label>
             <select id="unit" name="unit" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                 <option value="" disabled selected class="text-gray-400"></option>
                 <option value="blue_chalcedony_direct">BLUE CHALCEDONY DIRECT</option>
                 <option value="blue_royals">BLUE ROYALS</option>
                 <option value="infinity_quest">INFINITY QUEST</option>
                 <option value="golden_chalcedony">GOLDEN CHALCEDONY</option>
                 <option value="chalcedony_heart">CHALCEDONY HEART</option>
                 <option value="chalcedony_phoenix">CHALCEDONY PHOENIX</option>
                 <option value="chalcedony_supreme">CHALCEDONY SUPREME</option>
                 <option value="chalcedony_elites">CHALCEDONY ELITES</option>
                 <option value="chalcedony_gems">CHALCEDONY GEMS</option>
                 <option value="iceberg_solutions_inc">ICEBERG SOLUTIONS INC</option>
                 <option value="chalcedony_archers">CHALCEDONY ARCHERS</option>
             </select>
         </div>

        <!-- Sub Unit -->
        <div class="mt-4">
            <label for="sub_unit" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Sub Unit</label>
            <select id="sub_unit" name="sub_unit" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="" disabled selected class="text-gray-400">Select Sub-Unit</option>
            </select>
        </div>

        <script>
             const unitSelect = document.getElementById('unit');
             const subunitSelect = document.getElementById('sub_unit');
 
             unitSelect.addEventListener('change', function () {
                 const selectedUnit = this.value;
                 subunitSelect.innerHTML = '<option value="" disabled selected class="text-gray-400">Loading...</option>';
 
                 if (selectedUnit) {
                     fetch(`/admin/register/${selectedUnit}`)
                         .then(response => response.json())
                         .then(data => {
                             subunitSelect.innerHTML = '<option value="" disabled selected class="text-gray-400">Select Sub-Unit</option>';
                             data.forEach(sub => {
                                 const option = document.createElement('option');
                                 option.value = sub.id;
                                 option.value = sub.name;
                                 option.textContent = sub.name;
                                 subunitSelect.appendChild(option);
                             });
                         });
                 }
             });
         </script>

            <!-- Bottom Section (Full Width) -->
            <div class="mt-6">
                <!-- Password -->
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <!-- Confirm Password -->
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="mt-4" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <!-- Name -->
                <x-input-label for="name" :value="__('Name')" class="mt-4" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Form Buttons -->
            <div class="flex items-center justify-end mt-6">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            <x-primary-button class="ms-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
