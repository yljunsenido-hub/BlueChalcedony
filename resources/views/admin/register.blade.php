<x-app-layout>
    <div class="container bg-white shadow-lg rounded-xl p-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div>
                    <!-- First Name -->
                    <x-input-label for="firstname" :value="__('First Name')" />
                    <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />

                    <!-- Middle Name -->
                    <x-input-label for="middlename" :value="__('Middle Name')" class="mt-4" />
                    <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" required />
                    <x-input-error :messages="$errors->get('middlename')" class="mt-2" />

                    <!-- Last Name -->
                    <x-input-label for="lastname" :value="__('Last Name')" class="mt-4" />
                    <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />

                    <!-- Display Name -->
                    <x-input-label for="displayname" :value="__('Display Name (Set by Branch)')" class="mt-4" />
                    <x-text-input id="displayname" class="block mt-1 w-full" type="text" name="displayname" :value="old('displayname')" required />
                    <x-input-error :messages="$errors->get('displayname')" class="mt-2" />

                    <!-- Email -->
                    <x-input-label for="email" :value="__('Email')" class="mt-4" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <!-- Mobile -->
                    <x-input-label for="mobile" :value="__('Mobile')" class="mt-4" />
                    <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required />
                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />

                    <!-- Coding Date -->
                    <x-input-label for="codingdate" :value="__('Coding Date (YYYY-MM-DD)')" class="mt-4" />
                    <x-text-input id="codingdate" class="block mt-1 w-full" type="text" name="codingdate" :value="old('codingdate')" required />
                    <x-input-error :messages="$errors->get('codingdate')" class="mt-2" />
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Agent Code -->
                    <x-input-label for="agentcode" :value="__('Agent Code')" />
                    <x-text-input id="agentcode" class="block mt-1 w-full" type="text" name="agentcode" :value="old('agentcode')" required autofocus />
                    <x-input-error :messages="$errors->get('agentcode')" class="mt-2" />

                    <!-- Recruiter Code -->
                    <x-input-label for="recruitercode" :value="__('Recruiter Code')" class="mt-4" />
                    <x-text-input id="recruitercode" class="block mt-1 w-full" type="text" name="recruitercode" :value="old('recruitercode')" />
                    <x-input-error :messages="$errors->get('recruitercode')" class="mt-2" />

                    <!-- Role -->
                    <label for="role" class="block mt-4 text-sm font-medium text-gray-700 dark:text-gray-300">Role</label>
                    <select id="role" name="role" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm">
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

                    <!-- Branch -->
                    <label for="branch" class="block mt-4 text-sm font-medium text-gray-700 dark:text-gray-300">Branch</label>
                    <select id="branch" name="branch" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm">
                        <option value="" disabled selected class="text-gray-400"></option>
                        <option value="blue_chalcedony_quartz_branch">BLUE CHALCEDONY QUARTZ BRANCH</option>
                    </select>

                    <!-- Unit -->
                    <label for="unit" class="block mt-4 text-sm font-medium text-gray-700 dark:text-gray-300">Unit</label>
                    <select id="unit" name="unit" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm">
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

                    <!-- Sub Unit -->
                    <label for="subunit" class="block mt-4 text-sm font-medium text-gray-700 dark:text-gray-300">Sub Unit</label>
                    <select id="subunit" name="subunit" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm">
                        <option value="" disabled selected class="text-gray-400">Select Sub-Unit</option>
                    </select>

                    <!-- Agent Status -->
                    <label for="agentstatus" class="block mt-4 text-sm font-medium text-gray-700 dark:text-gray-300">Agent Status</label>
                    <select id="agentstatus" name="agentstatus" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm">
                        <option value="" disabled selected class="text-gray-400"></option>
                        <option value="active">ACTIVE</option>
                        <option value="delisted">DELISTED</option>
                        <option value="operations">OPERATIONS</option>
                    </select>
                </div>
            </div>

            <!-- Subunit Dynamic Script -->
            <script>
                const unitSelect = document.getElementById('unit');
                const subunitSelect = document.getElementById('subunit');

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
                <div class="relative">
                    <x-text-input id="password" class="block mt-1 w-full pr-10" type="password" name="password" required />
                    <button type="button" onclick="togglePassword('password', 'eye-icon')" class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Confirm Password -->
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="mt-4" />
            <div class="relative">
                <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10" type="password" name="password_confirmation" required />
                <button type="button" onclick="togglePassword('password_confirmation', 'eye-icon-confirm')" class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                    <svg id="eye-icon-confirm" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <!-- Name -->
                <x-input-label for="name" :value="__('Name')" class="mt-4" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <script>
                function togglePassword(inputId, iconId) {
                    const input = document.getElementById(inputId);
                    const icon = document.getElementById(iconId);

                    if (input.type === "password") {
                        input.type = "text";
                        icon.setAttribute("stroke", "#1f2937"); // darker when active
                    } else {
                        input.type = "password";
                        icon.setAttribute("stroke", "currentColor");
                    }
                }
            </script>

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
    </div>
</x-app-layout>
