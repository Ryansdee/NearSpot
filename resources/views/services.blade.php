@extends('layouts.app')
@section('services')
<style>
    .card{
            transition: 0.3s ease;
            background: transparent;
        }
        .card:hover{
            transform: scale(1.03);
            border: 0.1rem solid gray;
            cursor: pointer;
            -webkit-box-shadow: 10px 10px 41px 0px rgba(0,0,0,0.48);
            -moz-box-shadow: 10px 10px 41px 0px rgba(0,0,0,0.48);
            box-shadow: 10px 10px 41px 0px rgba(0,0,0,0.48);
        }
</style>
<div class="container mt-2">
    <img src="{{ asset('storage/images/4.png') }}" alt="" style="width: 110%; height: auto;">
    <h2 class="text-center mt-4">
    Services de maison et réparations
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/plombier'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-wrench" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Plombiers</h5>
                            <p class="card-text">Réparations et installations de plomberie.</p>
                            <a class="card-text" href="/plombier"><small class="text-body-danger">Voir les plombiers</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/electricien'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-bolt" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Électriciens</h5>
                            <p class="card-text">Installation et réparation de systèmes électriques.</p>
                            <a class="card-text" href="/electricien"><small class="text-body-danger">Voir les électriciens</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/chauffagistes'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-temperature-high" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Chauffagiste</h5>
                            <p class="card-text">Maintenance et installation de systèmes de chauffage.</p>
                            <a class="card-text" href="/chauffagiste"><small class="text-body-danger">Voir les chauffagistes</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/jardinier'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-seedling" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Jardinier</h5>
                            <p class="card-text">Entretien et aménagement des espaces verts.</p>
                            <a class="card-text" href="/jardinier"><small class="text-body-danger">Voir les Jardiniers</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/nettoyeur'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-broom" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nettoyeur</h5>
                            <p class="card-text">Services de nettoyage résidentiels et commerciaux.</p>
                            <a class="card-text" href="/nettoyeur"><small class="text-body-danger">Voir les Nettoyeurs</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services de Transport et Logistique
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/taxi'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-taxi" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Taxis</h5>
                            <p class="card-text">Transport individuel en voiture</p>
                            <a class="card-text" href="/taxi"><small class="text-body-danger">Voir les taxis</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/chauffeur-prive'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-car" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Chauffeur Privé</h5>
                            <p class="card-text">Transport avec chauffeur privé.</p>
                            <a class="card-text" href="/chauffeur-prive"><small class="text-body-danger">Voir les chauffeurs</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/demenagement'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-truck" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Demenagement</h5>
                            <p class="card-text">Services de déménagement résidentiel et commercial.</p>
                            <a class="card-text" href="/demenagement"><small class="text-body-danger">Voir les démenageurs</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/location-voitures'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-car-on" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Location de véhicules</h5>
                            <p class="card-text">Location de voitures, scooters, vélos,...</p>
                            <a class="card-text" href="/location-voitures"><small class="text-body-danger">Voir les locations</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services Professionnels
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/avocat'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Avocat</h5>
                            <p class="card-text">Conseils juridiques et représentation en justice.</p>
                            <a class="card-text" href="/avocat"><small class="text-body-danger">Voir les avocats</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/comptable'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-money-bill-trend-up" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Comptable</h5>
                            <p class="card-text" style="font-size: 0.94rem;">Gestion des finances, préparation des déclarations fiscales.</p>
                            <a class="card-text" href="/comptable"><small class="text-body-danger">Voir les comptables</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/consultant'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-comments" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Consultant</h5>
                            <p class="card-text">Conseils en gestion, stratégie, IT.</p>
                            <a class="card-text" href="/consultant"><small class="text-body-danger">Voir les consultants</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/architecte'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-pen-ruler" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Architectes</h5>
                            <p class="card-text">Conception et planification de projets architecturaux.</p>
                            <a class="card-text" href="/architecte"><small class="text-body-danger">Voir les architectes</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services de Santé
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/médecins'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-user-doctor" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Médecins Généralistes</h5>
                            <p class="card-text">Consultations médicales de routine.</p>
                            <a class="card-text" href="/médecins"><small class="text-body-danger">Voir les Médecins Généralistes</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/Dentistes'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-tooth" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dentistes</h5>
                            <p class="card-text">Soins dentaires et orthodontie.</p>
                            <a class="card-text" href="/Dentistes"><small class="text-body-danger">Voir les Dentistes</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/Physiothérapeutes'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-notes-medical" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Physiothérapeutes</h5>
                            <p class="card-text">Réhabilitation et traitement des douleurs physiques.</p>
                            <a class="card-text" href="/Physiothérapeutes"><small class="text-body-danger">Voir les Physiothérapeutes</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/pharmacies'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-hospital" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Pharmacies</h5>
                            <p class="card-text">Vente de médicaments et conseils de santé.</p>
                            <a class="card-text" href="/pharmacies"><small class="text-body-danger">Voir les pharmacies</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services Éducatifs
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/cours-langues'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-user-doctor" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Cours de Langues</h5>
                            <p class="card-text">Apprentissage des langues étrangères.</p>
                            <a class="card-text" href="/cours-langues"><small class="text-body-danger">Voir les cours de langues</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/tutoring'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-user-graduate" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tutoring</h5>
                            <p class="card-text">Aide aux devoirs et soutien scolaire.</p>
                            <a class="card-text" href="/tutoring"><small class="text-body-danger">Voir les tutoring</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/cours-musique'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-music" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Cours de musique</h5>
                            <p class="card-text">Leçons de musique pour divers instruments.</p>
                            <a class="card-text" href="/cours-musique"><small class="text-body-danger">Voir les cours de musique</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services de bien-être
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/coiffeur'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-scissors" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Coiffeur</h5>
                            <p class="card-text">Coupe et coiffage de cheveux.</p>
                            <a class="card-text" href="/coiffeur"><small class="text-body-danger">Voir les coiffeurs</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/esthéticiens'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-hand-sparkles" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Esthéticiens</h5>
                            <p class="card-text">Soins de beauté, manucure, pédicure.</p>
                            <a class="card-text" href="/esthéticiens"><small class="text-body-danger">Voir les esthéticiens</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/massothérapeutes'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-spa" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Massothérapeutes</h5>
                            <p class="card-text">Thérapies de massage pour la détente et la guérison.</p>
                            <a class="card-text" href="/massothérapeutes"><small class="text-body-danger">Voir les massothérapeutes</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services de Restauration
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/restaurant'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-utensils" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Restaurant</h5>
                            <p class="card-text">Divers types de cuisines (belge, italienne, asiatique, ...).</p>
                            <a class="card-text" href="/restaurant"><small class="text-body-danger">Voir les restaurants</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/traiteur'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-drumstick-bite" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Traiteur</h5>
                            <p class="card-text">Services de restauration pour événements et réceptions.</p>
                            <a class="card-text" href="/traiteur"><small class="text-body-danger">Voir les traiteurs</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/cafe-bistros'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-mug-hot" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Cafés et Bistros</h5>
                            <p class="card-text">Lieux pour boire un café ou manger un repas léger.</p>
                            <a class="card-text" href="/cafe-bistros"><small class="text-body-danger">Voir les cafés/bistros</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services de Divertissement et Loisirs
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/voyage'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-plane-departure" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Agences de voyage</h5>
                            <p class="card-text">Planification et réservation de voyages.</p>
                            <a class="card-text" href="/voyage"><small class="text-body-danger">Voir les agences de voyage</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/fitness'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-dumbbell" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Centre de fitness</h5>
                            <p class="card-text">Abonnements et cours de fitness.</p>
                            <a class="card-text" href="/fitness"><small class="text-body-danger">Voir les centres de fitness</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/cinema'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-film" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Salles de cinéma</h5>
                            <p class="card-text">Projections de films récent et classiques.</p>
                            <a class="card-text" href="/cinema"><small class="text-body-danger">Voir les cinemas</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/theatre-concert'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-masks-theater" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Théâtres et Concerts</h5>
                            <p class="card-text">Représentations théâtrales et musicales.</p>
                            <a class="card-text" href="/theatre-concert"><small class="text-body-danger">Voir les théâtres concerts</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services Technologiques
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/reparation'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-laptop-medical" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Réparation d’Ordinateurs</h5>
                            <p class="card-text">Services de réparation pour PC et Mac.</p>
                            <a class="card-text" href="/reparation"><small class="text-body-danger">Voir les reparateur d'ordinateurs</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/dev-web'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-terminal" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Developpeurs web</h5>
                            <p class="card-text">Création et maintenance de sites web.</p>
                            <a class="card-text" href="/dev-web"><small class="text-body-danger">Voir les développeurs web</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/support-technique'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-handshake-angle" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Support Technique</h5>
                            <p class="card-text">Envoi et réception de courriers et colis.</p>
                            <a class="card-text" href="/support-technique"><small class="text-body-danger">Voir les supports techniques</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services Administratifs
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/assurance'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-scroll" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Assurance</h5>
                            <p class="card-text">Assurance habitation, automobile, santé.</p>
                            <a class="card-text" href="/assurance"><small class="text-body-danger">Voir les assurances</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/banque'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-building-columns" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Banques</h5>
                            <p class="card-text">Services financiers, comptes bancaires, prêts.</p>
                            <a class="card-text" href="/banque"><small class="text-body-danger">Voir les banques</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/post'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-square-envelope" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Services Postaux</h5>
                            <p class="card-text">Envoi et réception de courriers et colis.</p>
                            <a class="card-text" href="/post"><small class="text-body-danger">Voir les points de posts</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services pour Animaux
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/toilettage'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-soap" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Toilettage d’Animaux</h5>
                            <p class="card-text">Nettoyage et soin des animaux domestiques.</p>
                            <a class="card-text" href="/toilettage"><small class="text-body-danger">Voir les assurances</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/garderie-animaux'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-shield-dog" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Garderie pour Animaux</h5>
                            <p class="card-text">Services de garde pour animaux de compagnie.</p>
                            <a class="card-text" href="/garderie-animaux"><small class="text-body-danger">Voir les garderies pour animaux</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/veterinaire'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-briefcase-medical" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Vétérinaires</h5>
                            <p class="card-text">Soins médicaux pour animaux.</p>
                            <a class="card-text" href="/veterinaire"><small class="text-body-danger">Voir les veterinaires</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <h2 class="text-center mt-4">
    Services de Sécurité
    </h2>
    <div class="row">
        <div class="col-md-6" onclick="window.location.href='/security-&-alarme'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-shield-halved" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Alarmes et Sécurité</h5>
                            <p class="card-text">Installation de systèmes de sécurité et d'alarme.</p>
                            <a class="card-text" href="/security-&-alarme"><small class="text-body-danger">Voir les alarmes et sécurité</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" onclick="window.location.href='/gardiennage'">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-user-shield" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Gardiennage</h5>
                            <p class="card-text">Services de gardiennage résidentiel et commercial.</p>
                            <a class="card-text" href="/gardiennage"><small class="text-body-danger">Voir les gardiennages</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
