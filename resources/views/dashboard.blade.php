<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @auth
        <!-- Content of your dashboard accessible only to authenticated users -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-bold mb-4">{{ __("Liverpool Players") }}</h3>
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($liverpoolPlayers as $player)
                                <div class="border border-gray-300 dark:border-gray-700 p-4 rounded-lg">
                                    {{ $player }}
                                </div>
                            @endforeach
                        </div>

                        <h3 class="text-lg font-bold mt-8 mb-4">{{ __("Manchester United Players") }}</h3>
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($manchesterUnitedPlayers as $player)
                                <div class="border border-gray-300 dark:border-gray-700 p-4 rounded-lg">
                                    {{ $player }}
                                </div>
                            @endforeach
                        </div>

                        <h3 class="text-lg font-bold mt-8 mb-4">{{ __("Chelsea Players") }}</h3>
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($chelseaPlayers as $player)
                                <div class="border border-gray-300 dark:border-gray-700 p-4 rounded-lg">
                                    {{ $player }}
                                </div>
                            @endforeach
                        </div>

                        <h3 class="text-lg font-bold mt-8 mb-4">{{ __("Arsenal Players") }}</h3>
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($arsenalPlayers as $player)
                                <div class="border border-gray-300 dark:border-gray-700 p-4 rounded-lg">
                                    {{ $player }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex justify-center">
                <a href="{{ route('index') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                    Back to Home Page
                </a>
            </div>
        </div>
    @else
        <!-- Message or redirection link for unauthenticated users -->
        <div class="py-12 text-center">
            <p class="text-lg text-gray-700 dark:text-gray-300">You must be logged in to access this page.</p>
            <a href="{{ route('login') }}" class="underline text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-600">Login Here</a>
        </div>
    @endauth
</x-app-layout>
