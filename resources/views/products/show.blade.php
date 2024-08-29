@extends('layouts.main')

@section('title', $product->name)

@include('partials.carousel')

@section('content')
    <div id="productFeatured" class="container bg-white d-flex">
        <div class="gallery d-flex">
            <div class="thumbnails">
                <img src="{{ asset('img/products/a32d029808e281f6abb79a08a9d6f012.jpg') }}" alt="Imagem 1"
                    class="thumbnail active">
                <img src="{{ asset('img/products/ab64da44b55384c21b71d18169d431be.webp') }}" alt="Imagem 2" class="thumbnail">
            </div>
            <div class="main-image d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/products/' . $product->image) }}" alt="Imagem 1" class="active">
            </div>
        </div>
        <div class="product-info-area">
            <div class="banner-promotion-area">
                <img src="{{ asset('/img/main-slider/slide1.jpg') }}" alt="" class="mt-2">
            </div>
            <div class="timer-promotion-area d-flex">
                <div class="text w-50 h-100 d-flex align-items-center justify-content-center">
                    <span>
                        MÊS DO GAMER
                        <div class="text-center">
                            APROVEITE!
                        </div>
                    </span>
                </div>
                <div class="timer w-50 h-100 d-flex align-items-center justify-content-center">
                    <span id="timer" class="d-block"></span>
                </div>
            </div>
            <div class="number-promotion-area d-flex w-100">
                <div class="discount h-100">
                    <div>
                        {{ $product->discount_percentage }}%
                    </div>
                    <span>Desconto Extra</span>
                </div>
                <div class="sold h-100">
                    <div>3010</div>
                    <span>Vendidos</span>
                </div>
            </div>
            <h1 class="product-title w-100">
                {{ $product->name }}
            </h1>
        </div>
    </div>

@endsection
