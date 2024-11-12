</main>
</div>
<footer class="footer page__footer">
    <section class="popup visually-hidden">
        <div class="popup__wrapper">
            <h2 class="popup__title">Заказать звонок</h2>
            <form class="popup__form callback-form" action="/consultation" method="post">
                @csrf
                <div class="popup__fields">
                    <label class="visually-hidden" for="client_phone_popup"></label>
                    <input class="popup__input" type="tel" name="client_phone" id="client_phone_popup"
                        placeholder="Телефон*" required>
                    <label class="visually-hidden" for="client_name_popup"></label>
                    <input class="popup__input" type="text" name="client_name" id="client_name_popup" placeholder="Имя">
                    <button class="btn popup__submit btn--orange" type="submit">Оставить заявку</button>
                </div>
                <div class="policy popup__policy">
                    <input class="policy__input visually-hidden" type="checkbox" name="policy_popup" id="policy_popup"
                        checked>
                    <label class="policy__label" for="policy_popup">Соглашаюсь с <a href="#"
                            class="policy__link"><span class="policy__span">Правилами обработки персональных
                                данных</span></a></label>
                </div>
            </form>
            <button class="btn popup__toggle"><span class="visually-hidden">Закрыть форму</span></button>
        </div>
    </section>
    <section class="success visually-hidden">
        <div class="success__wrapper">
            <div class="success__img">
                <svg class="success__svg">
                    <use xlink:href="#success--inline"></use>
                </svg>
            </div>
            <h2 class="success__title">Заявка принята</h2>
            <button class="btn success__close btn--orange" type="button">Ок</button>
            <button class="btn success__toggle"><span class="visually-hidden">Закрыть форму</span></button>
        </div>
    </section>
    <div class="footer__container">
        <div class="footer__wrapper">
            <div class="footer__nav">
                <div class="footer__menu">
                    <h2 class="footer__title">Меню</h2>
                    <ul class="footer__list clear-list">
                        <li class="footer__item"><a href="{{ route('services.show') }}" class="footer__link">Услуги</a>
                        </li>
                        <li class="footer__item"><a href="{{ route('cars') }}" class="footer__link">Автопарк</a></li>
                        <li class="footer__item"><a href="{{ route('main.about') }}" class="footer__link">О нас</a></li>
                        <li class="footer__item"><a href="{{ route('projects.show') }}" class="footer__link">Проекты</a>
                        </li>
                        <li class="footer__item"><a href="{{ route('main.contacts') }}"
                                class="footer__link">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <h2 class="footer__title">Услуги</h2>
                    <ul class="footer__list clear-list">
                        @foreach ($someServiceRefs as $ref)
                            <li class="footer__item">
                                <a href="services/{{ $ref->id }}" class="footer__link">{{ $ref->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="footer__contacts">
                <div class="footer__col"><a href="tel:+79778731886" class="footer__link footer__link--phone">+7
                        (977) 873-18-86</a> <a href="tel:+79778731886" class="footer__link footer__link--phone">+7
                        (977) 873-18-86</a> <button type="button" class="btn footer__btn btn--dark call-back">Заказать
                        звонок</button>
                    <div class="footer__mail"><a class="footer__link" href="mailto:infoinfo@gmail.com"><svg
                                class="footer__mail-svg">
                                <use xlink:href="#mail--inline"></use>
                            </svg> </a><span class="footer__mail-span">infoinfo@gmail.com</span></div>
                </div>
                <div class="footer__col">
                    <div class="footer__office">
                        <p class="footer__text">Главный офис</p>
                        <p class="footer__text">Россия, Московская обл., г. Королев, ул. Пионерская, д.14А</p>
                    </div>
                    <div class="footer__social">
                        <p class="footer__text">Наши соцсети</p>
                        <div class="social footer__icons"><a href="#" class="social__link"><svg
                                    class="social__svg">
                                    <use xlink:href="#tg--inline"></use>
                                </svg> </a><a href="#" class="social__link"><svg class="social__svg">
                                    <use xlink:href="#wa--inline"></use>
                                </svg></a></div>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer__rights">2024. Все права защищены</p><a class="footer__back-btn"></a>
    </div>
</footer>
<script src="{{ asset('./js/jquery.min.js') }}"></script>
<script src="{{ asset('./js/slick.min.js') }}"></script>
<script src="{{ asset('./js/index.min.js') }}" type="module"></script>
</body>

</html>
