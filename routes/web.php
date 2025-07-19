<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\LexiqueController;

/*
|--------------------------------------------------------------------------
| Pages statiques
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('accueil'))->name('accueil');

Route::get('/accompagnement', fn () => view('accompagnement'))->name('accompagnement');
Route::get('/creation-site', fn () => view('creation-site'))->name('creation-site');
Route::get('/profil-tech', fn () => view('profil-tech'))->name('profil-tech');
Route::get('/contact', fn () => view('contact'))->name('contact');
Route::get('/lexique', fn () => view('lexique'))->name('lexique');

Route::get('/confidentialite', fn () => view('confidentialite'))->name('confidentialite');
Route::get('/mentions-legales', fn () => view('mentions-legales'))->name('mentions-legales');
Route::get('/plan-site', fn () => view('plan-site'))->name('plan-site');

/*
|--------------------------------------------------------------------------
| Projets (dynamiques)
|--------------------------------------------------------------------------
*/

Route::prefix('projets')->name('projets.')->group(function () {
    Route::get('/', [ProjetController::class, 'index'])->name('index');
    Route::get('/{slug}', [ProjetController::class, 'show'])->name('show');
});

/*
|--------------------------------------------------------------------------
| Formulaire de contact (POST)
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send')
    ->middleware('throttle:5,1');


// Route::get('/lexique', [LexiqueController::class, 'index'])->name('lexique.index');

// Route::view('/lexique')->name('lexique');

// Route::get('/lexique', [LexiqueController::class, 'api']);
