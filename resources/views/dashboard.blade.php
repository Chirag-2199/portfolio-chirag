<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white bg-gradient-to-r from-blue-500 to-purple-500 p-4 rounded-lg shadow-md">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="max-w-5xl w-full mx-auto px-6">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg transition transform hover:scale-105 duration-300">
                <div class="p-8 text-gray-900 text-center">
                    <h3 class="text-3xl font-semibold text-gray-800">🎉 Welcome Back!</h3>
                    <p class="mt-4 text-lg text-gray-600">{{ __("You're logged in!") }}</p>
                    <div class="mt-6">
                        <a class="px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md transition duration-300">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
