@extends('layouts.main')

@section('title', 'Terabyteshop, a Preferida dos Gamers, Ofertas Incríveis Melhor Entrega')

@include('partials.carousel')
<div id="container-product-subcategory" class="w-100">
    <div class="cards mx-auto d-flex justify-content-between p-0">
        @foreach ($categoryHighlights as $categoryHighlight)
            <div class="card card-custom border-0 d-flex justify-content-center">
                <h2 class="pc-subcategory-name position-absolute text-center">{{ $categoryHighlight->label }}</h2>
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
            @foreach ($categories as $category)
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
