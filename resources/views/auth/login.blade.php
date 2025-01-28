<x-guest-layout>
     <!-- Header -->
     <header class="bg-white py-4 shadow">
        <div class="container mx-auto flex items-center justify-center px-6">
            <div class="flex flex-col items-center text-center space-y-4">
                <img src="images/dss.png" alt="Logo Sénégal" class="h-12">
                <h1 class="text-xl font-bold text-gray-900">
                    SERVIR MON PAYS
                </h1>
            </div>
        </div>
    </header>

    <!-- Alerte -->
    <div class="bg-blue-100 text-black-700 p-4 text-center">
        <p>
            Cette plateforme est <strong> dédiée aux Sénégalais de la diaspora</strong> souhaitant intégrer la fonction publique et contribuer au développement 
            du pays.<br>
            Elle vous permet de postuler aux offres d’emploi et de mettre votre expertise au service du Sénégal.<br><br>

            Pour plus d’informations ou toute assistance, contactez-nous à <strong>plateforme-emploi.fpubliquesn.com</strong>.<br><br>

            🇸🇳 <strong>Votre engagement, notre fierté. Dellusi, And Liggeeyal Sunu Réew!</strong> 🤝
        </p>
    </div>

    <!-- Conteneur principal -->
    <div class="container mx-auto flex flex-col md:flex-row gap-8 items-center justify-center mt-8 px-6 lg:px-20">

        <!-- Colonne gauche : Formulaire -->
        <div class="bg-white shadow-md rounded-md p-6 w-full md:w-1/2">
            <div class="mb-6 text-center">
                <a href="{{ route('register') }}" class="w-full py-3 bg-orange-500 text-white rounded-md hover:bg-orange-600 transition flex items-center justify-center">
                    <span class="mr-2">📂</span> Créer un compte
                </a>
                <p class="text-center text-blue-600 mt-2 cursor-pointer hover:underline">Comment s'inscrire ?</p>
            </div>

            <h2 class="text-lg font-semibold text-gray-900 mb-4">Se connecter</h2>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all ease-in-out" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mb-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all ease-in-out" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                    </label>
                    <a href="{{ route('profile.show') }}" class="text-sm text-blue-600 hover:underline">Mot de passe oublié ?</a>
                </div>

                <button type="submit" class="mt-6 w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    Connexion
                </button>
            </form>
        </div>

        <!-- Colonne droite : Image -->
        <div class="w-full md:w-1/2">
            <img src="images/fon.png" alt="Illustration" class="w-full h-auto rounded-lg shadow-md">
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

</x-guest-layout>
