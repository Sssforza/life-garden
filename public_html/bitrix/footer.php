        <footer class="footer">
            <div class="container footer__container">
                <div class="footer__icons">
                    <a class="footer__logo" href="#">
                        <img src="/dist/img/logo.png" alt="">
                    </a>
                    <div class="footer__social">
                        <a class="footer__socialSvg" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/youtube.svg'; ?>
                        </a>
                        <a class="footer__socialSvg" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vk.svg'; ?>
                        </a>
                        <a class="footer__socialSvg" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/insta.svg'; ?>
                        </a>
                        <a class="footer__socialSvg" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/ok.svg'; ?>
                        </a>
                    </div>
                </div>
                <div class="footer__company">
                    <div class="footer__companyTitle">Компания</div>
                    <ul class="footer__companyContainer">
                        <li><a class="footer__companyLinks" href="#">О нас</a></li>
                        <li><a class="footer__companyLinks" href="#">Новости</a></li>
                        <li><a class="footer__companyLinks" href="#">Блог огородника</a></li>
                        <li><a class="footer__companyLinks" href="#">Семинар</a></li>
                        <li><a class="footer__companyLinks" href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__buyers">
                    <div class="footer__buyersTitle">Покупателям</div>
                    <ul class="footer__buyersContainer">
                        <li><a class="footer__buyersLinks" href="#">Клубная карта</a></li>
                        <li><a class="footer__buyersLinks" href="#">Акции</a></li>
                        <li><a class="footer__buyersLinks" href="#">Доставка и оплата</a></li>
                    </ul>
                </div>
                <div class="footer__contacts">
                    <div class="footer__contactsTitle">Наши контакты</div>
                    <a class="footer__contactsTel" href="tel: +73812349341">
                        <div class="footer__contactsTelContainer">
                            <div class="footer__contactsSvg">
                                <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/telephone.svg'; ?>
                            </div>
                            <span class="footer__contactsTelText">+ 7 3812 34-93-41</span>
                        </div>
                        <div class="footer__contactsTelCenter">Центр информационной поддержки клиента</div>
                    </a>
                    <a class="footer__contactsEmail" href="#">
                        <div class="footer__contactsSvg">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/email.svg'; ?>
                        </div>
                        <span class="footer__contactsEmailText"> zhivoy-sad.@mail.ru
                        </span>
                    </a>
                    <div class="footer__contactsAddress">
                        <a class="footer__contactsAddressContainer" href="#">
                            <div class="footer__contactsSvg">
                                <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/address.svg'; ?>
                            </div>
                            <span class="footer__contactsAddressText"> ул. Сакена Сейфуллина, 27, Омск
                            </span>

                        </a>
                        <a class="footer__contactsButton" href="#">Найти магазин рядом</a>
                    </div>
                </div>
                <div class="footer__subscribe">
                    <div class="footer__subscribeTitle">Подпишитесь</div>
                    <span class="footer__subscribeLabel">Оставьте свой e-mail, и мы будем сообщать 
                        вам об акциях и новинках</span>
                    <form class="footer__subscribeForm" action="">
                        <input class="footer__subscribeInput" type="text" placeholder="Укажите ваш e-mail" value="">
                        <button class="footer__subscribeButton" type="submit">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
                        </button>
                    </form>
                    <div class="footer__subscribeError hidden">
                        <div class="footer__subscribeErrorImg">!</div>
                        <span class="footer__subscribeErrorText">Введите коректный e-mail</span>
                    </div>
                </div>
                <div class="footer__accept">
                    <div class="footer__acceptTitle">Мы принимаем</div>
                    <div class="footer__acceptCards">
                        <img class="footer__acceptMasterImg" src="/dist/img/mastercard.png" alt="">
                        <img class="footer__acceptVisaImg" src="/dist/img/visa.png" alt="">
                        <img class="footer__acceptMirImg" src="/dist/img/mir.png" alt="">
                    </div>
                </div>
                <div class="footer__end">
                    <div class="footer__ferma">
                        <a class="footer__fermaLogo" href="#">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/ferma.svg'; ?>
                            <span>создание сайта</span>
                        </a>
                    </div>
                    <a class="footer__policy" href="#">
                        <span>&copy; 2021 Живой сад</span>
                        <span>Политика конфиденциальности</span>
                    </a>
                </div>

                <div class="footer__buttonUp">
                    <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/top-arrow.svg'; ?>
                </div>

                <div class="footer__wrap hidden">
                    <div class="footer__popap">
                        <div class="footer__popapClose">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/close.svg'; ?>
                        </div>
                        <div class="footer__popapTitle">Вы успешно подписались</div>
                        <div class="footer__popapText">Благодарим за то, что подписались на нашу email-рассылку.
                            Теперь Вы будете получать актуальные новости и акции
                            примерно один раз в неделю. </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        </body>

        </html>