<!-- resources/views/info/create.blade.php -->
<!-- resources/views/jobs/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un Emploi') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('info.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" id="nom" name="nom" required>
                      </div>
                      <div class="mb-4">
                            <label for="prenom" class="block text-sm font-medium text-gray-700">prenom</label>
                            <input type="text" id="prenom" name="prenom" required>
                      </div>
                      < <div class="mb-4">
            <label for="genre">Genre :</label>
            <select name="genre" id="genre" required>
                <option value="Homme" >Homme</option>
                <option value="Femme" >Femme</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="datenaiss">Date de Naissance :</label>
            <input type="date" id="datenaiss" name="datenaiss"required>
        </div>

        <div class="mb-4">
            <label for="lieu">Lieu de Naissance :</label>
            <input type="text" id="lieu" name="lieu" required>
        </div>
                        <div class="mb-4">
                            <label for="Lieu de résidence" class="block text-sm font-medium text-gray-700">pays</label>
                            <select name="Lieu de résidence" id="Lieu de résidence" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                                <option value="mali">mali</option>
                                <option value="france">france</option>
                                   </select>
                        </div>
            
                        <div class="mb-4">
            <label for="adresse">adresse:</label>
            <input type="text" id="adresse" name="adresse"required>
        </div>
                        <div class="mb-4">
                    <label for="situation" >Situation Matrimoniale</label>
                        <select name="situation" id="situation" required>
                            <option value="single">Célibataire</option>
                        <option value="married">Marié(e)</option>
                            <option value="divorced">Divorcé(e)</option>
                        <option value="widowed">Veuf/Veuve</option>
                         </select>
                     </div>
                     <div class="mb-4">
            <label for="nombrenfant">Nombre d'Enfants :</label>
            <input type="number" id="nombrenfant" name="nombrenfant"  required>
        </div>
                        <div class="mb-4">
                            <label for="exp_professionnelle" class="block text-sm font-medium text-gray-700">exp_professionnelle</label>
                            <textarea name="exp_professionnelle" id="exp_professionnelle" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
                        </div>
                        <div class="mb-4">
                        <label for="situation" class="block text-sm font-medium text-gray-700">Avez-vous un handicap</label>
                <select name="handicap" id="handicap" required>
                    <option value="non">Non</option>
                        <option value="oui">Oui</option>
                    
                                        </select> </div>
                                        <div class="mb-4">
            <label for="nombrexp">Nombre d'Années d'Expérience :</label>
            <input type="number" id="nombrexp" name="nombrexp"  required>
        </div>
        <div>
            <label for="dernierposte">Dernier Poste :</label>
            <input type="text" id="dernierposte" name="dernierposte"  required>
        </div>

        <div class="mb-4">
            <label for="dernieremp">Dernier Employeur :</label>
            <input type="text" id="dernieremp" name="dernieremp" required>
        </div>

        <!-- Champ CV -->
       
        <div class="mb-4">
            <label for="cv">CV:</label>
            <textarea id="cv" name="cv"></textarea>
        </div>

        <!-- Champ Lettre de Motivation -->
        <div class="mb-4">
            <label for="lettremoti">Lettre de Motivation :</label>
            <textarea id="lettremoti" name="lettremoti"></textarea>
        </div>
                        <button type="submit" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md">Créer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



      
       

        
        

 