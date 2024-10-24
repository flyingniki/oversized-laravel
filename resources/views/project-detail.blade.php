@extends('layouts.layout')

@section('content')
    <div class="container">
        <section class="detail">
            <h1 class="detail__title">Перевозка газопоршневой установки по России</h1>
            <div class="detail__list">
                <div class="detail__image">
                    <img class="detail__img" src="./img/projects/project.png" alt="Faymonville">
                </div>
                <div class="detail__image">
                    <img class="detail__img" src="./img/projects/project.png" alt="Faymonville">
                </div>
                <div class="detail__image">
                    <img class="detail__img" src="./img/projects/project.png" alt="Faymonville">
                </div>
            </div>
            <p class="detail__text"><span class="detail__span">Маршрут:&nbsp;</span>Италия, Болонья - Россия, город Москва
            </p>
            <p class="detail__text"><span class="detail__span">Груз:&nbsp;</span>Спускаемый модуль космического аппарата</p>
            <p class="detail__text"><span class="detail__span">Транспорт:&nbsp;</span>Низкорамный полуприцеп высотой 0,3 м
                от уровня
                земли</p>
            <p class="detail__text"><span class="detail__span">Особенности:&nbsp;</span>хрупкий груз, большая ширина груза,
                необходимость
                в вооружённом сопровождении, необходимость поддержания температурного режима, сжатые сроки реализации
                проекта, высокая
                важность груза для космической отрасли</p>
            <p class="detail__text"><span class="detail__span">Описание проекта:&nbsp;</span>Подготовка к выполнению проекта
                заняла 4
                недели. Учитывая высокую стоимость и важность груза, был разработан маршрут кратчайший маршрут движения,
                привлечена
                вооружённая охрана для сопровождения груза на всём пути следования, по всем транзитным странам и стране
                назначения.
                Учитывая необходимость в обеспечении поддержания определённой температуры внутри транспортного контейнера,
                были
                приобретены, настроены и подключены дизель-генераторные установки, работу которых постоянно контролировали
                наши
                сотрудники, следовавшие с грузом.</p>
        </section>
    </div>
    <section class="special">
        <h2 class="special__title">Другие проекты</h2>
        <div class="special__slider">
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/projects/project.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <button class="btn service-item__btn btn--dark">Все о проекте</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/projects/project.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <button class="btn service-item__btn btn--dark">Все о проекте</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/projects/project.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <button class="btn service-item__btn btn--dark">Все о проекте</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/projects/project.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <button class="btn service-item__btn btn--dark">Все о проекте</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/projects/project.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <button class="btn service-item__btn btn--dark">Все о проекте</button>
                </div>
            </div>
            <div class="service-item all-services__item">
                <div class="service-item__image">
                    <img src="./img/projects/project.png" alt="" class="service-item__img">
                </div>
                <div class="service-item__description">
                    <p class="service-item__text">Перевозка карьерной техники специального назначения</p>
                    <button class="btn service-item__btn btn--dark">Все о проекте</button>
                </div>
            </div>
        </div>
        <a href="{{ route('projects.all') }}" class="btn services__btn btn--blue services__btn--all">Все проекты</a>
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
