<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/basket.css">
<main class="page">
	<section class="basket container">
		<section class="basket__main">
			<div class="chain">
				<span> <a href="#">Главная &nbsp;</a> > <a href=""> &nbsp; Корзина</a> </span>
			</div>
			<div class="basket__title">Корзина</div>
			<div class="basket__free">
				<img src="/dist/img/free.png" alt="">
				<span>БЕСПЛАТНАЯ ДОСТАВКА ПРИ ЗАКАЗЕ ОТ 2000 ₽ ПО ГОРОДУ ОМСКУ</span>
			</div>
			<section class="basket__cards">
				<div class="basket__card basketCard">
					<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
					<div class="basketCard__description">
						<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
						<div class="basketCard__article">Артикул: 456789</div>
						<div class="availability  availability_margin">
							<div class="availability__text has">
								<span>Есть в наличии</span>
							</div>
							<div class="availability__text not hidden">
								<span>Нет в наличии</span>
							</div>
						</div>
					</div>
					<div class="basketCard__action">
						<div class="basketCard__count">
							<div class="basketCard__text">Количество</div>
							<div class="counter counter_margin">
								<div class="counter__minus">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/counterMinus.svg'; ?>
								</div>
								<div class="counter__input">
									<input type="number" value="1">
								</div>
								<div class="counter__plus">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/counterPlus.svg'; ?>
								</div>
							</div>
						</div>
						<div class="basketCard__price">
							<div class="basketCard__text">Цена</div>
							<span class="basketCard__priceValue">2880</span>
							<span class="basketCard__priceValue">₽</span>
						</div>
						<div class="basketCard__icons">
							<div class="basketCard__iconLike">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeBasket.svg'; ?>
							</div>
							<div class="basketCard__iconBasket">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket.svg'; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="basket__card basketCard">
					<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
					<div class="basketCard__description">
						<div class="basketCard__title">Ель обыкновенная Акрокона Пуш</div>
						<div class="basketCard__article">Артикул: 456789</div>
						<div class="availability  availability_margin">
							<div class="availability__text has">
								<span>Есть в наличии</span>
							</div>
							<div class="availability__text not hidden">
								<span>Нет в наличии</span>
							</div>
						</div>
					</div>
					<div class="basketCard__action">
						<div class="basketCard__count">
							<div class="basketCard__text">Количество</div>
							<div class="counter counter_margin">
								<div class="counter__minus">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/counterMinus.svg'; ?>
								</div>
								<div class="counter__input">
									<input type="number" value="1">
								</div>
								<div class="counter__plus">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/counterPlus.svg'; ?>
								</div>
							</div>
						</div>
						<div class="basketCard__price">
							<div class="basketCard__text">Цена</div>
							<span class="basketCard__priceValue">580</span>
							<span class="basketCard__priceValue">₽</span>
						</div>
						<div class="basketCard__icons">
							<div class="basketCard__iconLike">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeBasket.svg'; ?>
							</div>
							<div class="basketCard__iconBasket">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket.svg'; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="basket__card basketCard">
					<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
					<div class="basketCard__description">
						<div class="basketCard__title">Дизельма Арчера Халсдонк</div>
						<div class="basketCard__article">Артикул: 456789</div>
						<div class="availability  availability_margin">
							<div class="availability__text has">
								<span>Есть в наличии</span>
							</div>
							<div class="availability__text not hidden">
								<span>Нет в наличии</span>
							</div>
						</div>
					</div>
					<div class="basketCard__action">
						<div class="basketCard__count">
							<div class="basketCard__text">Количество</div>
							<div class="counter counter_margin">
								<div class="counter__minus">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/counterMinus.svg'; ?>
								</div>
								<div class="counter__input">
									<input type="number" value="5">
								</div>
								<div class="counter__plus">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/counterPlus.svg'; ?>
								</div>
							</div>
						</div>
						<div class="basketCard__price">
							<div class="basketCard__text">Цена</div>
							<span class="basketCard__priceValue">1920</span>
							<span class="basketCard__priceValue">₽</span>
						</div>
						<div class="basketCard__icons">
							<div class="basketCard__iconLike">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeBasket.svg'; ?>
							</div>
							<div class="basketCard__iconBasket">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket.svg'; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="basket__information">
				<form class="basket__form basketForm" action="">
					<div class="basketForm__title">Оформление заказа</div>
					<div class="basketForm__contact">
						<div class="basketForm__denomination">
							<div class="basketForm__number">1</div>
							<div class="basketForm__name">Контактная информация</div>
						</div>
						<div class="basketForm__inputContainer">
							<div class="basketForm__inputItem">
								<div class="basketForm__inputName">Имя</div>
								<input class="basketForm__input" type="text" placeholder="Введите имя">
							</div>
							<div class="basketForm__inputItem">
								<div class="basketForm__inputName">Телефон</div>
								<input class="basketForm__input" type="text" placeholder="+7 (___) ___-__-__">
							</div>
							<div class="basketForm__inputItem">
								<div class="basketForm__inputName">Фамилия</div>
								<input class="basketForm__input" type="text" placeholder="Введите фамилию">
							</div>
							<div class="basketForm__inputItem">
								<div class="basketForm__inputName">E-mail</div>
								<input class="basketForm__input" type="text" placeholder="Введите e-mail">
							</div>
							<div class="basketForm__inputItem">
								<div class="basketForm__inputName">Отчество</div>
								<input class="basketForm__input" type="text" placeholder="Введите отчество">
							</div>
						</div>
					</div>
					<div class="basketForm__city">
						<div class="basketForm__denomination">
							<div class="basketForm__number">2</div>
							<div class="basketForm__name">Ваш город</div>
						</div>
						<input class="basketForm__input basketForm__input_margin" type="text" placeholder="Введите город">
					</div>
					<div class="basketForm__receiving">
						<div class="basketForm__denomination">
							<div class="basketForm__number">3</div>
							<div class="basketForm__name">Способ получения заказа</div>
						</div>
						<div class="basketForm__choice">
							<div class="basketForm__courierBtn">Курьером</div>
							<div class="basketForm__pickupBtn">Самовывоз</div>
						</div>
						<div class="basketForm__pickup basketPickup">
							<div class="basketForm__inputItem">
								<div class="basketForm__inputName">Выберите магазин для самовывоза</div>
								<div class="basketPickup__shop">
									<input class="basketForm__input" type="text" value="ул. Маяковского, 20" disabled>
									<div class="basketPickup__map">
										<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/place.svg'; ?>
										<span>Показать на карте</span>
									</div>
								</div>
							</div>
							<div class="basketPickup__info">
								<div class="basketPickup__infoItem">
									<span>Забрать заказ</span>
									<span>15 апреля 2021</span>
								</div>
								<div class="basketPickup__infoItem">
									<span>Режим работы</span>
									<span>c 09:00 до 19:00</span>
								</div>
								<div class="basketPickup__infoItem">
									<span>Срок хранения заказа</span>
									<span>14 дней</span>
								</div>
							</div>
						</div>

					</div>
					<div class="basketForm__club basketClub">
						<div class="basketForm__denomination">
							<div class="basketForm__number">4</div>
							<div class="basketForm__name">У вас есть клубная карта?</div>
						</div>
						<div class="basketClub__checked">
							<div class="basket__radio">
								<div class="basket__radioBtn "></div>
								<span>Да</span>
							</div>
							<div class="basket__radio">
								<div class="basket__radioBtn basket__radioBtn_active"></div>
								<span>Нет</span>
							</div>
						</div>
						<div class="basketClub__text">
							Станьте владельцем клубной карты «Живой сад» и получите <br>
							скидку 5% на покупки. Для этого просто <a href=""> зарегистрируйтесь</a>.
						</div>
					</div>
					<div class="basketForm__waypay">
						<div class="basketForm__denomination">
							<div class="basketForm__number">5</div>
							<div class="basketForm__name">Выберите способ оплаты</div>
						</div>
						<div class="basketForm__waypayContainer">
							<div class="basket__radio">
								<div class="basket__radioBtn"></div>
								<span>Оплата наличными при получении</span>
							</div>
							<div class="basketForm__waypayDescription">
								Оплата наличными при получении товара у курьера, <br> в пункте выдачи или почтовом отделении
							</div>
						</div>
						<div class="basketForm__waypayContainer">
							<div class="basket__radio">
								<div class="basket__radioBtn"></div>
								<span>Оплата картой при получении</span>
							</div>
							<div class="basketForm__waypayDescription">
								Оплата банковской картой при получении товара <br>
								у курьера, в пункте выдачи или почтовом отделении </div>
						</div>
						<div class="basketForm__waypayContainer">
							<div class="basket__radio">
								<div class="basket__radioBtn basket__radioBtn_active"></div>
								<span>Оплата картой на сайте</span>
							</div>
							<div class="basketForm__waypayDescription">
								После завершения формирования заказа <br> производится оплата картой Visa или MasterCard </div>
						</div>
					</div>
					<div class="basketForm__coment"></div>
				</form>
			</section>
		</section>
		<aside class="basket__order basketOrder">
			<div class="basketOrder__info">
				<div class="basketOrder__title">Ваш заказ</div>
				<div class="basketOrder__text basketOrder__quantity">
					<div>
						<span>Товары,</span>
						<span>3 шт</span>
					</div>

					<span class="basketOrder__price">2880 ₽</span>
				</div>
				<div class="basketOrder__text basketOrder__delivery">
					<div>
						<span>Доствака</span>
						<span>(самовывоз)</span>
					</div>
					<span class="basketOrder__price">0 ₽</span>
				</div>
				<div class="basketOrder__text basketOrder__address">
					<span>ул. Маяковского, 20</span>
				</div>
				<div class="basketOrder__text basketOrder__text_green basketOrder__discount">
					<span>Скидка по карте</span>
					<span class="basketOrder__price">0 ₽</span>
				</div>
				<div class="basketOrder__payment">
					<span class="basketOrder__paymentTitle">К оплате</span>
					<span class="basketOrder__price basketOrder__price_big">14400 ₽</span>
				</div>
				<div class="btn basketOrder__btn">Оформить заказ</div>
				<div class="basketOrder__policy">Нажимая на кнопку, вы соглашаетесь <br>
					с <a class="basketOrder__policyLink" href="#">Политикой по персональным данным</a> , <br>
					а также с <a class="basketOrder__policyLink" href="#">Условиями продажи</a>
				</div>
			</div>
			<div class="basketOrder__club">
				<div class="basketOrder__title basketOrder__title_small">Нет клубной карты?
				</div>
				<div class="basketOrder__sendText">Станьте владельцем <a class="basketOrder__sendLink" href="">клубной карты «Живой сад»</a> <br>
					и получите скидку 5% на покупки </div>
			</div>
			<div class="basketOrder__send">
				<div class="basketOrder__title basketOrder__title_small">Отправка и Доставка
				</div>
				<div class="basketOrder__sendText">Доставка заказов осуществляется в рабочие дни <br>
					(с понедельника по пятницу), за исключением <br>
					официальных праздничных дней. <a class="basketOrder__sendLink" href="">Подробнее</a> </div>
			</div>
		</aside>

	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>