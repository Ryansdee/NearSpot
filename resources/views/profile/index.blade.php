<!-- resources/views/profile/index.blade.php -->

@extends('layouts.app')

@section('profile')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="max-width: 540px;">
        <div class="card-header text-center">
            <strong>Informations</strong>
        </div>
        <div class="card-body">
            <p><strong>Prénom:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Services:</strong> 
                @if ($user->services instanceof \Illuminate\Database\Eloquent\Collection)
                    {{ $user->services->count() }}
                @else
                    0
                @endif
            </p>
            <p><strong>Contrat:</strong> 
                <a href="{{ asset('storage/contrat/' . $user->name . '.pdf') }}">View Contract</a>
            </p>
            @if ($hasActiveSubscription)
                <a href="{{ route('services.create') }}" class="btn btn-primary">Ajouter mon service</a>
            @else
                <p class="text-danger">Vous devez avoir l'abonnement actif pour ajouter un service.</p>
                <a href="/subscription" class="text-danger">Consulter l'abonnement</a>
            @endif
        </div>
    </div>
</div>
@endsection
