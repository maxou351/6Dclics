@props([
    'id',
    'icon' => 'question-mark-circle',
    'title',
    'description',
    'contactRoute' => 'contact',
    'tarif' => '35',
])

<section id="{{ $id }}" class="mx-auto transition-opacity duration-500 mb-12 p-6 bg-white rounded-2xl shadow-sm border border-primary max-w-3xl quiz-section hidden ">
    <div class="flex flex-col md:flex-row md:items-start gap-6">
        {{-- Icône principale --}}
        <div class="flex-shrink-0 text-accent">
            <x-dynamic-component :component="'heroicon-o-' . $icon" class="w-12 h-12" />
        </div>

        {{-- Contenu texte --}}
        <div class="flex-1">
            <h2 class="text-2xl font-bold text-primary mb-3">{{ $title }}</h2>

            <p class="text-primary leading-relaxed mb-4">
                {!! nl2br(e($description)) !!}
            </p>

            {{-- Modalités --}}
            <div class="flex flex-wrap items-center gap-6 mt-4 text-primary text-sm">
                <div class="flex items-center gap-2">
                    <x-heroicon-o-home class="w-5 h-5" />
                    À votre domicile
                </div>
                <div class="flex items-center gap-2">
                    <x-heroicon-o-computer-desktop class="w-5 h-5" />
                    À distance
                </div>
                <div class="flex items-center gap-2">
                    <x-heroicon-o-phone class="w-5 h-5" />
                    Par téléphone
                </div>
            </div>

            {{-- Tarifs --}}
            <div class="mt-4 text-primary text-sm bg-primary/5 border border-primary/10 p-4 rounded-lg">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="font-semibold mb-1">Tarifs :</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>1<sup>re</sup> intervention : <span class="font-medium">{{ $tarif }}€ / heure</span></li>
                            <li>Formule régulière : <span class="font-medium">{{ $tarif - 5 }}€ / heure</span></li>
                        </ul>
                    </div>
                    <a href="{{ route('tarifs') }}" class="mt-1 inline-flex items-center gap-1 text-sm text-primary underline hover:text-primary-dark">
                        <x-heroicon-o-currency-euro class="w-4 h-4" />
                        En savoir plus
                    </a>
                </div>
            </div>

            {{-- Bouton de contact --}}
            <a 
                href="{{ route($contactRoute, ['from' => $id]) }}" 
                class="inline-flex items-center gap-2 mt-6 bg-primary text-white px-5 py-2 rounded-lg font-semibold shadow hover:bg-primary-dark transition"
            >
                <x-heroicon-o-envelope class="w-5 h-5" />
                Me contacter
            </a>
        </div>
    </div>
</section>
