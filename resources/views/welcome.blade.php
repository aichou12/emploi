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

    Pour plus d’informations ou toute assistance, contactez-nous à <strong>emploi@fonctionpublique.gouv.sn</strong>.<br><br>

    🇸🇳 <strong>Votre engagement, notre fierté. Construisons ensemble l’avenir du Sénégal !</strong> 🤝
</p>

    </div>

    <!-- Conteneur principal -->
    <div class="container mx-auto flex flex-wrap md:flex-nowrap items-center justify-center mt-8 px-6 lg:px-20">

        <!-- Colonne gauche : Formulaire -->
        <div class="w-full md:w-1/2 p-8">
            <div class="mb-6">
            <a href="{{ route('register') }}" class="w-full py-3 bg-orange-500 text-white rounded-md hover:bg-orange-600 transition flex items-center justify-center">
    <span class="mr-2">📂</span> Créer un compte
</a>

                <p class="text-center text-blue-600 mt-2 cursor-pointer hover:underline">Comment s'inscrire ?</p>
            </div>

            <div class="bg-white shadow-md rounded-md p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Se connecter</h2>

                <form action="{{ route('login') }}" method="POST">
                @csrf
                    <div class="mb-4">
                    <x-label for="email" value="{{ __('Email') }}" />
    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
 </div>

                    <div class="mb-4">
                    <x-label for="password" value="{{ __('Password') }}" />
    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
 </div>
                   

             <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="text-indigo-600 focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                        </label>
                        <a href="#" class="text-sm text-blue-600 hover:underline">Mot de passe oublié ?</a>
                    </div>

                    <button type="submit" class="mt-6 w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                        Connexion
                    </button><!-- Colonne droite : Image

                    <p class="text-center text-gray-600 mt-3 text-sm cursor-pointer hover:underline">← Retour au site du ministère</p> -->
                </form>
            </div>
        </div>

        <!-- Colonne droite : Image -->
        <div class="w-full md:w-1/2 p-6">
            <img src="images/fon.png" alt="Illustration" class="w-full h-auto rounded-lg shadow-md" style="margin-top: 100px;">
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
