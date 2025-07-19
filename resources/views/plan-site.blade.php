@extends('layouts.app')
@section('title', 'Plan du site')

@section('content')
<section class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold mb-8 text-center text-blue-700">Plan du site</h1>
    <ul class="list-disc list-inside space-y-3 text-gray-700">
        <li><a href="{{ url('/') }}" class="hover:text-blue-600">Accueil</a></li>
        <li><a href="{{ url('/accompagnement') }}" class="hover:text-blue-600">Accompagnement numérique</a></li>
        <li><a href="{{ url('/creation-site') }}" class="hover:text-blue-600">Création de site web</a></li>
        <li><a href="{{ url('/profil-tech') }}" class="hover:text-blue-600">Profil technique</a></li>
        <li><a href="{{ url('/contact') }}" class="hover:text-blue-600">Contact</a></li>
        <li><a href="{{ url('/mentions-legales') }}" class="hover:text-blue-600">Mentions légales</a></li>
        <li><a href="{{ url('/confidentialite') }}" class="hover:text-blue-600">Politique de confidentialité</a></li>
    </ul>
</section>
@endsection