<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NearSpot | Login</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/NearSpot.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="description" content="Bienvenue sur NearSpot la ou vous trouver vos réponses à vos besoins !">
    <script src="https://kit.fontawesome.com/0913375870.js" crossorigin="anonymous"></script>
</head>
<style>
    .navbar-brand img{
        height: 2.4rem;
    }
    .btn-login {
            width: 2.45rem;
            overflow: hidden;
            transition: width 0.5s ease;
            white-space: nowrap;
        }
        .btn-login:hover {
            width: 12rem; /* Adjust as necessary to fit the text */
        }
        .btn-login i {
            display: inline-block;
        }
        .btn-login span {
            display: inline-block;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .btn-login:hover span {
            opacity: 1;
        }
        .btn-search{
            width: 2.45rem;
            overflow: hidden;
            transition: width 0.5s ease;
            white-space: nowrap;
        }
        .btn-search:hover {
            width: 12rem; /* Adjust as necessary to fit the text */
        }
        .btn-search i {
            display: inline-block;
        }
        .btn-search span {
            display: inline-block;
            opacity: 0;
            transition: opacity 0.2s ease;
        }
        .btn-search:hover span {
            opacity: 1;
        }
        @media screen and (max-width: 768px) {
            .btn-login{
                width: auto;
            }
            .btn-search{
                width: auto;
            }
        }
 </style>
 <body>
@include('layouts.navbar')
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/register">
                    {{ __('Pas encore inscrit?') }}
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublier?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

</body>
</html>