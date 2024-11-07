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
        <h1 class="form__title">Форма добавления транспорта</h1>
        <form class="form__body" action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form__wrapper">
                <label class="visually-hidden" for="brand"></label>
                <input class="form__input" type="text" name="brand" id="brand" placeholder="Марка">

                <label class="visually-hidden" for="year"></label>
                <input class="form__input" type="text" name="year" id="year" placeholder="Год выпуска">

                <label class="visually-hidden" for="axles"></label>
                <input class="form__input" type="text" name="axles" id="axles" placeholder="Кол-во осей">

                <label class="visually-hidden" for="own_weight"></label>
                <input class="form__input" type="text" name="own_weight" id="own_weight"
                    placeholder="Собственный вес">

                <label class="visually-hidden" for="full_weight"></label>
                <input class="form__input" type="text" name="full_weight" id="full_weight" placeholder="Полный вес">

                <label class="visually-hidden" for="load_capacity"></label>
                <input class="form__input" type="text" name="load_capacity" id="load_capacity"
                    placeholder="Грузоподъемность">

                <label class="visually-hidden" for="length"></label>
                <input class="form__input" type="text" name="length" id="length" placeholder="Длина">

                <label class="visually-hidden" for="width"></label>
                <input class="form__input" type="text" name="width" id="width" placeholder="Ширина">

                <label class="visually-hidden" for="height"></label>
                <input class="form__input" type="text" name="height" id="height" placeholder="Высота">

                <label class="visually-hidden" for="preview_img"></label>
                <input class="form__input" type="file" name="preview_img" id="preview_img"
                    placeholder="Картинка превью">

                <label class="visually-hidden" for="img"></label>
                <input class="form__input" type="file" name="img" id="img" placeholder="Картинка">
            </div>
            <button class="btn form__submit btn--orange" type="submit">Создать</button>
        </form>
    </section>
@endsection
