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
                    Expérience avec tous les profils
                </li>
            </ul>
        </div>
        <x-heroicon-o-light-bulb class="absolute top-20 right-8 w-28 h-28 text-accent opacity-50 hidden md:block" />
    </section>
@endsection

{{--
TODO
- Intro + page globale
- barre flottante quiz
- Gestion quizz
- Section quizz
- mobile
- css


- descriptions des outils
ce que je propose :
préciser 

Quiz mettre en forme les pages de quiz 
conseils pour materiel, definer materiel

Explication d'outils, WhatsApp

témoignage avant
transferer les imagesd, sauvegarder 

                <li>Initiation à l'informatique (naviguer sur Internet, utiliser un ordinateur, gérer ses fichiers...)</li>
                <li>Assistance à distance ou sur place pour résoudre un blocage</li>
                <li>Conseils pour choisir un matériel adapté à vos usages</li>
                <li>Explication d'outils spécifiques : démarches administratives en ligne, messagerie, visio, etc.</li>

 --}}
@section('content')

    {{-- Intro --}}
    <section id="introduction" class="py-12 px-6 max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold primary mb-4">Un accompagnement humain et personnalisé</h2>
        <p class="text-left text-lg primary mb-6">
            Que vous soyez débutant, curieux ou déjà à l'aise avec le numérique,
            je vous propose un accompagnement ou dépannage adapté à votre niveau, vos besoins, et votre matériel. 
            Vous pouvez au choix, parcourir la page ou répondre au court questionnaire ci-dessous (3 questions) 
            qui vous orientera vers la section qui vous correspond le plus.
        </p>
        <button
            id="start-quiz-btn"
            class="inline-block bg-primary text-white px-5 py-3 rounded-xl hover:bg-primary/90 transition cursor-pointer"
        >
            Commencer le questionnaire
        </button>
    </section>

    {{-- Questionnaire --}}
    <section id="questionnaire" class="hidden py-12 px-6 primary border-t border-accent mt-8">
        <x-quiz 
            key="accompagnement"
            title="Voyons comment je peux vous aider"
            result-selector="#bloc-debutant"
        />
        <div id="accompagnement-questionnaire" data-component="questionnaire"></div>
    </section>

            {{-- Débutant - Dépannage --}}
            <section id="deb-depannage" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Dépannage pour débutants</h2>
                <p class="quiz-section-desc">
                    Vous rencontrez un problème technique et vous êtes peu à l’aise avec l’informatique ?  
                    Je vous guide pas à pas pour résoudre vos difficultés, que ce soit une perte de mot de passe, un souci d’imprimante, une connexion qui ne fonctionne plus, etc.  
                    L’objectif est de vous redonner confiance en vous et de résoudre le problème rapidement.
                </p>
            </section>

            {{-- Débutant - Formation --}}
            <section id="deb-formation" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Formation adaptée aux débutants</h2>
                <p class="quiz-section-desc">
                    Vous souhaitez apprendre à utiliser un logiciel ou un appareil numérique à votre rythme ?  
                    Je propose des formations simples, claires, adaptées à votre niveau pour que vous puissiez progresser en toute sérénité.  
                    Que ce soit WhatsApp, gestion des photos, ou initiation à l’ordinateur, je suis là pour vous accompagner.
                </p>
            </section>

            {{-- Débutant - Démarrage / Initialisation --}}
            <section id="deb-init" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Démarrage et installation pour débutants</h2>
                <p class="quiz-section-desc">
                    Vous venez d’acquérir un nouvel équipement (ordinateur, smartphone, imprimante, box internet) et vous souhaitez une aide à l’installation et à la prise en main ?  
                    Je vous accompagne pas à pas pour configurer et démarrer votre matériel dans les meilleures conditions.
                </p>
            </section>

            {{-- Intermédiaire - Dépannage --}}
            <section id="int-depannage" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Dépannage ciblé pour utilisateurs intermédiaires</h2>
                <p class="quiz-section-desc">
                    Vous êtes déjà à l’aise avec certains outils, mais vous rencontrez un problème spécifique (connexion, mise à jour, logiciel qui plante) ?  
                    Je vous aide à diagnostiquer et résoudre rapidement ces soucis techniques.
                </p>
            </section>

            {{-- Intermédiaire - Formation --}}
            <section id="int-formation" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Formation pour utilisateurs intermédiaires</h2>
                <p class="quiz-section-desc">
                    Vous souhaitez approfondir vos compétences ou découvrir de nouveaux outils ?  
                    Je propose des formations sur mesure pour renforcer vos connaissances et vous permettre d’être plus autonome dans votre usage numérique.
                </p>
            </section>

            {{-- Intermédiaire - Démarrage / Initialisation --}}
            <section id="int-init" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Installation et prise en main pour utilisateurs intermédiaires</h2>
                <p class="quiz-section-desc">
                    Vous avez besoin d’un coup de pouce pour configurer un nouvel outil ou équipement ?  
                    Je vous accompagne dans l’installation et la configuration pour que vous puissiez démarrer rapidement.
                </p>
            </section>

            {{-- Autonome - Dépannage --}}
            <section id="aut-depannage" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Dépannage pour utilisateurs avancés</h2>
                <p class="quiz-section-desc">
                    Vous êtes autonome mais vous cherchez une assistance technique fiable pour résoudre un problème spécifique ?  
                    Je propose des interventions précises, efficaces et adaptées à votre niveau.
                </p>
            </section>

            {{-- Autonome - Formation --}}
            <section id="aut-formation" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Formation avancée et accompagnement technique</h2>
                <p class="quiz-section-desc">
                    Vous souhaitez approfondir certaines compétences techniques ou vous former à des outils plus complexes ?  
                    Je propose des formations avancées, techniques et personnalisées pour répondre à vos objectifs.
                </p>
            </section>

            {{-- Autonome - Démarrage / Initialisation --}}
            <section id="aut-init" class="quiz-section-hidden hidden">
                <h2 class="quiz-section-title">Installation et mise en route pour utilisateurs avancés</h2>
                <p class="quiz-section-desc">
                    Vous avez besoin d’un professionnel pour une installation complexe ou une configuration avancée ?  
                    Je vous accompagne dans la mise en place et la configuration optimale de vos équipements et logiciels.
                </p>
            </section>

    <!-- Autres sections à venir... -->

    {{-- PARTIE FIXE --}}

    <section id="levels" class="py-10 px-6 max-w-6xl mx-auto border-t border-accent mt-8">
        <h2 id="levels-heading" class="text-3xl font-bold text-center text-primary mb-12">
            Je m'adapte à tous les niveaux
        </h2>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Débutant -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                <x-heroicon-o-academic-cap class="w-12 h-12 text-primary mb-4" aria-hidden="true" focusable="false" />
                <h3 class="text-xl font-semibold mb-2">Vous débutez ou vous êtes peu à l’aise</h3>
                <p class="text-primary mb-4">
                    Pas de panique ! Je vous accompagne avec patience et pédagogie. On peut apprendre ensemble à :
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
                </ul>
            </div>

            <!-- Intermédiaire -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                <x-heroicon-o-light-bulb class="w-12 h-12 text-primary mb-4" aria-hidden="true" focusable="false" />
                <h3 class="text-xl font-semibold mb-2">Vous êtes à l’aise mais avez un besoin ponctuel</h3>
                <p class="text-primary mb-4">
                    Besoin d’aide sur un point précis ? Je vous propose une assistance rapide et ciblée pour :
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
                </ul>
            </div>

            <!-- Autonome -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                <x-heroicon-o-cog-6-tooth class="w-12 h-12 text-primary mb-4" aria-hidden="true" focusable="false" />
                <h3 class="text-xl font-semibold mb-2">Vous avez un besoin plus technique</h3>
                <p class="text-primary mb-4">
                    Vous cherchez un accompagnement plus poussé ? Voici ce que je peux vous proposer :
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
                </ul>
            </div>
        </div>
    </section>

    <section id="services" class="py-10 px-6 max-w-6xl mx-auto border-t border-accent mt-8">
        <h2 id="levels-heading" class="text-3xl font-bold text-center text-primary mb-12">
            Je propose des services adaptés à vos besoins
        </h2>
        <div class="grid gap-6 md:grid-cols-2">
            <!-- Dépannage ponctuel -->
            <div class="bg-white p-6 rounded-xl shadow flex items-start space-x-4">
                <x-heroicon-o-wrench-screwdriver class="w-10 h-10 text-accent flex-shrink-0" />
                <div>
                    <h3 class="font-semibold text-lg mb-1">Dépannage ponctuel</h3>
                    <p class="text-gray-700">Une aide rapide pour résoudre un blocage ou un dysfonctionnement.</p>
                </div>
            </div>

            <!-- Formation courte -->
            <div class="bg-white p-6 rounded-xl shadow flex items-start space-x-4">
                <x-heroicon-o-clock class="w-10 h-10 text-accent flex-shrink-0" />
                <div>
                    <h3 class="font-semibold text-lg mb-1">Formation courte</h3>
                    <p class="text-gray-700">Apprendre à maîtriser un outil ou une fonctionnalité en une ou deux sessions.</p>
                </div>
            </div>

            <!-- Formation suivie -->
            <div class="bg-white p-6 rounded-xl shadow flex items-start space-x-4">
                <x-heroicon-o-academic-cap class="w-10 h-10 text-accent flex-shrink-0" />
                <div>
                    <h3 class="font-semibold text-lg mb-1">Formation suivie</h3>
                    <p class="text-gray-700">Un accompagnement régulier sur plusieurs semaines pour gagner en autonomie.</p>
                </div>
            </div>

            <!-- Aide administrative -->
            <div class="bg-white p-6 rounded-xl shadow flex items-start space-x-4">
                <x-heroicon-o-document-text class="w-10 h-10 text-accent flex-shrink-0" />
                <div>
                    <h3 class="font-semibold text-lg mb-1">Aide administrative</h3>
                    <p class="text-gray-700">Accompagnement à l’utilisation des services publics en ligne.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="supports-et-modalites" class="py-10 px-6 max-w-6xl mx-auto border-t border-accent mt-8" x-data="{ showSupports: false, showModalites: false }">
        <h2 class="text-3xl font-bold text-center text-primary mb-8">Supports et modalités</h2>

        <div class="flex flex-col md:flex-row gap-4 justify-center mb-6">
            <button 
                @@click="showSupports = !showSupports"
                class="flex-1 text-black font-semibold px-6 py-3 rounded-xl hover:bg-light/90 transition flex items-center justify-center gap-2 cursor-pointer"
            >
                <x-heroicon-o-computer-desktop class="w-6 h-6 text-accent" />
                Appareils pris en charge
            </button>

            <button 
                @@click="showModalites = !showModalites"
                class="flex-1 text-black font-semibold px-6 py-3 rounded-xl hover:bg-light/90 transition flex items-center justify-center gap-2 cursor-pointer"
            >
                <x-heroicon-o-chat-bubble-left-ellipsis class="w-6 h-6 text-accent" />
                Modalités d’accompagnement
            </button>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <!-- Appareils -->
            <div x-show="showSupports" x-transition>
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-2xl font-semibold mb-4">Sur quels appareils ?</h3>
                    <ul class="list-disc list-inside text-gray-800 space-y-2">
                        <li>Ordinateur fixe ou portable</li>
                        <li>Smartphone Android ou iPhone</li>
                        <li>Tablette, liseuse, imprimante</li>
                        <li>Box internet, télé connectée, assistant vocal…</li>
                    </ul>
                </div>
            </div>

            <!-- Modalités -->
            <div x-show="showModalites" x-transition>
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-2xl font-semibold mb-4">Comment se passe l’accompagnement ?</h3>
                    <ul class="list-disc list-inside text-gray-800 space-y-2">
                        <li>À votre domicile (Rennes et alentours)</li>
                        <li>À distance (visioconférence, prise en main à distance)</li>
                        <li>Par téléphone (pour les cas simples ou en complément)</li>
                        <li>À mon domicile (option à discuter)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Pourquoi me faire confiance --}}
    <section class="py-10 px-6 max-w-6xl mx-auto border-t border-accent mt-8">
        <h2 class="text-3xl font-bold text-center text-primary mb-8">Pourquoi me faire confiance&nbsp;?</h2>
        <ul class="grid gap-6 md:grid-cols-2 text-text">
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M5 13l4 4L19 7"/>
                </svg>
                <span>Une pédagogie adaptée à chaque niveau, sans jargon</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M5 13l4 4L19 7"/>
                </svg>
                <span>Des supports clairs, accessibles et durables</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M5 13l4 4L19 7"/>
                </svg>
                <span>Des formations concrètes, basées sur des besoins réels</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M5 13l4 4L19 7"/>
                </svg>
                <span>Patience, bienveillance, et adaptabilité</span>
            </li>
        </ul>
    </section>

    {{-- Comments --}}
    <section class="py-10 px-6 max-w-6xl mx-auto border-t border-accent mt-8">
        <h2 class="text-3xl font-bold text-center text-primary mb-8">Ils m’ont fait confiance</h2>
        <div class="grid gap-6 md:grid-cols-2">
            <div class="testimonial-card">
                <p class="text-base mb-3">“Max a formé notre équipe senior à l’usage des outils collaboratifs. Il a su vulgariser sans infantiliser, et tout le monde a progressé.”</p>
                <p class="font-semibold text-text">— Marie P., responsable RH</p>
            </div>
            <div class="testimonial-card">
                <p class="text-base mb-3">“Très bon pédagogue, à l’écoute, capable d’adapter son discours à tous les niveaux. Une vraie réussite, même pour les personnes peu à l’aise avec l’informatique.”</p>
                <p class="font-semibold text-text">— Sébastien L., médiateur numérique</p>
            </div>
        </div>
    </section>

    <section id="preuves-sociales" class="bg-gray-50 py-16 px-6 md:px-12 rounded-2xl my-12 shadow-sm">
  <div class="max-w-5xl mx-auto text-center mb-10">
    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Ils m’ont fait confiance</h2>
    <p class="text-gray-700 text-lg">Découvrez ce que mes client·es disent de mon accompagnement et ce qui me distingue.</p>
  </div>

  <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
    <!-- Témoignages -->
    <div class="space-y-6">
      <div class="bg-white p-6 rounded-xl shadow border">
        <p class="text-gray-800 italic mb-3">“Très patient, très à l’écoute, il m’a aidée à comprendre les bases de l’informatique sans me faire sentir bête.”</p>
        <p class="text-sm text-right text-gray-500">– Claire, retraitée</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow border">
        <p class="text-gray-800 italic mb-3">“Une approche claire, sans jargon, et surtout un grand sens de la pédagogie.”</p>
        <p class="text-sm text-right text-gray-500">– Michel, artisan</p>
      </div>
    </div>

    <!-- Pourquoi me faire confiance -->
    <div class="bg-primary text-white p-6 rounded-xl shadow space-y-4">
      <h3 class="text-xl font-semibold mb-2">Pourquoi me faire confiance ?</h3>
      <ul class="list-disc list-inside space-y-2 text-base">
        <li>Approche personnalisée, à votre rythme</li>
        <li>Support écrit remis à la fin de chaque session</li>
        <li>Formations en présentiel ou à distance</li>
        <li>15+ ans d’expérience avec les outils numériques</li>
        <li>Un langage clair, sans jargon</li>
      </ul>
    </div>
  </div>
</section>


    {{-- Button cta 
    TODO
    - fermer bloc
    - rester femer
    --}}
    <div 
      x-data="{ showHelper: false }" 
      x-init="
        window.addEventListener('scroll', () => {
            const quizHidden = document.querySelector('#questionnaire')?.classList.contains('hidden');
            showHelper = window.scrollY > 400 && quizHidden;
        });
    ">
        <div x-show="showHelper" x-transition>
            <div class="fixed bottom-4 right-4 z-50 bg-white border border-gray-300 shadow-xl rounded-xl px-4 py-3 flex flex-col gap-2 max-w-[250px]">
                <p class="text-sm text-primary">Besoin d’aide pour vous orienter ?</p>
                <button class="bg-primary text-white text-sm font-medium py-2 rounded-lg hover:bg-primary-dark transition">
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
