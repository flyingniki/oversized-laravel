@extends('layouts.layout')

@section('content')
    <div class="container">
        <section class="detail">
            <h1 class="detail__title">{{ $project->name }}</h1>
            <div class="detail__list">
                @if (!empty($pictures))
                    @foreach ($pictures as $picture)
                        <div class="detail__image">
                            <img class="detail__img" src="{{ $picture->img }}" alt="Faymonville">
                        </div>
                    @endforeach
                @endif
            </div>
            <p class="detail__text"><span class="detail__span">Маршрут:&nbsp;</span>{{ $project->route }}
            </p>
            <p class="detail__text"><span class="detail__span">Груз:&nbsp;</span>{{ $project->cargo }}</p>
            <p class="detail__text"><span class="detail__span">Транспорт:&nbsp;</span>{{ $project->transport }}</p>
            <p class="detail__text"><span class="detail__span">Особенности:&nbsp;</span>{{ $project->features }}</p>
            <p class="detail__text"><span class="detail__span">Описание проекта:&nbsp;</span>{{ $project->description }}</p>
        </section>
    </div>
    <section class="special">
        <h2 class="special__title">Другие проекты</h2>
        <div class="special__slider">
            @foreach ($projects as $project)
                <div class="service-item all-services__item">
                    <div class="service-item__image">
                        <img src="{{ $project->img }}" alt="{{ $project->name }}" class="service-item__img">
                    </div>
                    <div class="service-item__description">
                        <p class="service-item__text">{{ $project->name }}</p>
                        <a href="{{ $project->id }}" class="btn service-item__btn btn--dark">Все о проекте</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('projects.all') }}" class="btn services__btn btn--blue services__btn--all">Все проекты</a>
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
