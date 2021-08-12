<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=81ff5a41-050a-4199-aee4-2c8ebd0c8bfb"></script>
<link rel='stylesheet' href="/dist/css/blocks/indexPage.css">
<main class="main">
	<section class="page page_index">
		<section class="mainSlier">
			<div class="mainSlier__content container">
				<div class="mainSlier__slider mainSlier_js">
					<div class="mainSlier__item" style="background-image:url(/dist/img/trash/mainSlierImg1.jpg)"></div>
					<div class="mainSlier__item" style="background-image:url(/dist/img/trash/mainSlierImg2.jpg)"></div>
					<div class="mainSlier__item" style="background-image:url(/dist/img/trash/mainSlierImg3.jpg)"></div>
				</div>
				<div class="mainSlier__info mainSlierInfo">
					<div class="mainSlierInfo__list">
						<div class="mainSlierInfo__item mainSlierInfoItem_js">
							<div class="mainSlierInfo__top">
								<div class="mainSlierInfo__img">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mainSlierInfoImg1.svg'; ?>
								</div>
								<div class="mainSlierInfo__title">Растения для Омска</div>
							</div>
							<div class="mainSlierInfo__description">
								Все растения представленные на&nbsp;сайте подбираются с&nbsp;высокой зимостойкостью.
							</div>
						</div>
						<div class="mainSlierInfo__item">
							<div class="mainSlierInfo__top">
								<div class="mainSlierInfo__img">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mainSlierInfoImg2.svg'; ?>
								</div>
								<div class="mainSlierInfo__title">Биологическая продукция</div>
							</div>
							<div class="mainSlierInfo__description">
								Товары биологического производства, которые помогают восстанавливать биоценоз почвы и&nbsp;растений.
							</div>
						</div>
						<div class="mainSlierInfo__item">
							<div class="mainSlierInfo__top">
								<div class="mainSlierInfo__img">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mainSlierInfoImg3.svg'; ?>
								</div>
								<div class="mainSlierInfo__title">Удобная и&nbsp;быстрая доставка</div>
							</div>
							<div class="mainSlierInfo__description">
								Доставляем бесплатно товары в&nbsp;пределах города при заказе от&nbsp;1000&nbsp;руб.
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="productSection productPopular">
			<div class="productSection__wrapper container">
				<div class="productSection__title">Популярные категории</div>
				<div class="productSection__content productPopular__content">
					<a class="productPopular__item" href="#">
						<div class="productPopular__img">
							<img src="/dist/img/productPopularImg1.png">
						</div>
						<div class="productPopular__name">Саженцы</div>
					</a>
					<a class="productPopular__item" href="#">
						<div class="productPopular__img">
							<img src="/dist/img/productPopularImg2.png">
						</div>
						<div class="productPopular__name">Семена</div>
					</a>
					<a class="productPopular__item" href="#">
						<div class="productPopular__img">
							<img src="/dist/img/productPopularImg3.png">
						</div>
						<div class="productPopular__name">Наборы для рассады</div>
					</a>
					<a class="productPopular__item" href="#">
						<div class="productPopular__img">
							<img src="/dist/img/productPopularImg4.png">
						</div>
						<div class="productPopular__name">Украшение сада</div>
					</a>
					<a class="productPopular__item" href="#">
						<div class="productPopular__img">
							<img src="/dist/img/productPopularImg5.png">
						</div>
						<div class="productPopular__name">Инструменты</div>
					</a>
					<a class="productPopular__item" href="#">
						<div class="productPopular__img">
							<img src="/dist/img/productPopularImg6.png">
						</div>
						<div class="productPopular__name">Хвойные</div>
					</a>
					<a class="productPopular__item" href="#">
						<div class="productPopular__img">
							<img src="/dist/img/productPopularImg7.png">
						</div>
						<div class="productPopular__name">Теплица</div>
					</a>
					<a class="productPopular__item" href="#">
						<div class="productPopular__img">
							<img src="/dist/img/productPopularImg8.png">
						</div>
						<div class="productPopular__name">Здоровое питание</div>
					</a>
				</div>
			</div>
		</section>
		<section class="productSection productSpecial productSpecial_js">
			<div class="productSection__wrapper container">
				<div class="productSection__title">Специальное предложение</div>
				<div class="productSection__content">
					<div class="productSpecial__sample specialSample">
						<div class="specialSample__content">
							<div class="specialSample__item specialSampleItem_js active" data-sample="novelty">
								<div class="specialSample__img">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialSampleImg1.svg'; ?>
								</div>
								<div class="specialSample__name">Новинки</div>
							</div>
							<div class="specialSample__item specialSampleItem_js" data-sample="promotions">
								<div class="specialSample__img">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialSampleImg2.svg'; ?>
								</div>
								<div class="specialSample__name">Товары по акции</div>
							</div>
							<div class="specialSample__item specialSampleItem_js" data-sample="hit">
								<div class="specialSample__img">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialSampleImg3.svg'; ?>
								</div>
								<div class="specialSample__name">Хит продаж</div>
							</div>
							<div class="specialSample__item specialSampleItem_js" data-sample="presents">
								<div class="specialSample__img">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialSampleImg4.svg'; ?>
								</div>
								<div class="specialSample__name">Для подарков</div>
							</div>
						</div>
						<a class="productSpecial__all" href="#">Показать все</a>
					</div>
					<div class="productSection__categories productBlockBox_js">
						<div class=" specialSample__item specialSampleItem_js active" data-sample="novelty">
							<div class="specialSample__img">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialSampleImg1.svg'; ?>
							</div>
							<div class="specialSample__name">Новинки</div>
						</div>
						<div class="specialSample__item specialSampleItem_js" data-sample="promotions">
							<div class="specialSample__img">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialSampleImg2.svg'; ?>
							</div>
							<div class="specialSample__name">Товары по акции</div>
						</div>
						<div class="specialSample__item specialSampleItem_js" data-sample="hit">
							<div class="specialSample__img">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialSampleImg3.svg'; ?>
							</div>
							<div class="specialSample__name">Хит продаж</div>
						</div>
						<div class="specialSample__item specialSampleItem_js" data-sample="presents">
							<div class="specialSample__img">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialSampleImg4.svg'; ?>
							</div>
							<div class="specialSample__name">Для подарков</div>
						</div>
					</div>
					<div class="productSpecial__productBlock productBlock">
						<div class="productBlock__content sliderProductSpecial_js productBlockBox_js show" data-slider="novelty">
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__new">Новинка</div>
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)">
										<a href="#quickView" class="popup-modal btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</a>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg2.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg3.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg4.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Декоративная скульптура для сада гнома
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
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">1 240</span>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg2.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg4.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Декоративная скульптура для сада гнома
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
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">1 240</span>
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
						<div class="productBlock__content sliderProductSpecial_js hide" data-slider="promotions">
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg5.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Декоративная скульптура для сада гнома
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
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">1 240</span>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg4.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Декоративная скульптура для сада гнома
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
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">1 240</span>
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
						<div class="productBlock__content sliderProductSpecial_js hide" data-slider="hit">
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg5.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Декоративная скульптура для сада гнома
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
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">1 240</span>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg2.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg4.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Декоративная скульптура для сада гнома
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
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">1 240</span>
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
						<div class="productBlock__content sliderProductSpecial_js hide" data-slider="presents">
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
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
							<div class="productBlock__item cardProduct">
								<div class="cardProduct__img">
									<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg4.jpg)">
										<div class="btnJaundiced cardProduct__quickView cardProduct__quickView_js">Быстрый просмотр</div>
									</div>
								</div>
								<div class="cardProduct__info">
									<div class="cardProduct__wrapper">
										<div class="cardProduct__title">
											<a class="cardProduct__a" href="#">
												Декоративная скульптура для сада гнома
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
											<div class="review__how">1 отзыв</div>
										</div>
									</div>
									<div class="cardProduct__wrapper">
										<div class="cost">
											<div class="cost__left">
												<div class="cost__price">
													<span class="cost__totalPrice">1 240</span>
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
					</div>
				</div>
			</div>
		</section>
		<section class="mainNews">
			<div class="mainNews__wrapper container">
				<div class="mainNews__header">
					<div class="mainNews__title">Новости</div>
					<a class="mainNews__subtitle" href="/news/">Все новости</a>
				</div>
				<div class="mainNews__content">
					<div class="mainNews__general">
						<img src="/dist/img/trash/mainNewsGeneral.jpg">
						<div class="mainNews__box">
							<div class="mainNews__date">8 марта 2021</div>
							<a class="mainNews__name" href="#">
								Весело и&nbsp;полезно прошли наши мастер-классы по&nbsp;сушилке Изидри.
								Наши гости узнали много новых и&nbsp;интересных рецептов.
							</a>
						</div>
					</div>
					<div class="mainNews__all">
						<div class="mainNews__item">
							<div class="mainNews__date">9 марта 2021</div>
							<a class="mainNews__name" href="#">
								Картофель посевной 15&nbsp;сортов (лучшие сорта в&nbsp;России). В&nbsp;наличие во&nbsp;всех наших магазинах.
							</a>
						</div>
						<div class="mainNews__item">
							<div class="mainNews__date">10 февраля 2021</div>
							<a class="mainNews__name" href="#">
								В&nbsp;связи с&nbsp;увеличением объема работ Садовый центр ЦПЗ &laquo;Живой
								сад&raquo; приглашает на&nbsp;работу активного продавца консультанта.
							</a>
						</div>
						<div class="mainNews__item">
							<div class="mainNews__date">3 января 2021</div>
							<a class="mainNews__name" href="#">
								Акция на&nbsp;все семена цветов.
							</a>
						</div>
						<div class="mainNews__item">
							<div class="mainNews__date">30 декабря 2020</div>
							<a class="mainNews__name" href="#">
								Наш праздничный график работы магазинов &laquo;Живой сад&raquo;
							</a>
						</div>
						<div class="mainNews__item">
							<div class="mainNews__date">25 ноября 2020</div>
							<a class="mainNews__name" href="#">
								Картофель посевной 15&nbsp;сортов (лучшие сорта в&nbsp;России). В&nbsp;наличие во&nbsp;всех наших магазинах.
							</a>
						</div>
					</div>
				</div>
				<a class="mainNews__btnAll btn" href="/news/">Все новости</a>
			</div>
		</section>
		<section class="clubCard">
			<div class="clubCard__content container">
				<div class="clubCard__title">Станьте владельцем<br>клубной карты</div>
				<div class="clubCard__description">
					<div class="clubCard__item">
						<div class="clubCard__percent">5%</div>
						<div class="clubCard__text">
							<div class="clubCard__li">
								Карта дает право на&nbsp;покупки со&nbsp;скидкой
							</div>
							<div class="clubCard__li">
								Дополнительная скидка&nbsp;5% в&nbsp;день рождения 3&nbsp;дня&nbsp;до, 3&nbsp;дня
								после и&nbsp;в&nbsp;день Рождения
							</div>
						</div>
					</div>
					<div class="clubCard__item">
						<div class="clubCard__img">
							<img src="/dist/img/clubCardImgLeft.png">
						</div>
						<div class="clubCard__text">
							<div class="clubCard__li">
								Владельцы клубной карты бесплатно <br>получают газету &laquo;Живой сад&raquo;
							</div>
						</div>
					</div>
					<a href="#clubCard" class="popup-modal-club btn clubCard__btn clubCard__btn_js" href="#">Получить карту</a>
					<div class="clubCard__minInfo">
						* Скидка не&nbsp;распространяется на&nbsp;товары по&nbsp;акции. Скидка в&nbsp;период &laquo;Дня&nbsp;рождения&raquo; предоставляется только самому клиенту по&nbsp;предъявлении документа
						(паспорт, пенсионное удостоверение, водительские права).
					</div>
				</div>
			</div>
		</section>
		<section class="map map__main">
			<div class="container">
				<div class="map__title">Ждём в гости</div>
				<div class="map__description">Найдите ближайший магазин и&nbsp;отправляйтесь за&nbsp;покупками</div>
				<div class="map__choice choice">
					<div class="choice__btn choice__btn_checked choice__map_js">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/choiceMap.svg'; ?>
						<span>На карте</span>
					</div>
					<div class="choice__btn choice__list_js">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/choiceList.svg'; ?>
						<span>Списком</span>
					</div>
				</div>
				<div class="map__content">
					<aside class="map__aside scrollbar-inner aside__show_js">
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
					<div id="mapWindow" class="map__show_js map_checked"></div>
				</div>
			</div>
		</section>
		<section class="mainGarden">
			<div class="mainGarden__content container">
				<div class="mainGarden__title">Живой сад</div>
				<div class="mainGarden__subTitle">«Живи экологично. Живи дольше»</div>
				<div class="mainGarden__info">
					<div class="mainGarden__text">
						<div class="mainGarden__column">
							Омский центр экологического садоводства &laquo;Живой сад&raquo;. Работаем с&nbsp;2006&nbsp;года.
							Предлагаем только проверенные товары для экологического ЗемлеДелия и&nbsp;декоративного садоводства.
							ЭМ&nbsp;&mdash; товары для сада и&nbsp;дома. Знаменитая Сушилка Изидри.
							Новости о&nbsp;природном мировом земледелии, новинки, поступления товаров в&nbsp;магазины.
							Помогаем садоводам, огородникам, дачникам, владельцам приусадебных участков выращивать экологически чистые
							урожаи,восстанавливать и&nbsp;повышать плодородие почвы, облегчать труд
							на&nbsp;земле, создавать красивые сады, в&nbsp;которых они отдыхают семьей
							и&nbsp;делать их&nbsp;по&nbsp;возможности малоуходными, гармоничными и&nbsp;живыми!
							Живи экологично! Живи дольше!
							Омский центр экологического садоводства &laquo;Живой сад&raquo;. Работаем с&nbsp;2006&nbsp;года.
							Предлагаем только проверенные товары для экологического ЗемлеДелия и&nbsp;декоративного садоводства.
							ЭМ&nbsp;&mdash; товары для сада и&nbsp;дома. Знаменитая Сушилка Изидри.
							Новости о&nbsp;природном мировом земледелии, новинки, поступления товаров в&nbsp;магазины.
							Помогаем садоводам, огородникам, дачникам, владельцам приусадебных участков выращивать экологически чистые
							урожаи,восстанавливать и&nbsp;повышать плодородие почвы, облегчать труд
							на&nbsp;земле, создавать красивые сады, в&nbsp;которых они отдыхают семьей
							и&nbsp;делать их&nbsp;по&nbsp;возможности малоуходными, гармоничными и&nbsp;живыми!
							Живи экологично! Живи дольше!
						</div>
						<div class="mainGarden__column">
							Интернет-магазин семена почтой предлагает Вам купить семена
							от&nbsp;самых, в&nbsp;своем сегменте агрофирм
							&laquo;Поиск&raquo;, &laquo;Гавриш&raquo;, &laquo;Русский огород&raquo;, &laquo;Марс&raquo;, &laquo;Аэлита&raquo;.
							Это крупнейшие российские селекционно-семеноводческие
							компании, работающие на&nbsp;рынке от&nbsp;15&nbsp;до&nbsp;25-ти лет. Вся продукция
							проходит контроль качества и&nbsp;снабжается сертификатами соответствия.
							Работая с&nbsp;1990&nbsp;г., мы&nbsp;отправляем более 100&nbsp;000
							посылок в&nbsp;год. При отменном качестве семян наши цены
							значительно ниже, чем в&nbsp;других интернет-магазинах.
							Интернет-магазин семена почтой предлагает Вам купить семена
							от&nbsp;самых надежных, лидирующих в&nbsp;своем сегменте агрофирм
							&laquo;Поиск&raquo;, &laquo;Гавриш&raquo;, &laquo;Русский огород&raquo;, &laquo;Марс&raquo;, &laquo;Аэлита&raquo;.
							Это крупнейшие российские селекционно-семеноводческие
							компании, работающие на&nbsp;рынке от&nbsp;15&nbsp;до&nbsp;25-ти лет. Вся продукция
							проходит контроль качества и&nbsp;снабжается сертификатами соответствия.
							Работая с&nbsp;1990&nbsp;г., мы&nbsp;отправляем более 100&nbsp;000
							посылок в&nbsp;год. При отменном качестве семян наши цены
							значительно ниже, чем в&nbsp;других интернет-магазинах.
						</div>
					</div>
					<div class="mainGarden__all">
						<div class="mainGarden__btn mainGardenBtn_js">
							<span class="mainGarden__show">Показать целиком</span>
							<span class="mainGarden__hide">Свернуть</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mainGardenAll.svg'; ?>
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