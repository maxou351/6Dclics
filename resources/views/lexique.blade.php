<!-- resources/views/lexique.blade.php -->
@extends('layouts.app')

@section('title', 'Lexique')

@section('content')
<section class="section-container py-16 px-4 max-w-5xl mx-auto">
  <h1 class="text-3xl font-bold text-primary mb-8 text-center">Lexique</h1>
  <p class="text-gray-600 mb-10 text-center max-w-xl mx-auto">
    Ce lexique a pour but d'expliquer simplement certains termes techniques que vous pouvez rencontrer sur ce site.
  </p>
  <div id="lexique" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Le contenu du lexique sera injecté ici par JavaScript -->
  </div>
</section>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', async () => {
    const container = document.getElementById('lexique');

    try {
      const res = await fetch('/data/lexique.json');
      const data = await res.json();

      Object.entries(data).forEach(([terme, definition]) => {
        const card = document.createElement('div');
        card.className = "bg-white p-6 rounded-lg shadow hover:shadow-md transition";

        card.innerHTML = `
          <h2 class="text-lg font-semibold text-primary mb-2">${terme}</h2>
          <p class="text-sm text-gray-700 leading-relaxed">${definition}</p>
        `;

        container.appendChild(card);
      });
    } catch (error) {
      container.innerHTML = '<p class="text-red-600">Erreur lors du chargement du lexique.</p>';
      console.error('Erreur lexique:', error);
    }
  });
</script>
@endpush
