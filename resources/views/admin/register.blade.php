<x-app-layout>
<<<<<<< HEAD
    <form method="POST" action="{{ route('admin.register.store') }}">
        @csrf

        <p>HAHAHHA</p>
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
=======
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
>>>>>>> 190ff8c9c648c0677d61e113ac30cf41a6df20a2

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

<<<<<<< HEAD
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
=======
                    <!-- Mobile -->
                    <x-input-label for="mobile" :value="__('Mobile')" class="mt-4" />
                    <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required />
                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />

                    <!-- Coding Date -->
                    <x-input-label for="codingdate" :value="__('Coding Date (YYYY-MM-DD)')" class="mt-4" />
                    <x-text-input id="codingdate" class="block mt-1 w-full" type="text" name="codingdate" :value="old('codingdate')" required />
                    <x-input-error :messages="$errors->get('codingdate')" class="mt-2" />
                </div>
>>>>>>> 190ff8c9c648c0677d61e113ac30cf41a6df20a2

                <!-- Right Column -->
                <div>
                    <!-- Agent Code -->
                    <x-input-label for="agentcode" :value="__('Agent Code')" />
                    <x-text-input id="agentcode" class="block mt-1 w-full" type="text" name="agentcode" :value="old('agentcode')" required autofocus />
                    <x-input-error :messages="$errors->get('agentcode')" class="mt-2" />

<<<<<<< HEAD
                if (selectedUnit) {
                    fetch(`/admin/register/${selectedUnit}`)
                        .then(response => response.json())
                        .then(data => {
                            subunitSelect.innerHTML = '<option value="" disabled selected class="text-gray-400">Select Sub-Unit</option>';
                            data.forEach(sub => {
                                const option = document.createElement('option');
                                option.value = sub.name;
                                option.textContent = sub.name;
                                subunitSelect.appendChild(option);
=======
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
>>>>>>> 190ff8c9c648c0677d61e113ac30cf41a6df20a2
                            });
                    }
                });
            </script>

<<<<<<< HEAD
        <!-- First Name -->
        <div class="mt-4">
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

            <!-- Recruitment -->
            @php $recruitmentOpen = request()->is('admin/recruitment/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $recruitmentOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Recruitment</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $recruitmentOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $recruitmentOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/branchoperation/upload-issued') ? 'bg-blue-600' : '' }}">Recruit</a>
                        <a href="{{ url('#') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/branchoperation/upload-nap') ? 'bg-blue-600' : '' }}">Recruitment Process</a>
                    </div>
                </div>
            </div>
                
            <!-- Appointments Section -->
            @php $appointmentsOpen = request()->is('admin/appointments/*'); @endphp
            <div class="relative group">
                <a href="{{ url('/admin/appointments') }}" data-role="admin"
                   class="w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $appointmentsOpen ? 'bg-blue-200/30' : '' }}">
                    <span>Appointments</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19l7-7-7-7"/>
                    </svg>      
                </a>
            </div>

            <!-- BCMS Maintenance Section -->
            @php $bcmsOpen = request()->is('admin/bcms/*'); @endphp
            <div class="relative group">
                <button data-role="admin" class="dropdown-toggle w-full py-2.5 px-4 flex justify-between items-center rounded text-left transition-colors duration-200 hover:bg-blue-200/20 {{ $bcmsOpen ? 'bg-blue-200/30' : '' }}">
                    <span>BCMS Maintenance</span>
                    <svg class="w-4 h-4 transition-transform duration-300 {{ $bcmsOpen ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top {{ $bcmsOpen ? 'max-h-[1000px] opacity-100 scale-y-100' : 'max-h-0 opacity-0 scale-y-95' }}">
                    <div class="mt-2 space-y-2 bg-blue-200/30 rounded-lg p-2">
                        <a href="{{ url('admin/bcms/poster-template') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/poster-template') ? 'bg-blue-600' : '' }}">Poster Template Maintenance</a>
                        <a href="{{ url('admin/bcms/poster') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/poster') ? 'bg-blue-600' : '' }}">Poster Maintenance</a>
                        <a href="{{ url('/admin/register') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/agent') ? 'bg-blue-600' : '' }}">Agent Maintenance</a>
                        <a href="{{ url('admin/bcms/unit') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/unit') ? 'bg-blue-600' : '' }}">Unit Maintenance</a>
                        <a href="{{ url('admin/bcms/submission') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/submission') ? 'bg-blue-600' : '' }}">Sub-Unit Submission/Policy Record</a>
                        <a href="{{ url('admin/bcms/digital-card') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/digital-card') ? 'bg-blue-600' : '' }}">Digital Card Maintenance</a>
                        <a href="{{ url('admin/bcms/scheduled-tasks') }}" class="block py-2.5 px-4 rounded hover:bg-blue-600 {{ request()->is('admin/bcms/scheduled-tasks') ? 'bg-blue-600' : '' }}">Scheduled Tasks</a>
                    </div>
                </div>
            </div>

        <!-- Mobile -->
        <div class="mt-4">
            <x-input-label for="mobile" :value="__('Mobile')" />
            <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autofocus autocomplete="mobile" />
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        <!-- Coding Date -->
        <div class="mt-4">
            <x-input-label for="coding_date" :value="__('Coding Date (YYYY-MM-DD)')" />
            <x-text-input id="coding_date" class="block mt-1 w-full" type="text" name="coding_date" :value="old('coding_date')" required autofocus autocomplete="codingdate" />
            <x-input-error :messages="$errors->get('coding_date')" class="mt-2" />
        </div>

        <!-- Agent Status -->
        <div class="mt-4">
            <label for="agent_status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Agent Status</label>
            <select id="agent_status" name="agent_status" class="mt-1 block w-full rounded-md border-gray-300 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="" disabled selected class="text-gray-400"></option>
                <option value="active">ACTIVE</option>
                <option value="delisted">DELISTED</option>
                <option value="operations">OPERATIONS</option>
            </select>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
=======
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
    </div>
>>>>>>> 190ff8c9c648c0677d61e113ac30cf41a6df20a2
</x-app-layout>
