<div id="cards-container" class="row mx-auto">
    @foreach ($events as $event)
        <div class="card col-lg-1-5 p-0">
            <div class="promotion-time d-flex">
                <div class="promotion d-flex align-items-center justify-content-center">
                    <span><strong>60%</strong></span>
                    <span><strong>OFF</strong></span>
                </div>
                <div class="time">
                    <div class="text d-flex align-items-center justify-content-center">Mês Do Gamer</div>
                    <div class="timer text-center">Termina em: <span id="timer" class="d-block"></span></div>
                </div>
            </div>
            <div class="card-image d-flex align-items-center justify-content-center">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            </div>
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">{{ count($event->users) }} participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    @endforeach
</div>
