
<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=81ff5a41-050a-4199-aee4-2c8ebd0c8bfb"></script>
<link rel='stylesheet' href="/dist/css/blocks/contacts.css">
<main class="page page_contacts">
	<div class="container">
		<section class="breadCrumbs">
			<ul class="breadCrumbs__ul">
				<li>
					<a class="breadCrumbs__link" href="/">Главная</a>
					</li>
				<li>
					<span>Контакты</span>
				</li>
			</ul>
		</section>
		<section class="page__box">
			<div class="page__title">Контакты</div>
			<div class="pageContacts">
				<section class="pageContacts__data">
					<aside class="pageContacts__aside">
						<div class="pageContacts__item">
							<div class="pageContacts__subtitle">Общие контакты</div>
							<div class="pageContacts__description">
								<div class="pageContacts__info">Телефон</div>
								<div class="pageContacts__text">
									<a class="pageContacts__link" href="tel:+79084161495">+7 908 416-14-95</a>
								</div>
								<div class="pageContacts__info">E-mail</div>
								<div class="pageContacts__text">
									<a class="pageContacts__link pageContacts__link_green" href="mailto:givoisad@mail.ru">givoisad@mail.ru</a>
								</div>
								<div class="pageContacts__info">Адрес</div>
								<div class="pageContacts__text">
									<div class="pageContacts__link">Омск, Сакена Сейфуллина, 27</div>
								</div>
							</div>
						</div>
						<div class="pageContacts__item">
							<div class="pageContacts__subtitle">Для поставщиков</div>
							<div class="pageContacts__description">
								<div class="pageContacts__info">Телефон</div>
								<div class="pageContacts__text">
									<a class="pageContacts__link" href="tel:+79504163095">+7 950 416-30-95</a>
								</div>
								<div class="pageContacts__info">E-mail</div>
								<div class="pageContacts__text">
									<a class="pageContacts__link pageContacts__link_green" href="mailto:sale@zhivoy-sad.ru">sale@zhivoy-sad.ru</a>
								</div>
							</div>
						</div>
						<div class="pageContacts__item">
							<div class="pageContacts__subtitle">Для соискателей</div>
							<div class="pageContacts__description">
								<div class="pageContacts__info">Телефон</div>
								<div class="pageContacts__text">
									<a class="pageContacts__link" href="tel:+79514161495">+7 951 416-14-95</a>
								</div>
								<div class="pageContacts__info">E-mail</div>
								<div class="pageContacts__text">
									<a class="pageContacts__link pageContacts__link_green" href="mailto:personal@zhivoy-sad.ru">personal@zhivoy-sad.ru</a>
								</div>
							</div>
						</div>
					</aside>
					<form class="pageContacts__form contactsForm">
						<div class="contactsForm__title">
							У вас есть вопросы? <br>Вы можете написать нам сообщение
						</div>
						<div class="contactsForm__content">
							<div class="contactsForm__fields">
								<div class="envelopeInput">
									<div class="envelopeInput__title">Имя<span class="envelopeInput__surely">*</span></div>
									<input class="envelopeInput__input" type="text" placeholder="Введите ваше имя">
								</div>
								<div class="envelopeInput">
									<div class="envelopeInput__title">Телефон</div>
									<input class="envelopeInput__input" type="number" placeholder="+7 (___) ___-__-__">
								</div>
								<div class="envelopeInput">
									<div class="envelopeInput__title">Фамилия</div>
									<input class="envelopeInput__input" type="text" placeholder="Введите вашу фамилию">
								</div>
								<div class="envelopeInput">
									<div class="envelopeInput__title">E-mail<span class="envelopeInput__surely">*</span></div>
									<input class="envelopeInput__input" type="text" placeholder="Введите ваш e-mail">
								</div>
								<div class="envelopeInput">
									<div class="envelopeInput__title">Сообщение<span class="envelopeInput__surely">*</span></div>
									<textarea class="envelopeInput__textarea" placeholder="Введите ваше сообщение"></textarea>
								</div>
							</div>
							<div class="agreement">
								<label class="agreement__label">
									<input type="checkbox" checked="checked">
									<span class="check"></span>
								</label>
								<div class="agreement__consent">
									Нажимая на кнопку «Отправить», вы соглашаетесь <br>с <a class="agreement__link" href="/privacy/">политикой конфиденциальности</a>
								</div>
							</div>
							<button class="btn contactsForm__btn">Отправить</button>
						</div>
					</form>
				</section>
				<section class="map pageContacts__map contactsMap">
					<div class="contactsMap__title">Магазины</div>
					<div class="map__content">
						<aside class="map__aside scrollbar-inner">
							<div class="map__item mapItem_js" data-coord1="54.970231" data-coord2="73.392044" data-id="0">
								<div class="map__unit address">ул. Маяковского, 20</div>
								<div class="map__unit tel">
									<a class="map__tel" href="tel:+79083104807">+7 (908) 310-48-07</a>
								</div>
								<div class="map__schedule">
									<span>График работы:</span>
									Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00
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
							</div>
						</aside>
						<div id="map"></div>
					</div>
				</section>
			</div>
		</section>
	</div>
</main>

<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>