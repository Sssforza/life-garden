        <footer class="footer">
            <div class="container footer__container">
                <div class="footer__icons footerIcons">
                    <a class="footerIcons__logo" href="#">
                        <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/logo-white.svg'; ?>
                    </a>
                    <div class="footerIcons__social">
                        <a class="footerIcons__socialSvg" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/youtube.svg'; ?>
                        </a>
                        <a class="footerIcons__socialSvg" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vk.svg'; ?>
                        </a>
                        <a class="footerIcons__socialSvg" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/insta.svg'; ?>
                        </a>
                        <a class="footerIcons__socialSvg" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/ok.svg'; ?>
                        </a>
                    </div>
                </div>
                <div class="footer__company footerCompany">
                    <div class="footerCompany__title">Компания</div>
                    <ul class="footerCompany__container">
                        <li><a class="footerCompany__links" href="#">О нас</a></li>
                        <li><a class="footerCompany__links" href="#">Новости</a></li>
                        <li><a class="footerCompany__links" href="#">Блог огородника</a></li>
                        <li><a class="footerCompany__links" href="#">Семинар</a></li>
                        <li><a class="footerCompany__links" href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__buyers footerBuyers">
                    <div class="footerBuyers__title">Покупателям</div>
                    <ul class="footerBuyers__container">
                        <li><a class="footerBuyers__links" href="#">Клубная карта</a></li>
                        <li><a class="footerBuyers__links" href="#">Акции</a></li>
                        <li><a class="footerBuyers__links" href="#">Доставка и оплата</a></li>
                    </ul>
                </div>
                <div class="footer__contacts footerContacts">
                    <div class="footerContacts__title">Наши контакты</div>
                    <div class="footerContacts__tel">
                        <a class="footerContacts__telContainer" href="tel: +73812349341">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/telephone.svg'; ?>

                            <span class="footerContacts__telText">+ 7 3812 34-93-41</span>
                        </a>
                        <div class="footerContacts__telCenter">Центр информационной поддержки клиента</div>
                    </div>
                    <a class="footerContacts__email" href="#">
                        <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/email.svg'; ?>
                        <span class="footerContacts__emailText"> zhivoy-sad.@mail.ru
                        </span>
                    </a>
                    <div class="footerContacts__address">
                        <div class="footerContacts__addressContainer">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/address.svg'; ?>
                            <span class="footerContacts__addressText"> ул. Сакена Сейфуллина, 27, Омск
                            </span>
                        </div>
                        <a class="btnJaundicedGreenHover footerContacts__button" href="#">Найти магазин рядом</a>
                    </div>
                </div>
                <div class="footer__subscribe footerSubscribe">
                    <div class="footerSubscribe__title">Подпишитесь</div>
                    <span class="footerSubscribe__label">Оставьте свой e-mail, и мы будем сообщать
                        вам об акциях и новинках</span>
                    <form class="footerSubscribe__form" action="">
                        <input class="footerSubscribe__input footerSubscribeInput__js" type="text" placeholder="Укажите ваш e-mail" value="">
                        <button class="footerSubscribe__button footerSubscribeButton__js" type="submit">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
                        </button>
                    </form>
                    <div class="footerSubscribe__error footerSubscribeError__js hidden">
                        <div class="footerSubscribe__errorImg">!</div>
                        <span class="footerSubscribe__errorText">Адрес электронной почты введён некорректно. Пример: example@mail.ru
                        </span>
                    </div>
                </div>
                <div class="footer__accept footerAccept">
                    <div class="footerAccept__title">Мы принимаем</div>
                    <div class="footerAccept__cards">
                        <img class="footerAccept__masterImg" src="/dist/img/mastercard.png" alt="">
                        <img class="footerAccept__visaImg" src="/dist/img/visa.png" alt="">
                        <img class="footerAccept__mirImg" src="/dist/img/mir.png" alt="">
                    </div>
                </div>
                <div class="footer__end footerEnd">
                    <div class="footerEnd__ferma">
                        <a class="footerEnd__logo" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/ferma.svg'; ?>
                            <span>создание сайта</span>
                        </a>
                    </div>
                    <div class="footerEnd__policy">
                        <div>&copy; 2021 Живой сад</div>
                        <a class="footerEnd__policyLine" href="#">Политика конфиденциальности</a>
                    </div>
                </div>

                <div class="footer__buttonUp footerButtonUp__js">
                    <div class="footer__buttonUpArrow">
                        <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/top-arrow.svg'; ?>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        </body>

        </html>