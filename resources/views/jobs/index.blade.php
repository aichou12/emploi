<!-- resources/views/jobs/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Emplois') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('jobs.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Créer un emploi</a>
                    <table class="min-w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left">Titre</th>
                                <th class="px-6 py-3 text-left">Secteur</th>
                                <th class="px-6 py-3 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <td class="px-6 py-3">{{ $job->title }}</td>
                                    <td class="px-6 py-3">{{ $job->sector }}</td>
                                    <td class="px-6 py-3">
                                        <a href="{{ route('jobs.show', $job->id) }}" class="text-indigo-600">Voir</a> | 
                                        <a href="{{ route('jobs.edit', $job->id) }}" class="text-indigo-600">Éditer</a> | 
                                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
