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
        <div class="col-md-6">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-wrench" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Plombiers</h5>
                            <p class="card-text">Réparations et installations de plomberie.</p>
                            <a class="card-text" href="/services/plombier"><small class="text-body-danger">Voir les plombiers</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-bolt" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Électriciens</h5>
                            <p class="card-text">Installation et réparation de systèmes électriques.</p>
                            <a class="card-text" href="/services/electricien"><small class="text-body-danger">Voir les électriciens</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3 mt-4">
                <div class="row g-0">
                    <div class="col-md-4 text-center mt-4">
                        <i class="fa-solid fa-temperature-high" style="font-size: 4rem; margin-top: 0.4rem;"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Chauffagiste</h5>
                            <p class="card-text">Maintenance et installation de systèmes de chauffage.</p>
                            <a class="card-text" href="/services/chauffagiste"><small class="text-body-danger">Voir les chauffagistes</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
