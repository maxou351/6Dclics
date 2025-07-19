@extends('layouts.app')
@section('title', 'Galerie des projets')

@section('header')
    <section class="header-section">
        <div class="header-container">
            <h1 class="header-title">Mes projets</h1>
            <p class="header-desc">Voici quelques exemples de réalisations ou démonstrations techniques. Chaque projet met en avant une compétence spécifique que je peux mobiliser pour vous.</p>
        </div>
    </section>
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($projets as $projet)
        <a href="{{ url('/projets/' . $projet['slug']) }}" class="group block bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
            <div class="aspect-w-16 aspect-h-9 bg-gray-100">
                @if($projet['preview_image'])
                <img src="{{ asset('images/projets-preview/' . $projet['preview_image']) }}" alt="{{ $projet['titre'] }}" class="object-cover w-full h-full">
                @else
                <div class="flex items-center justify-center w-full h-full text-gray-400 text-lg">Aperçu</div>
                @endif
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800 group-hover:text-primary transition">{{ $projet['titre'] }}</h2>
                <p class="text-gray-600 text-sm mt-1">{{ $projet['description'] }}</p>
                <div class="flex flex-wrap mt-3 gap-2">
                    @foreach ($projet['techs'] as $tech)
                    <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@include('partials.section-contact')
@endsection