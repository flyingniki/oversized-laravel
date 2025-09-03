@extends('layouts.layout')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="form">
        <h1 class="form__title">Форма добавления услуги</h1>
        <form class="form__body" action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form__wrapper">
                <label class="visually-hidden" for="title"></label>
                <input class="form__input" type="text" name="title" id="title" placeholder="Название">

                <label class="visually-hidden" for="subtitle"></label>
                <input class="form__input" type="text" name="subtitle" id="subtitle" placeholder="Подзаголовок">

                <label class="visually-hidden" for="lead"></label>
                <input class="form__input" type="text" name="lead" id="lead" placeholder="Текст-лид">

                <label class="visually-hidden" for="description"></label>
                <input class="form__input" type="text" name="description" id="description" placeholder="Описание">

                <label class="visually-hidden" for="preview_img"></label>
                <input class="form__input" type="file" name="preview_img" id="preview_img" placeholder="Превью" required>

                <label class="visually-hidden" for="img"></label>
                <input class="form__input" type="file" name="img" id="img" placeholder="Картинка" required>
            </div>
            <button class="btn form__submit btn--orange" type="submit">Создать</button>
        </form>
    </section>
@endsection
