<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Mini-CRM') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 text-gray-900 selection:bg-indigo-500 selection:text-white">
    <div class="relative min-h-screen flex flex-col justify-center items-center p-6">

        <div class="absolute top-0 right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Login
                </a>
            @endauth
        </div>

        <div class="max-w-md w-full bg-white rounded-xl shadow-md overflow-hidden p-8 border border-gray-300 text-center">

            <div class="mx-auto mb-6">
                <img src="{{ asset('images/logo.jpg') }}" alt="Mini-CRM Logo"
                    class="mx-auto h-16 w-auto object-contain">
            </div>

            <h1 class="text-2xl font-bold text-gray-900 tracking-tight mb-2">
                Mini-CRM System
            </h1>
            <p class="text-sm text-gray-500 mb-8">
                Manage your corporate partners and employee directories securely from a single consolidated platform.
            </p>

            <div class="space-y-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="w-full inline-flex items-center justify-center px-4 py-2.5 bg-indigo-600 border border-transparent rounded-lg font-semibold text-sm text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 transition-colors duration-150">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="w-full inline-flex items-center justify-center px-4 py-2.5 bg-indigo-600 border border-transparent rounded-lg font-semibold text-sm text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 transition-colors duration-150">
                        Sign In to Access Dashboard
                    </a>
                @endauth
            </div>

        </div>

        <div class="mt-8 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} Mini-CRM Engine. All rights reserved.
        </div>
    </div>
</body>

</html>