@extends('auth.layout')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="text-center">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Connexion</h2>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            Connectez-vous à votre compte
        </p>
    </div>

    <!-- Formulaire -->
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        
        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                Adresse e-mail
            </label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                value="{{ old('email') }}"
                required 
                autofocus
                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                placeholder="votre@email.com"
            >
            @error('email')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <!-- Mot de passe -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                Mot de passe
            </label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                required
                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                placeholder="••••••••"
            >
            @error('password')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <!-- Se souvenir de moi -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input 
                    type="checkbox" 
                    id="remember" 
                    name="remember" 
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 dark:border-gray-600 rounded"
                >
                <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                    Se souvenir de moi
                </label>
            </div>
        </div>

        <!-- Bouton de connexion -->
        <button 
            type="submit"
            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
        >
            Se connecter
        </button>
    </form>

    <!-- Lien vers inscription -->
    <div class="text-center">
        <p class="text-sm text-gray-600 dark:text-gray-400">
            Pas encore de compte ? 
            <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                Créer un compte
            </a>
        </p>
    </div>
</div>
@endsection
