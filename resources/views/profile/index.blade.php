@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="max-width: 540px;">
        <div class="card-header text-center">
            <strong>Informations</strong>
        </div>
        <div class="card-body">
            <p><strong>Prénom:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Services:</strong> {{ $tagCount }}</p>
            <a href="/dashboard">Créer un service</a><!-- Affiche le nombre de tags -->
        </div>
    </div>
</div>
@endsection
