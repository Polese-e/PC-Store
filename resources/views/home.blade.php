@extends('layouts.main')

@section('title', 'Terabyteshop, a Preferida dos Gamers, Ofertas Incríveis Melhor Entrega')

@section('content')
    @include('partials.carousel')
    <div id="container-product-subcategory" class="w-100">
        <div class="cards mx-auto d-flex justify-content-between p-0">
            <div class="card card-custom border-0 d-flex justify-content-center">
                <h4 class="pc-subcategory-name position-absolute text-center">CUSTOM</h4>
                <div class="pc-subcategory-image">
                    <img src="img/pc-subcategory/pc-t-custom.png" alt="pc-subcategory">
                </div>
                <div class="pc-subcategory-text row">
                    <span class="p-0">T-CUSTOM</span>
                    <span class="p-0">Monte seu PC</span>
                </div>
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </div>
            <div class="card card-custom border-0 d-flex justify-content-center">
                <h3 class="pc-subcategory-name position-absolute text-center">GAMER</h3>
                <div class="pc-subcategory-image">
                    <img src="img/pc-subcategory/pc-t-gamer.png" alt="pc-subcategory">
                </div>
                <div class="pc-subcategory-text row">
                    <span class="p-0">T-GAMER</span>
                    <span class="p-0">Domine o jogo</span>
                </div>
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </div>
            <div class="card card-custom border-0 d-flex justify-content-center">
                <h2 class="pc-subcategory-name position-absolute text-center">MOBA</h2>
                <div class="pc-subcategory-image">
                    <img src="img/pc-subcategory/pc-t-moba.png" alt="pc-subcategory">
                </div>
                <div class="pc-subcategory-text row">
                    <span class="p-0">T-MOBA</span>
                    <span class="p-0">Seja o campeão</span>
                </div>
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </div>
            <div class="card card-custom border-0 d-flex justify-content-center">
                <h2 class="pc-subcategory-name position-absolute text-center">HOME</h2>
                <div class="pc-subcategory-image">
                    <img src="img/pc-subcategory/pc-t-home.png" alt="pc-subcategory">
                </div>
                <div class="pc-subcategory-text row">
                    <span class="p-0">T-HOME</span>
                    <span class="p-0">Trabalho e Estudo</span>
                </div>
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    </div>
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
