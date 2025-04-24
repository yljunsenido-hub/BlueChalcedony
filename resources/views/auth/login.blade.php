<x-guest-layout>
    <div class="min-h-screen w-full flex flex-col justify-between" style="background-image: url('{{ asset('images/background.png') }}'); background-size: cover; background-position: center;">

        <!-- Centered Form Area -->
        <div class="flex-grow flex items-center justify-center p-4">
            <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-sm border-2">

                <div class="flex justify-center mb-4">
                    <img src="{{ asset('images/BCDQLogo.png') }}" alt="bcdq logo" class="w-20 h-20 rounded-lg">
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <h2 class="text-blue-900 text-2xl font-bold text-center mb-6">BLUE CHALCEDONY QUARTZ AGENTS PORTAL</h2>

                    <!-- Agent Code -->
                    <div>
                        <x-input-label for="agent_code" :value="__('Agent Code')" />
                        <x-text-input id="agent_code" class="block mt-1 w-full" type="text" name="agent_code" :value="old('agent_code')" required autofocus autocomplete="agent_code" />
                        <x-input-error :messages="$errors->get('agent_code')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <button class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 w-full rounded focus:outline-none focus:shadow-outline" type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
</x-guest-layout>
