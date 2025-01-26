<x-guest-layout>
    <!-- Application d'un fond blanc -->
    <div class="bg-white min-h-screen">
        <!-- Titre -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900">
                PLATEFORME DE GESTION DES DEMANDES D'EMPLOI - Diaspora
            </h1>
        </div>

        <div class="flex items-center justify-between">
            <!-- Formulaire à gauche -->
            <div class="w-1/2 pr-4">
                <x-authentication-card>
                    <!-- Ajouter une image ici -->

                    <x-validation-errors class="mb-4" />

                    @session('status')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ $value }}
                        </div>
                    @endsession

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-button class="ms-4">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                </x-authentication-card>
            </div>

            <!-- Image à droite -->
            <div class="w-1/2 pl-4">
                <img src="{{ asset('images/fon.png') }}" alt="Your Image" class="mx-auto max-w-full h-auto" />
            </div>
        </div>
    </div>
</x-guest-layout>
