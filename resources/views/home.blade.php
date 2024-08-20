@extends('layouts.main')

@section('title', 'Terabyteshop, a Preferida dos Gamers, Ofertas Incríveis Melhor Entrega')

@include('partials.carousel')
<div id="container-product-subcategory" class="w-100">
    <div class="cards mx-auto d-flex justify-content-between p-0">
        @foreach ($categoryHighlights as $categoryHighlight)
            <div class="card card-custom border-0 d-flex justify-content-center">
                <h4 class="pc-subcategory-name position-absolute text-center">{{ $categoryHighlight->label }}</h4>
                <div class="pc-subcategory-image">
                    <img src="img/pc-subcategory/{{ $categoryHighlight->image }}" alt="pc-subcategory"
                        class="mx-auto my-auto">
                </div>
                <div class="pc-subcategory-text row">
                    <span class="p-0">{{ $categoryHighlight->title }}</span>
                    <span class="p-0">{{ $categoryHighlight->subtitle }}</span>
                </div>
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </div>
        @endforeach
    </div>
</div>
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
    <h2 class="d-flex justify-content-between">
        DEPARTAMENTOS POPULARES
        <div class="dots glider-dots row" role="tablist">
            <button class="glider-dot" data-index="0" aria-label="Page 1"></button>
            <button class="glider-dot active" data-index="1" aria-label="Page 2"></button>
        </div>
    </h2>
    <div class="glider-contain m-0">
        <div class="glider">
            @foreach ($categorys as $category)
                <div class="product-category">
                    <div class="category-image">
                        <img src="/img/product-category/{{ $category->image }}" alt="kit-upgrade">
                    </div>
                    <div class="category-name">
                        <p class="text-center">{{ $category->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
