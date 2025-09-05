<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="6D'Clics" />
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}" />

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

