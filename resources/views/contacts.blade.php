@extends('layouts.layout')

{!! seo($SEOData) !!}

@section('content')
    {{ Breadcrumbs::render('contacts') }}
    <section class="contacts">
        <h1 class="contacts__title">Контакты</h1>
        <div class="contacts__wrapper">
            <div class="contacts__col">
                <div class="contacts__item">
                    <h2 class="contacts__subtitle">Телефон</h2>
                    <a href="tel:+79778731886" class="contacts__phone">+7 (977) 873-18-86</a>
                    <a href="tel:+79778731886" class="contacts__phone">+7 (977) 873-18-86</a>
                </div>
                <div class="contacts__item">
                    <h2 class="contacts__subtitle">Email</h2>
                    <a class="contacts__mail" href="mailto:infoinfo@gmail.com">infoinfo@gmail.com</a>
                </div>
                <div class="contacts__item">
                    <h2 class="contacts__subtitle">Наши соцсети</h2>
                    <div class="social footer__icons">
                        <a href="#" class="social__link">
                            <svg class="social__svg">
                                <use xlink:href="#tg--inline"></use>
                            </svg>
                        </a>
                        <a href="#" class="social__link">
                            <svg class="social__svg">
                                <use xlink:href="#wa--inline"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="contacts__col">
                <div class="contacts__item">
                    <h2 class="contacts__subtitle">Адрес</h2>
                    <p class="contacts__info">Россия, Московская обл.,<br>г. Королев, ул. Пионерская, д.14А</p>
                </div>
                <div class="contacts__item">
                    <h2 class="contacts__subtitle">График работы</h2>
                    <p class="contacts__info">Пн-пт – с 8:00 до 19:00</p>
                </div>
                <div class="contacts__item">
                    <h2 class="contacts__subtitle">ООО «Название организации»</h2>
                    <p class="contacts__info">ИНН 7736509061</p>
                </div>
            </div>
            <div class="contacts__col">
                <img class="contacts__img" src="/img/contacts/map.png" alt="Карта">
            </div>
        </div>
    </section>
    <section class="consultation">
        <h2 class="consultation__title">Нужна консультация специалиста?</h2>
        <form class="consultation__wrapper callback-form" action="#" method="post">
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
@endsection
