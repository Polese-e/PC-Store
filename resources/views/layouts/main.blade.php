<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    {{-- Glider --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar/top-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar/bottom-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-products-container.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-subcategory.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel-product-category.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.show/product-featured.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.show/product-specifications.css') }}">
    {{-- JS da aplicação --}}
    <script src="{{ asset('js\galery.js') }}" defer></script>
    <script src="{{ asset('js\scroll.js') }}" defer></script>
    <script src="{{ asset('js\timer.js') }}" defer></script>
    <script src="{{ asset('js\label-category-highlights.js') }}" defer></script>
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="mx-auto">
                <div class="top-navbar d-flex align-items-center justify-content-between pt-2 pb-1">
                    <a href="/">
                        <img src="{{ asset('img/terabyte.svg') }}" alt="Terabyte" width="180" height="51">
                    </a>

                    <form id="searchForm" action="/" method="GET" class="m-0">
                        <input id="searchInput" type="text " name="search" placeholder="Pesquise o seu produto"
                            aria-label="Search">
                        <a href="/" class="form-icons"
                            onclick="event.preventDefault(); document.getElementById('searchForm').submit();">
                            <i id="searchIcon" class="fa fa-search"></i>
                            <i id="arrowIcon" class="fa fa-arrow-right"></i>
                        </a>
                    </form>
                    @guest
                        <div class="nav-item menu-auth d-flex align-items-center justify-content-between">
                            <a href="/login">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <p>Olá, <a href="/login"> <strong>Entre</strong></a> ou <a
                                    href="/register"><strong>Cadastre-se</strong></a></p>
                        </div>
                    @endguest
                    @auth
                        <div class="nav-item menu-auth d-flex align-items-center" id="logoutMenu">
                            <i class="bi bi-person-circle"></i>
                            <form action="/logout" method="post" id="logoutForm" class="d-flex align-items-center">
                                @csrf
                                <a href="" class="nav-link"
                                    onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><strong>Logout</strong></a>
                            </form>
                        </div>
                    @endauth
                    <div class="nav-item header-site-menu-icons d-flex align-items-center justify-content-between">
                        <div class="heart d-flex">
                            <a class="nav-link d-flex align-items-center" href="#"><i class="bi bi-heart"></i></a>
                            <div class="heart-count d-flex align-items-center justify-content-center">
                                0</div>
                        </div>
                        <div class="cart d-flex">
                            <a class="nav-link d-flex align-items-center" href="#"><i
                                    class="bi bi-cart-fill"></i></a>
                            <div class="cart-count d-flex align-items-center justify-content-center">0</div>
                        </div>
                    </div>
                </div>
                <div class="bottom-navbar d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="departamentContent"
                                        class="d-flex align-items-center justify-content-between">
                                        <i class="bi bi-list"></i>
                                        DEPARTAMENTOS
                                    </span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Air Fryer</a>
                                    <a class="dropdown-item" href="#">Promoções</a>
                                    <a class="dropdown-item" href="#">Kit Upgrade</a>
                                    <a class="dropdown-item" href="#">Cabos e Acessórios</a>
                                    <a class="dropdown-item" href="#">Video Games</a>
                                    <a class="dropdown-item" href="#">PC Gamer</a>
                                    <a class="dropdown-item" href="#">Hardware</a>
                                    <a class="dropdown-item" href="#">Periféricos</a>
                                    <a class="dropdown-item" href="#">Gabinetes</a>
                                    <a class="dropdown-item" href="#">Refrigeração</a>
                                    <a class="dropdown-item" href="#">Monitor Gamer</a>
                                    <a class="dropdown-item" href="#">Cadeira Gamer</a>
                                    <a class="dropdown-item" href="#">Diversos</a>
                                    <a class="dropdown-item" href="#">Mesa Gamer</a>
                                    <a class="dropdown-item" href="#">Notebooks</a>
                                    <a class="dropdown-item" href="#">Rede Internet</a>
                                    <a class="dropdown-item" href="#">Copo Térmico</a>
                                    <a class="dropdown-item" href="#">Smartwatch</a>
                                </div>
                            </li>
                        </ul>
                        <ul id="navbarBottomLinks"
                            class="navbar-nav d-flex align-items-center justify-content-between w-100">
                            <li class="nav-item">
                                <a class="nav-link" href="/events/create">PROMOÇÕES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PC GAMER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">KIT UPGRADE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">HARDWARE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">NOTEBOOKS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">MONITORES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">MONTE SEU PC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ATENDIMENTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>Feito por Polese ☕</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
</body>

</html>
