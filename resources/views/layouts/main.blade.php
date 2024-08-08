<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
</head>
{{-- CSS da aplicação --}}
<link rel="stylesheet" href="{{ asset('css\styles.css') }}">
<link rel="stylesheet" href="{{ asset('css\header.css') }}">
<link rel="stylesheet" href="{{ asset('css\cards.css') }}">
<link rel="stylesheet" href="{{ asset('css\slider.css') }}">
{{-- JS da aplicação --}}
<script src="js\app.js" defer></script>
</head>

<body>
    <header>
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Terabyte Header</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>

        <body>
            <!-- Navbar -->
            <header class="fixed-top">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="mx-auto">
                        <div class="top-navbar d-flex align-items-center justify-content-between pt-2 pb-1">
                            <a class="navbar-brand" href="/">
                                <img src="img/terabyte.svg" alt="Terabyte" width="180" height="51">
                            </a>

                            <form action="/" method="GET" class="d-flex m-0">
                                <input class="w-100" type="search" name="search" placeholder="Pesquise o seu produto"
                                    aria-label="Search">
                            </form>
                            @guest
                                <div class="nav-item menu-auth d-flex align-items-center justify-content-between">
                                    <i class="bi bi-person-circle"></i>
                                    <p>Olá, <a href="/login">Entre</a> ou <a href="/register">Cadastre-se</a></p>
                                </div>
                            @endguest
                            @auth
                                <div class="nav-item menu-auth d-flex align-items-center justify-content-between">
                                    <i class="bi bi-person-circle"></i>
                                    <form action="/logout" method="post" id="logout-form">
                                        @csrf
                                        <a href="" class="nav-link"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                                    </form>
                                </div>
                            @endauth
                            <div
                                class="nav-item header-site-menu-icons d-flex align-items-center justify-content-around">
                                <a class="nav-link" href="#"><i class="bi bi-heart"></i></a>
                                <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="bottom-navbar d-flex align-items-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav d-flex align-items-center justify-content-between w-100">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            DEPARTAMENTOS
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">PC Gamer</a></li>
                                            <li><a class="dropdown-item" href="#">Hardware</a></li>
                                            <li><a class="dropdown-item" href="#">Notebooks</a></li>
                                            <li><a class="dropdown-item" href="#">Monitores</a></li>
                                            <li><a class="dropdown-item" href="#">Monte seu PC</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">PROMOÇÕES</a>
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
            <div class="container-fluid">
                <div class="row bg-white">
                    @if (session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
            <footer>
                <p>Feito por Polese ☕</p>
            </footer>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>

        </html>
