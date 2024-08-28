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
        <div class="promotion-area">
            <div class="banner-promotion-area">
                <img src="{{ asset('/img/main-slider/slide1.jpg') }}" alt="" class="mt-2">
            </div>
            <div class="timer-promotion-area d-flex">
                <div class="text">
                    <span>
                        MÊS DO GAMER
                        <br>
                        <div class="div">APROVEITE</div>
                    </span>
                </div>
                <div class="timer">
                    <span id="timer" class="d-block"></span>
                </div>
            </div>
        </div>
    </div>

@endsection
