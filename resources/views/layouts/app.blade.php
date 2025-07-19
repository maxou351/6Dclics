<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Max Morelli – Développeur Web')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="flex flex-col min-h-screen text-text bg-white">

    {{-- Navigation 
    TODO: Uniquement burger sticky sur mobile
    --}}
    @include('partials.nav')

    {{-- En-tête optionnel --}}
    <header>
        @yield('header')
    </header>

    <main class="flex-grow">
        
        {{-- Contenu principal --}}
        @yield('content')

        {{-- Appel à l’action final optionnel --}}
        @yield('cta')
    </main>

    {{-- Pied de page --}}
    @include('partials.footer')

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @stack('scripts')
</body>
</html>

