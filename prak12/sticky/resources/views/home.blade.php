<x-app-layout>
    @slot('title', 'Home')

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </x-container>
</x-app-layout>