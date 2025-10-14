Super idée — je vais te faire un guide **au format Markdown** qui documente l’installation et la mise en ligne de ton site Laravel sur un hébergement Infomaniak.
Je vais inclure :

* préparation locale,
* configuration du serveur Infomaniak,
* déploiement (via FTP ou Git),
* configuration de Laravel (env, cache, logs, storage),
* HTTPS / domaine,
* SEO (robots.txt, sitemap, Search Console).

---

````markdown
# 🚀 Guide d’installation et de mise en ligne d’un site Laravel sur Infomaniak

Ce guide décrit toutes les étapes pour déployer un site Laravel sur un hébergement Infomaniak (mutualisé ou serveur managé).

---

## 1. Pré-requis
 
- Accès au **Manager Infomaniak**.  
- Accès **FTP / SSH**.  
- Une installation Laravel fonctionnelle en local.  

---

## 2. Préparation en local

1. Copier le `.env.production` à la place du `.env` 

2. Vérifier que les dépendances sont à jour :

   ```bash
   composer install --optimize-autoloader --no-dev
   npm run build
   ```

3. Nettoyer le cache avant export :

   ```bash
   php artisan config:clear
   php artisan route:clear
   php artisan view:clear
   ```

---

## 3. Configuration Infomaniak

### 3.1 Création de la base de données

* Dans le Manager Infomaniak → **Bases de données** → créer une base MySQL.
* Noter le **nom**, l’**utilisateur** et le **mot de passe**.

### 3.2 Réglage PHP

* Dans le Manager Infomaniak → **Hébergement → Versions de PHP** → choisir PHP 8.2 ou supérieur.
* Activer `proc_open`, `mbstring`, `openssl`, `pdo_mysql`.

### 3.3 Pointage du domaine

* Configurer le domaine pour pointer vers le répertoire `public/` de Laravel.
* Sur Infomaniak, tu peux définir le **dossier racine du site** dans “Sites”.
* Exemple : `/web/tonsite/public`

---

## 4. Déploiement du projet

### Se connecter au server

* ssh user@server puis Password
* cd sites/6Dclics
* pwd pour récupérer le chemin du site
* get php 8.4 path
* /usr/bin/php-8.4 artisan config:clear
*/usr/bin/composer_php8.4 install --no-dev --optimize-autoloader

### En local

* récupérer le chemin du dossier
* rsync -avz --exclude=".git" ./ ug2l9y_system@ug2l9y.ftp.infomaniak.com:/home/clients/e2a8e00ba5925ecd5d5a50680574a000/sites/6dcli
cs.fr/
* vendor and node_module ?



* Installer les dépendances sur le serveur (si SSH activé) :

  ```bash
  composer install --optimize-autoloader --no-dev
  npm ci --production
  ```

---

## 5. Configuration Laravel en production

1. Générer la clé Laravel (si pas déjà faite) :

   ```bash
   php artisan key:generate
   ```

2. Migrer la base de données :

   ```bash
   php artisan migrate --force
   ```

3. Optimiser les performances :

   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

4. Vérifier les permissions :

   * Le dossier `storage/` et `bootstrap/cache/` doivent être en écriture :

     ```bash
     chmod -R 775 storage bootstrap/cache
     ```

5. Build sitemap

---

## 6. HTTPS et domaine

* Infomaniak fournit un certificat **SSL gratuit (Let's Encrypt)**.
* Activer HTTPS depuis le Manager → Sécurité → SSL.
* Forcer HTTPS dans Laravel (`.htaccess` dans `public/`) :

  ```apache
  <IfModule mod_rewrite.c>
      RewriteEngine On
      RewriteCond %{HTTPS} !=on
      RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
  </IfModule>
  ```

---

## 7. SEO et indexation

1. Créer un fichier `robots.txt` à la racine :

   ```
   User-agent: *
   Allow: /
   Sitemap: https://tonsite.fr/sitemap.xml
   ```

2. Générer un sitemap avec [spatie/laravel-sitemap](https://github.com/spatie/laravel-sitemap) :

   ```bash
   composer require spatie/laravel-sitemap
   php artisan sitemap:generate
   ```

   → accessible sur `https://tonsite.fr/sitemap.xml`

3. Ajouter ton site dans [Google Search Console](https://search.google.com/search-console).

   * Vérifier la propriété via DNS.
   * Soumettre le `sitemap.xml`.
   * Demander l’indexation des pages clés (home, services, accompagnement, contact).

4. Créer des backlinks simples : LinkedIn, GitHub, réseaux sociaux.

---

## 8. Suivi et maintenance

* Vérifier régulièrement les **logs Laravel** : `storage/logs/laravel.log`.
* Surveiller l’indexation via Search Console.
* Garder Laravel et ses dépendances à jour :

  ```bash
  composer update --no-dev
  npm update
  ```

---

✅ Ton site Laravel est maintenant en production sur Infomaniak, sécurisé, optimisé et prêt à être indexé par Google.

```

---

Veux-tu que je te prépare aussi une **version prête-à-importer en `.md`** que tu pourras directement mettre dans ton repo (genre `INSTALL_INFOMANIAK.md`) ?
```
