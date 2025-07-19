<?php

return [
    'accompagnement' => [
        [
            'text' => 'Avez-vous des difficultés à utiliser un ordinateur ?',
            'answers' => [
                'deb' => 'Oui, totalement débutant',
                'int' => 'Quelques bases',
                'aut' => 'Non, je suis assez autonome',
            ],
        ],
        [
            'text' => 'Quels type d\'accompagnement cherchez-vous?',
            'answers' => [
                'depannage' => 'Dépannage ponctuel',
                'init' => 'Démarrage / Initialisation',
                'formation' => 'Formation',
                'jsp' => 'Je ne sais pas, montrez moi ce que vous proposez',
            ],
        ],
    ],

    'creation-site' => [
        [
            'text' => 'Avez-vous déjà un site internet ?',
            'answers' => [
                'non' => 'Non, c’est mon premier',
                'refonte' => 'Oui, mais il a besoin d’une refonte',
                'maintenance' => 'Oui, et je cherche quelqu’un pour le maintenir',
            ],
        ],
        [
            'text' => 'Souhaitez-vous pouvoir modifier vous-même le contenu ?',
            'answers' => [
                'oui' => 'Oui, je veux être autonome',
                'non' => 'Non, je préfère déléguer',
                'intermediaire' => 'Peu importe, selon la solution',
            ],
        ],
    ],
];
