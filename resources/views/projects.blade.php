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
        {{ $arPagination->links() }}
    </section>
    @include('service-slider')
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
