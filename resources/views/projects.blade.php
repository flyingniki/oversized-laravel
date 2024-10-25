@extends('layouts.layout')

@section('content')
    <section class="all-services">
        <h1 class="all-services__title">Проекты</h1>
        <div class="all-services__list">
            @foreach ($projects as $project)
                <div class="service-item all-services__item">
                    <div class="service-item__image">
                        <img src="{{ $project->preview_img }}" alt="{{ $project->name }}" class="service-item__img">
                    </div>
                    <div class="service-item__description">
                        <p class="service-item__text">{{ $project->name }}</p>
                        <a href="projects/{{ $project->id }}" class="btn service-item__btn btn--dark">Все о проекте</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination all-services__pagination">
            <ul class="pagination__list clear-list">
                <li class="pagination__item">
                    <a href="" class="pagination__link">
                        <img class="pagination__img" src="/img/icons/arrow-left-control.svg" alt="">
                    </a>
                </li>
                <li class="pagination__item">
                    <a href="" class="pagination__link">1</a>
                </li>
                <li class="pagination__item">
                    <a href="" class="pagination__link">2</a>
                </li>
                <li class="pagination__item">
                    <a href="" class="pagination__link pagination__link--active">3</a>
                </li>
                <li class="pagination__item">
                    <a href="" class="pagination__link">
                        <img class="pagination__img" src="/img/icons/arrow-right-control.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    @include('service-slider')
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
