@extends('layouts.main')

@section('title', $product->name)

@include('partials.carousel')

@section('content')
    <div id="productFeatured" class="container bg-white d-flex align-items-center">
        <div class="gallery d-flex align-items-center">
            <div class="thumbnails">
                <img src="{{ asset('img/products/a32d029808e281f6abb79a08a9d6f012.jpg') }}" alt="Imagem 1"
                    class="thumbnail active">
                <img src="{{ asset('img/products/ab64da44b55384c21b71d18169d431be.webp') }}" alt="Imagem 2" class="thumbnail">
            </div>
            <div class="main-image d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/products/' . $product->image) }}" alt="{{ $product->name }}" class="active">
            </div>
        </div>
        <div class="product-info-area">
            <div class="banner-promotion-area">
                <img src="{{ asset('/img/main-slider/slide1.jpg') }}" alt="" class="mt-2">
            </div>
            <div class="timer-promotion-area d-flex">
                <div class="text w-50 h-100 d-flex align-items-center justify-content-center">
                    <span>MÊS DO GAMER<div class="text-center">APROVEITE!</div></span>
                </div>
                <div class="timer w-50 h-100 d-flex align-items-center justify-content-center">
                    <span id="timer" class="d-block"></span>
                </div>
            </div>
            <div class="number-promotion-area d-flex w-100">
                <div class="discount h-100">
                    <div>{{ $product->discount_percentage }}%</div>
                    <span>Desconto Extra</span>
                </div>
                <div class="sold h-100">
                    <div>3010</div>
                    <span>Vendidos</span>
                </div>
            </div>
            <h1 class="product-title w-100">{{ $product->name }}</h1>
            <div class="product-price w-100">
                <div class="price d-flex">
                    <i class="fa fa-barcode pull-left text-white"></i>
                    <div class="price-in-sight">
                        <p>De: <del>R$ {{ number_format($product->price, 2, ',', '.') }}</del> por:</p>
                        <h2>R$ {{ number_format($product->discount_price, 2, ',', '.') }}</h2>
                        <span>à vista com {{ $product->discount_percentage }}% de desconto no boleto ou pix</span>
                    </div>
                </div>
            </div>
            <button>COMPRAR COM DESCONTO<i class="fa fa-cart-arrow-down text-white"></i></button>
        </div>
    </div>

    @if (count($productDescriptions) > 0)
        <div id="productSpecifications" class="container bg-white">
            <span>ESPECIFICAÇÕES TÉCNICAS</span>
            <ul>
                @foreach ($productDescriptions as $description)
                    <li>
                        <p><strong>{{ $description->title }}:</strong></p>
                        <p>{{ $description->content }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($relatedProducts->isNotEmpty())
        <div class="home-products-container mx-auto">
            <h2 class="title-home-products-container mb-3">Veja Também!</h2>
            <div id="cards-container" class="row mx-auto">
                @foreach ($relatedProducts as $product)
                    <div class="card col-lg-1-5">
                        @if ($product->have_discount == 1)
                            <div class="promotion-time d-flex">
                                <div class="promotion d-flex align-items-center justify-content-center">
                                    <span><strong>{{ $product->discount_percentage }}%</strong></span>
                                    <span>OFF</span>
                                </div>
                                <div class="time">
                                    <div class="text d-flex align-items-center justify-content-center">Mês Do Gamer</div>
                                    <div class="timer text-center">Termina em: <span id="timer" class="d-block"></span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <a href="/products/{{ $product->id }}">
                            <div class="card-image d-flex align-items-center justify-content-center">
                                <img src="/img/products/{{ $product->image }}" alt="{{ $product->name }}">
                            </div>
                        </a>
                        <div class="product-name">
                            <p>{{ $product->name }}</p>
                        </div>
                        <div class="product-price w-100">
                            <div class="old-price">
                                <p><del>De: R$ {{ number_format($product->price, 2, ',', '.') }}</del> por:</p>
                            </div>
                            <div class="new-price d-flex align-items-center">
                                <p class="d-flex align-items-center">
                                    <span>R$ {{ number_format($product->discount_price, 2, ',', '.') }}</span> à vista
                                </p>
                            </div>
                            <div class="juros">
                                <p>12x de R$ {{ number_format($product->discount_price / 12, 2, ',', '.') }} sem juros</p>
                            </div>
                        </div>
                        <div class="add-to-cart text-center">
                            <span>ADICIONAR AO CARRINHO</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
