@extends('layouts.app')
@section('title', 'Formulaire de contact')

{{-- TODO
- gestion des données entrantes
- formulations du message
- ajout du mail + tel visible 
--}}

@section('content')
<section class="py-12 px-4 bg-primary text-primary">
    <div class="max-w-3xl mx-auto">
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
</section>

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
