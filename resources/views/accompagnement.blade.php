@extends('layouts.app')

@section('title', 'Accompagnement informatique')

{{-- Header --}}
@section('header')
    <section class="relative header-pages-section">
        <div class="header-container">
            <div class="relative inline-block">
                <h1 class="header-title">
                    <span class="relative z-20">Accompagnement informatique</span>
                    <span aria-hidden="true"
                        class="header-title-underline"></span>
                </h1>
            </div>
            <p class="header-desc">Formation, dépannage, assistance.</p>

            <ul class="header-list">
                <li class="header-list-item">
                    <x-heroicon-o-check class="header-list-item-icone" />
                    À domicile ou à distance
                </li>
                <li class="header-list-item">
                    <x-heroicon-o-check class="header-list-item-icone" />
                    Pédagogie adaptée à votre rythme
                </li>
                <li class="header-list-item">
                    <x-heroicon-o-check class="header-list-item-icone" />
                    Pour tous les profils
                </li>
                <li class="header-list-item">
                    <x-heroicon-o-check class="header-list-item-icone" />
                    Sur tous vos appareils
                </li>
            </ul>
        </div>

        <!-- Ampoule décorative -->
        <x-heroicon-o-light-bulb 
            class="header-bg-icone" 
            aria-hidden="true" />
    </section>
@endsection

{{--
TODO
- mobile
- css
- précision sur les niveau, débutant peut-être un peu abusé ?
    Explication d'outils, WhatsApp
    transferer les imagesd, sauvegarder 
-affichage de la modale trop tôt sur tel
 --}}


@section('content')
    {{-- Barre d'infos --}}
    {{-- <div class="barre-icone-5 bg-light text-primary">
        <div class="icone-pres flex items-center justify-center gap-2">
            <x-heroicon-o-check-circle class="w-6 h-6 text-accent mt-1" />
            <span>Tout niveaux</span>
        </div>
        <div class="icone-pres flex items-center justify-center gap-2">
            <x-heroicon-o-chat-bubble-left-right class="w-6 h-6 text-accent mt-1" />
            <span>Langage clair</span>
        </div>
        <div class="icone-pres flex items-center justify-center gap-2">
            <x-heroicon-o-document-text class="w-6 h-6 text-accent mt-1" />
            <span>Support écrit</span>
        </div>
        <div class="icone-pres flex items-center justify-center gap-2">
            <x-heroicon-o-device-phone-mobile class="w-6 h-6 text-accent mt-1" />
            <span>A domicile ou à distance</span>
        </div>
        <div class="icone-pres flex items-center justify-center gap-2">
            <x-heroicon-o-cpu-chip class="w-6 h-6 text-accent mt-1" />
            <span>5+ ans d’expérience </span>
        </div>
    </div> --}}

    {{-- Intro --}}
    <section id="introduction" class="py-12 px-6 max-w-4xl mx-auto text-center">
        <h2 class="intro-title">Un accompagnement humain et personnalisé</h2>
        <p class="intro-desc">
            Que vous soyez débutant, curieux ou déjà à l'aise avec le numérique, je vous propose un accompagnement ou dépannage adapté à votre niveau, vos besoins, et votre matériel. 
        </p>

        <div class="intro-grid">
            <!-- Bloc questionnaire -->
            <div 
              class="intro-card"
              onclick="document.getElementById('start-quiz-btn').click()">
                <div>
                    <h3 class="intro-card-title">Vous voulez aller droit au but&nbsp;?</h3>
                    <p class="intro-card-text">
                        Répondez à <strong>2 questions</strong> pour être guidé vers la section qui vous concerne :
                        type d’accompagnement, <strong>tarifs</strong>, modalités, tout est ciblé selon votre besoin.
                    </p>
                    <span class="intro-card-badge bg-accent cursor-default opacity-90 animate-pulse-soft">
                        💡 Conseillé si vous savez ce que vous cherchez
                    </span>
                </div>
                <button
                    id="start-quiz-btn"
                    class="intro-btn"
                >
                    🎯 Je lance le questionnaire
                </button>
            </div>

            <!-- Bloc navigation libre -->
            <div 
              class="intro-card"
              onclick="window.location.href='#services'">
                <div>
                    <h3 class="intro-card-title">Vous préférez explorer par vous-même&nbsp;?</h3>
                    <p class="intro-card-text">
                        Parcourez la page à votre rythme, sans passer par le questionnaire. Vous y trouverez toutes les informations.
                    </p>
                    <span class="intro-card-badge">
                        👀 Vue d’ensemble complète
                    </span>
                </div>
                <a
                    href="#services"
                    class="intro-link"
                    role="button"
                >
                    🧭 Je préfère explorer la page
                </a>
            </div>
        </div>
    </section>

    {{-- Questionnaire --}}
    <section id="questionnaire" class="scroll-mt-24 py-2 px-6 primary hidden">
        <x-quiz 
            key="accompagnement"
            title="Voyons comment je peux vous aider"
            result-selector="#bloc-debutant"
        />
        <div id="accompagnement-questionnaire" data-component="questionnaire"></div>

        <x-quiz-section 
                id="deb-depannage"
                icon="wrench"
                title="Dépannage pour débutants"
                description="Vous rencontrez un problème technique et vous êtes peu à l’aise avec l’informatique ? 
                Je vous guide pas à pas pour résoudre vos difficultés, que ce soit une perte de mot de passe, un souci d’imprimante, une connexion qui ne fonctionne plus, etc.
                L’objectif est de vous redonner confiance en vous et de résoudre le problème rapidement."
                tarif="30"
            />

            <x-quiz-section 
                id="deb-formation"
                icon="book-open"
                title="Formation adaptée aux débutants"
                description="Vous souhaitez apprendre à utiliser un logiciel ou un appareil numérique à votre rythme ?  
                Je propose des formations simples, claires, adaptées à votre niveau pour que vous puissiez progresser en toute sérénité.  
                Que ce soit WhatsApp, gestion des photos, ou initiation à l’ordinateur, je suis là pour vous accompagner."
            />

            <x-quiz-section 
                id="deb-init"
                icon="computer-desktop"
                title="Démarrage et installation pour débutants"
                description="Vous venez d’acquérir un nouvel équipement (ordinateur, smartphone, imprimante, box internet) et vous souhaitez une aide à l’installation et à la prise en main ?  
                Je vous accompagne pas à pas pour configurer et démarrer votre matériel dans les meilleures conditions."
            />

            <x-quiz-section 
                id="int-depannage"
                icon="wrench"
                title="Dépannage ciblé pour utilisateurs intermédiaires"
                description="Vous êtes déjà à l’aise avec certains outils, mais vous rencontrez un problème spécifique (connexion, mise à jour, logiciel qui plante) ?  
                Je vous aide à diagnostiquer et résoudre rapidement ces soucis techniques."
            />

            <x-quiz-section 
                id="int-formation"
                icon="book-open"
                title="Formation pour utilisateurs intermédiaires"
                description="Vous souhaitez approfondir vos compétences ou découvrir de nouveaux outils ?  
                Je propose des formations sur mesure pour renforcer vos connaissances et vous permettre d’être plus autonome dans votre usage numérique."
            />

            <x-quiz-section 
                id="int-init"
                icon="computer-desktop"
                title="Installation et prise en main pour utilisateurs intermédiaires"
                description="Vous avez besoin d’un coup de pouce pour configurer un nouvel outil ou équipement ?  
                Je vous accompagne dans l’installation et la configuration pour que vous puissiez démarrer rapidement."
            />

            <x-quiz-section 
                id="aut-depannage"
                icon="wrench"
                title="Dépannage pour utilisateurs avancés"
                description="Vous êtes autonome mais vous cherchez une assistance technique fiable pour résoudre un problème spécifique ?  
                Je propose des interventions précises, efficaces et adaptées à votre niveau."
            />

            <x-quiz-section 
                id="aut-formation"
                icon="book-open"
                title="Formation avancée et accompagnement technique"
                description="Vous souhaitez approfondir certaines compétences techniques ou vous former à des outils plus complexes ?  
                Je propose des formations avancées, techniques et personnalisées pour répondre à vos objectifs."
            />

            <x-quiz-section 
                id="aut-init"
                icon="computer-desktop"
                title="Installation et mise en route pour utilisateurs avancés"
                description="Vous avez besoin d’un professionnel pour une installation complexe ou une configuration avancée ?  
                Je vous accompagne dans la mise en place et la configuration optimale de vos équipements et logiciels."
            />
    </section>

{{-- Partie statique --}}

    {{-- Services --}}
    <section id="services" class="scroll-mt-24 section-component">
        <h2 id="levels-heading" class="section-titre">
            Je propose des services adaptés à vos besoins
        </h2>
        <div class="section-grid2x2" role="list">

            <!-- Formation courte -->
            <div class="acc-services-container" role="listitem">
                <x-heroicon-o-clock class="services-container-icone"/>
                <div>
                    <h3 class="section-container-titre ">Formation courte</h3>
                    <p>Apprendre à maîtriser un outil ou une fonctionnalité en une ou deux sessions.</p>
                </div>
            </div>

            <!-- Formation suivie -->
            <div class="acc-services-container" role="listitem">
                <x-heroicon-o-academic-cap class="services-container-icone" />
                <div>
                    <h3 class="services-container-titre">Formation suivie</h3>
                    <p>Un accompagnement régulier sur plusieurs semaines pour gagner en autonomie.</p>
                </div>
            </div>

            <!-- Dépannage ponctuel -->
            <div class="acc-services-container" role="listitem">
                <x-heroicon-o-wrench-screwdriver class="services-container-icone" />
                <div>
                    <h3 class="services-container-titre">Dépannage ponctuel</h3>
                    <p>Une aide rapide pour résoudre un blocage ou un dysfonctionnement.</p>
                </div>
            </div>

            <!-- Initialisation -->
            <div class="acc-services-container" role="listitem">
                <x-heroicon-o-arrow-path class="services-container-icone" />
                <div>
                    <h3 class="services-container-titre">Aide au démarrage</h3>
                    <p>Installation, initialisation et paramétrage d'outils ou appareils</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Niveaux 
    TODO
    - carroussel on mobile
    --}}
    <section id="levels" class="section-component">
        <h2 id="levels-heading" class="section-titre">
            Je m'adapte à tous les niveaux
        </h2>

        <div class="section-grid3x1" role="list">

            <!-- Débutant -->
            <div role="list-item" class="levels-container">
                <div class="levels-container-div-icone" aria-hidden="true" focusable="false">
                    <x-heroicon-o-academic-cap class="levels-container-icone"/>
                </div>
                <h3 class="levels-container-titre">Vous débutez ou vous êtes peu à l’aise</h3>
                <p class="mb-4">
                    Pas de panique ! Je vous accompagne avec patience et pédagogie. On peut par exemple apprendre ensemble à :
                </p>
                <ul class="levels-liste ">
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Envoyer un e-mail ou une photo</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Installer une imprimante ou un nouveau téléphone</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Faire une demande sur un site comme la <strong>CAF</strong> ou <strong>Ameli</strong></span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Retrouver un mot de passe ou sécuriser vos comptes</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>... Et bien d'autres situations !</span>
                    </li>
                </ul>
            </div>

            <!-- Intermédiaire -->
            <div role="list-item" class="levels-container">
                <div class="levels-container-div-icone" aria-hidden="true" focusable="false">
                    <x-heroicon-o-academic-cap class="levels-container-icone" />
                    <x-heroicon-o-academic-cap class="levels-container-icone" />
                </div>
                <h3 class="levels-container-titre">Vous êtes à l’aise mais avez un besoin ponctuel</h3>
                <p class="mb-4">
                    Je vous propose une assistance rapide et ciblée pour, par exemple :
                </p>
                <ul class="levels-liste">
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Optimiser votre PC ou gérer vos sauvegardes</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Comprendre un logiciel ou un outil en particulier</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Créer un espace de stockage (Google Drive, Dropbox…)</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Et plus encore selon vos besoin !</span>
                    </li>
                </ul>
            </div>

            <!-- Autonome -->
            <div role="list-item" class="levels-container">
                <div class="levels-container-div-icone" aria-hidden="true" focusable="false">
                    <x-heroicon-o-academic-cap class="levels-container-icone" />
                    <x-heroicon-o-academic-cap class="levels-container-icone" />
                    <x-heroicon-o-academic-cap class="levels-container-icone" />
                </div>
                <h3 class="levels-container-titre">Vous avez un besoin plus technique</h3>
                <p class="mb-4">
                    Voici par exemple ce que je peux vous proposer :
                </p>
                <ul class="levels-liste">
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Initiation à la programmation ou à Linux</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Installation de CMS (WordPress, Joomla…)</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Conseils en sécurité, matériel ou outils</span>
                    </li>
                    <li class="levels-liste-item">
                        <x-heroicon-o-check-circle class="levels-liste-icone" />
                        <span>Ou tout autre demande que vous auriez en tête !</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Carroussel sur Mobile --}}
    {{-- <div class="block md:hidden mt-8 overflow-hidden relative">
        @include('partials.carousel-services')
    </div> --}}

    {{-- Supports et modalités --}}
    <section id="supports-et-modalites" class="section-component">
        <h2 class="section-titre">Supports et modalités</h2>
        <div class="section-grid2x2">
            <!-- Appareils -->
            <div class="modale-container">
                {{-- <x-heroicon-o-computer-desktop class="w-6 h-6 text-accent" /> --}}
                <h3 class="modales-container-titre">Sur quels appareils ?</h3>
                <ul class="modales-liste">
                    <li>Ordinateur fixe ou portable</li>
                    <li>Smartphone et tablette (Android/iPhone)</li>
                    <li>Imprimantes, box internet, télé connectée, assistant vocal, liseuse…</li>
                </ul>
            </div>

            <!-- Modalités -->
            <div class="modale-container">
                {{-- <x-heroicon-o-chat-bubble-left-ellipsis class="w-6 h-6 text-accent" /> --}}
                <h3 class="modales-container-titre">Comment se passe l’accompagnement ?</h3>
                <ul class="modales-liste">
                    <li>À votre domicile (Rennes et alentours)</li>
                    <li>À distance (visioconférence, prise en main à distance)</li>
                    <li>Par téléphone (pour les cas simples ou en complément)</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Social proof 
    TODO 
    - css externe
    --}}
    <section id="services" class="section-testimony">
        <h2 class="section-titre">Ils m'ont fait confiance</h2>
        <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">

            <!-- Pourquoi me faire confiance -->
            <div class="bg-white text-primary p-8 pt-2 space-y-6">
                
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="w-6 h-6 text-accent mt-1" />
                        <span>Approche personnalisée, à votre rythme</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-chat-bubble-left-right class="w-6 h-6 text-accent mt-1" />
                        <span>Un langage clair, sans jargon</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-document-text class="w-6 h-6 text-accent mt-1" />
                        <span>Support écrit remis disponible</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-device-phone-mobile class="w-6 h-6 text-accent mt-1" />
                        <span>Formations en présentiel ou à distance</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-cpu-chip class="w-6 h-6 text-accent mt-1" />
                        <span>10+ ans d’expérience avec les outils numériques</span>
                    </li>
                </ul>
            </div>

            <!-- Témoignages avec carrousel -->
            <div 
              x-data="
                { active: 0, testimonials: [
                    { text: 'Très patient, très à l’écoute, il m’a aidée à comprendre les bases de l’informatique sans me faire sentir bête.', author: 'Claire, retraitée' },
                    { text: 'Une approche claire, sans jargon, et surtout un grand sens de la pédagogie.', author: 'Michel, artisan' },
                    { text: 'Max a su m’aider à reprendre en main mon ordinateur après des années sans l’utiliser. Très rassurant.', author: 'Andrée, 72 ans' },
                ] }"
                @keydown.arrow-right.window="active = (active + 1) % testimonials.length" 
                @keydown.arrow-left.window="active = (active - 1 + testimonials.length) % testimonials.length"
              x-init="setInterval(() => active = (active + 1) % testimonials.length, 5000)" 
              class="relative"
              role="region" 
              aria-roledescription="carousel" 
              aria-label="Témoignages de clients"
              aria-live="polite">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <div x-show="active === index" class="bg-white p-6 rounded-xl shadow border">
                        <p class="text-primary italic mb-3" x-text="`“${testimonial.text}”`"></p>
                        <p class="text-sm text-right text-primary" x-text="`– ${testimonial.author}`"></p>
                    </div>
                </template>

                <!-- Controls -->
                <div class="flex justify-between items-center mt-6">
                    <button 
                        @@click="active = (active - 1 + testimonials.length) % testimonials.length"
                        class="text-primary hover:underline text-sm"
                    >
                        ← Précédent
                    </button>

                    <div class="flex gap-2">
                        <template x-for="(t, i) in testimonials" :key="i">
                            <button 
                                @@click="active = i" 
                                :class="active === i ? 'bg-accent' : 'bg-gray-300'"
                                class="w-3 h-3 rounded-full transition duration-300"
                            ></button>
                        </template>
                    </div>

                    <button 
                        @@click="active = (active + 1) % testimonials.length"
                        class="text-primary hover:underline text-sm"
                    >
                        Suivant →
                    </button>
                </div>
            </div>



        </div>
    </section>

    {{-- Button cta --}}
    <div 
        x-data="{ showHelper: false, dismissed: false }" 
        x-init="
            window.addEventListener('scroll', () => {
                const quizHidden = document.querySelector('#questionnaire')?.classList.contains('hidden');
                if (!dismissed) {
                    showHelper = window.scrollY > 400 && quizHidden;
                }
            });
        "
    >
        <div x-show="showHelper" x-transition>
            <div class="fixed bottom-4 right-4 z-50 bg-white border border-primary/60 shadow-xl rounded-xl px-4 py-3 flex flex-col gap-2 max-w-[300px]">

                <!-- Bouton de fermeture -->
                <button 
                    @@click="showHelper = false; dismissed = true" 
                    class="absolute top-1 right-1 text-primary hover:text-accent text-lg leading-none cursor-pointer"
                    aria-label="Fermer l’aide"
                >
                    &times;
                </button>

                <!-- Contenu -->
                <p class="text-sm text-primary pr-4">Besoin d’aide pour vous orienter ?</p>
                <button id="start-quiz-btn-2" class="bg-primary text-white text-sm font-medium py-2 rounded-lg hover:bg-primary-dark transition cursor-pointer">
                    Faire le questionnaire
                </button>
                <a href="{{ url('/contact') }}" class="text-sm text-primary underline text-center">Me contacter</a>
            </div>
        </div>
    </div>
    

    @include('partials.section-contact')
@endsection

@push('scripts')
    @vite('resources/js/components/quiz.js')
@endpush
