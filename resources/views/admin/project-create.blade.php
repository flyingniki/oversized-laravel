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
        <h1 class="form__title">Форма добавления проекта</h1>
        <form class="form__body" action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form__wrapper">
                <label class="visually-hidden" for="name"></label>
                <input class="form__input" type="text" name="name" id="name" placeholder="Имя">

                <label class="visually-hidden" for="route"></label>
                <input class="form__input" type="text" name="route" id="route" placeholder="Маршрут">

                <label class="visually-hidden" for="cargo"></label>
                <input class="form__input" type="text" name="cargo" id="cargo" placeholder="Груз">

                <label class="visually-hidden" for="transport"></label>
                <input class="form__input" type="text" name="transport" id="transport" placeholder="Транспорт">

                <label class="visually-hidden" for="features"></label>
                <input class="form__input" type="text" name="features" id="features" placeholder="Особенности">

                <label class="visually-hidden" for="description"></label>
                <input class="form__input" type="text" name="description" id="description" placeholder="Описание">

                <label class="visually-hidden" for="preview_img"></label>
                <input class="form__input" type="file" name="preview_img" id="preview_img"
                    placeholder="Картинка превью">

                <label class="visually-hidden" for="img"></label>
                <input class="form__input" type="file" name="img[]" id="img" placeholder="Картинка" multiple>
            </div>
            <button class="btn form__submit btn--orange" type="submit">Создать</button>
        </form>
    </section>
@endsection
