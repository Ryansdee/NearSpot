<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NearSpot</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/NearSpot.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="description" content="Bienvenue sur NearSpot la ou vous trouver vos réponses à vos besoins !">
    <script src="https://kit.fontawesome.com/0913375870.js" crossorigin="anonymous"></script>
    <style>
        .navbar {
            background: transparent;
            border-bottom: 0.1rem solid black;
            backdrop-filter: blur(2rem);
        }
        .btn {
            transition: 0.2s ease;
        }
        .full-width-image {
    width: 100%;
    height: auto;
    display: block; /* Assure que l'image ne dépasse pas le conteneur */
}       
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
        @media screen and (max-width: 768px){

        }
    </style>
</head>
<body>
@include('layouts.navbar')
<div class="carousel">
    @yield('carousel')
</div>
<div class="content">
        @yield('content')
</div>
<div class="services">
    @yield('services')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
