<x-app-layout>
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

                <!-- Right Column -->
                <div>
                    <!-- Agent Code -->
                    <x-input-label for="agentcode" :value="__('Agent Code')" />
                    <x-text-input id="agentcode" class="block mt-1 w-full" type="text" name="agentcode" :value="old('agentcode')" required autofocus />
                    <x-input-error :messages="$errors->get('agentcode')" class="mt-2" />

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
