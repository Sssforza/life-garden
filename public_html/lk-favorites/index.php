<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=81ff5a41-050a-4199-aee4-2c8ebd0c8bfb"></script>
<link rel='stylesheet' href="/dist/css/blocks/lk.css">
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
						<a href="/lk-profile/" class="sidebar__link">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/lk-profile.svg'; ?>
							<span>Профиль</span>
						</a>
						<a href="/lk-orders/" class="sidebar__link">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/lk-orders.svg'; ?>
							<span>Мои заказы</span>
						</a>
						<a href="/lk-favorites/" class="sidebar__link active">
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
					<div class="page__title">Избранные товары</div>
					<div class="lk__zeroOrders hidden">
						<div class="page__subtitle">Сохраняйте товары, которые понравились</div>
						<div class="page__description">
							<span>Нажмите на иконку &nbsp;</span>
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeBasket.svg'; ?>
							<span> &nbsp; в карточке товара, и он появится на этой странице!</span>
						</div>
					</div>
					<div class="lk__list lk__cardProduct">
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
				</section>
			</div>
		</section>
	</div>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>