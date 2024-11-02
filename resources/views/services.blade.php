@extends('layouts.layout')

@section('content')
    <section class="all-services">
        <h1 class="all-services__title">Услуги по перевозке негабаритных грузов</h1>
        <div class="all-services__list">
            @foreach ($services as $service)
                <div class="service-item all-services__item">
                    <div class="service-item__image">
                        <img src="{{ Storage::url($service->preview_img) }}" alt="{{ $service->title }}" class="service-item__img">
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
    <section class="oversized">
        <div class="oversized__info">
            <h2 class="oversized__title">Негабаритные перевозки</h2>
            <p class="oversized__text">Негабаритный груз – это груз, чьи габариты и размеры выше допустимых
                норм ПДД, поэтому перевозки обычным транспортом этих позиций
                невозможны. Для транспортировки подобных грузов применяют
                негабаритные перевозки автомобильным транспортом.</p>
            <h3 class="oversized__subtitle">Организация перевозки</h3>
            <p class="oversized__text">В нашем автопарке представлены необходимые для таких перевозок
                автомобили, среди которых тягачи с различной грузоподъемностью,
                например, седельный тягач Scania с грузоподъемностью от 40 тыс. кг до
                150 тыс. кг и др. Мы предлагаем выполнить перевозки негабаритного
                груза автомобильным транспортом в Мурманск, Удачный, Магадан</p>
            <h3 class="oversized__subtitle">Подзаголовок</h3>
            <p class="oversized__text">В нашем автопарке представлены необходимые для таких перевозок
                автомобили, среди которых тягачи с различной грузоподъемностью,
                например, седельный тягач Scania с грузоподъемностью от 40 тыс. кг до 150 тыс. кг и др. Мы предлагаем
                выполнить перевозки негабаритного
                груза автомобильным транспортом в Мурманск, Удачный, Магадан и т. д.</p>
        </div>
        <div class="oversized__image">
            <img class="oversized__img" src="/img/index/oversized-desktop@1x.png" alt="Faymonville">
        </div>
    </section>
    <section class="consultation">
        <h2 class="consultation__title">Нужна консультация специалиста?</h2>
        <form class="consultation__wrapper callback-form" action="/consultation" method="post">
          @csrf
            <div class="consultation__form">
                <label class="visually-hidden" for="phone_consult"></label>
                <input class="consultation__input" type="tel" name="client_phone" id="phone_consult"
                    placeholder="Телефон*" required>
                <button class="btn consultation__submit btn--orange" type="submit">Заказать консультацию</button>
            </div>
            <div class="policy consultation__policy">
                <input class="policy__input visually-hidden" type="checkbox" name="policy_consult" id="policy_consult"
                    checked>
                <label class="policy__label" for="policy_consult">Соглашаюсь с <a href="#" class="policy__link"><span
                            class="policy__span">Правилами обработки персональных
                            данных</span></a></label>
            </div>
        </form>
    </section>
@endsection
