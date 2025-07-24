@extends('layouts.app')

@section('title', 'Tarifs')

@section('content')
    <section class="py-12 px-4 max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold text-primary mb-8">Grille tarifaire</h2>

        <!-- Dépannage informatique -->
        <div class="mb-10">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🔧 Dépannage informatique</h3>
            <ul class="space-y-2">
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Dépannage à distance (1h)</span>
                <span class="font-semibold text-primary">30–40 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Dépannage à domicile (1h)</span>
                <span class="font-semibold text-primary">40–50 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Forfait 1h30</span>
                <span class="font-semibold text-primary">60 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Installation/configuration complète</span>
                <span class="font-semibold text-primary">80–120 €</span>
            </li>
            </ul>
        </div>

        <!-- Formation numérique -->
        <div class="mb-10">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🧑‍🏫 Formation à l’usage du numérique</h3>
            <ul class="space-y-2">
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Séance d’initiation (1h)</span>
                <span class="font-semibold text-primary">35 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Atelier complet (2h)</span>
                <span class="font-semibold text-primary">60–70 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Pack 4 séances</span>
                <span class="font-semibold text-primary">120–150 €</span>
            </li>
            </ul>
        </div>

        <!-- Création de site -->
        <div class="mb-10">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🌐 Création de site web</h3>
            <ul class="space-y-2">
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Site one-page simple</span>
                <span class="font-semibold text-primary">300–500 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Site vitrine complet (3–5 pages)</span>
                <span class="font-semibold text-primary">700–1200 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Option responsive/SEO/formulaire</span>
                <span class="font-semibold text-primary">+50–100 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Maintenance mensuelle</span>
                <span class="font-semibold text-primary">20–40 €/mois</span>
            </li>
            </ul>
        </div>

        <!-- Modifications / Ajouts -->
        <div class="mb-10">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🛠 Modifications ou ajouts</h3>
            <ul class="space-y-2">
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Modif ponctuelle (1–2h)</span>
                <span class="font-semibold text-primary">50–70 €/h</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Intervention technique</span>
                <span class="font-semibold text-primary">60–80 €/h</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Mini projet (ajout d’une page)</span>
                <span class="font-semibold text-primary">200–400 €</span>
            </li>
            </ul>
        </div>

        <!-- Prestations pro / techniques -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-4">👨‍💼 Prestations techniques / pro</h3>
            <ul class="space-y-2">
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Configuration serveur</span>
                <span class="font-semibold text-primary">100–250 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Déploiement Laravel / CI/CD</span>
                <span class="font-semibold text-primary">200–400 €</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Audit code / performance</span>
                <span class="font-semibold text-primary">60–90 €/h</span>
            </li>
            <li class="bg-white shadow rounded-xl p-4 flex justify-between">
                <span>Support technique</span>
                <span class="font-semibold text-primary">60 €/h</span>
            </li>
            </ul>
        </div>
        </section>


    @include('partials.section-contact')
@endsection

@push('scripts')
    {{-- @vite('resources/js/components/quiz.js') --}}
@endpush