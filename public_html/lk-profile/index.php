<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/lkProfile.css">
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=81ff5a41-050a-4199-aee4-2c8ebd0c8bfb"></script>
<main class="page page_lk">
	<div class="container">
		<section class="breadCrumbs">
			<ul class="breadCrumbs__ul">
				<li>
					<a class="breadCrumbs__link" href="/">Главная</a>
				</li>
				<li>
					<span>Личный кабинет</span>
				</li>
			</ul>
		</section>
		<section class="page__box">
			<div class="lk">
				<aside class="lk__aside sidebar">
					<ul class="sidebar__list">
						<a href="/lk-profile/" class="sidebar__link active">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/lk-profile.svg'; ?>
							<span>Профиль</span>
						</a>
						<a href="/lk-orders/" class="sidebar__link">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/lk-orders.svg'; ?>
							<span>Мои заказы</span>
						</a>
						<a href="/lk-favorites/" class="sidebar__link">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/lk-favorites.svg'; ?>
							<span>Избранное</span>
						</a>
						<a href="#" class="sidebar__link">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/lk-out.svg'; ?>
							<span>Выйти</span>
						</a>
					</ul>
				</aside>
				<section class="lk__content">
					<form class="pageLk__form lkProfile">
						<div class="lkProfile__content">
							<div class="lkProfile__header">
								<div class="page__title">Профиль</div>
								<div class="lkProfile__subtitle">Персональные данные</div>
							</div>
							<div class="lkProfile__fields">
								<div class="lkProfile__column">
									<div class="envelopeInput envelopeInput_lk">
										<div class="envelopeInput__title">Имя</div>
										<input class="envelopeInput__input envelopeInput__input_lk" type="text" value="Иван">
									</div>
									<div class="envelopeInput envelopeInput_lk">
										<div class="envelopeInput__title">Фамилия</div>
										<input class="envelopeInput__input envelopeInput__input_lk" type="text" value="Иванович">
									</div>
									<div class="envelopeInput envelopeInput_lk">
										<div class="envelopeInput__title">Отчество</div>
										<input class="envelopeInput__input envelopeInput__input_lk" type="text" value="Иванов">
									</div>
									<div class="lkProfile__birthday">
										<div class="envelopeInput envelopeInput_lk">
											<div class="envelopeInput__title">Дата рождения</div>
											<input class="envelopeInput__input envelopeInput__input_lk" type="number" placeholder="дд.мм.гг" value="дд.мм.гггг">
										</div>
										<div class="lkProfile__message lkProfile__message_js">
											<span> Заполните поле даты рождения и получите скидку 5% в честь
												вашего дня рождения. Скидка действует 3 дня до, 3 дня после
												и в день рождения.</span>
											<div class="lkProfile__close lkProfile__close_js">
												<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/closeProfile.svg'; ?>
											</div>
										</div>

									</div>
								</div>
								<div class="lkProfile__column">
									<div class="envelopeInput envelopeInput_lk">
										<div class="envelopeInput__title">Телефон</div>
										<input class="envelopeInput__input envelopeInput__input_lk" type="number" placeholder="+7 (___) ___-__-__">
									</div>

									<div class="envelopeInput envelopeInput_lk">
										<div class="envelopeInput__title">E-mail</div>
										<input class="envelopeInput__input envelopeInput__input_lk" type="text" value="lifegarden@mail.ru" disabled>
									</div>
								</div>
							</div>

							<div class="lkProfile__delivery">
								<div class="lkProfile__subtitle">
									Адрес доставки
								</div>
								<div class="choice lkProfile__choice">
									<div class="choice__btn choice__courier_js choice__btn_checked">Курьером</div>
									<div class="choice__btn choice__pickup_js">Самовывоз</div>
								</div>
								<div class="lkProfile__address lkProfile__courier_js">
									<ul>
										<li class="lkProfile__liAddress">
											<label><input type="radio" name='address' checked>
												<span>Омск, ул. Сакена Сейфуллина, 27</span>
											</label>
											<div class="lkProfile__delete lkProfile__delete_js">Удалить</div>
										</li>
										<li class="lkProfile__liAddress">
											<label><input type="radio" name='address'>
												<span>Омск, ул. Сакена Сейфуллина, 27</span></label>
											<div class="lkProfile__delete lkProfile__delete_js">Удалить</div>
										</li>
									</ul>
									<div class="lkProfile__add lkProfile__addBtn_js">
										<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/addAddress.svg'; ?>
										<span>Добавить адрес</span>
									</div>
								</div>
								<div class="lkProfile__address lkProfile__pickup_js hidden">
									<div class="lkProfile__addressMap">
										<div class="envelopeInput envelopeInput_lk lkProfile__input shops_js">
											<div class="envelopeInput__title ">
												Выберите магазин самовывоза
											</div>
											<div class="openAddress_js">
												<input class="envelopeInput__input envelopeInput__input_lk openAddressInput_js" type="text" value="ул. Маяковского, 20" readonly="readonly">
												<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowColor.svg'; ?>
											</div>
											<div class="lkProfile__shops">
												<ul>
													<li class="lkProfile__shopsLi lkProfile__shop_js">ул. Маяковского, 20</li>
													<li class="lkProfile__shopsLi lkProfile__shop_js">ул. Сакена Сейфуллина, 27</li>
													<li class="lkProfile__shopsLi lkProfile__shop_js">пр. Мира, 64</li>
													<li class="lkProfile__shopsLi lkProfile__shop_js">ул. 10 лет Октября, 113</li>
													<li class="lkProfile__shopsLi lkProfile__shop_js">пр. Маркса, 83</li>
												</ul>
											</div>
										</div>
										<a class="lkProfile__showMap showMap_js" href="#windowMap">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mapProfile.svg'; ?>
											<span>Показать на карте</span>
										</a>
									</div>
								</div>
								<div class="lkProfile__address lkProfile__addAddress_js hidden">
									<div class="lkProfile__home">
										<div class="envelopeInput envelopeInput_lk">
											<div class="envelopeInput__title">Улица <span>*</span> </div>
											<input class="envelopeInput__input envelopeInput__input_lk" type="text" placeholder="Введите улицу">
										</div>
										<div class="envelopeInput envelopeInput_lk">
											<div class="envelopeInput__title">Дом <span>*</span></div>
											<input class="envelopeInput__input envelopeInput__input_lk" type="text" placeholder="Введите номер дома">
										</div>
										<div class="envelopeInput envelopeInput_lk">
											<div class="envelopeInput__title">Квартира/офис</div>
											<input class="envelopeInput__input envelopeInput__input_lk" type="text" placeholder="Введите номер квартиры или офиса">
										</div>
									</div>

									<div class="lkProfile__saveContainer">
										<div class="btnGray lkProfile__btn lkProfile__btn_margin">Сохранить изменения</div>
										<span class="lkProfile__cancel_js">Отменить</span>
									</div>
								</div>
							</div>
							<div class="lkProfile__password">
								<div class="lkProfile__subtitle">
									Изменить пароль
								</div>
								<div class="lkProfile__container">
									<div class="envelopeInput envelopeInput_lk">
										<div class="envelopeInput__title">Новый пароль</div>
										<input class="envelopeInput__input envelopeInput__input_lk" type="password" value="" placeholder="Введите новый пароль">
									</div>
									<div class="envelopeInput envelopeInput_lk">
										<div class="envelopeInput__title">Подтвердите пароль</div>
										<input class="envelopeInput__input envelopeInput__input_lk" type="password" value="" placeholder="Повторите новый пароль">
									</div>
								</div>
							</div>
						</div>
						<button class="btn lkProfile__btn" type="submit">Сохранить изменения</button>
					</form>
				</section>
			</div>
		</section>
	</div>
	<div id="windowMap" class="windowsMessage__map mfp-hide">
		<div class="windowsMessage__close popup-modal-dismiss">
			<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/close.svg'; ?>
		</div>
		<section class="map map_small">
			<div class="map__title map__title_small">Выберите магазин самовывоза</div>
			<div class="map__content">
				<aside class="map__aside map__aside_small scrollGreen">
					<div class="map__item mapItem_js" data-coord1="54.970231" data-coord2="73.392044" data-id="0">
						<div class="map__unit address">ул. Маяковского, 20</div>
						<div class="map__unit tel">
							<a class="map__tel" href="tel:+79083104807">+7 (908) 310-48-07</a>
						</div>
						<div class="map__schedule">
							<span>График работы:</span>
							Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00
						</div>
						<div class="map__btn btnWhite popup-modal-dismiss">
							Выбрать
						</div>
					</div>
					<div class="map__item mapItem_js" data-coord1="54.973993" data-coord2="73.273727" data-id="1">
						<div class="map__unit address">ул. Сакена Сейфуллина, 27</div>
						<div class="map__unit tel">
							<a class="map__tel" href="tel:+79083104807">+7 (908) 310-94-77</a>
						</div>
						<div class="map__schedule">
							<span>График работы:</span>
							Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00
						</div>
						<div class="map__btn btnWhite popup-modal-dismiss">
							Выбрать
						</div>
					</div>
					<div class="map__item mapItem_js" data-coord1="55.029399" data-coord2="73.273754" data-id="3">
						<div class="map__unit address">ул. пр. Мира, 64</div>
						<div class="map__unit tel">
							<a class="map__tel" href="tel:+79083104807">+7 (908) 310-35-69</a>
						</div>
						<div class="map__schedule">
							<span>График работы:</span>
							Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00
						</div>
						<div class="map__btn btnWhite popup-modal-dismiss">
							Выбрать
						</div>
					</div>
					<div class="map__item mapItem_js" data-coord1="54.985772" data-coord2="73.405312" data-id="4">
						<div class="map__unit address">ул. ​10 лет Октября, 113</div>
						<div class="map__unit tel">
							<a class="map__tel" href="tel:+79083104807">+7 (908) 310-35-69</a>
						</div>
						<div class="map__schedule">
							<span>График работы:</span>
							Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00
						</div>
						<div class="map__btn btnWhite popup-modal-dismiss">
							Выбрать
						</div>
					</div>
					<div class="map__item mapItem_js" data-coord1="54.944228" data-coord2="73.385621" data-id="5">
						<div class="map__unit address">​проспект Карла Маркса, 83</div>
						<div class="map__unit tel">
							<a class="map__tel" href="tel:+79083104807">+7 (908) 310-92-55</a>
						</div>
						<div class="map__schedule">
							<span>График работы:</span>
							Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00
						</div>
						<div class="map__btn btnWhite popup-modal-dismiss">
							Выбрать
						</div>
					</div>
				</aside>
				<div id="mapWindow" class="map__window"></div>
			</div>
		</section>
	</div>

</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>