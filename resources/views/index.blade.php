@extends('layouts.layout')

@section('content')
    <section class="services">
        <div class="services__banner">
            <h1 class="services__title">Негабаритные<br>перевозки<br>по России</h1><button type="button"
                class="btn services__btn btn--orange services__btn--request call-back">Оставить заявку</button>
            <p class="services__description">Перевозим нестандартные грузы</p>
        </div>
        <div class="services__carousel">
            <div class="services__carousel-list">
                @foreach ($services as $service)
                    <div class="services__carousel-item">
                        <p class="services__carousel-title">{{ $service->title }}</p>
                    </div>
                @endforeach
            </div>
        </div><a href="{{ route('services.show') }}" class="btn services__btn btn--blue services__btn--all">Все услуги</a>
    </section>
    <section class="calculator">
        <h2 class="calculator__header">Узнать стоимость перевозок</h2>
        <form class="calculator__form" action="/calculator" method="post">
          @csrf
            <div class="range calculator__range">
                <div class="range__wrapper">
                    <p class="range__value">Ширина в метрах</p><input class="range__input range__input--width"
                        type="range" name="width" min="0" max="10" step="0.1" value="0"><output
                        class="range__bubble"></output>
                </div>
                <div class="range__wrapper">
                    <p class="range__value">Высота в метрах</p><input class="range__input range__input--height"
                        type="range" name="height" min="0" max="10" step="0.1" value="0"><output
                        class="range__bubble"></output>
                </div>
                <div class="range__wrapper">
                    <p class="range__value">Длина в метрах</p><input class="range__input range__input--length"
                        type="range" name="length" min="0" max="50" step="0.1" value="0"><output
                        class="range__bubble"></output>
                </div>
                <div class="range__wrapper">
                    <p class="range__value">Вес в тоннах</p><input class="range__input range__input--weight" type="range"
                        name="weight" min="0" max="200" step="1" value="0"><output
                        class="range__bubble"></output>
                </div>
            </div>
            <div class="calculator__fieldsbox">
                <div class="fieldset calculator__fieldset">
                    <ul class="fieldset__list clear-list">
                        <li class="fieldset__item"><label class="visually-hidden" for="loading_address"></label> <input
                                class="fieldset__input" type="text" name="loading_address" id="loading_address"
                                placeholder="Адрес загрузки">
                        </li>
                        <li class="fieldset__item"><label class="visually-hidden" for="full_name"></label>
                            <input class="fieldset__input" type="text" name="full_name" id="full_name"
                                placeholder="ФИО или организация">
                        </li>
                        <li class="fieldset__item"><label class="visually-hidden" for="unloading_address"></label> <input
                                class="fieldset__input" type="text" name="unloading_address" id="unloading_address"
                                placeholder="Адрес разгрузки"></li>
                        <li class="fieldset__item"><label class="visually-hidden" for="cargo_name"></label>
                            <input class="fieldset__input" type="text" name="cargo_name" id="cargo_name"
                                placeholder="Наименование груза">
                        </li>
                        <li class="fieldset__item"><label class="visually-hidden" for="cargo_info"></label>
                            <input class="fieldset__input" type="text" name="cargo_info" id="cargo_info"
                                placeholder="Информация о грузе">
                        </li>
                    </ul>
                </div>
                <div class="calculator__send">
                    <div class="policy calculator__policy">
                        <input class="policy__input visually-hidden" type="checkbox" name="policy_calc"
                            id="policy_calc" checked>
                        <label class="policy__label" for="policy_calc">Соглашаюсь с <a href="#"
                                class="policy__link"><span class="policy__span">Правилами обработки персональных
                                    данных</span></a></label>
                    </div><button class="btn calculator__submit btn--orange" type="submit">Оставить заявку</button>
                </div>
            </div>
        </form>
    </section>
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
                    <p class="features__text">Получение разрешения на негабарит за 1 день</p>
                </div>
            </div>
            <div class="features__item">
                <div class="features__wrapper features__wrapper--payment">
                    <p class="features__text">Любая форма оплаты: c НДС, без НДС, нал./безнал.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="car">
        <h2 class="car__title">Наш автопарк</h2>
        <div class="car__slider">
            @foreach ($cars as $car)
                <div class="car__item">
                    <div class="car__wrapper">
                        <div class="car__image">
                            <img class="car__img" src="{{ Storage::url($car->img) }}" alt="{{ $car->brand }}">
                        </div>
                        <div class="car__info">
                            <p class="car__description">Марка {{ $car->brand }}<br>Год выпуска
                                {{ $car->year }}<br>Кол-во осей:
                                {{ $car->axles }}<br>Собственный вес {{ $car->own_weight }} т<br>Полный вес
                                {{ $car->full_weight }} кг<br>Грузоподъёмность {{ $car->load_capacity }}
                                кг<br>Длина {{ $car->length }} м<br>Ширина {{ $car->width }} м<br>Высота
                                {{ $car->height }} м</p><button type="button"
                                class="btn car__btn btn--orange call-back">Оставить
                                заявку</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="price">
        <h2 class="price__title">Стоимость перевозок</h2>
        <div class="price__wrapper">
            <div class="price__item">
                <div class="price__item-body">
                    <h3 class="price__item-header">До 20 тонн</h3>
                    <h4 class="price__item-location">Москва</h4>
                    <div class="price__item-info">
                        <p class="price__item-value">От 23 ооо руб</p>
                        <p class="price__item-value">От 23 ооо руб</p>
                        <p class="price__item-value">От 23 ооо руб</p>
                    </div>
                </div>
            </div>
            <div class="price__item">
                <div class="price__item-body">
                    <h3 class="price__item-header">До 20 тонн</h3>
                    <h4 class="price__item-location">Ростов-на-Дону</h4>
                    <div class="price__item-info">
                        <p class="price__item-value">От 23 ооо руб</p>
                        <p class="price__item-value">От 23 ооо руб</p>
                        <p class="price__item-value">От 23 ооо руб</p>
                    </div>
                </div>
            </div>
            <div class="price__item">
                <div class="price__item-body">
                    <h3 class="price__item-header">До 20 тонн</h3>
                    <h4 class="price__item-location">Регионы РФ</h4>
                    <div class="price__item-info">
                        <p class="price__item-value">От 23 ооо руб</p>
                        <p class="price__item-value">От 23 ооо руб</p>
                        <p class="price__item-value">От 23 ооо руб</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="oversized">
        <div class="oversized__info">
            <h2 class="oversized__title">Негабаритные перевозки</h2>
            <p class="oversized__text">Негабаритный груз – это груз, чьи габариты и размеры выше допустимых
                норм ПДД, поэтому перевозки обычным транспортом этих позиций невозможны. Для транспортировки
                подобных грузов применяют негабаритные перевозки автомобильным транспортом.</p>
            <h3 class="oversized__subtitle">Организация перевозки</h3>
            <p class="oversized__text">В нашем автопарке представлены необходимые для таких перевозок
                автомобили, среди которых тягачи с различной грузоподъемностью, например, седельный тягач Scania
                с грузоподъемностью от 40 тыс. кг до 150 тыс. кг и др. Мы предлагаем выполнить перевозки
                негабаритного груза автомобильным транспортом в Мурманск, Удачный, Магадан</p>
            <h3 class="oversized__subtitle">Подзаголовок</h3>
            <p class="oversized__text">В нашем автопарке представлены необходимые для таких перевозок
                автомобили, среди которых тягачи с различной грузоподъемностью, например, седельный тягач Scania
                с грузоподъемностью от 40 тыс. кг до 150 тыс. кг и др. Мы предлагаем выполнить перевозки
                негабаритного груза автомобильным транспортом в Мурманск, Удачный, Магадан и т. д.</p>
        </div>
        <div class="oversized__image">
            <img class="oversized__img" src="/img/index/oversized-desktop@1x.png" alt="Faymonville">
        </div>
    </section>
    <section class="consultation">
        <h2 class="consultation__title">Нужна консультация специалиста?</h2>
        <form class="consultation__wrapper callback-form" action="/consultation" method="post">
          @csrf
            <div class="consultation__form"><label class="visually-hidden" for="phone_consult"></label>
                <input class="consultation__input" type="tel" name="client_phone" id="phone_consult"
                    placeholder="Телефон*" required> <button class="btn consultation__submit btn--orange" type="submit">Заказать
                    консультацию</button>
            </div>
            <div class="policy consultation__policy">
                <input class="policy__input visually-hidden" type="checkbox" name="policy_consult" id="policy_consult"
                    checked>
                <label class="policy__label" for="policy_consult">Соглашаюсь с <a href="#"
                        class="policy__link"><span class="policy__span">Правилами обработки персональных
                            данных</span></a></label>
            </div>
        </form>
    </section>
    <section class="work">
        <h2 class="work__title work__title--head">Как мы работаем</h2>
        <div class="work__wrapper">
            <div class="work__line"></div>
            <div class="work__carousel">
                <div class="work__item">
                    <div class="work__slide">
                        <div class="work__bubble"><span class="work__span">1</span></div>
                        <div class="work__box">
                            <h3 class="work__title">Шаг 1</h3>
                            <p class="work__text">Предварительная консультация, расчет стоимости перевозки</p>
                        </div>
                    </div>
                </div>
                <div class="work__item">
                    <div class="work__slide">
                        <div class="work__bubble"><span class="work__span">2</span></div>
                        <div class="work__box">
                            <h3 class="work__title">Шаг 2</h3>
                            <p class="work__text">Заключение официального договора, направление счета для
                                внесения предоплаты</p>
                        </div>
                    </div>
                </div>
                <div class="work__item">
                    <div class="work__slide">
                        <div class="work__bubble"><span class="work__span">3</span></div>
                        <div class="work__box">
                            <h3 class="work__title">Шаг 3</h3>
                            <p class="work__text">Получение разрешения на транспортировку негабарита,
                                согласование маршрута движения с ГИБДД</p>
                        </div>
                    </div>
                </div>
                <div class="work__item">
                    <div class="work__slide">
                        <div class="work__bubble"><span class="work__span">4</span></div>
                        <div class="work__box">
                            <h3 class="work__title">Шаг 4</h3>
                            <p class="work__text">Подача транспорта под погрузку</p>
                        </div>
                    </div>
                </div>
                <div class="work__item">
                    <div class="work__slide">
                        <div class="work__bubble"><span class="work__span">5</span></div>
                        <div class="work__box">
                            <h3 class="work__title">Шаг 5</h3>
                            <p class="work__text">Доставка груза в оговоренные сроки</p>
                        </div>
                    </div>
                </div>
                <div class="work__item">
                    <div class="work__slide">
                        <div class="work__bubble"><span class="work__span">6</span></div>
                        <div class="work__box">
                            <h3 class="work__title">Шаг 6</h3>
                            <p class="work__text">Направление полного пакета сканов оригиналов закрывающих
                                документов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <h2 class="faq__title">Частые вопросы</h2>
        <div class="faq__wrapper">
            <div class="faq__item"><button class="btn faq__button">Что представляет собой перевозка
                    негабарита?</button>
                <p class="faq__content visually-hidden"></p>
            </div>
            <div class="faq__item"><button class="btn faq__button">Доставка груза в оговоренные сроки</button>
                <p class="faq__content visually-hidden"></p>
            </div>
            <div class="faq__item"><button class="btn faq__button">Подача транспорта под погрузку</button>
                <p class="faq__content visually-hidden">Получение разрешения на транспортировку негабарита,
                    согласование маршрута движения с ГИБДД. Направление полного пакета сканов оригиналов
                    закрывающих документов</p>
            </div>
        </div>
    </section>
    <section class="partners">
        <h2 class="partners__title">Наши партнеры</h2>
        <ul class="partners__list clear-list">
            <li class="partners__item"><a href="#" class="partners__link"><img src="/img/index/garpix.png"
                        class="partners__img" width="" height="" alt="garpix"></a></li>
            <li class="partners__item"><a href="#" class="partners__link"><img src="/img/index/hp.png"
                        class="partners__img" width="" height="" alt="hp"></a></li>
            <li class="partners__item"><a href="#" class="partners__link"><img src="/img/index/idzor.png"
                        class="partners__img" width="" height="" alt="idzor"></a></li>
            <li class="partners__item"><a href="#" class="partners__link"><img src="/img/index/garpix.png"
                        class="partners__img" width="" height="" alt="garpix"></a></li>
            <li class="partners__item"><a href="#" class="partners__link"><img src="/img/index/garpix.png"
                        class="partners__img" width="" height="" alt="garpix"></a></li>
            <li class="partners__item"><a href="#" class="partners__link"><img src="/img/index/hp.png"
                        class="partners__img" width="" height="" alt="hp"></a></li>
            <li class="partners__item"><a href="#" class="partners__link"><img src="/img/index/idzor.png"
                        class="partners__img" width="" height="" alt="idzor"></a></li>
            <li class="partners__item"><a href="#" class="partners__link"><img src="/img/index/garpix.png"
                        class="partners__img" width="" height="" alt="garpix"></a></li>
        </ul>
    </section>
    <section class="discuss">
        <div class="discuss__wrapper">
            <h2 class="discuss__title">Остались вопросы?<br>Давайте обсудим!</h2>
            <form class="discuss__form callback-form" action="/consultation" method="post">
              @csrf
                <div class="discuss__fields"><label class="visually-hidden" for="phone_discuss"></label>
                    <input class="discuss__input" type="tel" name="phone_discuss" id="phone_discuss"
                        placeholder="Телефон*" required> <label class="visually-hidden" for="name"></label> <input
                        class="discuss__input" type="text" name="client_name" id="name" placeholder="Имя"> <button
                        class="btn discuss__submit btn--orange" type="submit">Заказать консультацию</button>
                </div>
                <div class="policy discuss__policy">
                    <input class="policy__input visually-hidden" type="checkbox" name="policy_discuss"
                        id="policy_discuss" checked>
                    <label class="policy__label" for="policy_discuss">Соглашаюсь с <a href="#"
                            class="policy__link"><span class="policy__span">Правилами обработки персональных
                                данных</span></a></label>
                </div>
            </form>
        </div>
        <div class="discuss__social">
            <p class="discuss__action">Напишите нам в соц.сетях</p>
            <div class="social discuss__icons">
                <ul class="social__list clear-list">
                    <li class="social__item"><a href="#" class="social__link"><svg class="social__svg">
                                <use xlink:href="#tg--inline"></use>
                            </svg></a></li>
                    <li class="social__item"><a href="#" class="social__link"><svg class="social__svg">
                                <use xlink:href="#wa--inline"></use>
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
