<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/catalog.css">
<main class="main">
	<section class="catalog container">
		<div class="breadCrumbs">
			<ul class="breadCrumbs__ul">
				<li><a class="breadCrumbs__link" href="">Главная</a></li>
				<li><a class="breadCrumbs__link" href="">Каталог</a></li>
				<li><a class="breadCrumbs__link" href="">Растения</a></li>
				<li><a class="breadCrumbs__link" href="">Семена</a></li>
				<li><span>Пряные и лекарственные травы</span></li>
			</ul>
		</div>
		<div class="page">
			<section class="catalog__border">
				<a class="catalog__event catalogEvent" href="#">
					<div class="catalogEvent__box">
						<div class="catalogEvent__title">Весенняя акция: три
							растения по цене двух</div>
						<div class="catalogEvent__description">С 20 марта по 1 мая у нас действует акция: каждое третье растение В ПОДАРОК!</div>
					</div>
				</a>
			</section>
			<section class="catalog__content">
				<div class="catalog__title">Пряные и лекарственные травы
					<span>180 товаров</span>
				</div>
				<div class="catalog__body">
					<aside class="catalog__menu catalogMenu">

					</aside>
					<div class="catalog__cards catalogCards">
						<div class="catalogCards__filters">
							<div class="catalogCards__popular catalogCardsPopular ">
								<div class="catalogCardsPopular__link catalogCardsPopularLink__js"> <span>Сначала популярные</span>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pop1.svg'; ?></div>

								<div class="catalogCardsPopular__popup catalogCardsPopularPopup__js hidden">
									<div class="catalogCardsPopular__item"> <input type="radio" id="contactChoice1" name="popular" checked>
										<label class="catalogCardsPopular__label" for="contactChoice1">сначала популярные</label>
									</div>
									<div class="catalogCardsPopular__item"><input type="radio" id="contactChoice2" name="popular">
										<label class="catalogCardsPopular__label" for="contactChoice2">сначала дешевле</label>
									</div>
									<div class="catalogCardsPopular__item"><input type="radio" id="contactChoice3" name="popular">
										<label class="catalogCardsPopular__label" for="contactChoice3">сначала дороже</label>
									</div>
								</div>
							</div>
							<div class="catalogCards__alphabet catalogCardsAlphabet">
								<div class="catalogCardsAlphabet__link catalogCardsAlphabetLink__js"> <span>По алфавиту <span class="catalogCardsAlphabet__textChecked">все</span></span>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/alphabet.svg'; ?></div>
								<div class="catalogCardsAlphabet__popup catalogCardsAlphabetPopup__js hidden">
									<div class="catalogCardsAlphabet__letter">А</div>
									<div class="catalogCardsAlphabet__all">Показать все</div>
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
								<div class="cardArticle__title">Ароматный садовый
									жасмин — скромный
									чубушник</div>
								<div class="cardArticle__btn">
									<span>Читать дальше</span>
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
								</div>
							</div>
						</div>
						<div class="catalogCards__still">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/look.svg'; ?>
							<span>Показать еще</span>
						</div>
						<div class="catalogCards__pagination">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pagiLeft.svg'; ?>
							<div class="catalogCards__paginationNumber catalogCards__paginationNumber_checked">1</div>
							<div class="catalogCards__paginationNumber">2</div>
							<div class="catalogCards__paginationNumber">3</div>
							<div class="catalogCards__paginationNumber">4</div>
							<div class="catalogCards__paginationNumber">5</div>
							<div class="catalogCards__paginationNumber">....10</div>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pagiRight.svg'; ?>
						</div>
					</div>
				</div>

		</div>
	</section>
	<section class="catalog__helpful">
		<div class=""></div>
		<div class=""></div>
	</section>
	</div>

	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>