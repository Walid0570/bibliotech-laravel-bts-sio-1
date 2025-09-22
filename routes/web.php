<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;

/*
|--------------------------------------------------------------------------
| SÉANCE 1 : Routes Fondamentales
|--------------------------------------------------------------------------
| Focus : Comprendre le routage Laravel basique
| - Routes simples
| - Paramètres d'URL
| - Routes nommées
| - Contrôleurs
*/

// 1. Accueil - Route simple
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. À propos - Route vers vue directe  
Route::get('/about', function () {
    return view('about');
})->name('about');

// 3. Liste livres - Route vers contrôleur
Route::get('/livres', [LivreController::class, 'index'])->name('livres.index');

// 4. Détail livre - Route avec paramètre
Route::get('/livre/{id}', [LivreController::class, 'show'])->name('livres.show');
<?php

// Contrôleur LivreController utilisé, BookController supprimé
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Séance 1 : MVC + Blade
|--------------------------------------------------------------------------
| Routes minimalistes pour comprendre le pattern MVC Laravel
| Progression : 4 routes simples avec paramètres et routes nommées
*/

// Route d'accueil
Route::get('/', [AccueilController::class, 'index'])->name('accueil');

// Routes des livres
Route::get('/livres', [LivreController::class, 'index'])->name('livres.index');
Route::get('/livres/{id}', [LivreController::class, 'show'])->name('livres.show');
Route::get('/recherche', [LivreController::class, 'search'])->name('livres.search');

// Pages statiques
Route::get('/a-propos', function () {
    return view('about');
})->name('about');

// Route de démonstration pour comprendre les paramètres
Route::get('/demo/hello/{nom?}', function ($nom = 'Étudiant') {
    return view('demo.hello', ['nom' => $nom]);
})->name('demo.hello');

// Route des contacts
Route::get('/contact', function () {
    return view('contact', [
        'etablissement' => 'Votre Lycée',
        'formation' => 'BTS SIO SLAM',
        'email' => 'contact@votre-lycee.fr',
        'telephone' => '01 23 45 67 89',
        'adresse' => '123 Rue de l\'École, 75000 Paris'
    ]);
})->name('contact');