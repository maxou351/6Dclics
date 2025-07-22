@extends('layouts.app')
@section('title', 'Profil technique')

@section('header')
    <section class="header-pages-section">
        <div class="header-container">
            <h1 class="header-title">
                <span class="relative z-20">Missions techniques</span>
                <span class="header-title-underline"></span>
            </h1> 
            <p class="header-desc">
                Développement web, scripts, automatisation.
            </p>
            <ul class="mt-6 flex flex-wrap justify-center gap-4 text-md text-white">
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Backend/API, intégration, base de données
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Scripts, outils, automatisation (Ansible, etc.)
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Mise en production et maintenance légère
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Approche propre, sécurisée, documentée
                </li>
            </ul>
        </div>
        <x-heroicon-o-code-bracket class="absolute top-20 right-8 w-28 h-28 text-accent opacity-50 hidden md:block" />
    </section>
@endsection

@section('content')

<section class="page-intro">
    <div class="intro-container">
        <h2 class="section-title">Ce que je propose</h2>
        <ul class="intro-list">
            <li>Blablza</li>
            <li>Blablza</li>
            <li>Blablza</li>
            <li>Blablza</li>
        </ul>
        <p class="section-text mt-4">Blablza</p>
    </div>
</section>

{{-- Pourquoi moi ? --}}
<section class="section-container bg-light rounded-2xl p-6 md:p-10 my-12">
    <h2 class="section-title mb-6">Pourquoi me faire confiance&nbsp;?</h2>
    <ul class="grid gap-6 md:grid-cols-2 text-text">
        <li class="flex items-start gap-3">
            <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"/>
            </svg>
            <span>5 ans d’expérience en backend, frontend et gestion de projet</span>
        </li>
        <li class="flex items-start gap-3">
            <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"/>
            </svg>
            <span>Maîtrise de Laravel, Symfony, Java, Python, SQL, Bash, DevOps</span>
        </li>
        <li class="flex items-start gap-3">
            <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"/>
            </svg>
            <span>Capacité à vulgariser, documenter et transmettre efficacement</span>
        </li>
        <li class="flex items-start gap-3">
            <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"/>
            </svg>
            <span>Autonome, rigoureux et force de proposition</span>
        </li>
    </ul>
</section>

{{-- Affichage du CV dans une galerie
TODO
- Déplacement pendant le zoom ? Souris + flèches
- Vérifier responsive de galerie 
--}}
@include('components.galerie')

{{-- Affichage du CV Pnj x2
TODO
- keep loop ? Gestion de la loupe
 --}}
<section class="section-container text-center my-12 px-4 max-w-5xl mx-auto">
    <h2 class="section-title mb-6">Consulter mon CV</h2>
    <p class="mt-6 text-sm text-gray-600">
        👉 Vous pouvez aussi <a href="{{ asset('cv-max-morelli.pdf') }}" target="_blank"
                                class="text-blue-600 underline hover:text-blue-800 transition">télécharger le CV en PDF</a>.
    </p>

    <div class="cv-preview flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 justify-center items-center">
         <div class="relative">
            <img src="{{ asset('images/cv-page-1.png') }}" alt="Page 1 du CV Max Morelli"
                id="cvImage1"
                class="w-full max-w-lg max-w-full md:max-w-lg rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer open-gallery" 
                data-gallery-index="0"/>
            {{-- <div id="zoomLens" class="zoom"></div> --}}
        </div>
        <img src="{{ asset('images/cv-page-2.png') }}" alt="Page 2 du CV Max Morelli"
             class="w-full max-w-lg max-w-full md:max-w-lg rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer open-gallery"
             data-gallery-index="1" />
    </div>

</section>

{{-- BArre transversale contact
TODO
- meilleure visibilité
- responsive
 --}}
<div id="socialBar" class="fixed top-1/3 left-4 flex flex-col space-y-4 z-50">
  <a href="https://github.com/ton-pseudo" target="_blank" aria-label="GitHub" class="text-gray-600 hover:text-black transition-transform transform hover:scale-110">
    <!-- GitHub icon -->
    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
      <path d="M12 0C5.37 0 0 5.37 0 12a12 12 0 008.21 11.44c.6.11.82-.26.82-.58v-2.01c-3.34.73-4.04-1.61-4.04-1.61-.55-1.38-1.35-1.75-1.35-1.75-1.1-.75.08-.73.08-.73 1.22.09 1.86 1.26 1.86 1.26 1.08 1.85 2.84 1.32 3.53 1.01.11-.78.42-1.32.76-1.62-2.66-.3-5.47-1.34-5.47-5.96 0-1.32.47-2.4 1.24-3.25-.12-.3-.54-1.51.12-3.15 0 0 1.01-.32 3.3 1.23A11.5 11.5 0 0112 5.8c1.03.01 2.07.14 3.04.41 2.29-1.55 3.3-1.23 3.3-1.23.66 1.64.24 2.85.12 3.15.77.85 1.24 1.93 1.24 3.25 0 4.63-2.81 5.65-5.49 5.95.43.37.81 1.1.81 2.22v3.29c0 .32.21.69.82.58A12.01 12.01 0 0024 12c0-6.63-5.37-12-12-12z"/>
    </svg>
  </a>

  <a href="https://www.linkedin.com/in/ton-profil" target="_blank" aria-label="LinkedIn" class="text-gray-600 hover:text-blue-600 transition-transform transform hover:scale-110">
    <!-- LinkedIn icon -->
    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
      <path d="M20.447 20.452H17.2v-5.569c0-1.328-.027-3.037-1.852-3.037-1.854 0-2.138 1.446-2.138 2.94v5.666h-3.248V9h3.123v1.561h.045c.435-.824 1.496-1.694 3.077-1.694 3.292 0 3.898 2.165 3.898 4.981v6.604zM5.337 7.433c-1.044 0-1.888-.846-1.888-1.888 0-1.044.844-1.889 1.888-1.889 1.043 0 1.888.845 1.888 1.889 0 1.042-.845 1.888-1.888 1.888zm1.626 13.019H3.71V9h3.253v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.207 24 24 23.227 24 22.271V1.729C24 .774 23.207 0 22.225 0z"/>
    </svg>
  </a>

  <a href="mailto:contact@tonsite.com" aria-label="Email" class="text-gray-600 hover:text-rose-600 transition-transform transform hover:scale-110">
    <!-- Mail icon -->
    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
      <path d="M4 4h16c1.1 0 2 .9 2 2v.01l-10 6.49L2 6.01V6c0-1.1.9-2 2-2zm16 4.25l-8 5.19-8-5.19V18c0 1.1.9 2 2 2h12a2 2 0 002-2V8.25z"/>
    </svg>
  </a>
</div>

@include('partials.section-contact')
@endsection

@push('scripts')
    @vite('resources/js/components/galerie.js')
    {{-- @vite('resources/js/components/loop.js') --}}
@endpush
