<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        <nav class="navbar navbar-expand-lg bg-light fixed-top p-0">
            <div class="d-flex align-items-center col-10 mx-auto bg-light" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Meus Eventos</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post" id="logout-form">
                            @csrf
                            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </ul>
                    @endguest
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
    <footer>
        <p>Feito por Polese ☕</p>
    </footer>

</body>

</html>
