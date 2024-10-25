<section class="special">
    <h2 class="special__title">Услуги по перевозке спецтехники по России</h2>
    <div class="special__slider">
        @foreach ($services as $service)
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="{{ $service->preview_img }}" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">{{ $service->title }}</p>
                    <p class="service-item__text service-item__text--name">{{ $service->subtitle }}</p>
                    <a href="services/{{ $service->id }}" class="btn service-item__btn btn--dark">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
