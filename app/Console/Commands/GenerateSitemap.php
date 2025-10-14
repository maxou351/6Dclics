<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Génère public/sitemap.xml via Spatie Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Génération du sitemap…');

        // s'assurer que APP_URL est correctement défini dans .env
        $url = config('app.url') ?: 'https://ton-domaine.fr';

        SitemapGenerator::create($url)
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('sitemap.xml créé dans public/');
        return 0;
    }
}
