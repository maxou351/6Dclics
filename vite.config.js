import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

// TODO Gestion js files in PROD
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/js/components/galerie.js',
                'resources/js/components/loop.js',
                'resources/js/components/carousel.js',
                'resources/js/components/quiz.js' 
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
     server: {
    cors: true
  },
  base: '/',
});
