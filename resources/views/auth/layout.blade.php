<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Authentification' }} - {{ config('app.name', 'Laravel') }}</title>
    
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/css/auth.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    @endif
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">AchatFacile</h1>
            <p class="text-gray-600 dark:text-gray-400">Gestion de votre entreprise</p>
        </div>

        <!-- Card principale -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl p-8">
            @yield('content')
        </div>

        <!-- Footer -->
        <div class="text-center mt-6">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                © {{ date('Y') }} AchatFacile. Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>
