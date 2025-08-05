@extends('layouts.app')

@section('title', 'Création de site web')

@section('header')
    <section class="relative header-pages-section">
        <div class="header-container">
            <div class="relative inline-block">
                <h1 class="header-title">
                    <span class="relative z-20">Création de site web</span>
                    <span aria-hidden="true"
                        class="header-title-underline">
                    </span>
                </h1> 
            </div>
            <p class="header-desc">
                Maintenance, refonte ou création complète de sites web
            </p>
            <ul class="header-list">
                <li class="header-list-item">
                    <x-heroicon-o-check class="header-list-item-icone" />
                    Pour particuliers, associations ou indépendants
                </li>
                <li class="header-list-item">
                    <x-heroicon-o-check class="header-list-item-icone" />
                    Design responsive et accessible
                </li>
                <li class="header-list-item">
                    <x-heroicon-o-check class="header-list-item-icone" />
                    Sites modernes, clairs et faciles à gérer.
                </li>
                <li class="header-list-item">
                    <x-heroicon-o-check class="header-list-item-icone" />
                    Conseils et accompagnement sur mesure
                </li>
            </ul>
        </div>
        
        <!-- Globe décoratif -->
        <x-heroicon-o-globe-alt 
            class="header-bg-icone" 
            aria-hidden="true" />
    </section>
@endsection

@section('content')

{{-- To keep pour données --}}
{{--            <li>Création de site vitrine responsive et performant</li>
            <li>Sites 100% codés main ou administrables avec WordPress selon vos besoins</li>
            <li>Optimisation <span class="lexique">SEO</span> de base et conseils sur la stratégie de contenu</li>
            <li>Maintenance technique, mises à jour, ou refonte légère</li>
        </ul>
        <p class="intro-desc">Je prends le temps d’échanger pour comprendre votre activité, vos objectifs, et concevoir un site à votre image.</p> --}}

<section id="process" class="py-16 px-6 max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-primary mb-12">Vous avez un projet ? Je peux vous accompagner !</h2>

    <div x-data="{ active: 0 }" class="relative">
        <!-- Fil central -->
        <div class="absolute top-6 left-0 right-0 h-1 bg-accent/30"></div>

        <div class="grid grid-cols-4 gap-4 relative z-10">
            @php
                $steps = [
                    ['icon' => 'plus-circle', 'title' => 'Création', 'desc' => 'Site web sur mesure'],
                    ['icon' => 'sparkles', 'title' => 'Amélioration', 'desc' => 'Optimisation & SEO'],
                    ['icon' => 'wrench', 'title' => 'Maintenance', 'desc' => 'Sécurité & mises à jour'],
                    ['icon' => 'light-bulb', 'title' => 'Conseil', 'desc' => 'Stratégie numérique'],
                ];
            @endphp

            @foreach ($steps as $index => $step)
                <div 
                  class="flex flex-col items-center text-center cursor-pointer group"
                  @@click="active = {{ $index }}">

                    <!-- Point de la frise -->
                    <div class="w-12 h-12 rounded-full border-2 border-accent flex items-center justify-center mb-3 transition group-hover:bg-accent group-hover:text-white"
                         :class="active === {{ $index }} 
                            ? 'bg-white text-primary ring-2 border-accent ring-accent' 
                            : 'bg-white text-primary group-hover:bg-accent group-hover:text-white'">
                        <x-dynamic-component :component="'heroicon-o-' . $step['icon']" class="w-6 h-6" />
                    </div>
                    <h3 class="font-semibold text-lg">{{ $step['title'] }}</h3>
                    <p class="text-sm text-gray-600">{{ $step['desc'] }}</p>
                    </div>
            @endforeach
        </div>

        <div class="mt-12 flex items-center justify-between shadow-md rounded-xl max-w-6xl mx-auto gap-6">

            <!-- Flèche gauche -->
            <button 
                @@click="active = (active - 1 + 4) % 4"
                class="left-0 bg-accent text-white px-4 py-3 rounded-r-full shadow hover:bg-accent/90 transition flex items-center gap-2 cursor-pointer"
                aria-label="Étape précédente"
            >
                <x-heroicon-o-arrow-left class="w-5 h-5" />
                <span 
                  class="hidden md:inline text-sm"
                  x-text="['Creation', 'Amélioration', 'Maintenance', 'Conseil'][(active - 1 + 4) % 4]">
                </span>
            </button>

            <!-- Contenu des étapes -->
            <div class="bg-white p-6 text-primary w-full">
                {{-- Creation --}}
                <template x-if="active === 0">
                    <div>
                        <h4 class="text-2xl font-semibold mb-4">Création de site web sur mesure</h4>
                        <p class="mb-6">Je conçois et développe des sites modernes et performants, pensés pour attirer vos visiteurs, mettre en valeur votre activité et soutenir vos objectifs.</p>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Site vitrine</h5>
                                <p class="text-sm text-gray-600">Une présence en ligne professionnelle pour présenter vos services et convaincre vos futurs clients.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Site e-commerce</h5>
                                <p class="text-sm text-gray-600">Une boutique en ligne sécurisée et intuitive, conçue pour booster vos ventes et fidéliser vos clients.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Blog & site de contenu</h5>
                                <p class="text-sm text-gray-600">Partagez vos idées, articles ou actualités sur une plateforme claire, optimisée pour le référencement et la lecture.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">MVP produit</h5>
                                <p class="text-sm text-gray-600">Un prototype fonctionnel et évolutif pour tester rapidement votre idée et séduire vos premiers utilisateurs ou investisseurs.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Application web</h5>
                                <p class="text-sm text-gray-600">Des outils en ligne personnalisés et puissants, adaptés à vos processus métiers et conçus pour évoluer avec vos besoins.</p>
                            </div>
                        </div>
                    </div>
                </template>  
                {{-- Amelioration --}}
                <template x-if="active === 1">
                    <div>
                        <h4 class="text-2xl font-semibold mb-4">Amélioration & optimisation</h4>
                        <p class="mb-6">Donnez un second souffle à votre site. J'optimise sa rapidité, sa visibilité et son ergonomie pour offrir une expérience utilisateur fluide et maximiser votre impact en ligne.</p>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">SEO & visibilité</h5>
                                <p class="text-sm text-gray-600">Optimisation du contenu, des balises et de la structure pour gagner en visibilité sur Google et attirer un trafic qualifié.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Performance & vitesse</h5>
                                <p class="text-sm text-gray-600">Optimisation du code, du serveur et des ressources pour réduire les temps de chargement et améliorer la fluidité.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Design & expérience utilisateur</h5>
                                <p class="text-sm text-gray-600">Modernisation du design et ajustements ergonomiques pour rendre la navigation intuitive et engageante.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Accessibilité & inclusivité</h5>
                                <p class="text-sm text-gray-600">Adaptation de votre site pour le rendre utilisable par tous, y compris les personnes en situation de handicap.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Nouvelles pages & fonctionnalités</h5>
                                <p class="text-sm text-gray-600">Ajout de sections, outils interactifs ou fonctionnalités avancées pour enrichir l’expérience utilisateur et soutenir vos objectifs.</p>
                            </div>
                        </div>
                    </div>
                </template>
                {{-- Maintenance --}}
                <template x-if="active === 2">
                    <div>
                        <h4 class="text-2xl font-semibold mb-4">Maintenance & support continu</h4>
                        <p class="mb-6">Gardez votre site fiable, sécurisé et performant sur le long terme. Je veille à sa stabilité technique pour que vous puissiez vous concentrer sur votre activité.</p>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Mises à jour & compatibilité</h5>
                                <p class="text-sm text-gray-600">Actualisation régulière du code, des plugins et du serveur pour rester compatible avec les dernières technologies.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Sécurité renforcée</h5>
                                <p class="text-sm text-gray-600">Surveillance proactive, correctifs rapides et protection contre les cybermenaces pour un site toujours sûr.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Sauvegardes automatiques</h5>
                                <p class="text-sm text-gray-600">Backups réguliers et restaurations rapides pour protéger vos données et prévenir toute perte d’information.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Corrections & dépannage</h5>
                                <p class="text-sm text-gray-600">Interventions rapides pour corriger bugs, dysfonctionnements ou problèmes d’affichage.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Hébergement & monitoring</h5>
                                <p class="text-sm text-gray-600">Gestion de l’hébergement et surveillance en temps réel pour assurer disponibilité et rapidité de votre site.</p>
                            </div>
                        </div>
                    </div>
                </template>
                {{-- Conseil --}}
                <template x-if="active === 3">
                    <div>
                        <h4 class="text-2xl font-semibold mb-4">Conseil & accompagnement stratégique</h4>
                        <p class="mb-6">Bénéficiez d’un regard expert pour prendre les bonnes décisions techniques et orienter votre projet vers la réussite, dès les premières étapes.</p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Audit complet & plan d’action</h5>
                                <p class="text-sm text-gray-600">Analyse approfondie de votre site ou projet, avec recommandations claires pour optimiser vos performances et atteindre vos objectifs.</p>
                            </div>
                            <div class="border rounded-lg p-4 hover:shadow">
                                <h5 class="font-semibold text-lg mb-2">Choix technologiques & architecture</h5>
                                <p class="text-sm text-gray-600">Sélection des outils, frameworks et solutions techniques les plus adaptés à votre activité et à votre budget.</p>
                            </div>
                        </div>
                    </div>
                </template>

                {{-- CTA --}}
                <div class="flex justify-center gap-4 mt-8">
                    <a href="#tarifs" 
                    class="bg-primary text-white px-6 py-3 rounded-lg shadow hover:bg-primary/90 transition font-semibold">
                        Voir les tarifs
                    </a>
                    <a href="#contact" 
                    class="border-2 border-primary text-primary px-6 py-3 rounded-lg shadow hover:bg-primary hover:text-white transition font-semibold">
                        Me contacter
                    </a>
                </div>
            </div>

            <!-- Flèche droite -->
            <button 
                @@click="active = (active + 1) % 4"
                class=" right-0 bg-accent text-white px-4 py-3 rounded-l-full shadow hover:bg-accent/90 transition flex items-center gap-2 cursor-pointer"
                aria-label="Étape suivante"
            >
                <span class="hidden md:inline text-sm"
                    x-text="['Creation', 'Amélioration', 'Maintenance', 'Conseil'][(active + 1) % 4]">
                    {{-- <template x-if="active === 0">Maintenance</template>
                    <template x-if="active === 1">Amélioration</template>
                    <template x-if="active === 2">Conseil</template>
                    <template x-if="active === 3">Création</template> --}}
                </span>
                <x-heroicon-o-arrow-right class="w-5 h-5" />
            </button>
        </div>
    </div>
</section>

{{-- <section id="tarifs" class="py-16 px-6 max-w-4xl mx-auto text-center border-t border-accent">
  <h2 class="text-3xl font-bold text-primary mb-8">Tarifs & formules</h2>
  <p class="mb-8 text-center text-gray-700 max-w-3xl mx-auto"> 
        Les tarifs indiqués ci-dessous sont à titre indicatif. 
        Chaque projet étant unique, je m’adapte à vos besoins spécifiques. 
        Contactez-moi pour un devis personnalisé et sans engagement. 
  </p>
  <div class="space-y-10">

    <div 
        x-data="{ showButton: false }" 
        x-init="
            window.addEventListener('scroll', () => {
            showButton = window.scrollY > 300;
            })
        " 
        x-show="showButton"
        x-transition
        class="fixed bottom-6 right-6 z-50"
        >
        <a href="{{ route('contact') }}" 
            class="bg-primary text-white px-6 py-3 rounded-full shadow-lg hover:bg-primary/90 transition font-semibold flex items-center gap-2">
            📩 Demander un devis
        </a>
        <button 
            @@click="showButton = false" 
            class="absolute -top-2 -right-2 bg-white text-primary border border-primary rounded-full p-1 shadow hover:bg-primary hover:text-white transition"
            aria-label="Fermer le bouton"
        >
            <x-heroicon-o-x-mark class="w-4 h-4" />
        </button>
    </div>


    <!-- Création de site -->
    <div class="bg-white shadow-md rounded-xl p-6">
      <h3 class="text-2xl font-semibold mb-4">Création de site web</h3>
      <p class="mb-6">Forfait performant et accessible pour les TPE et pros à Rennes : présence en ligne de qualité sans surcoût inutile.</p>
      <ul class="list-disc list-inside text-left text-gray-700 mb-4">
        <li>Site vitrine simple (2–5 pages) : <strong>~1 500 €</strong></li>
        <li>Site plus complet avec blog ou fonctionnalités intermédiaires : <strong>2 000 à 3 000 €</strong></li>
        <li>Site e-commerce ou application légère : <strong>3 000 à 4 500 €</strong></li>
      </ul>
      <p class="text-sm text-gray-600">Basé sur des tarifs journaliers moyens autour de 350 € à 450 €/jour (dev freelance à Rennes) et une semaine de travail selon la complexité :contentReference[oaicite:1]{index=1}.</p>
    </div>

    <!-- Amélioration -->
    <div class="bg-white shadow-md rounded-xl p-6">
      <h3 class="text-2xl font-semibold mb-4">Amélioration & optimisation</h3>
      <p class="mb-6">Forfait horaire flexible facturé au besoin pour booster votre site sans gros engagement.</p>
      <ul class="list-disc list-inside text-left text-gray-700 mb-4">
        <li>SEO, contenu, architecture : <strong>~60–80 €/h</strong></li>
        <li>Performance & vitesse (code, cache, images) : <strong>~60–80 €/h</strong></li>
        <li>Ergonomie/design & accessibilité : <strong>~60–80 €/h</strong></li>
      </ul>
      <p class="text-sm text-gray-600">Tarif cohérent avec les TJM freelance observés sur la région Rennes et France (~300–400 €/j soit 60–80 €/h) :contentReference[oaicite:2]{index=2}.</p>
    </div>

    <!-- Maintenance -->
    <div class="bg-white shadow-md rounded-xl p-6">
      <h3 class="text-2xl font-semibold mb-4">Maintenance & support continu</h3>
      <p class="mb-6">Abonnement mensuel tout inclus – installation initiale gratuite pendant 2 mois si j’ai créé votre site.</p>
      <ul class="list-disc list-inside text-left text-gray-700 mb-4">
        <li>Site vitrine : <strong>~60 € / mois</strong></li>
        <li>Site e-commerce ou site à fort trafic : <strong>~100–120 € / mois</strong></li>
        <li>Dépannage prioritaire ou interventions urgentes : <strong>option +20 €/mois</strong></li>
      </ul>
      <p class="text-sm text-gray-600">Ces tarifs se situent dans la fourchette standard en freelance (entre ~60 et 200 €/mois selon la complexité) :contentReference[oaicite:3]{index=3}.</p>
    </div>

    <!-- Conseil & audit -->
    <div class="bg-white shadow-md rounded-xl p-6">
      <h3 class="text-2xl font-semibold mb-4">Conseil & audit stratégique</h3>
      <p class="mb-6">Besoin d’un diagnostic clair ou d’un éclairage expert ? Je propose un audit personnalisé ou un accompagnement sur devis.</p>
      <p class="text-left text-gray-700"><strong>→ Contactez-moi pour un devis gratuit sur-mesure selon votre projet.</strong></p>
    </div>

  </div>
</section> --}}

<section id="processus" class="py-20 px-6 max-w-6xl mx-auto">
  <h2 class="text-3xl font-bold text-primary text-center mb-12">Comment je travaille</h2>
  <p class="mb-16 text-gray-700 max-w-3xl mx-auto text-center">
    Une méthode simple et adaptable, pensée pour rendre chaque projet fluide et efficace.
  </p>

  <div class="grid md:grid-cols-2 gap-8">
    <div class="bg-accent/5 p-6 rounded-xl shadow hover:shadow-lg transition">
      <div class="flex items-center mb-4">
        <x-heroicon-o-chat-bubble-left-right class="w-8 h-8 text-primary mr-3" />
        <h3 class="text-xl font-semibold text-primary">1. Écoute & Analyse</h3>
      </div>
      <p class="text-gray-600">Nous échangeons pour comprendre vos besoins, vos objectifs et établir une vision claire du projet.</p>
    </div>

    <div class="bg-accent/5 p-6 rounded-xl shadow hover:shadow-lg transition">
      <div class="flex items-center mb-4">
        <x-heroicon-o-light-bulb class="w-8 h-8 text-primary mr-3" />
        <h3 class="text-xl font-semibold text-primary">2. Proposition personnalisée</h3>
      </div>
      <p class="text-gray-600">Je conçois un plan d’action et un devis sur mesure, ajusté à votre budget et vos attentes.</p>
    </div>

    <div class="bg-accent/5 p-6 rounded-xl shadow hover:shadow-lg transition">
      <div class="flex items-center mb-4">
        <x-heroicon-o-cog-6-tooth class="w-8 h-8 text-primary mr-3" />
        <h3 class="text-xl font-semibold text-primary">3. Conception & Développement</h3>
      </div>
      <p class="text-gray-600">Création du site, optimisation, tests… Je vous implique à chaque étape pour valider les choix.</p>
    </div>

    <div class="bg-accent/5 p-6 rounded-xl shadow hover:shadow-lg transition">
      <div class="flex items-center mb-4">
        <x-heroicon-o-rocket-launch class="w-8 h-8 text-primary mr-3" />
        <h3 class="text-xl font-semibold text-primary">4. Mise en ligne & Suivi</h3>
      </div>
      <p class="text-gray-600">Déploiement, formation, et maintenance pour assurer la réussite à long terme de votre projet.</p>
    </div>
  </div>
</section>

<section id="processus-story" class="py-20 px-6 max-w-5xl mx-auto text-center relative">
  <h2 class="text-3xl font-bold text-primary mb-8">Votre parcours, étape par étape</h2>
  <p class="text-gray-700 max-w-3xl mx-auto mb-16">
    Chaque projet est une aventure unique. Voici comment nous collaborons, 
    du premier échange jusqu’à la mise en ligne et le suivi continu.
  </p>

  <div class="relative mx-auto w-[500px] h-[500px]">
    <!-- Illustration centrale -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 
                bg-white shadow-lg rounded-full w-36 h-36 flex items-center justify-center z-10">
      <x-heroicon-o-globe-alt class="w-12 h-12 text-primary" />
    </div>

    <!-- Étape 1 (haut) -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 flex flex-col items-center">
      <div class="bg-accent text-white rounded-full w-10 h-10 flex items-center justify-center font-bold mb-2">1</div>
      <h3 class="text-lg font-semibold text-primary">Découverte</h3>
      <p class="text-sm text-gray-600 max-w-[150px]">On définit vos objectifs et besoins.</p>
    </div>

    <!-- Étape 2 (droite) -->
    <div class="absolute top-1/2 right-0 -translate-y-1/2 flex flex-col items-center text-center">
      <div class="bg-accent text-white rounded-full w-10 h-10 flex items-center justify-center font-bold mb-2">2</div>
      <h3 class="text-lg font-semibold text-primary">Proposition</h3>
      <p class="text-sm text-gray-600 max-w-[150px]">Plan d’action clair et devis sur mesure.</p>
    </div>

    <!-- Étape 3 (bas) -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 flex flex-col items-center text-center">
      <div class="bg-accent text-white rounded-full w-10 h-10 flex items-center justify-center font-bold mb-2">3</div>
      <h3 class="text-lg font-semibold text-primary">Création</h3>
      <p class="text-sm text-gray-600 max-w-[150px]">Développement collaboratif et validation.</p>
    </div>

    <!-- Étape 4 (gauche) -->
    <div class="absolute top-1/2 left-0 -translate-y-1/2 flex flex-col items-center text-center">
      <div class="bg-accent text-white rounded-full w-10 h-10 flex items-center justify-center font-bold mb-2">4</div>
      <h3 class="text-lg font-semibold text-primary">Lancement</h3>
      <p class="text-sm text-gray-600 max-w-[150px]">Mise en ligne, suivi et maintenance.</p>
    </div>
  </div>
</section>

{{-- SECTION TARIFS
TODO
- BTN réapparait au scroll = Absolument insupportable
- Modifs tarifs 
-enlevber petites lignes
 --}}
<section id="tarifs" class="py-16 px-6 max-w-4xl mx-auto text-center border-t border-accent/40">
  <h2 class="text-3xl font-bold text-primary mb-8">Tarifs & formules</h2>
  <p class="mb-10 text-center text-gray-700 max-w-3xl mx-auto leading-relaxed"> 
    Les tarifs indiqués ci-dessous sont à titre indicatif.  
    Chaque projet étant unique, je m’adapte à vos besoins spécifiques.  
    Contactez-moi pour un devis personnalisé et sans engagement. 
  </p>
  <div class="space-y-12">

    <!-- Bouton flottant -->
    <div 
        x-data="{ showButton: false }" 
        x-init="
            window.addEventListener('scroll', () => {
              showButton = window.scrollY > 300;
            })
        " 
        x-show="showButton"
        x-transition
        class="fixed bottom-6 right-6 z-50"
    >
      <a href="{{ route('contact') }}" 
          class="bg-primary text-white px-6 py-3 rounded-full shadow-lg hover:bg-primary/90 transition font-semibold flex items-center gap-2">
          📩 Demander un devis
      </a>
      <button 
          @@click="showButton = false" 
          class="absolute -top-2 -right-2 bg-white text-primary border border-primary rounded-full p-1 shadow hover:bg-primary hover:text-white transition"
          aria-label="Fermer le bouton"
      >
          <x-heroicon-o-x-mark class="w-4 h-4" />
      </button>
    </div>

    <!-- Création de site web -->
    <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-xl transition relative">
      <div class="absolute top-0 right-0 w-10 h-10 bg-accent clip-triangle"></div>
      <h3 class="text-2xl font-semibold text-primary mb-5">Création de site web</h3>
      <p class="mb-6 text-gray-800 leading-relaxed">Forfait performant et accessible pour les TPE et pros à Rennes : présence en ligne de qualité sans surcoût inutile.</p>
      <ul class="list-disc list-inside text-left text-gray-700 space-y-2 mb-6">
        <li>Site vitrine simple (2–5 pages) : <strong>~1 500 €</strong></li>
        <li>Site plus complet avec blog ou fonctionnalités intermédiaires : <strong>2 000 à 3 000 €</strong></li>
        <li>Site e-commerce ou application légère : <strong>3 000 à 4 500 €</strong></li>
      </ul>
      <p class="text-sm text-gray-600 italic">Basé sur des tarifs journaliers moyens autour de 350 € à 450 €/jour (dev freelance à Rennes) et une semaine de travail selon la complexité.</p>
    </div>

    <!-- Amélioration -->
    <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-xl transition relative">
      <div class="absolute top-0 right-0 w-10 h-10 bg-accent clip-triangle"></div>
      <h3 class="text-2xl font-semibold text-primary mb-5">Amélioration & optimisation</h3>
      <p class="mb-6 text-gray-800 leading-relaxed">Forfait horaire flexible facturé au besoin pour booster votre site sans gros engagement.</p>
      <ul class="list-disc list-inside text-left text-gray-700 space-y-2 mb-6">
        <li>SEO, contenu, architecture : <strong>~60–80 €/h</strong></li>
        <li>Performance & vitesse (code, cache, images) : <strong>~60–80 €/h</strong></li>
        <li>Ergonomie/design & accessibilité : <strong>~60–80 €/h</strong></li>
      </ul>
      <p class="text-sm text-gray-600 italic">Tarif cohérent avec les TJM freelance observés sur la région Rennes et France (~300–400 €/j soit 60–80 €/h).</p>
    </div>

    <!-- Maintenance -->
    <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-xl transition relative">
      <div class="absolute top-0 right-0 w-10 h-10 bg-accent clip-triangle"></div>
      <h3 class="text-2xl font-semibold text-primary mb-5">Maintenance & support continu</h3>
      <p class="mb-6 text-gray-800 leading-relaxed">Abonnement mensuel tout inclus – installation initiale gratuite pendant 2 mois si j’ai créé votre site.</p>
      <ul class="list-disc list-inside text-left text-gray-700 space-y-2 mb-6">
        <li>Site vitrine : <strong>~60 € / mois</strong></li>
        <li>Site e-commerce ou site à fort trafic : <strong>~100–120 € / mois</strong></li>
        <li>Dépannage prioritaire ou interventions urgentes : <strong>option +20 €/mois</strong></li>
      </ul>
      <p class="text-sm text-gray-600 italic">Ces tarifs se situent dans la fourchette standard en freelance (entre ~60 et 200 €/mois selon la complexité).</p>
    </div>

    <!-- Conseil & audit -->
    <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-xl transition relative">
      <div class="absolute top-0 right-0 w-10 h-10 bg-accent clip-triangle"></div>
      <h3 class="text-2xl font-semibold text-primary mb-5">Conseil & audit stratégique</h3>
      <p class="mb-6 text-gray-800 leading-relaxed">Besoin d’un diagnostic clair ou d’un éclairage expert ? Je propose un audit personnalisé ou un accompagnement sur devis.</p>
      <p class="text-left text-primary font-semibold cursor-pointer hover:underline">
        → Contactez-moi pour un devis gratuit sur-mesure selon votre projet.
      </p>
    </div>

  </div>
</section>

{{-- To keep for data + forme --}}
{{-- <section id="bloc-premier-site" class="reco-block">
    <h3 class="reco-title">Vous créez votre premier site ?</h3>
    <p class="reco-text">Je vous accompagne pas à pas : définition des objectifs, choix du style, rédaction des contenus, mise en ligne et prise en main.</p>
</section>

<section id="bloc-refonte" class="reco-block">
    <h3 class="reco-title">Vous souhaitez une refonte ?</h3>
    <p class="reco-text">Je retravaille votre site actuel en gardant ce qui fonctionne et en améliorant l’essentiel : design, structure, performance, clarté.</p>
</section>

<section id="bloc-autonomie" class="reco-block">
    <h3 class="reco-title">Vous voulez être autonome sur votre contenu ?</h3>
    <p class="reco-text">Je peux vous proposer une solution sur <span class="lexique">WordPress</span> ou intégrer un éditeur simple, pour vous permettre de modifier facilement votre site.</p>
</section> --}}



{{-- To keep for data --}}
{{-- <section class="section-container bg-light rounded-2xl p-6 md:p-10 my-12">
    <h2 class="section-title mb-6">Pourquoi me faire confiance&nbsp;?</h2>
    <ul class="grid gap-6 md:grid-cols-2 text-text">
        <li class="flex items-start gap-3">
            <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"/>
            </svg>
            <span>Des sites clairs, rapides, accessibles et sécurisés</span>
        </li>
        <li class="flex items-start gap-3">
            <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"/>
            </svg>
            <span>Une écoute attentive de vos besoins, avec des conseils concrets</span>
        </li>
        <li class="flex items-start gap-3">
            <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"/>
            </svg>
            <span>Un accompagnement de la création à la mise en ligne</span>
        </li>
        <li class="flex items-start gap-3">
            <svg class="w-6 h-6 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"/>
            </svg>
            <span>Pas de jargon inutile&nbsp;: je vous explique tout simplement</span>
        </li>
    </ul>
</section> --}}

{{-- To keep for data --}}
{{-- <section class="section-container bg-secondary rounded-2xl p-6 md:p-10 my-12">
    <h2 class="section-title mb-6">Ils m’ont fait confiance</h2>
    <div class="grid gap-6 md:grid-cols-2">
        <div class="testimonial-card">
            <p class="text-base mb-3">“J’avais besoin d’un site vitrine simple pour mon activité de sophrologue. Max a tout de suite compris mes besoins, le résultat est élégant, rapide et facile à gérer.”</p>
            <p class="font-semibold text-text">— Claire G.</p>
        </div>
        <div class="testimonial-card">
            <p class="text-base mb-3">“Je ne m’y connaissais pas du tout, et Max a été super pédagogue. Le site reflète parfaitement mon activité, et il a même pensé au référencement !”</p>
            <p class="font-semibold text-text">— Thomas R.</p>
        </div>
    </div>
</section>--}}

<section id="services" class="section-testimony">
    <h2 class="section-titre">Pourquoi choisir mes services web</h2>
    <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">

        <!-- Pourquoi me faire confiance -->
        <div class="bg-white text-primary p-8 pt-2 space-y-6">
            
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <x-heroicon-o-sparkles class="w-6 h-6 text-accent mt-1" />
                    <span>Sites modernes, optimisés pour tous les supports</span>
                </li>
                <li class="flex items-start gap-3">
                    <x-heroicon-o-cog-6-tooth class="w-6 h-6 text-accent mt-1" />
                    <span>Code propre, évolutif et facile à maintenir</span>
                </li>
                <li class="flex items-start gap-3">
                    <x-heroicon-o-chart-bar class="w-6 h-6 text-accent mt-1" />
                    <span>Optimisation SEO et performances pour un meilleur référencement</span>
                </li>
                <li class="flex items-start gap-3">
                    <x-heroicon-o-shield-check class="w-6 h-6 text-accent mt-1" />
                    <span>Sécurité renforcée et sauvegardes régulières</span>
                </li>
                <li class="flex items-start gap-3">
                    <x-heroicon-o-hand-thumb-up class="w-6 h-6 text-accent mt-1" />
                    <span>Accompagnement personnalisé du design à la mise en ligne</span>
                </li>
            </ul>
        </div>

        <!-- Témoignages avec carrousel -->
        <div 
          x-data="
            { active: 0, testimonials: [
                { text: 'Max a conçu notre boutique en ligne de A à Z, tout en respectant les délais et le budget. Résultat : un site rapide et qui convertit.', author: 'Julien, e-commerçant' },
                { text: 'Excellente collaboration sur un projet complexe, code propre et communication fluide.', author: 'Sophie, cheffe de projet' },
                { text: 'Grâce à son expertise technique, nous avons pu refondre notre site et améliorer notre SEO rapidement.', author: 'Thomas, entrepreneur' },
            ] }"
            @keydown.arrow-right.window="active = (active + 1) % testimonials.length" 
            @keydown.arrow-left.window="active = (active - 1 + testimonials.length) % testimonials.length"
          x-init="setInterval(() => active = (active + 1) % testimonials.length, 5000)" 
          class="relative"
          role="region" 
          aria-roledescription="carousel" 
          aria-label="Témoignages clients web"
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
    {{-- TODO affichage + bouton --}}
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
                <p class="text-sm text-primary pr-4">Une question ? Demande de devis ?</p>
                 {{-- <button id="start-quiz-btn-2" class="bg-primary text-white text-sm font-medium py-2 rounded-lg hover:bg-primary-dark transition cursor-pointer">
                    Faire le questionnaire
                </button> --}}
                <a href="{{ url('/contact') }}" class="bg-primary text-white text-sm font-medium py-2 rounded-lg hover:bg-primary-dark transition cursor-pointer">Me contacter</a>
            </div>
        </div>
    </div>

@include('partials.section-contact')
@endsection