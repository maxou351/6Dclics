@extends('layouts.app')
@section('title', 'Contact – Les 6D\'Clics')
@section('meta_description', "Besoin d’un site web, d’un accompagnement ou d’un dépannage informatique ? Contactez-moi dès maintenant pour échanger sur votre projet ou vos besoins numériques.")
@section('meta_keywords', 'contact développeur web, demande de devis site web, aide informatique Rennes, accompagnement numérique')
@section('og_title', 'Contact – Les 6D\'Clics')
@section('og_description', "Échangeons sur votre projet : création de site, formation ou assistance informatique. Réponse rapide et conseils personnalisés.")

{{-- TODO
- gestion des données entrantes
- formulations du message
--}}

@section('content')
<section class="py-12 px-4 bg-primary text-primary">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-6 gap-8 ">

        {{-- Responsive part mobile --}}
        <div class="grid grid-cols-2 gap-6 md:col-span-2 md:hidden">
            <div class="relative flex flex-col items-center md:items-end animate-fade-in text-white">
                <x-heroicon-o-phone class="w-8 h-8 text-accent mb-2 animate-bounce-slow" />
                <p>
                    <a href="tel:+33652851413"
                    class="hover:underline hover:text-blue-300 transition-all duration-300">
                        06.52.85.14.13
                    </a>
                </p>
            </div>
            <div class="relative flex flex-col items-center md:items-start animate-fade-in text-white">
                <x-heroicon-o-envelope class="w-8 h-8 text-accent mb-2 animate-bounce-slow" />
                <p>
                    <a href="mailto:contact@6dclics.fr"
                    class="hover:underline hover:text-blue-300 transition-all duration-300">
                        contact@6dclics.fr
                    </a>
                </p>
            </div>
        </div>
        
        {{-- Colonne gauche : téléphone --}}
        <div class="hidden md:flex text-white space-y-4 md:col-span-1 text-left flex flex-col items-center md:items-end justify-center h-full relative">

            <div class="relative flex flex-col items-center md:items-end animate-fade-in">
                <x-heroicon-o-phone class="w-8 h-8 text-accent mb-2 animate-bounce-slow" />
                <h3 class="text-xl font-semibold mb-2">Téléphone</h3>
                <p>
                    <a href="tel:+33652851413"
                    class="hover:underline hover:text-blue-300 transition-all duration-300">
                        06.52.85.14.13
                    </a>
                </p>
            </div>

        </div>

        {{-- Colonne centrale : formulaire --}}
        <div class="md:col-span-4">
            <h2 class="text-3xl font-bold text-white mb-6 text-center">Contactez-moi</h2>

            @if ($errors->any())
                <div class="mb-6 bg-red-100 text-red-700 p-4 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('contact.send') }}" class="space-y-6 bg-bg p-6 rounded-lg shadow">
                @csrf

                <div>
                    <label for="name" class="block mb-2 font-medium">Nom *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="w-full border border-gray-300 p-3 rounded bg-white focus:outline-none focus:ring-2 focus:ring-primary">
                </div>

                <div>
                    <label for="email" class="block mb-2 font-medium">Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full border border-gray-300 p-3 rounded bg-white focus:outline-none focus:ring-2 focus:ring-primary">
                </div>

            <div 
                x-data="{
                    open: false,
                    selected: '{{ old('demande') }}',
                    options: [
                        { value: '', label: '-- Choisir une option --' },
                        { value: 'accompagnement', label: 'Demande d\'accompagnement' },
                        { value: 'creation', label: 'Demande de création de site' },
                        { value: 'renseignement', label: 'Demande de renseignement' },
                        { value: 'autre', label: 'Autre' },
                    ],
                    get selectedLabel() {
                        const found = this.options.find(option => option.value === this.selected);
                        return found ? found.label : '-- Choisir une option --';
                    }
                }"
                class="relative"
                >
                    <label class="block mb-2 font-medium">Type de demande (optionnel)</label>

                    <button @click="open = !open"
                            type="button"
                            class="w-full border border-gray-300 p-3 rounded bg-white flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-primary">
                        <span x-text="selectedLabel"></span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <ul x-show="open"
                        @click.away="open = false"
                        class="absolute z-10 bg-white border border-gray-300 rounded w-full mt-1 shadow">
                        <template x-for="option in options" :key="option.value">
                            <li @click="selected = option.value; open = false"
                                class="px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                x-text="option.label"></li>
                        </template>
                    </ul>

                    <input type="hidden" name="demande" :value="selected">
                </div>

                <div>
                    <label for="message" class="block mb-2 font-medium">Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full border border-gray-300 p-3 rounded bg-white focus:outline-none focus:ring-2 focus:ring-primary">{{ old('message') }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-[color:var(--color-secondary)] text-[color:var(--color-primary)] font-semibold py-2 px-6 rounded hover:bg-[#bae6fd] transition">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>

        {{-- Colonne droite : email --}}
        <div
            class="hidden md:flex text-white space-y-4 md:col-span-1 text-right flex flex-col items-center md:items-end justify-center h-full relative">

            <div class="relative flex flex-col items-center md:items-start animate-fade-in">
                <x-heroicon-o-envelope class="w-8 h-8 text-accent mb-2 animate-bounce-slow" />
                <h3 class="text-xl font-semibold mb-2">Email</h3>
                <p>
                    <a href="mailto:contact@6dclics.fr"
                    class="hover:underline hover:text-blue-300 transition-all duration-300">
                        contact@6dclics.fr
                    </a>
                </p>
            </div>
        </div>

    </div>
</section>

{{-- Message après envoi --}}
@if(session('success'))
<div x-data="{ msg: 'Hello' }" x-init="console.log(msg)"></div>
<div
    x-data="{
        open: true,
        close() {
            this.open = false;
            setTimeout(() => {
                window.location.href = '{{ url('/') }}';
            }, 300);
            console.log('Ferme');
        }
    }"
    x-show="open"
    x-transition.opacity
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center"
>
    <div
        class="absolute inset-0 backdrop-blur-sm"
        @click=close()
        aria-hidden="true"
    ></div>

    <!-- MODALE -->
    <div
        class="relative z-10 bg-white rounded-xl shadow-xl max-w-md w-full p-6 text-center"
        @keydown.escape.window="close()"
    >
        <h2 class="text-xl font-bold mb-4 text-primary">Merci pour votre message !</h2>
        <p class="text-text">Je vous répondrai dans les plus brefs délais.</p>
        <button
            @click="close()"
            class="mt-6 inline-block bg-secondary text-[color:primary] font-semibold py-2 px-6 rounded hover:bg-[#bae6fd] transition"
        >
            Fermer
        </button>
    </div>
</div>
@endif


@endsection
