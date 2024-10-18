@extends('layouts.layout')

@section('content')
    <section class="all-services">
        <h1 class="all-services__title">Услуги по перевозке негабаритных грузов</h1>
        <div class="all-services__list">
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/services/transport-logistics-concept.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <p class="service-item__text service-item__text--name">(John Deere и др.)</p>
                    <button class="btn service-item__btn btn--dark">Подробнее</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/services/transport-logistics-concept.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <p class="service-item__text service-item__text--name">(John Deere и др.)</p>
                    <button class="btn service-item__btn btn--dark">Подробнее</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/services/transport-logistics-concept.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <p class="service-item__text service-item__text--name">(John Deere и др.)</p>
                    <button class="btn service-item__btn btn--dark">Подробнее</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/services/transport-logistics-concept.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <p class="service-item__text service-item__text--name">(John Deere и др.)</p>
                    <button class="btn service-item__btn btn--dark">Подробнее</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/services/transport-logistics-concept.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <p class="service-item__text service-item__text--name">(John Deere и др.)</p>
                    <button class="btn service-item__btn btn--dark">Подробнее</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/services/transport-logistics-concept.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <p class="service-item__text service-item__text--name">(John Deere и др.)</p>
                    <button class="btn service-item__btn btn--dark">Подробнее</button>
                </div>
            </div>
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
            <picture>
                <source type="image/webp" media="(min-width: 1440px)"
                    srcset="./img/index/oversized-desktop@1x.webp, ./img/index/oversized-desktop@2x.webp 2x">
                <source type="image/webp" media="(min-width: 375px)"
                    srcset="./img/index/oversized-desktop@1x.webp, ./img/index/oversized-desktop@2x.webp 2x">
                <source media="(min-width: 375px)"
                    srcset="./img/index/oversized-desktop@1x.png, ./img/index/oversized-desktop@2x.png 2x">
                <img class="oversized__img" src="./img/index/oversized-desktop@1x.png"
                    srcset="./img/index/oversized-desktop@2x.png 2x" alt="Faymonville">
            </picture>
        </div>
    </section>
    <section class="consultation">
        <h2 class="consultation__title">Нужна консультация специалиста?</h2>
        <form class="consultation__wrapper" action="#" method="post">
            <div class="consultation__form">
                <label class="visually-hidden" for="phone_consult"></label>
                <input class="consultation__input" type="tel" name="phone_consult" id="phone_consult"
                    placeholder="Телефон*">
                <button class="btn consultation__submit btn--orange" type="submit">Заказать консультацию</button>
            </div>
            <div class="policy consultation__policy">
                <input class="policy__input visually-hidden" type="checkbox" name="policy_consult" id="policy_consult"
                    value="agree">
                <label class="policy__label" for="policy_consult">Соглашаюсь с <span class="policy__span">Правилами
                        обработки персональных данных</span></label>
            </div>
        </form>
    </section>
@endsection
