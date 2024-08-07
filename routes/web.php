<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PlombierController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Route pour le tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// web.php
Route::get('/tags/{tagIds}/precisions', [ServiceController::class, 'getPrecisionsByTags']);


// Routes pour les abonnements
Route::middleware(['auth'])->group(function () {
    Route::get('subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
    Route::get('subscription/payment', [SubscriptionController::class, 'showPaymentPage'])->name('subscription.payment');
    Route::get('subscription/handle-payment', [SubscriptionController::class, 'handlePayment'])->name('subscription.handlePayment');
});

// Routes pour le profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');


// Routes pour les services
Route::middleware('auth')->group(function () {
    // Afficher la liste des services
    Route::get('/dashboard', [ServiceController::class, 'index'])->name('services.index');

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

Route::get('/services', function(){
    return view('services');
});


Route::get('/plombier', [ServiceController::class, 'showPlumbingServices'])->name('plumbing.services');
Route::get('/electricien', [ServiceController::class, 'showElectricienServices'])->name('electricien.services');
Route::get('/chauffagistes', [ServiceController::class, 'showChauffagistesServices'])->name('chauffagistes.services');
Route::get('/jardinier', [ServiceController::class, 'showJardinierServices'])->name('jardinier.services');
Route::get('/nettoyeur', [ServiceController::class, 'showNettoyeurServices'])->name('nettoyeur.services');
Route::get('/taxi', [ServiceController::class, 'showTaxiServices'])->name('taxi.services');
Route::get('/chauffeur-prive', [ServiceController::class, 'showChauffeurPriveServices'])->name('chauffeur-prive.services');
Route::get('/demenagement', [ServiceController::class, 'showDemenagementServices'])->name('demenagement.services');
Route::get('/location-voitures', [ServiceController::class, 'showLocationVoituresServices'])->name('location-voitures.services');
Route::get('/avocat', [ServiceController::class, 'showAvocatServices'])->name('avocat.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/', [ServiceController::class, 'showServices'])->name('.services');
Route::get('/dev-web', [ServiceController::class, 'showDevwebServices'])->name('devweb.services');

// Route de recherche
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Routes d'authentification
require __DIR__.'/auth.php';
