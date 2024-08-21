<div id="mainSlider" class="carousel slide p-0" data-bs-ride="carousel">
    @if (count($banners) > 1)
        <ol class="carousel-indicators">
            @foreach ($banners as $index => $banner)
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}"></button>
            @endforeach
        </ol>
    @endif
    <div class="carousel-inner">
        @foreach ($banners as $index => $banner)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ asset($banner->image) }}" class="d-block w-100" alt="slide {{ $index + 1 }}">
            </div>
        @endforeach
    </div>
</div>
