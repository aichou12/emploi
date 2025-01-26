<!-- resources/views/jobs/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails de l\'Emploi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold">Titre : {{ $job->title }}</h3>
                    <p class="text-sm">Secteur : {{ $job->sector }}</p>
                    <p class="mt-4">{{ $job->description }}</p>

                    <a href="{{ route('jobs.index') }}" class="mt-4 inline-block px-4 py-2 bg-indigo-600 text-white rounded-md">Retour à la liste</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
