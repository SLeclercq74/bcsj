<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des matchs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach ($games as $game)
                {{ $game->category->name }} 
                {{ $game->hostingTeam->name }} 
                {{ $game->receivingTeam->name }} 
            @endforeach
        </div>
    </div>
</x-app-layout>
