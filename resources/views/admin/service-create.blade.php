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
    <form class="fieldset__list" action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="visually-hidden" for="title"></label>
        <input class="fieldset__input" type="text" name="title" id="title" placeholder="Название">

        <label class="visually-hidden" for="subtitle"></label>
        <input class="fieldset__input" type="text" name="subtitle" id="subtitle" placeholder="Подзаголовок">

        <label class="visually-hidden" for="lead"></label>
        <input class="fieldset__input" type="text" name="lead" id="lead" placeholder="Текст-лид">

        <label class="visually-hidden" for="description"></label>
        <input class="fieldset__input" type="text" name="description" id="description" placeholder="Описание">

        <label class="visually-hidden" for="preview_img"></label>
        <input class="fieldset__input" type="file" name="preview_img" id="preview_img" placeholder="Превью">

        <label class="visually-hidden" for="img"></label>
        <input class="fieldset__input" type="file" name="img" id="img" placeholder="Картинка">

        <button class="btn calculator__submit btn--orange" type="submit">Создать</button>
    </form>
@endsection
