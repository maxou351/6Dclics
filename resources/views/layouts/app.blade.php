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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 800,
        once: true,
    });
    </script>

    <title>@yield('title', 'Max Morelli – Développeur Web')</title>
    <meta name="description" content="@yield('meta_description', 'Création de sites web, accompagnement numérique et formation informatique à Rennes avec 6D Clics.')">
    <meta name="keywords" content="@yield('meta_keywords', 'création site web, formation informatique, accompagnement numérique, Rennes')">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('og_title', 'Max Morelli – Développeur Web')">
    <meta property="og:description" content="@yield('og_description', 'Création de sites web modernes et accompagnement sur mesure pour particuliers et professionnels.')">
    <meta property="og:image" content="@yield('og_image', asset('images/Logo-6DClics.svg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Les 6D'Clics">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>

    @stack('scripts')
</body>
</html>

