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
         <!-- Débutant -->
            <div 
              role="list-item"
              class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                <div class="flex justify-center gap-1 mb-4" aria-hidden="true" focusable="false">
                    <x-heroicon-o-academic-cap class="w-12 h-12 text-primary"/>
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
            <div 
              role="list-item"
              class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
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
            <div 
              role="list-item"
              class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
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

