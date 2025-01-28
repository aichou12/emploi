<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de Gestion des Demandes d'Emploi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-white py-4 shadow">
        <div class="container mx-auto flex items-center justify-center px-6">
            <div class="flex flex-col items-center text-center space-y-4">
                <img src="images/dss.png" alt="Logo Sénégal" class="h-12">
                <h1 class="text-xl font-bold text-gray-900">
                    PLATEFORME DE GESTION DES DEMANDES D'EMPLOI DE LA DIASPORA
                </h1>
            </div>
        </div>
    </header>

    <!-- Alerte rouge -->
    <div class="bg-blue-100 text-black-700 p-4 text-center">
        <p>
            Cette plateforme est <strong>exclusivement dédiée aux Sénégalais de la diaspora</strong> souhaitant intégrer la fonction publique et contribuer au développement du pays.<br>
            Elle vous permet de postuler aux offres d’emploi et de mettre votre expertise au service du Sénégal.<br><br>
            🇸🇳 <strong>Votre engagement, notre fierté. Construisons ensemble l’avenir du Sénégal !</strong> 🤝
        </p>
    </div>

    <!-- Conteneur principal -->
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-x-6 items-center mt-8 px-6 lg:px-20">

        <!-- Colonne gauche : Formulaire -->
        <div class="bg-white shadow-lg rounded-lg p-6 space-y-6">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Créer un compte</h2>

                <!-- Nom complet -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Nom complet') }}</label>
                    <input id="name" name="name" type="text" :value="old('name')" required autofocus autocomplete="name" 
                        class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition ease-in-out" />
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Email') }}</label>
                    <input id="email" name="email" type="email" :value="old('email')" required autocomplete="username" 
                        class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition ease-in-out" />
                </div>

                <!-- Mot de passe -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Mot de passe') }}</label>
                    <input id="password" name="password" type="password" required autocomplete="new-password" 
                        class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition ease-in-out" />
                </div>

                <!-- Confirmation du mot de passe -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Confirmer mot de passe') }}</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" 
                        class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition ease-in-out" />
                </div>

                <!-- Conditions générales -->
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="flex items-start">
                        <input id="terms" name="terms" type="checkbox" required 
                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                        <label for="terms" class="ml-2 text-sm text-gray-600">
                            {!! __('J\'accepte les :terms_of_service et la :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-indigo-600 hover:underline">'.__('Conditions Générales').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-indigo-600 hover:underline">'.__('Politique de Confidentialité').'</a>',
                            ]) !!}
                        </label>
                    </div>
                @endif

                <!-- Bouton de soumission -->
                <div class="text-center">
                    <button type="submit" class="w-full py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition ease-in-out">
                        {{ __('Création du compte') }}
                    </button>
                </div>
            </form>
        </div>

        <!-- Colonne droite : Image -->
        <div>
            <img src="images/log.png" alt="Illustration" class="w-full h-auto rounded-lg shadow-md">
        </div>

    </div>

    <!-- Pied de page -->
    <footer class="bg-gray-200 text-center text-sm text-gray-700 py-4 mt-8">
        <div class="container mx-auto">
            <div class="mb-2">
                <a href="#" class="text-blue-600 hover:underline mx-2">Mentions légales</a> |
                <a href="#" class="text-blue-600 hover:underline mx-2">Confidentialité et Cookies</a> |
                <a href="#" class="text-blue-600 hover:underline mx-2">Contact</a>
            </div>
            <p>fonctionpublique.gouv.sn | gouv.sn | presidence.sn | servicepublic.gouv.sn | fonctionpublique-actes.gouv.sn | fonctionpublique-actes.gouv.sn</p>
        </div>
    </footer>

</body>
</html>
