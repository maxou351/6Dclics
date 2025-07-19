<div class="md:hidden relative px-4 overflow-hidden">

    {{-- Flèches gauche/droite --}}
    <button id="carousel-prev" class="carousel-arrow left-2 " aria-label="Précédent">
        <x-heroicon-o-chevron-left class="h-6 w-6 text-primary" />
    </button>
    <button id="carousel-next" class="carousel-arrow right-2" aria-label="Suivant">
        <x-heroicon-o-chevron-right class="h-6 w-6 text-primary" />
    </button>

    {{-- Var nb cards pour générer les dots en amonts --}}
    @php
     $cardsCount = 3;
    @endphp

    <div id="carousel" class="carousel-container scroll-smooth flex overflow-x-auto space-x-4 snap-x snap-mandatory -mx-4 px-4">
        <x-card-service
            device="mobile"
            icon="heroicon-o-question-mark-circle"
            title="Accompagnement & formation informatique"
            desc="Vous êtes un particulier en difficulté avec l'informatique et vous avez besoin d'aide ou de formation ?"
            url="/accompagnement"
            label="En savoir plus"
        />

        <x-card-service
            device="mobile"
            icon="heroicon-o-globe-alt"
            title="Création, évolution & gestion de site web"
            desc="Vous êtes entrepreneur, artisan ou association et vous souhaitez un site clair, moderne et facile à gérer ?"
            url="/creation-site"
            label="Découvrir"
        />

        <x-card-service
            device="mobile"
            icon="heroicon-o-wrench-screwdriver"
            title="Développement & missions techniques"
            desc="Vous êtes recruteur ou porteur de projet et vous cherchez un développeur fiable et expérimenté ?"
            url="/profil-tech"
            label="Voir le profil"
        />
    </div>

    {{-- Indicateurs --}}
    <div class="flex justify-center mt-4 space-x-2" id="carousel-indicators" role="tablist">
        @for ($i = 0; $i < $cardsCount; $i++)
            <span 
              class="w-2.5 h-2.5 rounded-full {{ $i === 0 ? 'bg-accent opacity-70' : 'bg-gray-300' }}" 
              data-index="{{ $i }}"
              role="tab">
            </span>
        @endfor
    </div>
</div>

