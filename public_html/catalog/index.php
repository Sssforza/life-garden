<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/catalog.css">
<main class="page page_catalog">
	<div class="container">
		<section class="breadCrumbs">
			<ul class="breadCrumbs__ul">
				<li><a class="breadCrumbs__link" href="">Главная</a></li>
				<li><a class="breadCrumbs__link" href="">Каталог</a></li>
				<li><a class="breadCrumbs__link" href="">Растения</a></li>
				<li><a class="breadCrumbs__link" href="">Семена</a></li>
				<li><span>Пряные и лекарственные травы</span></li>
			</ul>
		</section>
		<div class="page__box">
			<section class="catalog__border">
				<a class="catalog__event catalogEvent" style="background-image:url(/dist/img/bgEvent.png)" href="#">
					<div class="catalogEvent__box">
						<div class="catalogEvent__title">Весенняя акция: три
							растения по цене двух</div>
						<div class="catalogEvent__description">С 20 МАРТА по 1 мая у нас действует акция: каждое третье растение В ПОДАРОК!</div>
					</div>
				</a>
			</section>
			<section class="catalog__content">
				<div class="page__title">Пряные и лекарственные травы
					<span>180 товаров</span>
				</div>
				<div class="catalog__body">
					<aside class="catalog__menu catalogMenu">
						<form action="">
							<div class="catalogMenu__box">
								<ul class="catalogMenu__links catalogMenuLinks__js">
									<li><a class="catalogMenu__link catalogMenu__link_checked" href="#">Анис</a></li>
									<li><a class="catalogMenu__link" href="#">Базилик</a></li>
									<li><a class="catalogMenu__link" href="#">Валериана</a></li>
									<li><a class="catalogMenu__link" href="#">Горчица</a></li>
									<li><a class="catalogMenu__link" href="#">Душица</a></li>
									<li><a class="catalogMenu__link" href="#">Зверобой</a></li>
									<li><a class="catalogMenu__link" href="#">Базилик</a></li>
									<li><a class="catalogMenu__link" href="#">Валериана</a></li>
									<li><a class="catalogMenu__link" href="#">Горчица</a></li>
									<li><a class="catalogMenu__link" href="#">Душица</a></li>
									<li><a class="catalogMenu__link" href="#">Зверобой</a></li>
									<li><a class="catalogMenu__link" href="#">Базилик</a></li>
									<li><a class="catalogMenu__link" href="#">Валериана</a></li>
									<li><a class="catalogMenu__link" href="#">Горчица</a></li>
									<li><a class="catalogMenu__link" href="#">Душица</a></li>
									<li><a class="catalogMenu__link" href="#">Горчица</a></li>
									<li><a class="catalogMenu__link" href="#">Душица</a></li>
									<li><a class="catalogMenu__link" href="#">Зверобой</a></li>
									<li><a class="catalogMenu__link" href="#">Базилик</a></li>
									<li><a class="catalogMenu__link" href="#">Валериана</a></li>
									<li><a class="catalogMenu__link" href="#">Горчица</a></li>
									<li><a class="catalogMenu__link" href="#">Душица</a></li>
								</ul>
								<div class="catalogMenu__show catalogMenuShow__js"> <span class="catalogMenuText__js">Показать еще</span>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowLink.svg'; ?>
								</div>
							</div>
							<div class="catalogMenu__price catalogMenuPrice">
								<span class="catalogMenu__title">Цена</span>
								<div class="catalogMenuPrice__slider">
									<div class="catalogMenuPrice__inputs">
										<input class="catalogMenuPrice__input" id="input-0" min="1000" max="30000" placeholder="1000" type="number">
										<span></span>
										<input class="catalogMenuPrice__input" id="input-1" min="1000" max="30000" placeholder="30000" type="number">
									</div>
									<div id="slider"></div>
									<div class="catalogMenuPrice__values">
										<div class="catalogMenuPrice__min">1 000 ₽</div>
										<div class="catalogMenuPrice__max">30 000 ₽</div>
									</div>
								</div>
							</div>
							<div class="catalogMenu__sort">
								<div class="catalogMenu__down catalogMenuDown__js">
									<span class="catalogMenu__title">Сорт</span>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowSort.svg'; ?>
								</div>
								<div class="catalogMenu__container catalogMenuContainer__js">
									<div class="scrollGreen catalogMenu__items catalogMenuItems_js">
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
										<div>
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Бонсай</span>
											</label>
										</div>
									</div>

									<div class="catalogMenu__show catalogMenu__show_small catalogMenuSmall__js">
										<span class="catalogMenuTextSmall__js">Показать еще</span>
										<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowShow.svg'; ?>
									</div>
								</div>
							</div>
							<div class="catalogMenu__stock">
								<div class="catalogMenu__down catalogStockDown__js">
									<span class="catalogMenu__title">В наличии</span>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowStock.svg'; ?>
								</div>
								<div class="catalogMenu__container catalogStockContainer__js">
									<div class="catalogMenu__items">
										<div class="catalogLabel__container">
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Да</span>
											</label>
										</div>
										<div class="catalogLabel__container">
											<label class="catalogMenu__label">
												<input class="catalogMenu__check" type="checkbox" />
												<span>Нет</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="catalogMenu__color">
								<div class="catalogMenu__down catalogColorDown__js">
									<span class="catalogMenu__title">Окрас хвои</span>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowColor.svg'; ?>
								</div>
								<div class="catalogMenu__container catalogColorContainer__js">
									<div class="catalogMenu__items">
										<div class="catalogLabel__container">
											<label class="catalogMenu__label">
												<input class="radio" type="radio" name="color" checked>
												<span>Желтая</span>
											</label>
										</div>
										<div class="catalogLabel__container">
											<label class="catalogMenu__label">
												<input type="radio" name="color">
												<span>Желтая</span>
											</label>
										</div>
										<div class="catalogLabel__container">
											<label class="catalogMenu__label">
												<input type="radio" name="color">
												<span>Желтая</span>
											</label>
										</div>
										<div class="catalogLabel__container">
											<label class="catalogMenu__label">
												<input type="radio" name="color">
												<span>Желтая</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="catalogMenu__new">
								<div class="catalogMenu__title">Новинки</div>
								<label class="catalogMenu__switch">
									<input class="catalogMenu__checkbox" type="checkbox" checked>
									<span class="catalogMenu__sliding catalogMenu__round"></span>
								</label>
							</div>
							<div class="catalogMenu__discount">
								<div class="catalogMenu__title">Товары со скидкой</div>
								<label class="catalogMenu__switch">
									<input class="catalogMenu__checkbox" type="checkbox" checked>
									<span class="catalogMenu__sliding catalogMenu__round"></span>
								</label>
							</div>
							<div class="catalogMenu__buttons">
								<button class="btnShow catalogMenu__buttonResset" type='reset'>Сбросить</button>
								<button class="btn catalogMenu__buttonApply" type='submit'>Применить</button>
							</div>
						</form>

					</aside>
					<div class="catalog__cards catalogCards">
						<div class="catalogCards__filters">
							<div class="catalogCards__popular catalogCardsPopular ">
								<div class="catalogCardsPopular__link catalogCardsPopularLink__js">
									<div class="catalogCardsPopular__linkText catalogCardsPopularLinkText__js">Сначала популярные</div>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pop1.svg'; ?>
								</div>

								<div class="catalogCardsPopular__popup catalogCardsPopularPopup__js hidden">
									<div class="catalogCardsPopular__item catalogCardsPopularItem__js"> <input type="radio" id="contactChoice1" name="popular" checked>
										<label class="catalogCardsPopular__label catalogCardsPopularLabel__js" for="contactChoice1">Сначала популярные</label>
									</div>
									<div class="catalogCardsPopular__item catalogCardsPopularItem__js"><input type="radio" id="contactChoice2" name="popular">
										<label class="catalogCardsPopular__label catalogCardsPopularLabel__js" for="contactChoice2">Сначала дешевле</label>
									</div>
									<div class="catalogCardsPopular__item catalogCardsPopularItem__js"><input type="radio" id="contactChoice3" name="popular">
										<label class="catalogCardsPopular__label catalogCardsPopularLabel__js" for="contactChoice3">Сначала дороже</label>
									</div>
								</div>
							</div>
							<div class="catalogCards__alphabet catalogCardsAlphabet">
								<div class="catalogCardsAlphabet__link catalogCardsAlphabetLink__js"> <span>По алфавиту <span class="catalogCardsAlphabet__textChecked catalogCardsAlphabetTextChecked__js">все</span></span>

									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/alphabet.svg'; ?></div>
								<div class="catalogCardsAlphabet__popup catalogCardsAlphabetPopup__js hidden">
									<div class="catalogCardsAlphabet__container">
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">А</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Б</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">В</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Г</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Д</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Е</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Ё</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Ж</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">З</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">И</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Й</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">К</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Л</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">М</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Н</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">О</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">П</div>
									</div>
									<div class="catalogCardsAlphabet__containerNext">
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Р</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">С</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Т</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">У</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Ф</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Х</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Ц</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Ч</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Ш</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Щ</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Э</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Ю</div>
										<div class="catalogCardsAlphabet__letter catalogCardsAlphabetLetter__js">Я</div>
									</div>
									<div class="catalogCardsAlphabet__all catalogCardsAlphabetAll__js">Показать все</div>
								</div>
							</div>
						</div>
						<div class="catalogCards__container">
							<div class="cardProduct">
								<div class="cardProduct__new">Новинка</div>
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)">
										<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Горшок цветочный Ingreen Ajur 16 h14.5 см v 1.6 л пластик английская роза
											</a>
										</div>
										<div class="availability">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
										<div class="review">
											<div class="review__list">
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__info">с картой живой сад</div>
												<div class="cost__price cost__price_card">
													<span class="cost__totalPrice">240</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
											<div class="cost__right">
												<div class="cost__info">обычная цена</div>
												<div class="cost__price cost__price_common">
													<span class="cost__totalPrice">240</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
										</div>
										<div class="cardProduct__bottom">
											<div class="counter">
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
											<div class="cardProduct__elements">
												<div class="likeProduct">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
												</div>
												<div class="btnJaundicedFull addBasket">В корзину</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg2.jpg)">
										<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Комплект фонтанный «Принц-лягушка», 40 см
											</a>
										</div>
										<div class="availability">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
										</div>
										<div class="review">
											<div class="review__list">
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
											<div class="review__how">25 отзывов</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">14 702</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
										</div>
										<div class="cardProduct__bottom">
											<div class="counter">
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
											<div class="cardProduct__elements">
												<div class="likeProduct active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
												</div>
												<div class="btnJaundicedFull addBasket">В корзину</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg3.jpg)">
										<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Ножницы универсальные Finland
											</a>
										</div>
										<div class="availability">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
										</div>
										<div class="review">
											<div class="review__list">
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
											<div class="review__how">25 отзывов</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__info">с картой живой сад</div>
												<div class="cost__price cost__price_card">
													<span class="cost__totalPrice">1 723</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
											<div class="cost__right">
												<div class="cost__info">обычная цена</div>
												<div class="cost__price cost__price_common">
													<span class="cost__totalPrice">1 900</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
										</div>
										<div class="cardProduct__bottom">
											<div class="counter">
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
											<div class="cardProduct__elements">
												<div class="likeProduct">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
												</div>
												<div class="btnJaundicedFull addBasket">В корзину</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg3.jpg)">
										<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Ножницы универсальные Finland
											</a>
										</div>
										<div class="availability">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
										</div>
										<div class="review">
											<div class="review__list">
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
											<div class="review__how">25 отзывов</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__info">с картой живой сад</div>
												<div class="cost__price cost__price_card">
													<span class="cost__totalPrice">1 723</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
											<div class="cost__right">
												<div class="cost__info">обычная цена</div>
												<div class="cost__price cost__price_common">
													<span class="cost__totalPrice">1 900</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
										</div>
										<div class="cardProduct__bottom">
											<div class="counter">
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
											<div class="cardProduct__elements">
												<div class="likeProduct">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
												</div>
												<div class="btnJaundicedFull addBasket">В корзину</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg3.jpg)">
										<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Ножницы универсальные Finland
											</a>
										</div>
										<div class="availability">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
										</div>
										<div class="review">
											<div class="review__list">
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
											<div class="review__how">25 отзывов</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__info">с картой живой сад</div>
												<div class="cost__price cost__price_card">
													<span class="cost__totalPrice">1 723</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
											<div class="cost__right">
												<div class="cost__info">обычная цена</div>
												<div class="cost__price cost__price_common">
													<span class="cost__totalPrice">1 900</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
										</div>
										<div class="cardProduct__bottom">
											<div class="counter">
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
											<div class="cardProduct__elements">
												<div class="likeProduct">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
												</div>
												<div class="btnJaundicedFull addBasket">В корзину</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cardArticle">
								<div class="cardArticle__title">
									Ароматный садовый
									жасмин — скромный
									чубушник</div>
								<div class="cardArticle__btn">
									<span>Читать дальше</span>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
								</div>
							</div>
							<div class="cardProduct">
								<div class="cardProduct__new">Новинка</div>
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)">
										<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Горшок цветочный Ingreen Ajur 16 h14.5 см v 1.6 л пластик английская роза
											</a>
										</div>
										<div class="availability">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
										<div class="review">
											<div class="review__list">
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__info">с картой живой сад</div>
												<div class="cost__price cost__price_card">
													<span class="cost__totalPrice">240</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
											<div class="cost__right">
												<div class="cost__info">обычная цена</div>
												<div class="cost__price cost__price_common">
													<span class="cost__totalPrice">240</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
										</div>
										<div class="cardProduct__bottom">
											<div class="counter">
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
											<div class="cardProduct__elements">
												<div class="likeProduct">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
												</div>
												<div class="btnJaundicedFull addBasket">В корзину</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg2.jpg)">
										<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Комплект фонтанный «Принц-лягушка», 40 см
											</a>
										</div>
										<div class="availability">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
										</div>
										<div class="review">
											<div class="review__list">
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
											<div class="review__how">25 отзывов</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">14 702</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
										</div>
										<div class="cardProduct__bottom">
											<div class="counter">
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
											<div class="cardProduct__elements">
												<div class="likeProduct active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
												</div>
												<div class="btnJaundicedFull addBasket">В корзину</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg3.jpg)">
										<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Ножницы универсальные Finland
											</a>
										</div>
										<div class="availability">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
										</div>
										<div class="review">
											<div class="review__list">
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item active">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
											<div class="review__how">25 отзывов</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__info">с картой живой сад</div>
												<div class="cost__price cost__price_card">
													<span class="cost__totalPrice">1 723</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
											<div class="cost__right">
												<div class="cost__info">обычная цена</div>
												<div class="cost__price cost__price_common">
													<span class="cost__totalPrice">1 900</span>
													<span class="cost__ruble">₽</span>
												</div>
											</div>
										</div>
										<div class="cardProduct__bottom">
											<div class="counter">
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
											<div class="cardProduct__elements">
												<div class="likeProduct">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
												</div>
												<div class="btnJaundicedFull addBasket">В корзину</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="catalogCards__show btnShow">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/look.svg'; ?>
							<span>Показать еще</span>
						</div>
						<div class="catalogCards__pagination pagination">
							<div class="pagination__prev">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pagiLeft.svg'; ?>
							</div>
							<a href="#" class="pagination__number paginationNumber__js pagination_checked">1</a>
							<a href="#" class="pagination__number paginationNumber__js">2</a>
							<a href="#" class="pagination__number paginationNumber__js">3</a>
							<a href="#" class="pagination__number paginationNumber__js">4</a>
							<a href="#" class="pagination__number paginationNumber__js">5</a>
							<a href="#" class="pagination__points">....</a>
							<a href="#" class="pagination__number paginationNumber__js">10</a>
							<a href="#" class="pagination__next">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pagiRight.svg'; ?>
							</a>
						</div>
					</div>
				</div>

		</div>
		</section>
	</div>
	<section class="helpful">
		<div class="helpful__content container">
			<div class="helpful__head">
				<div class="helpful__title">Полезные статьи</div>
				<a class="helpful__link" href="#">Все статьи</a>
			</div>
			<div class="helpful__container">
				<div class="helpfulCard">
					<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
					<div class="helpfulCard__text">
						<div class="helpfulCard__date">16 МАРТА 2021</div>
						<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
						<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

					</div>
					<div class="cardArticle__btn helpfulCard__btn">
						<span>Читать дальше</span>
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
					</div>
				</div>
				<div class="helpfulCard">
					<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
					<div class="helpfulCard__text">
						<div class="helpfulCard__date">16 МАРТА 2021</div>
						<div class="helpfulCard__title">Как добиться дружных всходов</div>
						<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

					</div>
					<div class="cardArticle__btn helpfulCard__btn">
						<span>Читать дальше</span>
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
					</div>
				</div>
				<div class="helpfulCard">
					<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
					<div class="helpfulCard__text">
						<div class="helpfulCard__date">16 МАРТА 2021</div>
						<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
						<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

					</div>
					<div class="cardArticle__btn helpfulCard__btn">
						<span>Читать дальше</span>
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
					</div>
				</div>
				<div class="helpfulCard">
					<div class="helpfulCard__video">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/video.svg'; ?>
					</div>
					<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
					<div class="helpfulCard__text">
						<div class="helpfulCard__date">16 МАРТА 2021</div>
						<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
						<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый</div>

					</div>
					<div class="cardArticle__btn helpfulCard__btn">
						<span>Читать дальше</span>
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>