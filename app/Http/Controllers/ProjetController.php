<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = [
            [
                'slug' => 'memory',
                'titre' => 'Mémory',
                'description' => 'Un jeu interactif avec résultats dynamiques.',
                'techs' => ['Laravel', 'Tailwind', 'Alpine.js'],
                'preview_image' => 'memory-preview.jpg',
            ],
            [
                'slug' => 'vitrine-artisan',
                'titre' => 'Vitrine artisan fictive',
                'description' => 'Un site vitrine responsive pour un artisan local.',
                'techs' => ['Laravel', 'Blade Components'],
                'preview_image' => 'site-vitrine-preview.jpg',
            ],
            [
                'slug' => 'generateur-mentions-legales',
                'titre' => 'Générateur de mentions légales',
                'description' => 'Formulaire intelligent générant des mentions adaptées.',
                'techs' => ['PHP', 'Blade', 'Formulaires dynamiques'],
                'preview_image' => null,
            ],
            [
                'slug' => 'simulateur-page-accueil',
                'titre' => 'Simulateur de page d’accueil',
                'description' => 'Démo visuelle pour créer une page sur-mesure.',
                'techs' => ['Laravel', 'Tailwind', 'JS'],
                'preview_image' => null,
            ],
             [
                'slug' => 'futur-projets',
                'titre' => 'Projets à venir',
                'description' => 'D\'autres projets sont en cours de migration',
                'techs' => ['Laravel', 'Tailwind', 'JS'],
                'preview_image' => 'a-venir.png',
            ],
        ];

        return view('projets', compact('projets'));
    }

    public function show($slug)
    {
        // Pour l'instant, on peut réutiliser le tableau statique
        $projets = collect([
            // Même tableau que dans index()
        ]);

        $projet = $projets->firstWhere('slug', $slug);

        if (! $projet) {
            abort(404);
        }

        return view("projets.show", compact('projet'));
    }
}
