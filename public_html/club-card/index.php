<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/clubCard.css">
<main class="page page_club">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Клубная карта</span>
			</li>
		</ul>
	</section>
	<section class="page__box container club">
		<section class="club__header">
			<div class="page__title ">Клубная карта</div>
			<div class="club__welcome clubWelcome" style="background-image:url(/dist/img/clubCardImgBg4.png">
				<div class="clubWelcome__title">Добро пожаловать
					в наш клуб</div>
				<div class="clubWelcome__img">
					<img src="/dist/img/clubCardImgBg.png" alt="">
				</div>
			</div>
		</section>
		<div class="club__container">
			<section class="club__allows  clubАllows">
				<div class="clubАllows__title">С помощью Вашей карты Вы можете:</div>
				<ul class="clubАllows__ul">
					<li class="clubАllows__li">Карта дает право на покупки со скидкой 5%.</li>
					<li class="clubАllows__li">Дополнительная скидка 5% в День рождения Скидка в период
						«Дня рождения» предоставляется только самому клиенту
						по предъявлении документа (паспорт, пенсионное удостоверение,
						водительские права). 5 дней (2 дня до Дня рождения, в День
						рождения и 2 дня после Дня рождения).</li>
					<li class="clubАllows__li">Владельцы клубной карты бесплатно получают газету «Живой сад».</li>
				</ul>
			</section>
			<section class="club__registration clubRegistration">
				<div class="clubRegistration__title">Оформить клубную карту</div>
				<form class="clubRegistration__form clubRegistration__form_js" action="">
					<div class="clubRegistration__fields">
						<div class="envelopeInput">
							<div class="envelopeInput__title">Имя <span>*</span></div>
							<input class="envelopeInput__input clubCard__name_js" type="text" placeholder="Введите ваше имя">
						</div>
						<div class="envelopeInput">
							<div class="envelopeInput__title">Фамилия <span>*</span></div>
							<input class="envelopeInput__input clubCard__surname_js" type="text" placeholder="Введите вашу фамилию">
						</div>
						<div class="envelopeInput">
							<div class="envelopeInput__title ">E-mail <span>*</span></div>
							<input class="envelopeInput__input clubCard__email_js" type="text" placeholder="Введите ваш e-mail">
						</div>
					</div>
					<div class="agreement">
						<label class="agreement__label ">
							<input type="checkbox">
							<span class="check clubCheck_js"></span>
						</label>
						<div class="agreement__consent ">
							Нажимая на кнопку «Получить карту», вы принимаете <br> условия <a class="agreement__link" href="/privacy/">Пользовательского соглашения</a>
						</div>
					</div>
					<button type="submit" class="clubRegistration__btn btn btn_disabled clubRegistration__btn_js">Получить карту</button>
				</form>
			</section>
		</div>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>