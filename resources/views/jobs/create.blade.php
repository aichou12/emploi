<!-- resources/views/jobs/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un Emploi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('jobs.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Titre de l'Emploi</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="sector" class="block text-sm font-medium text-gray-700">Secteur</label>
                            <select name="sector" id="sector" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                                <option value="Santé">Santé</option>
                                <option value="Gestion/comptabilité">Gestion/comptabilité</option>
                                <option value="Informatique/Télécom/Téléservices">Informatique/Télécom/Téléservices</option>
                                <option value="Agriculture/Élevage/Pêche">Agriculture/Élevage/Pêche</option>
                                <option value="Éducation/Enseignant">Éducation/Enseignant</option>
                                <option value="BTP/Transport/Mécanique">BTP/Transport/Mécanique</option>
                                <option value="Communication">Communication</option>
                                <option value="Finance">Finance</option>
                                <option value="Tourisme/Culture/Hôtellerie">Tourisme/Culture/Hôtellerie</option>
                                <option value="Urbanisation/Environnement/Eaux/Forêt">Urbanisation/Environnement/Eaux/Forêt</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description de l'Emploi</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
                        </div>

                        <button type="submit" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md">Créer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
