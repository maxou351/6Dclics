@extends('layouts.app')

@section('title', 'Accompagnement informatique')

@section('header')
    <section class="header-pages-section">
        <div class="header-container">
            <h1 class="header-title">
                <span class="relative z-20">Accompagnement informatique</span>
                <span class="header-title-underline"></span>
            </h1> 
            <p class="header-desc">
                Formation, dépannage, assistance.
            </p>
            <ul class="mt-6 flex flex-wrap justify-center gap-4 text-md text-white">
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    À domicile ou à distance
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Pédagogie adaptée à votre rythme
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Pour tous les profils
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Sur tous vos appareils
                </li>
            </ul>
        </div>
        <x-heroicon-o-light-bulb class="absolute top-20 right-8 w-28 h-28 text-accent opacity-50 hidden md:block" />
    </section>
@endsection

{{--
TODO
- Gestion quizz
- mobile
- css
- précision sur les niveau, débutant peut-être un peu a=busé ?
    Explication d'outils, WhatsApp
    transferer les imagesd, sauvegarder 
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
        <h2 class="text-3xl font-bold primary mb-4">Un accompagnement humain et personnalisé</h2>
        <p class="text-center text-lg primary mb-6">
            Que vous soyez débutant, curieux ou déjà à l'aise avec le numérique, je vous propose un accompagnement ou dépannage adapté à votre niveau, vos besoins, et votre matériel. 
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-base text-primary">
            <!-- Bloc questionnaire -->
            <div class="bg-white p-6 rounded-2xl border border-primary/20 shadow-sm flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-md">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Vous voulez aller droit au but&nbsp;?</h3>
                    <p class="mb-3 leading-relaxed">
                        Répondez à <strong>2 questions</strong> pour être guidé vers la section qui vous concerne :
                        type d’accompagnement, <strong>tarifs</strong>, modalités, tout est ciblé selon votre besoin.
                    </p>
                    <span class="inline-block bg-accent text-sm text-black font-medium px-3 py-1 rounded-full mb-4 animate-pulse-soft">
                        💡 Conseillé si vous savez ce que vous cherchez
                    </span>
                </div>
                <button
                    id="start-quiz-btn"
                    class="inline-block w-fit bg-primary text-white px-5 py-3 rounded-xl font-medium shadow hover:bg-primary/90 transition cursor-pointer"
                >
                    🎯 Je lance le questionnaire
                </button>
            </div>

            <!-- Bloc navigation libre -->
            <div class="bg-white p-6 rounded-2xl border border-primary/20 shadow-sm flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-md">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Vous préférez explorer par vous-même&nbsp;?</h3>
                    <p class="mb-3 leading-relaxed">
                        Parcourez la page à votre rythme, sans passer par le questionnaire. Vous y trouverez toutes les informations.
                    </p>
                    <span class="inline-block bg-muted text-sm text-gray-700 px-3 py-1 rounded-full mb-4">
                        👀 Vue d’ensemble complète
                    </span>
                </div>
                <a
                    href="#services"
                    class="inline-block w-fit bg-primary text-white px-5 py-3 rounded-xl font-medium shadow hover:bg-primary/90 transition"
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
    <section id="services" class="scroll-mt-24 py-10 px-6 max-w-6xl mx-auto border-t border-accent mt-8">
        <h2 id="levels-heading" class="text-3xl font-bold text-center text-primary mb-12">
            Je propose des services adaptés à vos besoins
        </h2>
        <div class="grid gap-6 md:grid-cols-2">

            <!-- Formation courte -->
            <div class="bg-white p-6 rounded-xl shadow flex items-start space-x-4">
                <x-heroicon-o-clock class="w-10 h-10 text-accent flex-shrink-0" />
                <div>
                    <h3 class="font-semibold text-lg mb-1">Formation courte</h3>
                    <p class="text-primary">Apprendre à maîtriser un outil ou une fonctionnalité en une ou deux sessions.</p>
                </div>
            </div>

            <!-- Formation suivie -->
            <div class="bg-white p-6 rounded-xl shadow flex items-start space-x-4">
                <x-heroicon-o-academic-cap class="w-10 h-10 text-accent flex-shrink-0" />
                <div>
                    <h3 class="font-semibold text-lg mb-1">Formation suivie</h3>
                    <p class="text-primary">Un accompagnement régulier sur plusieurs semaines pour gagner en autonomie.</p>
                </div>
            </div>

            <!-- Dépannage ponctuel -->
            <div class="bg-white p-6 rounded-xl shadow flex items-start space-x-4">
                <x-heroicon-o-wrench-screwdriver class="w-10 h-10 text-accent flex-shrink-0" />
                <div>
                    <h3 class="font-semibold text-lg mb-1">Dépannage ponctuel</h3>
                    <p class="text-primary">Une aide rapide pour résoudre un blocage ou un dysfonctionnement.</p>
                </div>
            </div>

            <!-- Initialisation -->
            <div class="bg-white p-6 rounded-xl shadow flex items-start space-x-4">
                <x-heroicon-o-arrow-path class="w-10 h-10 text-accent flex-shrink-0" />
                <div>
                    <h3 class="font-semibold text-lg mb-1">Aide au démarrage</h3>
                    <p class="text-primary">Installation, initialisation et paramétrage d'outils ou appareils</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Niveaux 
    TODO
    - carroussel on mobile
    --}}
    <section id="levels" class="py-10 px-6 max-w-6xl mx-auto border-t border-accent mt-8">
        <h2 id="levels-heading" class="text-3xl font-bold text-center text-primary mb-12">
            Je m'adapte à tous les niveaux
        </h2>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Débutant -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                <div class="flex justify-center gap-1 mb-4" aria-hidden="true" focusable="false">
                    <x-heroicon-o-academic-cap class="w-12 h-12 text-primary" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Vous débutez ou vous êtes peu à l’aise</h3>
                <p class="text-primary mb-4">
                    Pas de panique ! Je vous accompagne avec patience et pédagogie. On peut par exemple apprendre ensemble à :
                </p>
                <ul class="space-y-3 text-left w-full">
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Envoyer un e-mail ou une photo</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Installer une imprimante ou un nouveau téléphone</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Faire une demande sur un site comme la <strong>CAF</strong> ou <strong>Ameli</strong></span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Retrouver un mot de passe ou sécuriser vos comptes</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>... Et bien d'autres situations !</span>
                    </li>
                </ul>
            </div>

            <!-- Intermédiaire -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                <div class="flex justify-center gap-1 mb-4" aria-hidden="true" focusable="false">
                    <x-heroicon-o-academic-cap class="w-12 h-12 text-primary" />
                    <x-heroicon-o-academic-cap class="w-12 h-12 text-primary" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Vous êtes à l’aise mais avez un besoin ponctuel</h3>
                <p class="text-primary mb-4">
                    Je vous propose une assistance rapide et ciblée pour, par exemple :
                </p>
                <ul class="space-y-3 text-left w-full">
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Optimiser votre PC ou gérer vos sauvegardes</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Comprendre un logiciel ou un outil en particulier</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Créer un espace de stockage (Google Drive, Dropbox…)</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Et plus encore selon vos besoin !</span>
                    </li>
                </ul>
            </div>

            <!-- Autonome -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                <div class="flex justify-center gap-1 mb-4" aria-hidden="true" focusable="false">
                    <x-heroicon-o-academic-cap class="w-12 h-12 text-primary" />
                    <x-heroicon-o-academic-cap class="w-12 h-12 text-primary" />
                    <x-heroicon-o-academic-cap class="w-12 h-12 text-primary" />
                </div>
                <h3 class="text-xl font-semibold mb-2">Vous avez un besoin plus technique</h3>
                <p class="text-primary mb-4">
                    Voici par exemple ce que je peux vous proposer :
                </p>
                <ul class="space-y-3 text-left w-full">
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Initiation à la programmation ou à Linux</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Installation de CMS (WordPress, Joomla…)</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Conseils en sécurité, matériel ou outils</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-check-circle class="w-5 h-5 mt-1 text-accent flex-shrink-0" />
                        <span>Ou tout autre demande que vous auriez en tête !</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Supports et modalités --}}
    <section id="supports-et-modalites" class="py-10 px-6 max-w-6xl mx-auto border-t border-accent mt-8">
        <h2 class="text-3xl font-bold text-center text-primary mb-12">Supports et modalités</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Appareils -->
            <div class="bg-white p-6 rounded-xl shadow">
                {{-- <x-heroicon-o-computer-desktop class="w-6 h-6 text-accent" /> --}}
                <h3 class="text-2xl font-semibold mb-4">Sur quels appareils ?</h3>
                <ul class="list-disc list-inside text-primary space-y-2">
                    <li>Ordinateur fixe ou portable</li>
                    <li>Smartphone et tablette (Android/iPhone)</li>
                    <li>Imprimantes, box internet, télé connectée, assistant vocal, liseuse…</li>
                </ul>
            </div>

            <!-- Modalités -->
            <div class="bg-white p-6 rounded-xl shadow">
                {{-- <x-heroicon-o-chat-bubble-left-ellipsis class="w-6 h-6 text-accent" /> --}}
                <h3 class="text-2xl font-semibold mb-4">Comment se passe l’accompagnement ?</h3>
                <ul class="list-disc list-inside text-gray-800 space-y-2">
                    <li>À votre domicile (Rennes et alentours)</li>
                    <li>À distance (visioconférence, prise en main à distance)</li>
                    <li>Par téléphone (pour les cas simples ou en complément)</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Social proof --}}
    <section id="services" class="py-16 px-6 max-w-6xl mx-auto border-t border-accent mt-12">
        <h2 class="text-3xl font-bold text-center text-primary mb-12">Ils m'ont fait confiance</h2>
        <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">

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
              class="relative">
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
