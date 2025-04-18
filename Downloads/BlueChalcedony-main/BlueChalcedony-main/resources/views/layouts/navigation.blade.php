<nav x-data="{ open: false }" class="sticky top-0 h-16 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 dark:from-blue-800 dark:via-gray-700 dark:to-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-9xl mx-auto px-0 sm:px-6 lg:px-3"> <!-- Removed padding on the left side here (px-0) -->
        <div class="flex justify-between h-16 items-center">
            <!-- Left section: Logo -->
            <div class="flex items-center space-x-4">
                <!-- Logo or Branding -->
                <a href="{{ url('/admin/dashboard') }}" class="flex items-center ml-0"> <!-- Add ml-0 to remove any extra left margin -->
                    <img src="{{ asset('images/bcdqwhitelogo.png') }}" class="h-14 w-auto" alt="Logo">
                </a>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
