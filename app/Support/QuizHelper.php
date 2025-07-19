<?php

namespace App\Support;

class QuizHelper
{
    /**
     * Retourne le tableau des questions d'un quiz donné, ou un tableau vide si introuvable.
     *
     * @param string $key
     * @return array
     */
    public static function get(string $key): array
    {
        return config("quiz.$key") ?? [];
    }

    /**
     * Vérifie si un quiz est défini dans la configuration.
     *
     * @param string $key
     * @return bool
     */
    public static function exists(string $key): bool
    {
        return !empty(config("quiz.$key"));
    }
}
