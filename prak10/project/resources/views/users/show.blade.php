<x-app-layout title="Users">
    <x-slot name="heading">{{ $user->name }}</x-slot>

        <div>{{ $user->email }}</div> 
        <div>Registered at {{ $user->created_at->diffForHumans() }}</div> 
    

        <form action="/users/{{ $user->id }}" method="post" class="mt-6">
            @method('DELETE')
            @csrf
            <x-button type="submit">
                Delete
            </x-button>
        </form>
</x-app-layout>