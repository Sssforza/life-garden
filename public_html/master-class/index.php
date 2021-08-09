<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/masterClass.css">
<main class="page page_masterClass">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Семинары</span>
			</li>
		</ul>
	</section>
	<section class="page__box container masterClass">
		<div class="page__title ">Расписание мастер-классов</div>
		<section class="masterClass__header">
			<div class="choice masterClass__choice">
				<div class="choice__btn choice__nowMonth_js choice__btn_checked">Июль</div>
				<div class="choice__btn choice__nextMonth_js ">Август</div>
			</div>
			<div class="masterClass__archive masterArchive">
				<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/archive.svg'; ?>
				<div class="masterArchive__text"> Архив &nbsp;
					<span class="masterArchive__date masterArchive__date_js"> август 2021</span>
				</div>
				<div class="masterArchive__popup masterArchive__popup_js hidden">
					<div class="masterArchive__close masterArchive__close_js">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/closeSmall.svg'; ?>
					</div>
					<div class="masterArchive__box">
						<div class="envelopeInput masterArchive__item masterArchive__item_js">
							<div class="envelopeInput__title ">
								<span>Год</span>
							</div>
							<div class="masterArchive__input masterArchive__input_js">
								<input class="envelopeInput__input envelopeInput__input_year masterArchive__year_js" type="text" value="2021" readonly="readonly">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowColor.svg'; ?>
							</div>
							<div class="masterArchive__years">
								<ul>
									<li class="masterArchive__year masterArchive__inputItem_js">2021</li>
									<li class="masterArchive__year masterArchive__inputItem_js">2022</li>
								</ul>
							</div>
						</div>
						<div class="envelopeInput masterArchive__item masterArchive__item_js">
							<div class="envelopeInput__title ">
								<span>Месяц</span>
							</div>
							<div class="masterArchive__input masterArchive__input_js">
								<input class="envelopeInput__input envelopeInput__input_month masterArchive__month_js" type="text" value="Июль" readonly="readonly">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowColor.svg'; ?>
							</div>
							<div class="masterArchive__months">
								<ul>
									<li class="masterArchive__month masterArchive__inputItem_js">Январь</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Февраль</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Март</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Апрель</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Май</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Июнь</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Июль</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Август</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Сентябрь</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Октябрь</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Ноябрь</li>
									<li class="masterArchive__month masterArchive__inputItem_js">Декабрь</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="masterClass__btn btn masterArchive__apply masterArchive__apply_js">Применить</div>
				</div>
			</div>
		</section>
		<section class="masterClass__container masterClass__containerNow_js">
			<div class="masterClass__card masterClassCard">
				<div class="masterClassCard__visual">
					<div class="masterClassCard__img">
						<img src="/dist/img/trash/masterCardImg.jpg" alt="">
					</div>
					<div class="social masterClassCard__social">
						<div class="social__title">Поделиться</div>
						<ul class="social__list">
							<li>
								<a class="social__item" href="">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vkWhite.svg'; ?>
								</a>
							</li>
							<li>
								<a class="social__item" href="">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/okWhite.svg'; ?>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="masterClassCard__content">
					<div class="masterClassCard__header">
						<div class="masterClassCard__date">
							25 <span>Сентября <br> в 18:00</span>
						</div>
						<div class="masterClassCard__title">Как и чем укрыть сад надежно
							и безопасно.Укрытие роз.
							Основные ошибки
						</div>
					</div>
					<div class="masterClassCard__body masterClassCard__body_js">
						<div class="masterClassCard__text">
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
						</div>
						<div class="masterClassCard__readAll masterClassCard__readAll_js">
							<span class="masterClassCard__show">Читать полностью</span>
							<span class="masterClassCard__hide">Скрыть</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowSort.svg'; ?>
						</div>
					</div>
					<div class="masterClassCard__table">
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Цена</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">500
								<span class="masterClassCard__ruble">₽ </span>(Осталось
								<span class="masterClassCard__quantity">15 билетов</span>)
							</div>
						</div>
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Длительность</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">30 минут
							</div>
						</div>
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Место проведения</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">СКК им. Виктора Блинова
							</div>
						</div>
					</div>
					<a class="popup-modal-masterClassOrder masterClass__btn btn masterClass__btn_js" href="#masterClassOrder">Купить билет</a>
				</div>
			</div>
			<div class="masterClass__card masterClassCard">
				<div class="masterClassCard__visual">
					<div class="masterClassCard__img">
						<img src="/dist/img/trash/masterCardImg.jpg" alt="">
					</div>
					<div class="social masterClassCard__social">
						<div class="social__title">Поделиться</div>
						<ul class="social__list">
							<li>
								<a class="social__item" href="">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vkWhite.svg'; ?>
								</a>
							</li>
							<li>
								<a class="social__item" href="">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/okWhite.svg'; ?>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="masterClassCard__content">
					<div class="masterClassCard__header">
						<div class="masterClassCard__date">
							25 <span>Сентября <br> в 18:00</span>
						</div>
						<div class="masterClassCard__title">Как и чем укрыть сад надежно
							и безопасно.Укрытие роз.
							Основные ошибки
						</div>
					</div>
					<div class="masterClassCard__body masterClassCard__body_js">
						<div class="masterClassCard__text">
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
						</div>
						<div class="masterClassCard__readAll masterClassCard__readAll_js">
							<span class="masterClassCard__show">Читать полностью</span>
							<span class="masterClassCard__hide">Скрыть</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowSort.svg'; ?>
						</div>
					</div>
					<div class="masterClassCard__table">
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Цена</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">500
								<span class="masterClassCard__ruble">₽ </span>(Осталось
								<span class="masterClassCard__quantity">15 билетов</span>)
							</div>
						</div>
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Длительность</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">30 минут
							</div>
						</div>
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Место проведения</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">СКК им. Виктора Блинова
							</div>
						</div>
					</div>
					<a class="popup-modal-masterClassOrder masterClass__btn btn masterClass__btn_js" href="#masterClassOrder">Купить билет</a>
				</div>
			</div>
		</section>
		<section class="masterClass__container masterClass__containerNext_js hidden">
			<div class="masterClass__card masterClassCard ">
				<div class="masterClassCard__visual">
					<div class="masterClassCard__img">
						<img src="/dist/img/trash/masterCardImg1.jpg" alt="">
					</div>
					<div class="social masterClassCard__social">
						<div class="social__title">Поделиться</div>
						<ul class="social__list">
							<li>
								<a class="social__item" href="">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vkWhite.svg'; ?>
								</a>
							</li>
							<li>
								<a class="social__item" href="">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/okWhite.svg'; ?>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="masterClassCard__content">
					<div class="masterClassCard__header">
						<div class="masterClassCard__date">
							05 <span>Августа <br> в 18:00</span>
						</div>
						<div class="masterClassCard__title">Сеем лук порей, лук Эксибишен
						</div>
					</div>
					<div class="masterClassCard__body masterClassCard__body_js">
						<div class="masterClassCard__text">
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
						</div>
						<div class="masterClassCard__readAll masterClassCard__readAll_js">
							<span class="masterClassCard__show">Читать полностью</span>
							<span class="masterClassCard__hide">Скрыть</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowSort.svg'; ?>
						</div>
					</div>
					<div class="masterClassCard__table">
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Цена</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">500
								<span class="masterClassCard__ruble">₽ </span>(Осталось
								<span class="masterClassCard__quantity">15 билетов</span>)
							</div>
						</div>
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Длительность</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">30 минут
							</div>
						</div>
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Место проведения</div>
							<div class="masterClassCard__points"></div>
							<div class="masterClassCard__value">СКК им. Виктора Блинова
							</div>
						</div>
					</div>
					<a class="popup-modal-masterClassOrder masterClass__btn btn masterClass__btn_js" href="#masterClassOrder">Купить билет</a>
				</div>
			</div>
		</section>


		<section class="masterClass__footer">
			<div class="masterClass__sliderName">
				Фотоотчет с мастер-класса
			</div>
			<div class="masterClass__slider">
				<div class="masterClass__sliderFor masterClass__sliderFor_js">
					<img class="masterClass__slide" src="/dist/img/trash/aboutSlide1.jpg">
					<img class="masterClass__slide" src="/dist/img/trash/aboutSlide2.jpg">
					<img class="masterClass__slide" src="/dist/img/trash/aboutSlide3.jpg">
					<img class="masterClass__slide" src="/dist/img/trash/aboutSlide4.jpg">
					<img class="masterClass__slide" src="/dist/img/trash/aboutSlide5.jpg">
					<img class="masterClass__slide" src="/dist/img/trash/aboutSlide6.jpg">
					<img class="masterClass__slide" src="/dist/img/trash/aboutSlide7.jpg">
				</div>
				<div class="masterClass__sliderNav masterClass__sliderNav_js">
					<img class="masterClass__slide masterClass__slide_small" src="/dist/img/trash/aboutSlide1.jpg">
					<img class="masterClass__slide masterClass__slide_small" src="/dist/img/trash/aboutSlide2.jpg">
					<img class="masterClass__slide masterClass__slide_small" src="/dist/img/trash/aboutSlide3.jpg">
					<img class="masterClass__slide masterClass__slide_small" src="/dist/img/trash/aboutSlide4.jpg">
					<img class="masterClass__slide masterClass__slide_small" src="/dist/img/trash/aboutSlide5.jpg">
					<img class="masterClass__slide masterClass__slide_small" src="/dist/img/trash/aboutSlide6.jpg">
					<img class="masterClass__slide masterClass__slide_small" src="/dist/img/trash/aboutSlide7.jpg">
				</div>
			</div>
		</section>
	</section>
	<div id="masterClassOrder" class="masterClassOrder windowsMessage__popap mfp-hide">
		<div class="windowsMessage__close  masterClass__orderClose_js popup-modal-dismiss">
			<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/close.svg'; ?>
		</div>
		<div class="windowsMessage__title">Оформление заказа</div>
		<form action="">
			<div class="masterClassOrder__fields">
				<div class="envelopeInput">
					<div class="envelopeInput__title ">Имя<span>*</span></div>
					<input class="envelopeInput__input masterClass__name_js" type="text" placeholder="Введите ваше имя">
				</div>
				<div class="envelopeInput">
					<div class="envelopeInput__title  ">Телефон<span>*</span></div>
					<input class="envelopeInput__input maskPhone masterClass__tel_js" type="text" placeholder="+7 (___) ___-__-__">
				</div>
				<div class="envelopeInput">
					<div class="envelopeInput__title ">Фамилия<span>*</span></div>
					<input class="envelopeInput__input masterClass__surname_js" type="text" placeholder="Введите вашу фамилию">
				</div>
				<div class="envelopeInput">
					<div class="envelopeInput__title ">E-mail</div>
					<input class="envelopeInput__input masterClass__email_js" type="text" placeholder="Введите ваш e-mail">
				</div>
			</div>
			<div class="masterClassOrder__row">
				<span class="masterClassOrder__price">К оплате</span><span class="masterClassOrder__cost">500 <span class="masterClassOrder__ruble">₽</span> </span>
			</div>
			<div class="masterClassOrder__methods">
				<div class="masterClassOrder__subtitle">Способ оплаты</div>
				<div class="masterClassOrder__check">
					<label><input type="radio" name='address' checked>
						<span>Оплата картой на сайте</span>
					</label>
					<span class="masterClassOrder__description">Оплата производится картой Visa или MasterCard</span>
				</div>
			</div>
			<button type="submit" class="masterClass__btn btn masterClassOrder__btn_js" disabled>Перейти к оплате</button>
			<div class="agreement">
				<label class="agreement__label ">
					<input type="checkbox">
					<span class="check check__master_js"></span>
				</label>
				<div class="agreement__consent ">
					Нажимая «Перейти к оплате», вы соглашаетесь с <a class="agreement__link" href="/privacy/">условиями приобретения</a>
				</div>
			</div>
		</form>
	</div>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>