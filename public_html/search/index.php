<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/search.css">
<main class="page page_club">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Поиск</span>
			</li>
		</ul>
	</section>
	<section class="page__box container search">
		<section class="search__nothing searchNothing hidden">
			<div class="searchNothing__header">
				<div class="searchNothing__svg">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/searchPage.svg'; ?>
				</div>
				<div class="searchNothing__box">
					<div class="search__title">По запросу &nbsp;&#171; <div class="search__request">Эскимо</div> &#187; &nbsp;ничего не найдено
					</div>
					<div class="searchNothing__description">Попробуйте написать название товара по-другому или сократить запрос</div>
					<a class="searchNothing__link" href="/">На главную</a>
				</div>
			</div>
			<div class="sliderPages search__slider">
				<div class="sliderPages__title">Рекомендации для вас</div>
				<div class="sliderPages__block productBlock">
					<div class="productBlock__content sliderProductSpecial_js productBlockBox_js show" data-slider="novelty">
						<div class="productBlock__item cardProduct">
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
						<div class="productBlock__item cardProduct">
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
						<div class="productBlock__item cardProduct">
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
						<div class="productBlock__item cardProduct">
							<div class="cardProduct__img">
								<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg4.jpg)">
									<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
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
						<div class="productBlock__item cardProduct">
							<div class="cardProduct__img">
								<div class="cardProduct__picture" style="background-image:url(/dist/img/trash/cardProductImg4.jpg)">
									<div class="btnJaundiced cardProduct__quickView">Быстрый просмотр</div>
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
		</section>
		<section class="search__find searchFind">
			<div class="search__title">По запросу &nbsp;&#171; <div class="search__request">Газон</div> &#187; &nbsp;найдено <span> 840 товаров</span>
			</div>
			<div class="searchFind__body">
				<div class="searchFind__categories searchCategories">
					<ul class="searchCategories__ul">
						<li id="products" class="searchCategories__li searchCategories__li_js searchCategories_checked">Товары</li>
						<li id="articles" class="searchCategories__li searchCategories__li_js">Статьи</li>
						<li id="news" class="searchCategories__li searchCategories__li_js">Новости</li>
						<li id="master" class="searchCategories__li searchCategories__li_js">Мастер-классы</li>
					</ul>
				</div>
				<div id="products" class="searchFind__container searchFind__container_js">
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
				</div>
				<div id="articles" class="searchFind__container searchFind__container_js hidden">
					<div class="helpfulCard">
						<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
						<div class="helpfulCard__text">
							<div class="helpfulCard__date">16 МАРТА 2021</div>
							<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
							<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>
						</div>
						<a href="/paper/" class="cardArticle__btn helpfulCard__btn">
							<span>Читать дальше</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
						</a>
					</div>
					<div class="helpfulCard">
						<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
						<div class="helpfulCard__text">
							<div class="helpfulCard__date">16 МАРТА 2021</div>
							<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
							<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

						</div>
						<a href="/paper/" class="cardArticle__btn helpfulCard__btn">
							<span>Читать дальше</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
						</a>
					</div>
					<div class="helpfulCard">
						<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
						<div class="helpfulCard__text">
							<div class="helpfulCard__date">16 МАРТА 2021</div>
							<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
							<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

						</div>
						<a href="/paper/" class="cardArticle__btn helpfulCard__btn">
							<span>Читать дальше</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
						</a>
					</div>
					<div class="helpfulCard">
						<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
						<div class="helpfulCard__text">
							<div class="helpfulCard__date">16 МАРТА 2021</div>
							<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
							<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

						</div>
						<a href="/paper/" class="cardArticle__btn helpfulCard__btn">
							<span>Читать дальше</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
						</a>
					</div>
					<div class="helpfulCard">
						<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
						<div class="helpfulCard__text">
							<div class="helpfulCard__date">16 МАРТА 2021</div>
							<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
							<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

						</div>
						<a href="/paper/" class="cardArticle__btn helpfulCard__btn">
							<span>Читать дальше</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
						</a>
					</div>
					<div class="helpfulCard">
						<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
						<div class="helpfulCard__text">
							<div class="helpfulCard__date">16 МАРТА 2021</div>
							<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
							<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

						</div>
						<a href="/paper/" class="cardArticle__btn helpfulCard__btn">
							<span>Читать дальше</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
						</a>
					</div>
					<div class="helpfulCard">
						<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
						<div class="helpfulCard__text">
							<div class="helpfulCard__date">16 МАРТА 2021</div>
							<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
							<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

						</div>
						<a href="/paper/" class="cardArticle__btn helpfulCard__btn">
							<span>Читать дальше</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
						</a>
					</div>
					<div class="helpfulCard">
						<div class="helpfulCard__img" style="background-image:url(/dist/img/trash/friendly.png)"></div>
						<div class="helpfulCard__text">
							<div class="helpfulCard__date">16 МАРТА 2021</div>
							<div class="helpfulCard__title">Как добиться дружных всходов сельдерея</div>
							<div class="helpfulCard__description">Сельдерей – культура, которую встретишь не в каждом огороде. И не в последнюю очередь потому, что всхожесть семян частенько не радует. И с агротехникой знаком не каждый.</div>

						</div>
						<a href="/paper/" class="cardArticle__btn helpfulCard__btn">
							<span>Читать дальше</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/right-arrow.svg'; ?>
						</a>
					</div>
				</div>
				<div id="news" class="searchFind__box searchFind__container_js hidden">
					<div class="news__card newsCard">
						<div class="newsCard__img">
							<img src="/dist/img/trash/news.jpg" alt="">
						</div>
						<div class="newsCard__box">
							<div class="newsCard__date">9 марта 2021</div>
							<div class="newsCard__color newsCard__color_master">Мастер-класс</div>
							<div class="newsCard__title">Акция на все семена цветов</div>
							<div class="newsCard__subtitle">Запустилась рождественская акция на все семена цветов</div>
							<a class="newsCard__btn" href="/headline/">Читать полностью
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newsArrow.svg'; ?>
							</a>
						</div>
					</div>
					<div class="news__card newsCard">
						<div class="newsCard__img">
							<img src="/dist/img/trash/news.jpg" alt="">
						</div>
						<div class="newsCard__box">
							<div class="newsCard__date">9 марта 2021</div>
							<div class="newsCard__title newsCard__title_indent">Акция на все семена цветов</div>
							<div class="newsCard__subtitle">Запустилась рождественская акция на все семена цветов</div>
							<a class="newsCard__btn" href="/headline/">Читать полностью
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newsArrow.svg'; ?>
							</a>
						</div>
					</div>
					<div class="news__card newsCard">
						<div class="newsCard__img">
							<img src="/dist/img/trash/news.jpg" alt="">
						</div>
						<div class="newsCard__box">
							<div class="newsCard__date">9 марта 2021</div>
							<div class="newsCard__color newsCard__color_seminar">Семинар</div>
							<div class="newsCard__title">Акция на все семена цветов</div>
							<div class="newsCard__subtitle">Запустилась рождественская акция на все семена цветов</div>
							<a class="newsCard__btn" href="/headline/">Читать полностью
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newsArrow.svg'; ?>
							</a>
						</div>
					</div>
				</div>
				<div id="master" class="searchFind__box searchFind__container_js hidden">
					<div class="news__card newsCard">
						<div class="newsCard__img">
							<img src="/dist/img/trash/news.jpg" alt="">
						</div>
						<div class="newsCard__box">
							<div class="newsCard__date">9 марта 2021</div>
							<div class="newsCard__color newsCard__color_master">Мастер-класс</div>
							<div class="newsCard__title">Акция на все семена цветов</div>
							<div class="newsCard__subtitle">Запустилась рождественская акция на все семена цветов</div>
							<a class="newsCard__btn" href="/headline/">Читать полностью
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newsArrow.svg'; ?>
							</a>
						</div>
					</div>
					<div class="news__card newsCard">
						<div class="newsCard__img">
							<img src="/dist/img/trash/news.jpg" alt="">
						</div>
						<div class="newsCard__box">
							<div class="newsCard__date">9 марта 2021</div>
							<div class="newsCard__color newsCard__color_seminar">Семинар</div>
							<div class="newsCard__title">Акция на все семена цветов</div>
							<div class="newsCard__subtitle">Запустилась рождественская акция на все семена цветов</div>
							<a class="newsCard__btn" href="/headline/">Читать полностью
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newsArrow.svg'; ?>
							</a>
						</div>
					</div>
				</div>
				<div class="btnShow">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/look.svg'; ?>
					<span>Показать еще</span>
				</div>
				<div class="pagination">
					<div class="pagination__prev">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pagiLeft.svg'; ?>
					</div>
					<a href="#" class="pagination__number paginationNumber_js pagination_checked">1</a>
					<a href="#" class="pagination__number paginationNumber_js">2</a>
					<a href="#" class="pagination__number paginationNumber_js">3</a>
					<a href="#" class="pagination__number paginationNumber_js">4</a>
					<a href="#" class="pagination__number paginationNumber_js">5</a>
					<a href="#" class="pagination__points">....</a>
					<a href="#" class="pagination__number paginationNumber_js">10</a>
					<a href="#" class="pagination__next">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pagiRight.svg'; ?>
					</a>
				</div>
			</div>
		</section>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>