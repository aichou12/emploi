<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
   
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

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
                                <button class="tab-btn py-2 px-4 text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none" data-step="3">
                                  Session 2 : Formation
                                </button>
                            </li>
                            <li class="mr-1">
                                <button class="tab-btn py-2 px-4 text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none" data-step="4">
                                     Session 3 : Expérience Professionnelle 
                                </button>
                            </li>
                            <li>
                                <button class="tab-btn py-2 px-4 text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none" data-step="5">
                                Session 4 : Emploi 
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
                                <div class="flex space-x-8">
                                    <div class="flex-1">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Nom</label>
                                        <input type="text" name="last_name" id="last_name" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="flex-1">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
                                        <input type="text" name="first_name" id="first_name" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                </div>
                                <!-- Autres champs ici -->
                                <div>
                                    <label for="gender" class="block text-sm font-medium text-gray-700">Sexe</label>
                                    <select name="gender" id="gender" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="male">Masculin</option>
                                        <option value="female">Féminin</option>
                                         </select>
                                </div>
                                <div class="flex space-x-8">
                                    <div class="flex-1">
                                        <label for="dob" class="block text-sm font-medium text-gray-700">Date de Naissance</label>
                                        <input type="date" name="dob" id="dob" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="flex-1">
                                        <label for="birthplace" class="block text-sm font-medium text-gray-700">Lieu de Naissance</label>
                                        <input type="text" name="birthplace" id="birthplace" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                </div>
                                <div>
                                    <label for="residence" class="block text-sm font-medium text-gray-700">Lieu de Résidence</label>
                                    <select name="residence" id="residence" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="">Sélectionnez un pays</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex space-x-8">
                                    <div class="flex-1">
                                        <label for="marital_status" class="block text-sm font-medium text-gray-700">Situation Matrimoniale</label>
                                        <select name="marital_status" id="marital_status" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                            <option value="single">Célibataire</option>
                                            <option value="married">Marié(e)</option>
                                            <option value="divorced">Divorcé(e)</option>
                                            <option value="widowed">Veuf/Veuve</option>
                                        </select>
                                    </div>
                                    <div class="flex-1">
                                        <label for="children_count" class="block text-sm font-medium text-gray-700">Nombre d'Enfants</label>
                                        <input type="number" name="children_count" id="children_count" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" min="0" required>
                                    </div>
                                </div>
                                <div id="step-1" class="step-section" style="display:block;">
    
                            <div>
                                <label for="disability" class="block text-sm font-medium text-gray-700">Souffrez-vous d'un handicap ?</label>
                                <select name="disability" id="disability" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    <option value="no">Non</option>
                                    <option value="yes">Oui</option>
                                </select>
                            </div>
                            </div>

                            <!-- Add space between the input and the button -->
                            <div class="mt-6 flex justify-end">
                            <button type="button" class="next-btn bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 flex items-center" data-next="3">
                                <span class="mr-2">Suivant</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>

                        </div>

                        </div>

                        <!-- Session 2 -->
                        

                        <!-- Session 3 -->
                        <div id="step-4" class="step-section" style="display:none;">
                            <h3 class="font-semibold text-lg text-gray-800 mb-4">Expérience Professionnelle</h3>
                            <div class="space-y-4">
                                <div>
                                    <label for="years_of_experience" class="block text-sm font-medium text-gray-700">Nombre d'années d'expérience</label>
                                    <input type="number" name="years_of_experience" id="years_of_experience" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" min="0" required>
                                </div>
                                <div>
                                    <label for="last_job_title" class="block text-sm font-medium text-gray-700">Dernier poste occupé</label>
                                    <input type="text" name="last_job_title" id="last_job_title" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
                                <div>
                                    <label for="last_employer" class="block text-sm font-medium text-gray-700">Dernier employeur</label>
                                    <input type="text" name="last_employer" id="last_employer" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                </div>
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
                            <div class="flex justify-between mt-4">
                              <!-- Bouton Retour avec couleur grise et flèche gauche -->
                                <button type="button" class="prev-btn bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 flex items-center" data-prev="1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5M12 5l-7 7 7 7"></path>
                                    </svg>
                                    Retour
                                </button>

                                <!-- Bouton Suivant avec couleur verte et flèche droite -->
                                <button type="button" class="next-btn bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 flex items-center" data-next="5">
                                    Suivant
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                    </div>


                            </div>
                          
                        </div>

                        <!-- Session 4 -->
            <div id="step-5" class="step-section" style="display:none;">
                    <h3 class="font-semibold text-lg text-gray-800 mb-4">Emploi</h3>
                    <div class="flex space-x-12 mb-4">
                    <!-- Secteur d'emploi -->
                    <div class="flex-2">
                        <label for="sector" class="block text-sm font-medium text-gray-700">Choisir le secteur</label>
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


                    <div class="flex-1">
                        <label for="job_id" class="block text-sm font-medium text-gray-700">Choisir l'emploi</label>
                        <select name="job_id" id="job_id" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            <option value="" disabled selected>Choisissez un emploi</option>
                        </select>
                    </div>
                </div>

                 <!-- Nombre d'années d'expérience -->
                    <div class="flex-2 mt-4">
                        <label for="experience_2" class="block text-sm font-medium text-gray-700">Nombre d'années d'expérience sur l'emploi sollicité</label>
                        <input type="number" name="experience_2" id="experience_2" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    <div class="mt-4">
                        <label for="cover_letter" class="block text-sm font-medium text-gray-700">Lettre de motivation</label>
                        <textarea name="cover_letter" id="cover_letter" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Entrez votre lettre de motivation" required></textarea>
                    </div>
                    <div class="mt-4">
                        <label for="experience_comments" class="block text-sm font-medium text-gray-700">Expériences professionnelles / Commentaires</label>
                        <textarea name="experience_comments" id="experience_comments" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Décrivez vos expériences professionnelles ou autres commentaires"></textarea>
                    </div>
                    <div class="flex justify-between space-x-8 mt-4">
            <!-- Retour Button with Gray color and Left Arrow -->
            <button type="button" class="prev-btn bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 flex items-center" data-prev="4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5M12 5l-7 7 7 7"></path>
                </svg>
                Retour
            </button>

            <!-- Soumettre Button with Green color and Checkmark Icon -->
            <button type="submit" id="submit-btn" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 flex items-center">
            Soumettre
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L19 7"></path>
            </svg>
                </button>
            </div>

                  



           </div>





                        <!-- Session 5 -->
        <div id="step-3" class="step-section" style="display:none;">
                <h3 class="font-semibold text-lg text-gray-800 mb-4">Formation</h3>
                <!-- Champs pour la formation à ajouter ici -->
                <div class="space-y-4">
                    <div>
                        <label for="degree" class="block text-sm font-medium text-gray-700">Diplôme</label>
                        <input type="text" name="degree" id="degree" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  required>
                    </div>

              <div>
            <label for="institution" class="block text-sm font-medium text-gray-700">Institution</label>
            <input type="text" name="institution" id="institution" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
           </div>

                <div>
                    <label for="degree_title" class="block text-sm font-medium text-gray-700">Intitulé du diplôme</label>
                    <input type="text" name="degree_title" id="degree_title" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required>
                </div>

                <div>
                    <label for="graduation_year" class="block text-sm font-medium text-gray-700">Année d'obtention du diplôme</label>
                    <input type="number" name="graduation_year" id="graduation_year" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  required>
                </div>

                <div>
                    <label for="specialty" class="block text-sm font-medium text-gray-700">Spécialité</label>
                    <input type="text" name="specialty" id="specialty" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  required>
                </div>

                <div>
                    <label for="other_degrees" class="block text-sm font-medium text-gray-700">Autres diplômes et/ou formations</label>
                    <input type="text" name="other_degrees" id="other_degrees" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Autres diplômes ou formations" />
                </div>
            </div>
          
            <div class="flex justify-between mt-4">
                        <!-- Bouton Retour avec couleur grise et flèche gauche -->
                        <button type="button" class="prev-btn bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 flex items-center" data-prev="1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5M12 5l-7 7 7 7"></path>
                            </svg>
                            Retour
                        </button>

                        <!-- Bouton Suivant avec couleur verte et flèche droite -->
                        <button type="button" class="next-btn bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 flex items-center" data-next="4">
                            Suivant
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

         </div>

     
            <!-- Popup de confirmation -->
            <div id="confirmation-popup" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div id="confirmation-message" class="mt-4 text-green-500"></div>
                    <button id="close-popup" class="bg-green-500text-white px-4 py-2 rounded-md hover:bg-red-600 mt-4">Fermer</button>
                </div>
            </div>

                <!-- Votre bouton Soumettre -->


                
                <!-- Message de confirmation -->


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
  <script> 
    document.addEventListener('DOMContentLoaded', function () {
    const submitBtn = document.getElementById('submit-btn');
    const confirmationPopup = document.getElementById('confirmation-popup');
    const confirmationMessage = document.getElementById('confirmation-message');
    const closePopupBtn = document.getElementById('close-popup');
    
    submitBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Empêcher l'envoi du formulaire si nécessaire

        // Générer un numéro d'inscription aléatoire
        let numeroInscription = Math.floor(Math.random() * 10000) + 1;

        // Afficher le message de confirmation
        confirmationMessage.innerText = `Votre demande a été soumise. Votre numéro d'inscription est ${numeroInscription}.`;

        // Afficher le popup
        confirmationPopup.classList.remove('hidden');
    });

    // Fermer le popup
    closePopupBtn.addEventListener('click', function() {
        confirmationPopup.classList.add('hidden'); // Cacher le popup
    });
});

  </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sectorSelect = document.getElementById('sector');
            const jobSelect = document.getElementById('job_id');

            // Objet associant chaque secteur à ses emplois correspondants
            const jobsBySector = {
                "Santé": [
                    { value: "medecin", label: "Médecin" },
                    { value: "infirmier", label: "Infirmier" },
                    { value: "pharmacien", label: "Pharmacien" }
                ],
                "Gestion/Comptabilité": [
                    { value: "comptable", label: "Comptable" },
                    { value: "auditeur", label: "Auditeur" }
                ],
                "Informatique/Télécom/Téléservices": [
                    { value: "developpeur", label: "Développeur" },
                    { value: "technicien", label: "Technicien" }
                ],
                "Agriculture/Élevage/Pêche": [
                    { value: "agriculteur", label: "Agriculteur" },
                    { value: "pêcheur", label: "Pêcheur" }
                ],
                "Éducation/Enseignant": [
                    { value: "enseignant", label: "Enseignant" },
                    { value: "professeur", label: "Professeur" }
                ],
                "BTP/Transport/Mécanique": [
                    { value: "conducteur", label: "Conducteur" },
                    { value: "mecanicien", label: "Mécanicien" }
                ],
                "Communication": [
                    { value: "journaliste", label: "Journaliste" },
                    { value: "publicitaire", label: "Publicitaire" }
                ],
                "Finance": [
                    { value: "analyste_financier", label: "Analyste financier" },
                    { value: "banquier", label: "Banquier" }
                ],
                "Tourisme/Culture/Hôtellerie": [
                    { value: "guide_touristique", label: "Guide touristique" },
                    { value: "hotelier", label: "Hôtelier" }
                ],
                "Urbanisation/Environnement/Eaux/Forêt": [
                    { value: "urbaniste", label: "Urbaniste" },
                    { value: "environnementaliste", label: "Environnementaliste" }
                ]
            };

            // Fonction pour mettre à jour la liste des emplois en fonction du secteur
            function updateJobOptions(sector) {
                // Réinitialiser les options existantes
                jobSelect.innerHTML = '<option value="" disabled selected>Choisissez un emploi</option>';

                // Si un secteur valide est choisi, ajouter les emplois correspondants
                if (jobsBySector[sector]) {
                    jobsBySector[sector].forEach(function (job) {
                        const option = document.createElement('option');
                        option.value = job.value;
                        option.textContent = job.label;
                        jobSelect.appendChild(option);
                    });
                }
            }

            // Ajouter un écouteur d'événement sur le changement de secteur
            sectorSelect.addEventListener('change', function () {
                const selectedSector = sectorSelect.value;
                updateJobOptions(selectedSector);
            });
        });
 </script>
<style>
    body {
  font-family: "Roboto", sans-serif;
  background-color: #f8fafb; }

p {
  color: #b3b3b3;
  font-weight: 300; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", sans-serif; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a:hover {
    text-decoration: none !important; }

.content {
  padding: 7rem 0; }

h2 {
  font-size: 20px; }

@media (max-width: 991.98px) {
  .content .bg {
    height: 500px; } }

.content .contents, .content .bg {
  width: 50%; }
  @media (max-width: 1199.98px) {
    .content .contents, .content .bg {
      width: 100%; } }
  .content .contents .form-group, .content .bg .form-group {
    overflow: hidden;
    margin-bottom: 0;
    padding: 15px 15px;
    border-bottom: none;
    position: relative;
    background: #edf2f5;
    border-bottom: 1px solid #e6edf1; }
    .content .contents .form-group label, .content .bg .form-group label {
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
    .content .contents .form-group input, .content .bg .form-group input {
      background: transparent; }
    .content .contents .form-group.first, .content .bg .form-group.first {
      border-top-left-radius: 7px;
      border-top-right-radius: 7px; }
    .content .contents .form-group.last, .content .bg .form-group.last {
      border-bottom-left-radius: 7px;
      border-bottom-right-radius: 7px; }
    .content .contents .form-group label, .content .bg .form-group label {
      font-size: 12px;
      display: block;
      margin-bottom: 0;
      color: #b3b3b3; }
    .content .contents .form-group.focus, .content .bg .form-group.focus {
      background: #fff; }
    .content .contents .form-group.field--not-empty label, .content .bg .form-group.field--not-empty label {
      margin-top: -20px; }
  .content .contents .form-control, .content .bg .form-control {
    border: none;
    padding: 0;
    font-size: 20px;
    border-radius: 0; }
    .content .contents .form-control:active, .content .contents .form-control:focus, .content .bg .form-control:active, .content .bg .form-control:focus {
      outline: none;
      -webkit-box-shadow: none;
      box-shadow: none; }

.content .bg {
  background-size: cover;
  background-position: center; }

.content a {
  color: #888;
  text-decoration: underline; }

.content .btn {
  height: 54px;
  padding-left: 30px;
  padding-right: 30px; }

.content .forgot-pass {
  position: relative;
  top: 2px;
  font-size: 14px; }

.social-login a {
  text-decoration: none;
  position: relative;
  text-align: center;
  color: #fff;
  margin-bottom: 10px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: inline-block; }
  .social-login a span {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); }
  .social-login a:hover {
    color: #fff; }
  .social-login a.facebook {
    background: #3b5998; }
    .social-login a.facebook:hover {
      background: #344e86; }
  .social-login a.twitter {
    background: #1da1f2; }
    .social-login a.twitter:hover {
      background: #0d95e8; }
  .social-login a.google {
    background: #ea4335; }
    .social-login a.google:hover {
      background: #e82e1e; }

.control {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 15px;
  cursor: pointer;
  font-size: 14px; }
  .control .caption {
    position: relative;
    top: .2rem;
    color: #888; }

.control input {
  position: absolute;
  z-index: -1;
  opacity: 0; }

.control__indicator {
  position: absolute;
  top: 2px;
  left: 0;
  height: 20px;
  width: 20px;
  background: #e6e6e6;
  border-radius: 4px; }

.control--radio .control__indicator {
  border-radius: 50%; }

.control:hover input ~ .control__indicator,
.control input:focus ~ .control__indicator {
  background: #ccc; }

.control input:checked ~ .control__indicator {
  background: #6c63ff; }

.control:hover input:not([disabled]):checked ~ .control__indicator,
.control input:checked:focus ~ .control__indicator {
  background: #847dff; }

.control input:disabled ~ .control__indicator {
  background: #e6e6e6;
  opacity: 0.9;
  pointer-events: none; }

.control__indicator:after {
  font-family: 'icomoon';
  content: '\e5ca';
  position: absolute;
  display: none;
  font-size: 16px;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }

.control input:checked ~ .control__indicator:after {
  display: block;
  color: #fff; }

.control--checkbox .control__indicator:after {
  top: 50%;
  left: 50%;
  margin-top: -1px;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%); }

.control--checkbox input:disabled ~ .control__indicator:after {
  border-color: #7b7b7b; }

.control--checkbox input:disabled:checked ~ .control__indicator {
  background-color: #7e0cf5;
  opacity: .2; }

</style>
</x-app-layout>
