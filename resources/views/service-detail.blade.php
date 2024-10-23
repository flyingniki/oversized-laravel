@extends('layouts.layout')

@section('content')
    <div class="container">
        <section class="detail">
            <h1 class="detail__title">Услуги по перевозке экскаваторов</h1>
            <p class="detail__text detail__text--lead">Таким образом новая модель организационной деятельности играет важную
                роль в формировании модели
                развития. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей
                деятельности требуют от нас анализа модели развития. </p>
            <div class="detail__image">
                <img class="detail__img" src="./img/index/transport-desktop@1x.png" alt="Faymonville">
            </div>
            <p class="detail__text">Значимость этих проблем настолько очевидна, что рамки и место обучения кадров требуют от
                нас
                анализа новых предложений. Разнообразный и богатый опыт консультация с широким активом требуют от нас
                анализа форм
                развития. Таким образом постоянный количественный рост и сфера нашей активности позволяет оценить значение
                дальнейших
                направлений развития.</p>
            <p class="detail__text">Таким образом новая модель организационной деятельности играет важную роль в
                формировании модели
                развития. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей
                деятельности требуют от нас анализа модели развития. Значимость этих проблем настолько очевидна, что
                дальнейшее
                развитие различных форм деятельности в значительной степени обуславливает создание существенных финансовых и
                административных условий.</p>
            <p class="detail__text">Значимость этих проблем настолько очевидна, что рамки и место обучения кадров требуют от
                нас
                анализа новых предложений. Разнообразный и богатый опыт консультация с широким активом требуют от нас
                анализа форм
                развития. </p>
        </section>
        <section class="consultation consultation--detail">
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
        <section class="organization">
            <h2 class="organization__title">Организация перевозки</h2>
            <p class="organization__text">Таким образом новая модель организационной деятельности играет важную роль в
                формировании
                модели развития. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение
                нашей
                деятельности требуют от нас анализа модели развития. Значимость этих проблем настолько очевидна, что
                дальнейшее
                развитие различных форм деятельности в значительной степени обуславливает создание существенных финансовых и
                административных условий.</p>
            <p class="organization__text">Значимость этих проблем настолько очевидна, что рамки и место обучения кадров
                требуют от
                нас анализа новых предложений. Разнообразный и богатый опыт консультация с широким активом требуют от нас
                анализа форм
                развития. </p>
            <table class="organization__table">
                <caption class="organization__caption">Предельно допустимые нагрузки</caption>
                <tr class="organization__tr">
                    <th class="organization__th">Вид транспорта</th>
                    <th class="organization__th">Значение</th>
                </tr>
                <tr class="organization__tr">
                    <td class="organization__td" colspan="2">Автомобиль:</td>
                </tr>
                <tr class="organization__tr">
                    <td class="organization__td organization__td--dotted">двухосный</td>
                    <td class="organization__td">18</td>
                </tr>
                <tr class="organization__tr">
                    <td class="organization__td organization__td--dotted">трехосный</td>
                    <td class="organization__td">25</td>
                </tr>
                <tr class="organization__tr">
                    <td class="organization__td organization__td--dotted">четырехосный</td>
                    <td class="organization__td">32</td>
                </tr>
            </table>
            <h2 class="organization__title">Организация перевозки</h2>
            <p class="organization__text">Таким образом новая модель организационной деятельности играет важную роль в
                формировании
                модели развития. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение
                нашей
                деятельности требуют от нас анализа модели развития. Значимость этих проблем настолько очевидна, что
                дальнейшее
                развитие различных форм деятельности в значительной степени обуславливает создание существенных финансовых и
                административных условий.</p>
        </section>
    </div>
    <section class="special">
        <h2 class="special__title">Услуги по перевозке спецтехники по России</h2>
        <div class="special__slider">
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
@endsection
