<x-app-layout title="Create User">
    <x-slot name="heading">Create User</x-slot>

   <form action="/users" method="post" class="space-y-6">
    @csrf
        <div>
            <label for="name">Name</label>
            <input class="border px-4 py-2 rounded block mt-1" type="text" name="name" id="name">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input class="border px-4 py-2 rounded block mt-1" type="email" name="email" id="email">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input class="border px-4 py-2 rounded block mt-1" type="password" name="password" id="password">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <x-button>
            Save
        </x-button>

   </form>

</x-app-layout>