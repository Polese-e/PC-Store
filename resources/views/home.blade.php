@extends('layouts.main')

@section('title', 'Terabyteshop, a Preferida dos Gamers, Ofertas Incríveis Melhor Entrega')

@section('content')

@include('partials.carousel')

    <div id="events-container" class="col-10 mx-auto">
        <div id="title-events" class="m-2">
            @if ($search)
                <h2>Procurando por: {{ $search }}</h2>
            @else
                <h2 class="mb-2"><strong>Lançamentos</strong></h2>
            @endif
        </div>
        @include('partials.card')
        @if (count($events) == 0 && $search)
            <p>Não há eventos como o nome de: {{ $search }} | <a href="/">Voltar ao início</a></p>
        @elseif (count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>

@endsection
