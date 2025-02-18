@extends('layouts.layout')

@section('content')
    {{ Breadcrumbs::render('about') }}
    <div class="container">
        <section class="detail">
            <div class="detail__wrapper">
                <h1 class="detail__title">О нас</h1>
                <div class="detail__image">
                    <img class="detail__img" src="/img/index/transport-desktop@1x.png" alt="Faymonville">
                </div>
                <p class="detail__text">Значимость этих проблем настолько очевидна, что рамки и место обучения кадров требуют
                    от
                    нас
                    анализа новых предложений. Разнообразный и богатый опыт консультация с широким активом требуют от нас
                    анализа форм
                    развития. Таким образом постоянный количественный рост и сфера нашей активности позволяет оценить
                    значение
                    дальнейших
                    направлений развития.</p>
                <p class="detail__text">Таким образом новая модель организационной деятельности играет важную роль в
                    формировании модели
                    развития. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение
                    нашей
                    деятельности требуют от нас анализа модели развития. Значимость этих проблем настолько очевидна, что
                    дальнейшее
                    развитие различных форм деятельности в значительной степени обуславливает создание существенных
                    финансовых и
                    административных условий.</p>
                <p class="detail__text">Значимость этих проблем настолько очевидна, что рамки и место обучения кадров
                    требуют от
                    нас
                    анализа новых предложений. Разнообразный и богатый опыт консультация с широким активом требуют от нас
                    анализа форм
                    развития. </p>
            </div>
        </section>
    </div>
    <section class="features">
        <h2 class="visually-hidden">Преимущества</h2>
        <div class="features__list">
            <div class="features__item">
                <div class="features__wrapper features__wrapper--route">
                    <p class="features__text">Подбор оптимального маршрута</p>
                </div>
            </div>
            <div class="features__item">
                <div class="features__wrapper features__wrapper--insurance">
                    <p class="features__text">Полное страхование грузов</p>
                </div>
            </div>
            <div class="features__item">
                <div class="features__wrapper features__wrapper--permit">
                    <p class="features__text">Получение
                        разрешения на
                        негабарит за 1 день</p>
                </div>
            </div>
            <div class="features__item">
                <div class="features__wrapper features__wrapper--payment">
                    <p class="features__text">Любая форма
                        оплаты: c НДС, без
                        НДС, нал./безнал.</p>
                </div>
            </div>
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
                            class="policy__span">Правилами обработки персональных данных</span></a></label>
            </div>
        </form>
    </section>
    @include('service-slider')
@endsection
