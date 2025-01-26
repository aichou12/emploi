<!-- resources/views/jobs/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier l\'Emploi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('jobs.update', $job->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Titre de l'Emploi</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" value="{{ $job->title }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="sector" class="block text-sm font-medium text-gray-700">Secteur</label>
                            <select name="sector" id="sector" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                                <option value="Santé" {{ $job->sector == 'Santé' ? 'selected' : '' }}>Santé</option>
                                <option value="Gestion/comptabilité" {{ $job->sector == 'Gestion/comptabilité' ? 'selected' : '' }}>Gestion/comptabilité</option>
                                <option value="Informatique/Télécom/Téléservices" {{ $job->sector == 'Informatique/Télécom/Téléservices' ? 'selected' : '' }}>Informatique/Télécom/Téléservices</option>
                                <option value="Agriculture/Élevage/Pêche" {{ $job->sector == 'Agriculture/Élevage/Pêche' ? 'selected' : '' }}>Agriculture/Élevage/Pêche</option>
                                <option value="Éducation/Enseignant" {{ $job->sector == 'Éducation/Enseignant' ? 'selected' : '' }}>Éducation/Enseignant</option>
                                <option value="BTP/Transport/Mécanique" {{ $job->sector == 'BTP/Transport/Mécanique' ? 'selected' : '' }}>BTP/Transport/Mécanique</option>
                                <option value="Communication" {{ $job->sector == 'Communication' ? 'selected' : '' }}>Communication</option>
                                <option value="Finance" {{ $job->sector == 'Finance' ? 'selected' : '' }}>Finance</option>
                                <option value="Tourisme/Culture/Hôtellerie" {{ $job->sector == 'Tourisme/Culture/Hôtellerie' ? 'selected' : '' }}>Tourisme/Culture/Hôtellerie</option>
                                <option value="Urbanisation/Environnement/Eaux/Forêt" {{ $job->sector == 'Urbanisation/Environnement/Eaux/Forêt' ? 'selected' : '' }}>Urbanisation/Environnement/Eaux/Forêt</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description de l'Emploi</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>{{ $job->description }}</textarea>
                        </div>

                        <button type="submit" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
