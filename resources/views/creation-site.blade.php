@extends('layouts.app')

@section('title', 'Création de site web')

@section('header')
    <section class="header-pages-section">
        <div class="header-container">
            <h1 class="header-title">
                <span class="relative z-20">Création de site web</span>
                <span class="header-title-underline"></span>
            </h1> 
            <p class="header-desc">
                Maintenance, refonte ou création complète de sites web
            </p>
            <ul class="mt-6 flex flex-wrap justify-center gap-4 text-md text-white">
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Pour particuliers, associations ou indépendants
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Design responsive et accessible
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Sites modernes, clairs et faciles à gérer.
                </li>
                <li class="flex items-center gap-2">
                    <x-heroicon-o-check class="w-5 h-5 text-accent" />
                    Conseils et accompagnement sur mesure
                </li>
            </ul>
        </div>
        <x-heroicon-o-globe-alt class="absolute top-20 right-8 w-28 h-28 text-accent opacity-50 hidden md:block" />
    </section>
@endsection

@section('content')


<section class="page-intro">
    <div class="intro-container">
        <h2 class="section-title">Ce que je propose</h2>
        <ul class="intro-list">
            <li>Création de site vitrine responsive et performant</li>
            <li>Sites 100% codés main ou administrables avec WordPress selon vos besoins</li>
            <li>Optimisation <span class="lexique">SEO</span> de base et conseils sur la stratégie de contenu</li>
            <li>Maintenance technique, mises à jour, ou refonte légère</li>
        </ul>
        <p class="section-text mt-4">Je prends le temps d’échanger pour comprendre votre activité, vos objectifs, et concevoir un site à votre image.</p>
    </div>
</section>

<x-quiz 
    key="creation-site"
    title="Voyons comment je peux vous aider"
    result-selector="#bloc-debutant"
/>

<section id="bloc-premier-site" class="reco-block">
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
</section>

<section class="section-container bg-light rounded-2xl p-6 md:p-10 my-12">
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
</section>

<section class="section-container bg-secondary rounded-2xl p-6 md:p-10 my-12">
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
</section>

@include('partials.section-contact')
@endsection