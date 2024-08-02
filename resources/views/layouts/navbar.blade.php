<!-- resources/views/layouts/navbar.blade.php -->
 <style>
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
                background-color: black;
            }
            .btn-login span{
                color: white;
                opacity: 1;
            }
            .btn-search{
                width: 30%;
                background-color: black;
            }
            .btn-search span{
                color: white;
                opacity: 1;
                display: none;
            }
        }
 </style>
<nav class="navbar navbar-expand-lg" style="z-index: 1;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{ asset('storage/images/logo.png') }}" alt="" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-center" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#">Proposer ces services</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="dropdown-item text-start dropdown-toggle">Services de Maison et de Réparation</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-start" href="#">Plombiers</a></li>
                <li><a class="dropdown-item text-start" href="#">Électriciens</a></li>
                <li><a class="dropdown-item text-start" href="#">Chauffagistes</a></li>
                <li><a class="dropdown-item text-start" href="#">Jardiniers</a></li>
                <li><a class="dropdown-item text-start" href="#">Nettoyeurs</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item text-start dropdown-toggle">Services de Transport et Logistique</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-start" href="#">Taxi</a></li>
                <li><a class="dropdown-item text-start" href="#">Chauffeur Privé</a></li>
                <li><a class="dropdown-item text-start" href="#">Déménagement</a></li>
                <li><a class="dropdown-item text-start" href="#">Location de véhicule</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item text-start dropdown-toggle">Services Professionnels</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-start" href="#">Avocats</a></li>
                <li><a class="dropdown-item text-start" href="#">Comptables</a></li>
                <li><a class="dropdown-item text-start" href="#">Consultants</a></li>
                <li><a class="dropdown-item text-start" href="#">Architectes</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item text-start dropdown-toggle">Services de Santé</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-start" href="#">Médecins Généralistes</a></li>
                <li><a class="dropdown-item text-start" href="#">Dentistes</a></li>
                <li><a class="dropdown-item text-start" href="#">Physiothérapeutes</a></li>
                <li><a class="dropdown-item text-start" href="#">Pharmacies</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item text-start dropdown-toggle">Services Éducatifs</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-start" href="#">Cours de Langues</a></li>
                <li><a class="dropdown-item text-start" href="#">Tutoring</a></li>
                <li><a class="dropdown-item text-start" href="#">Cours de Musique</a></li>
                <li><a class="dropdown-item text-start" href="#">Cours particulier</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item text-start dropdown-toggle">Services de Bien-Être</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-start" href="#">Coiffeurs</a></li>
                <li><a class="dropdown-item text-start" href="#">Esthéticiens</a></li>
                <li><a class="dropdown-item text-start" href="#">Massothérapeutes</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item text-start dropdown-toggle">Services de Restauration</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-start" href="#">Restaurants</a></li>
                <li><a class="dropdown-item text-start" href="#">Traiteurs</a></li>
                <li><a class="dropdown-item text-start" href="#">Cafés et Bistros</a></li>
              </ul>
            </li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="/services">Tout les services</a></li>
          </ul>
        </li>
      </ul>
      @if (auth()->check())
        <!-- User is logged in -->
        <ul class="navbar-nav me-2 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-center" href="/profile"> <!-- Assurez-vous de définir cette route -->
              <button class="btn btn-dark btn-login">
                <i class="fa-solid fa-user"></i><span>&nbsp;&nbsp;{{ auth()->user()->name }}</span>
              </button>
            </a>
          </li>
        </ul>
      @else
        <!-- User is not logged in -->
        @unless (request()->is('login', 'register'))
        <ul class="navbar-nav me-2 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-center" href="/login">
              <button class="btn btn-dark btn-login">
                <i class="fa-solid fa-circle-user"></i><span>&nbsp;&nbsp;Se connecter</span>
              </button>
            </a>
          </li>
        </ul>
        @endunless
      @endif
      <form class="d-flex" role="search" method="GET" action="{{ route('search') }}">
        <input class="form-control me-2" type="search" name="query" placeholder="Chercher" aria-label="Search">
        <button class="btn btn-dark btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i><span>&nbsp;&nbsp;Chercher</span></button>
      </form>
    </div>
  </div>
</nav>

<script>
   document.addEventListener('DOMContentLoaded', function () {
        var dropdowns = document.querySelectorAll('.dropdown-submenu');
        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('click', function (e) {
                e.stopPropagation();
                e.preventDefault();
                
                // Close other dropdowns
                dropdowns.forEach(function (d) {
                    if (d !== dropdown) {
                        var submenu = d.querySelector('.dropdown-menu');
                        submenu.classList.remove('show');
                    }
                });

                // Toggle the clicked dropdown
                var submenu = this.querySelector('.dropdown-menu');
                submenu.classList.toggle('show');
            });
        });

        // Close all dropdowns if clicked outside
        document.addEventListener('click', function () {
            dropdowns.forEach(function (dropdown) {
                var submenu = dropdown.querySelector('.dropdown-menu');
                submenu.classList.remove('show');
            });
        });
    });
</script>
