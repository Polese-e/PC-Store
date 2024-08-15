<div id="cards-container" class="row mx-auto">
    @foreach ($products as $product)
        <div class="card col-lg-1-5 p-0">
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
            <div class="card-image d-flex align-items-center justify-content-center">
                <img src="/img/products/{{ $product->image }}" alt="{{ $product->title }}">
            </div>
            <div class="card-body">
                <h5 class="product-name">{{ $product->name }}</h5>
            </div>
        </div>
    @endforeach
</div>
