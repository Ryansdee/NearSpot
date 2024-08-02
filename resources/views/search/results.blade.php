<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat pour "{{ $query }}"</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('storage/images/NearSpot.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/0913375870.js" crossorigin="anonymous"></script>
</head>
</head>
<style>
   .navbar {
            background: transparent;
            border-bottom: 0.1rem solid black;
            backdrop-filter: blur(2rem);
        }
        .btn {
            transition: 0.2s ease;
        }
</style>
<body>
@include('layouts.navbar')
<div class="container mt-4">
    <h1>Résultat de recherche pour "{{ $query }}".</h1>
    @if($services->isEmpty())
        <p>Rien à été trouvé avec "{{ $query }}"</p>
    @else
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">
                    <h5>{{ $service->title }}</h5>
                    <p>{{ $service->description }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
