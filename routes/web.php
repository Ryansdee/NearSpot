<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubscriptionController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Route pour le tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes pour les abonnements
Route::middleware('auth')->group(function () {
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
    Route::post('/subscription/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscription.subscribe');
});

// Routes pour le profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes pour les services
Route::middleware('auth')->group(function () {
    // Afficher la liste des services
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

    // Afficher le formulaire de création d'un service
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');

    // Sauvegarder un nouveau service
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

    // Afficher un service spécifique
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

    // Afficher le formulaire d'édition d'un service
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');

    // Mettre à jour un service spécifique
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');

    // Supprimer un service spécifique
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
});

// Route de recherche
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Routes d'authentification
require __DIR__.'/auth.php';
