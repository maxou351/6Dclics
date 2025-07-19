{{-- resources/views/accueil.blade.php --}}
@extends('layouts.app')

@section('title', 'Bienvenue')

{{--
TODO 
- Mobile part : centrer cards 2
- bandeau lateral plu^tot que fleches
- carrousel factorisable en js
- optimiser sur mobile pour bien mettre en avant la suite des sections
- ? sur le texte
- scroll 1/1
- bouton haut de page 
- accessibilité
--}}
@section('header')

    {{-- Banière et carte de service  --}}
    <section class="header-section">

        <div class="header-container">
            <h1 class="header-title">
                <span class="relative z-20">Max Morelli</span>
                <span class="header-title-underline"></span>
            </h1> 
            <p class="header-desc">
                Développeur web indépendant — accompagnement informatique, sites sur mesure & missions techniques
            </p>

            {{-- Carroussel sur Mobile --}}
            <div class="block md:hidden mt-8 overflow-hidden relative">
                @include('partials.carousel-services')
            </div>

            {{-- Grille sur Desktop --}}
            <div class="hidden md:grid grid-cols-1 md:grid-cols-3 gap-6">
                    {{-- Accompagnement --}}
                    <x-card-service
                        device="desktop"
                        icon="heroicon-o-question-mark-circle"
                        title="Accompagnement & formation informatique"
                        desc="Vous êtes un particulier en difficulté avec l'informatique et vous avez besoin d'aide ou de formation ?"
                        url="/accompagnement"
                        label="En savoir plus"
                    />

                    {{-- Création site web --}}
                    <x-card-service
                        device="desktop"
                        icon="heroicon-o-globe-alt"
                        title="Création, évolution & gestion de site web"
                        desc="Vous êtes entrepreneur, artisan ou association et vous souhaitez un site clair, moderne et facile à gérer ?"
                        url="/creation-site"
                        label="Découvrir"
                    />

                    {{-- Développement --}}
                    <x-card-service
                        device="desktop"
                        icon="heroicon-o-wrench-screwdriver"
                        title="Développement & missions techniques"
                        desc="Vous êtes recruteur ou porteur de projet et vous cherchez un développeur fiable et expérimenté ?"
                        url="/profil-tech"
                        label="Voir le profil"
                    />
            </div>
        </div>
        <div class="flex justify-center mt-4 md:hidden">
            <x-heroicon-o-chevron-down class="h-6 w-6 text-white animate-bounce" />
        </div>
    </section>
    
@endsection

@section('content')

    {{-- Section présentation 
     TODO
    - UX bouton Voir mon parcours à regler
    - animation 
    - component blade bloc texte + image
    - changer/ Ajouter photos
    - explications noms revoir contenu + css
    - "ambitieux" .... ?
    - citation "c'est ce que je veux faire" trop axée aide et pas dév eloppement
    - moins négatifs sur projets passés
    --}}
    <section class="section-pres">
        <div class="container-pres">

            {{-- Présentation : bloc texte + photo --}}
            <div class="bloc-duo">
                <div class="txt-bloc-duo">
                    <h2 class="text-3xl font-bold text-primary mb-4">Bienvenue !</h2>
                    <p>
                        Je suis développeur web freelance, basé à Rennes.  
                        Après cinq ans d'expérience en entreprise dans le développement web et logiciel, 
                        j’ai eu la chance de travailler sur des projets variés, parfois complexes, souvent ambitieux.
                        <a href="#parcours" class="button-text">
                            Voir mon parcours
                            <x-heroicon-o-arrow-right class="button-text-icone animate-pulse" />
                        </a>
                        <br>
                        Depuis 2025, je me suis lancé dans la grande aventure de l'entrepreunariat pour pouvoir, à mon tour, 
                        apporter ma vision et mon expérience dans le monde de l'informatique.
                       
                    </p>
                </div>

                <div class="div-img-bloc-duo">
                    <img 
                      src="{{ asset('images/Untitled.jpg') }}" 
                      class="img-bloc-duo" 
                      alt="Image" 
                    />
                </div>
            </div>

            {{-- Barre d'infos --}} 
            <div class="barre-icone bg-light text-primary">
                <div class="icone-pres flex items-center justify-center gap-2">
                    <x-heroicon-o-calendar class="w-5 h-5 text-accent" />
                    <span>25 ans</span>
                </div>
                <div class="icone-pres flex items-center justify-center gap-2">
                    <x-heroicon-o-clock class="w-5 h-5 text-accent" />
                    <span>5 ans d'expérience</span>
                </div>
                <div class="icone-pres flex items-center justify-center gap-2">
                    <x-heroicon-o-check-badge class="w-5 h-5 text-accent" />
                    <span>Indépendant depuis 2025</span>
                </div>
            </div>

            {{-- Sens, déclic, réflexion --}}
            <div class="bloc-txt">
                <p>
                    Au fil du temps, les gros projets auxquels j'ai pu prendre part perdaient parfois de leur sens.  
                    J'avais besoin de retrouver du concret et de l’humain dans mon travail.
                </p>
                <div class="bloc-info">
                    💡 Depuis quelque temps, l’idée de me lancer à mon compte me trottait dans la tête...
                </div>
            </div>

            {{-- Déclic: bloc texte + photo --}}
            <div class="bloc-duo">
                <div class="txt-bloc-duo">
                    <p>
                        Par une belle journée, ma grand-mère m'appelle en panique suite à un souci informatique.  
                        Tout en la guidant pas à pas, le déclic me vient :
                    </p>

                    <blockquote class="bloc-quote">
                        <strong>C'est exactement ce que je veux faire au quotidien.</strong>
                    </blockquote>

                    <p>
                        Utiliser mes connaissances pour aider, transmettre, rendre l’informatique plus accessible.  
                        Pas juste coder, mais comprendre, simplifier et accompagner.
                    </p>
                </div>
                <div class="div-img-bloc-duo">
                    <img 
                      src="{{ asset('images/grandma.png') }}"
                      class="img-bloc-duo" 
                      alt="Photo petit fils et grand-mère" 
                    />
                </div>
                
            </div>

            {{-- Vision + valeurs --}}
            <div class="bloc-txt">
                <p>
                    J’ai donc créé mon entreprise avec une vision claire :
                </p>

                <blockquote class="bloc-quote">
                    <strong>Permettre à tous d'apprivoiser le numérique et d'en tirer le meilleur parti</strong>.
                </blockquote>

                <p>
                    Que vous souhaitiez apprendre les bases à votre rythme, créer un site vitrine, ou prendre en main un outil numérique,  
                    je vous accompagne avec bienveillance, patience et pédagogie.  
                    Mon objectif : rendre le numérique plus simple, plus clair, plus humain.
                </p>
            </div>

            {{-- Explications nom --}}
            <div x-data="{ showInfo: false }" class="mt-8">
                <button 
                    @@click="showInfo = !showInfo"
                    class="flex items-center gap-2 mt-6 text-primary font-semibold hover:underline focus:outline-none"
                >
                    <span>En savoir plus sur le nom de la marque</span>
                    <span 
                        :class="{ 'rotate-180': showInfo }" 
                        class="transition-transform transform duration-300"
                    >
                        <x-heroicon-o-chevron-down class="w-4 h-4" />
                    </span>
                </button>

                <div x-show="showInfo" x-transition class="bloc-txt mt-8 border-t border-light pt-6">
                    <h3 class="text-xl font-semibold text-primary mb-2">Le nom "<span class="text-accent">Les 6D’clics</span>"</h3>
                    
                    <p>
                        Ce nom est né d’une réflexion autour du sens et de l’impact que je souhaite donner à mon accompagnement numérique.
                    </p>

                    <p class="mt-4">
                        <span class="text-accent font-semibold">Les 6D</span>, ce sont <strong>six mots-clés</strong> qui définissent mon approche :
                    </p>
                    <ul class="list-disc list-inside mt-2 space-y-1">
                        <li><strong>Découvrir</strong> — rendre le numérique accessible, étape par étape.</li>
                        <li><strong>Débloquer</strong> — résoudre les obstacles techniques ou mentaux.</li>
                        <li><strong>Développer</strong> — des compétences, des outils ou des projets.</li>
                        <li><strong>Déployer</strong> — mettre en ligne, diffuser, rendre visible.</li>
                        <li><strong>Documenter</strong> — expliquer clairement, guider durablement.</li>
                        <li><strong>Dépanner</strong> — intervenir rapidement, de manière fiable.</li>
                    </ul>

                    <p class="mt-4">
                        Le mot <span class="text-accent font-semibold">“clics”</span> fait évidemment référence au numérique, mais aussi au geste simple, familier.
                        Il évoque également <strong>le déclic</strong> : ce moment où tout devient plus clair.
                    </p>

                    <p class="mt-4">
                        Et puis... <span class="text-accent font-semibold">les 6D, ce sont aussi "les idées"</span>. Un clin d'œil sonore pour rappeler que le numérique, ce n’est pas qu’une affaire de machines, mais aussi de sens, d’humain et de créativité.
                    </p>
                </div>
            </div>

            {{-- Barre d'infos --}} 
            <div class="barre-icone bg-primary text-white">
                <div class="icone-pres flex items-center justify-center gap-2">
                    <x-heroicon-o-user-group class="w-5 h-5 text-accent" />
                    <span>Pour tous</span>
                </div>
                <div class="icone-pres flex items-center justify-center gap-2">
                    <x-heroicon-o-heart class="w-5 h-5 text-accent" />
                    <span>Bienveillance</span>
                </div>
                <div class="icone-pres flex items-center justify-center gap-2">
                    <x-heroicon-o-check-circle class="w-5 h-5 text-accent" />
                    <span>Fiabilité</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Section localisation
    TODO 
    - gestion de l'affichage image
    - meilleures photos
    - amélioration de l'animation
    - ajout texte
    - lancement sur mobile ?
    --}}
    {{-- <section class="bg-light space-y-6 py-8">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Mon bureau {test}</h2>
            <div class="relative w-full h-[400px] overflow-hidden group">
                <div class="absolute inset-0 z-10">
                    <img src="/images/Tiny1.jpg"
                        class="absolute inset-0 w-full h-full object-cover scale-100 opacity-100
                                transition-opacity" />

                    <img src="/images/Tiny2.jpg"
                        class="absolute inset-0 w-full h-full object-cover scale-105 opacity-0
                                transition-opacity" />

                    <img src="/images/Tiny3.jpg"
                        class="absolute inset-0 w-full h-full object-cover scale-110 opacity-0
                                transition-opacity" />

                    <img src="/images/Tiny4.jpg"
                        class="absolute inset-0 w-full h-full object-cover scale-115 opacity-0
                                transition-opacity" />
                </div>
                <div class="relative z-0 flex flex-col items-center justify-center h-full opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-[2000ms]">
                    <div class="bloc-duo drop-shadow-lg">
                        <div class="txt-bloc-duo">
                            <h2 class="text-3xl font-bold text-primary drop-shadow-lg">Bienvenue chez moi</h2>
                            <p>
                                Je suis développeur web freelance, basé à Rennes.  
                                Après cinq ans d'expérience en entreprise dans le développement web et logiciel, 
                                j’ai eu la chance de travailler sur des projets variés, parfois complexes, souvent ambitieux.
                            </p>
                        </div>

                        <div class="div-img-bloc-duo">
                            <img 
                                src="{{ asset('images/Tiny1.jpg') }}" 
                                class="img-bloc-duo" 
                                alt="Image" 
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- Timeline parcours 
    TODO
    - Lien vers CV
    --}}
    <section id="parcours" class="py-6 md:py-8 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Mon parcours</h2>
            <ol class="relative border-s-4 border-primary">

                <li class="timeline-group">
                    <div data-sr class="timeline-point"></div>
                    <div data-sr class="timeline-card">
                    <h3 class="timeline-titre">2025 – Création de mon activité indépendante</h3>
                    <p class="timeline-desc">
                        Je fonde mon entreprise de services numériques à Rennes : aide informatique pour les particuliers, création et maintenance de sites web, mission technique sur mesure.
                    </p>
                    </div>
                </li>

                <li class="timeline-group">
                    <div data-sr class="timeline-point"></div>
                    <div data-sr class="timeline-card">
                    <h3 class="timeline-titre">2022 – Thales Services Numériques</h3>
                    <p class="timeline-desc">
                        Je rejoins Thales Services Numériques comme développeur, où je travaille sur des outils métiers internes et des solutions logicielles dans un environnement exigeant.
                    </p>
                    </div>
                </li>

                <li class="timeline-group">
                    <div data-sr class="timeline-point"></div>
                    <div data-sr class="timeline-card">
                    <h3 class="timeline-titre">2022 – Obtention du Master MS2D</h3>
                    <p class="timeline-desc">
                        Je valide le titre de niveau 7 "Manager de solutions digitales et data" à l’ENI École Informatique, avec une spécialisation dans le développement web et la gestion de projets numériques.
                    </p>
                    </div>
                </li>

                <li class="timeline-group">
                    <div data-sr class="timeline-point"></div>
                    <div data-sr class="timeline-card">
                    <h3 class="timeline-titre">2020 – Alternance au sein du groupe ISB</h3>
                    <p class="timeline-desc">
                        En parallèle de ma formation à l’ENI, j’intègre le Groupe ISB en tant que développeur web en alternance, où je conçois des outils internes pour la gestion de production et le suivi logistique.
                    </p>
                    </div>
                </li>

                <li class="timeline-group">
                    <div data-sr class="timeline-point"></div>
                    <div data-sr class="timeline-card">
                    <h3 class="timeline-titre">2019 – Obtention du Bac +2 Développement Web & Mobile</h3>
                    <p class="timeline-desc">
                        Je valide mon diplôme DWWM (Développeur web et web mobile) à l’ENI, avec une solide formation pratique en HTML, CSS, JavaScript, PHP et bases de données.
                    </p>
                    </div>
                </li>
            </ol>  
        </div>
    </section>

    {{-- Orientation vers les 3 cibles --}}
    <section class="services-section" aria-labelledby="services-heading">
        <div class="services-container">

            <h2 id="services-heading" class="services-title">Comment puis-je vous aider ?</h2>
            
            <div class="services-grid" role="list">
                <!-- Accompagnement numérique -->
                <a 
                    href="{{ url('/accompagnement') }}" 
                    class="services-card group" 
                    role="listitem" 
                    aria-label="En savoir plus sur l'accompagnement numérique"
                >
                    <div class="flex flex-col items-center">
                        <x-heroicon-o-question-mark-circle class="services-card-icone" aria-hidden="true" focusable="false" />
                        <h3 class="services-card-title">Accompagnement numérique</h3>
                        <p class="services-card-text">Aide et formations pédagogiques sur mesure pour vous aider à mieux utiliser les outils numériques, à votre rythme.</p>
                        <span class="services-card-btn">Commencer l'accompagnement →</span>
                    </div>
                </a>

                <!-- Création de site -->
                <a 
                    href="{{ url('/creation-site') }}" 
                    class="services-card group" 
                    role="listitem" 
                    aria-label="Découvrir les offres de création de site"
                >
                    <div class="flex flex-col items-center">
                        <x-heroicon-o-window class="services-card-icone" aria-hidden="true" focusable="false" />
                        <h3 class="services-card-title">Création de site</h3>
                        <p class="services-card-text">Conception de sites web modernes, responsives et adaptés à votre image et à vos besoins, de l’idée à la mise en ligne.</p>
                        <span class="services-card-btn">Découvrir les offres →</span>
                    </div>
                </a>

                <!-- Missions techniques -->
                <a 
                    href="{{ url('/profil-tech') }}" 
                    class="services-card group" 
                    role="listitem" 
                    aria-label="Voir mon profil technique pour les missions techniques"
                >
                    <div class="flex flex-col items-center">
                        <x-heroicon-o-code-bracket class="services-card-icone" aria-hidden="true" focusable="false" />
                        <h3 class="services-card-title">Missions techniques</h3>
                        <p class="services-card-text"> Développement rigoureux et sur mesure, pour des solutions fiables, performantes et parfaitement adaptées à vos besoins techniques.</p>
                        <span class="services-card-btn">Voir mon profil tech →</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    @include('partials.section-contact')
@endsection


@push('scripts')
    @vite('resources/js/components/carousel.js')
@endpush

