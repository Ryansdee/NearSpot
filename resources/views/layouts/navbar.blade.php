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
    .btn-search {
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
        .btn-login {
            width: auto;
            background-color: black;
        }
        .btn-login span {
            color: white;
            opacity: 1;
        }
        .btn-search {
            width: 30%;
            background-color: black;
        }
        .btn-search span {
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
                    <a class="nav-link text-center" href="/services">Services</a>
                </li>
                @if (auth()->check())
                <li class="nav-item">
                    <a class="nav-link text-center" href="/dashboard">Mes services</a>
                </li>
                @endif
            </ul>
            @if (auth()->check())
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="/profile">
                            <button class="btn btn-dark btn-login">
                                <i class="fa-solid fa-user"></i><span>&nbsp;&nbsp;{{ auth()->user()->name }}</span>
                            </button>
                        </a>
                    </li>
                </ul>
            @else
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
                var submenu = this.querySelector('.dropdown-menu');
                submenu.classList.toggle('show');
            });
        });

        document.addEventListener('click', function () {
            dropdowns.forEach(function (dropdown) {
                var submenu = dropdown.querySelector('.dropdown-menu');
                submenu.classList.remove('show');
            });
        });
    });
</script>
