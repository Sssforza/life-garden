<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/payment.css">
<main class="page page_club">
	<section class="page__box container payment">
		<section class="payment__header ">
			<div class="payment__success paymentSuccess ">
				<div class="payment__svg">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/paymentSucc.svg'; ?>
				</div>
				<div class="payment__box">
					<div class="payment__title">Оплата прошла успешно
					</div>
					<div class="paymentSuccess__number">Номер заказа: <span>521252125</span></div>
					<div class="paymentSuccess__sum">Сумма покупки: <span>7 500</span> <span class="payment__rub"> ₽</span></div>
					<div class="payment__buttons">
						<a href="/basket/" class="paymentSuccess__orders btn">Мои заказы</a>
						<a href="/" class="paymentSuccess__main btnWhite">На главную</a>
					</div>
				</div>
			</div>
			<div class="payment__not paymentNot ">
				<div class="payment__svg">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/paymentNot.svg'; ?>
				</div>
				<div class="payment__box">
					<div class="payment__title">Извините, платёж не был совершён
					</div>
					<div class="paymentNot__description">При выполнении платежа произошла ошибка. Пожалуйста, повторите снова <br>
						или измените вид платежа.</div>

					<div class="payment__buttons">
						<div class="paymentNot__btn btn">Оплатить ещё раз</div>
						<div class="paymentNot__btn btn">Изменить способ оплаты</div>
					</div>
				</div>
			</div>


		</section>
		<section class="sliderPages payment__slider">
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
		</section>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>