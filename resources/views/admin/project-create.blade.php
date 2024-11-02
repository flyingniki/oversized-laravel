@extends('layouts.layout')

@section('content')
    <form class="fieldset__list" action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="visually-hidden" for="name"></label>
        <input class="fieldset__input" type="text" name="name" id="name" placeholder="Имя">

        <label class="visually-hidden" for="route"></label>
        <input class="fieldset__input" type="text" name="route" id="route" placeholder="Маршрут">

        <label class="visually-hidden" for="cargo"></label>
        <input class="fieldset__input" type="text" name="cargo" id="cargo" placeholder="Груз">

        <label class="visually-hidden" for="transport"></label>
        <input class="fieldset__input" type="text" name="transport" id="transport" placeholder="Транспорт">

        <label class="visually-hidden" for="features"></label>
        <input class="fieldset__input" type="text" name="features" id="features" placeholder="Особенности">

        <label class="visually-hidden" for="description"></label>
        <input class="fieldset__input" type="text" name="description" id="description" placeholder="Описание">

        <label class="visually-hidden" for="preview_img"></label>
        <input class="fieldset__input" type="file" name="preview_img" id="preview_img" placeholder="Картинка превью">

        <label class="visually-hidden" for="img"></label>
        <input class="fieldset__input" type="file" name="img[]" id="img" placeholder="Картинка" multiple>

        <button class="btn calculator__submit btn--orange" type="submit">Создать</button>
    </form>
@endsection
