<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Navigation des sessions -->
                    <div class="mb-6">
                        <ul class="flex border-b">
                            <li class="mr-1">
                                <button class="tab-btn py-2 px-4 text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none" data-step="1">
                                    Session 1 : Informations Personnelles
                                </button>
                            </li>
                            <li class="mr-1">
                                <button class="tab-btn py-2 px-4 text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none" data-step="2">
                                    Session 2 : CV et Lettre de Motivation
                                </button>
                            </li>
                            <li class="mr-1">
                                <button class="tab-btn py-2 px-4 text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none" data-step="3">
                                    Session 3 : Expérience Professionnelle
                                </button>
                            </li>
                            <li class="mr-1">
                                <button class="tab-btn py-2 px-4 text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none" data-step="4">
                                    Session 4 : Secteur d'emploi
                                </button>
                            </li>
                            <li>
                                <button class="tab-btn py-2 px-4 text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none" data-step="5">
                                    Session 5 : Informations de Formation
                                </button>
                            </li>
                        </ul>
                    </div>

                    <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Session 1 -->
                        <div id="step-1" class="step-section" style="display:block;">
    <h3 class="font-semibold text-lg text-gray-800 mb-4">Informations Personnelles</h3>
    <div class="space-y-4">
        <div>
            <label for="last_name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" name="last_name" id="last_name" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
            <input type="text" name="first_name" id="first_name" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div>
            <label for="gender" class="block text-sm font-medium text-gray-700">Sexe</label>
            <select name="gender" id="gender" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                <option value="male">Masculin</option>
                <option value="female">Féminin</option>
                <option value="other">Autre</option>
            </select>
        </div>
        <div>
            <label for="dob" class="block text-sm font-medium text-gray-700">Date de Naissance</label>
            <input type="date" name="dob" id="dob" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div>
            <label for="birthplace" class="block text-sm font-medium text-gray-700">Lieu de Naissance</label>
            <input type="text" name="birthplace" id="birthplace" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div>
            <label for="residence" class="block text-sm font-medium text-gray-700">Lieu de Résidence</label>
            <input type="text" name="residence" id="residence" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div>
            <label for="marital_status" class="block text-sm font-medium text-gray-700">Situation Matrimoniale</label>
            <select name="marital_status" id="marital_status" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                <option value="single">Célibataire</option>
                <option value="married">Marié(e)</option>
                <option value="divorced">Divorcé(e)</option>
                <option value="widowed">Veuf/Veuve</option>
            </select>
        </div>
        <div>
            <label for="children_count" class="block text-sm font-medium text-gray-700">Nombre d'Enfants</label>
            <input type="number" name="children_count" id="children_count" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" min="0" required>
        </div>
        <div>
            <label for="disability" class="block text-sm font-medium text-gray-700">Souffrez-vous d'un handicap ?</label>
            <select name="disability" id="disability" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                <option value="no">Non</option>
                <option value="yes">Oui</option>
            </select>
        </div>
    </div>
    <button type="button" class="mt-6 w-full py-2 px-3 bg-blue-600 text-white rounded-md transition duration-200 hover:bg-blue-700 next-btn" data-next="2">Suivant</button>
</div>


                        <!-- Session 2 -->
                        <div id="step-2" class="step-section" style="display:none;">
                            <h3 class="font-semibold text-lg text-gray-800 mb-4">CV et Lettre de Motivation</h3>
                            <div class="space-y-4">
                                <div>
                                    <label for="cv" class="block text-sm font-medium text-gray-700">Joindre votre CV</label>
                                    <input type="file" name="cv" id="cv" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div>
                                    <label for="cover_letter" class="block text-sm font-medium text-gray-700">Joindre votre Lettre de Motivation</label>
                                    <input type="file" name="cover_letter" id="cover_letter" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <button type="button" class="w-1/2 py-2 px-3 bg-gray-400 text-white rounded-md hover:bg-gray-500 prev-btn" data-prev="1">Retour</button>
                                <button type="button" class="w-1/2 py-2 px-3 bg-blue-600 text-white rounded-md transition duration-200 hover:bg-blue-700 next-btn" data-next="3">Suivant</button>
                            </div>
                        </div>

                        <!-- Session 3 -->
                        <div id="step-3" class="step-section" style="display:none;">
                            <h3 class="font-semibold text-lg text-gray-800 mb-4">Expérience Professionnelle</h3>
                            <div class="space-y-4">
                                <div>
                                    <label for="experience" class="block text-sm font-medium text-gray-700">Expérience Professionnelle</label>
                                    <textarea name="experience" id="experience" rows="4" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                                </div>
                                <div>
                                    <label for="years_of_experience" class="block text-sm font-medium text-gray-700">Années d'expérience</label>
                                    <input type="number" name="years_of_experience" id="years_of_experience" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <button type="button" class="w-1/2 py-2 px-3 bg-gray-400 text-white rounded-md hover:bg-gray-500 prev-btn" data-prev="2">Retour</button>
                                <button type="button" class="w-1/2 py-2 px-3 bg-blue-600 text-white rounded-md transition duration-200 hover:bg-blue-700 next-btn" data-next="4">Suivant</button>
                            </div>
                        </div>

                        <!-- Session 4 -->
                        <div id="step-4" class="step-section" style="display:none;">
                            <h3 class="font-semibold text-lg text-gray-800 mb-4">Secteur d'emploi</h3>
                            <div class="space-y-4">
                                <div>
                                    <label for="sector" class="block text-sm font-medium text-gray-700">Secteur d'emploi</label>
                                    <select name="sector" id="sector" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="" disabled selected>Choisissez un secteur</option>
                                        <option value="Santé">Santé</option>
                                        <option value="Gestion/Comptabilité">Gestion/Comptabilité</option>
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
                                <div>
                                    <label for="job_id" class="block text-sm font-medium text-gray-700">Choisir l'emploi</label>
                                    <select name="job_id" id="job_id" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="" disabled selected>Choisissez un emploi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <button type="button" class="w-1/2 py-2 px-3 bg-gray-400 text-white rounded-md hover:bg-gray-500 prev-btn" data-prev="3">Retour</button>
                                <button type="button" class="w-1/2 py-2 px-3 bg-blue-600 text-white rounded-md transition duration-200 hover:bg-blue-700 next-btn" data-next="5">Suivant</button>
                            </div>
                        </div>

                        <!-- Session 5 -->
                        <div id="step-5" class="step-section" style="display:none;">
                            <h3 class="font-semibold text-lg text-gray-800 mb-4">Informations de Formation</h3>
                            <div class="space-y-4">
                                <div>
                                    <label for="education" class="block text-sm font-medium text-gray-700">Dernière formation</label>
                                    <input type="text" name="education" id="education" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <button type="button" class="w-1/2 py-2 px-3 bg-gray-400 text-white rounded-md hover:bg-gray-500 prev-btn" data-prev="4">Retour</button>
                                <button type="submit" class="w-1/2 py-2 px-3 bg-blue-600 text-white rounded-md transition duration-200 hover:bg-blue-700">Soumettre</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        const tabBtns = document.querySelectorAll('.tab-btn');
        const stepSections = document.querySelectorAll('.step-section');
        const prevBtns = document.querySelectorAll('.prev-btn');
        const nextBtns = document.querySelectorAll('.next-btn');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const step = btn.getAttribute('data-step');
                showStep(step);
            });
        });

        prevBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const prevStep = btn.getAttribute('data-prev');
                showStep(prevStep);
            });
        });

        nextBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const nextStep = btn.getAttribute('data-next');
                showStep(nextStep);
            });
        });

        function showStep(step) {
            stepSections.forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(`step-${step}`).style.display = 'block';
        }
    </script>
</x-app-layout>
