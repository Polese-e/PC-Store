<div id="cards-container" class="row mx-auto">
    @foreach ($products as $product)
        @if ($product->have_discount == 1)
            <div class="card col-lg-1-5">
                <div class="promotion-time d-flex">
                    <div class="promotion d-flex align-items-center justify-content-center">
                        <span><strong>{{ $product->discount_percentage }}%</strong></span>
                        <span>OFF</span>
                    </div>
                    <div class="time">
                        <div class="text d-flex align-items-center justify-content-center">Mês Do Gamer</div>
                        <div class="timer text-center">Termina em: <span id="timer" class="d-block"></span></div>
                    </div>
                </div>
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
        @else
            <div class="card col-lg-1-5">
                <div class="card-image no-discunt d-flex align-items-center justify-content-center">
                    <img src="/img/products/{{ $product->image }}" alt="{{ $product->name }}">
                </div>
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
        @endif
    @endforeach
</div>
