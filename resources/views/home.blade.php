@extends('layouts.main')

@section('title', 'Terabyteshop, a Preferida dos Gamers, Ofertas Incríveis Melhor Entrega')

@include('partials.carousel')
<div id="container-product-subcategory" class="w-100">
    <div class="cards mx-auto d-flex justify-content-between p-0">
        <div class="card card-custom border-0 d-flex justify-content-center">
            <h4 class="pc-subcategory-name position-absolute text-center">CUSTOM</h4>
            <div class="pc-subcategory-image">
                <img src="img/pc-subcategory/pc-t-custom.png" alt="pc-subcategory" class="mx-auto my-auto">
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

<div class="home-products-container mx-auto">
    <h2 class="title-home-products-container mb-3">LANÇAMENTOS</h2>
    @include('partials.card')
</div>

<div class="carousel-products-category mx-auto">
    <h2>DEPARTAMENTOS POPULARES</h2>
    <button class="glider-prev">«</button>
    <button class="glider-next">»</button>
    <div class="glider-contain m-0">
        <div class="glider">
            <div class="product-category m-0">
                <a href="">
                    <img src="/img/product-category/kit-upgrade.webp" alt="kit-upgrade">
                </a>
                <p>Kit Upgrade</p>
            </div>
            <div class="product-category">
                <a href="">
                    <img src="/img/product-category/pc-gamer.webp" alt="">
                </a>
                <p>PC Gamer</p>
            </div>
            <div class="product-category">
                <img src="" alt="">
                <p>Hardware</p>
            </div>
            <div class="product-category">
                <img src="" alt="">
                <p>Periféricos</p>
            </div>
            <div class="product-category">
                <img src="" alt="">
                <p>Gabinetes</p>
            </div>
            <div class="product-category">
                <img src="" alt="">
                <p>Notebooks</p>
            </div>
            <div class="product-category">
                <img src="" alt="">
                <p>Refrigeração</p>
            </div>
            <div class="product-category">
                <img src="" alt="">
                <div>Monitor Gamer</div>
            </div>
            <div class="product-category">
                <img src="" alt="">
                <div>Cadeira Gamer</div>
            </div>
        </div>
    </div>
</div>
