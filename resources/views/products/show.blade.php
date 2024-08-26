@extends('layouts.main')

@section('title', $product->name)

@include('partials.carousel')

@section('content')
    <div id="productFeatured" class="container bg-white">
        <div class="gallery">
            <div class="main-image">
                <img src="{{ asset('img/products/' . $product->image) }}" alt="Imagem 1" class="active">
            </div>
            <div class="thumbnails">
                <img src="{{ asset('img/products/' . $product->image) }}" alt="Imagem 1" class="thumbnail active">
                <img src="{{ asset('img/products/a32d029808e281f6abb79a08a9d6f012.jpg') }}" alt="Imagem 2"
                    class="thumbnail">
                <img src="{{ asset('img/products/ab64da44b55384c21b71d18169d431be.webp') }}" alt="Imagem 3"
                    class="thumbnail">
            </div>
        </div>
    </div>

@endsection
