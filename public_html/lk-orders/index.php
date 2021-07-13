<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=81ff5a41-050a-4199-aee4-2c8ebd0c8bfb"></script>
<link rel='stylesheet' href="/dist/css/blocks/lkOrders.css">
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
						<a href="/lk-orders/" class="sidebar__link active">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/lk-orders.svg'; ?>
							<span>Мои заказы</span>
						</a>
						<a href="/lk-favorites/" class="sidebar__link ">
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
					<div class="page__title">Мои заказы <span>128 заказов</span></div>
					<div class="lkOrders__container">
						<div class="lkOrders__header">
							<div class="lkOrders__box">
								<div class="lkOrders__status">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/complete.svg'; ?>
									<span>Завершен</span>
								</div>
								<div class="lkOrders__number">
									Номер заказа:<span>&nbsp; 52641656</span>
								</div>
							</div>

							<div class="btnGray lkOrders__btn">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/repeat.svg'; ?>
								<span>Повторить заказ</span>
							</div>
						</div>
						<div class="lkOrders__cards">
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
						</div>
						<div class="lkOrders__info">
							<div class="lkOrders__box">
								<div class="lkOrders__dates">
									<div class="lkOrders__text">Заказ от: <span>12.02.2020 /</span> </div>
									<div class="lkOrders__text">&nbsp; Доставлено: <span>20.02.2020</span> </div>
								</div>
								<div class="lkOrders__price">Сумма: <span>&nbsp; 13 800 ₽</span></div>
							</div>
							<div class="lkOrders__text lkOrders__text_margin"> Адрес доставки:</div>
							<div class="lkOrders__address"><span>г. Омск ул. Сакена Сейфуллина, 27</span></div>
						</div>
					</div>
					<div class="lkOrders__container">
						<div class="lkOrders__header">
							<div class="lkOrders__box">
								<div class="lkOrders__status">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/processing.svg'; ?>
									<span>В обработке</span>
								</div>
								<div class="lkOrders__number">
									Номер заказа:<span>&nbsp; 52641656</span>
								</div>
							</div>

							<div class="btnGray lkOrders__btn">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket-small.svg'; ?>
								<span>Отменить заказ</span>
							</div>
						</div>
						<div class="lkOrders__cards">
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
						</div>
						<div class="lkOrders__info">
							<div class="lkOrders__box">
								<div class="lkOrders__dates">
									<div class="lkOrders__text">Заказ от: <span>12.02.2020 /</span> </div>
									<div class="lkOrders__text">&nbsp; Ожидаемая дата доставки: <span>20.02.2020</span> </div>
								</div>
								<div class="lkOrders__price">Сумма: <span>&nbsp; 13 800 ₽</span></div>
							</div>
							<div class="lkOrders__text lkOrders__text_margin"> Адрес доставки:</div>
							<div class="lkOrders__address"><span>г. Омск ул. Сакена Сейфуллина, 27</span></div>
						</div>
					</div>
					<div class="lkOrders__container">
						<div class="lkOrders__header">
							<div class="lkOrders__box">
								<div class="lkOrders__status">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cancel.svg'; ?>
									<span>Завершен</span>
								</div>
								<div class="lkOrders__number">
									Номер заказа:<span>&nbsp; 52641656</span>
								</div>
							</div>

							<div class="btnGray lkOrders__btn">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/repeat.svg'; ?>
								<span>Повторить заказ</span>
							</div>
						</div>
						<div class="lkOrders__cards">
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
						</div>
						<div class="lkOrders__info">
							<div class="lkOrders__box">
								<div class="lkOrders__dates">
									<div class="lkOrders__text">Заказ от: <span>12.02.2020 /</span> </div>
								</div>
								<div class="lkOrders__price">Сумма: <span>&nbsp; 13 800 ₽</span></div>
							</div>
							<div class="lkOrders__text lkOrders__text_margin"> Адрес доставки:</div>
							<div class="lkOrders__address"><span>г. Омск ул. Сакена Сейфуллина, 27</span></div>
						</div>
					</div>
					<div class="lkOrders__container">
						<div class="lkOrders__header">
							<div class="lkOrders__box">
								<div class="lkOrders__status">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/way.svg'; ?>
									<span>В пути</span>
								</div>
								<div class="lkOrders__number">
									Номер заказа:<span>&nbsp; 52641656</span>
								</div>
							</div>

							<div class="btnGray lkOrders__btn">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/repeat.svg'; ?>
								<span>Повторить заказ</span>
							</div>
						</div>
						<div class="lkOrders__cards">
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
						</div>
						<div class="lkOrders__info">
							<div class="lkOrders__box">
								<div class="lkOrders__dates">
									<div class="lkOrders__text">Заказ от: <span>12.02.2020 /</span> </div>
								</div>
								<div class="lkOrders__price">Сумма: <span>&nbsp; 13 800 ₽</span></div>
							</div>
							<div class="lkOrders__text lkOrders__text_margin"> Адрес доставки:</div>
							<div class="lkOrders__address"><span>г. Омск ул. Сакена Сейфуллина, 27</span></div>
						</div>
					</div>
					<div class="lkOrders__container">
						<div class="lkOrders__header">
							<div class="lkOrders__box">
								<div class="lkOrders__status">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/point.svg'; ?>
									<span>Заказ в пункте выдачи</span>
								</div>
								<div class="lkOrders__number">
									Номер заказа:<span>&nbsp; 52641656</span>
								</div>
							</div>

							<div class="btnGray lkOrders__btn">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/repeat.svg'; ?>
								<span>Повторить заказ</span>
							</div>
						</div>
						<div class="lkOrders__cards">
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
							<div class="basket__card basketCard lkOrders__card">
								<div class="lkOrders__boxCard">
									<div class="basketCard__image" style="background-image:url(/dist/img/trash/tree.png)"></div>
									<div class="basketCard__description">
										<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
										<div class="basketCard__article">Артикул: 456789</div>
										<div class="availability  availability_margin">
											<div class="availability__text has">
												<span>Есть в наличии</span>
											</div>
											<div class="availability__text not hidden">
												<span>Нет в наличии</span>
											</div>
										</div>
									</div>
								</div>
								<div class="basketCard__text">23 шт.</div>
								<div class="basketCard__action">

									<div class="basketCard__price">
										<span class="basketCard__priceValue basketCard__priceValue_margin">2880</span>
										<span class="basketCard__priceValue basketCard__priceValue_margin">₽</span>
									</div>
								</div>
							</div>
						</div>
						<div class="lkOrders__info">
							<div class="lkOrders__box">
								<div class="lkOrders__dates">
									<div class="lkOrders__text">Заказ от: <span>12.02.2020 /</span> </div>
								</div>
								<div class="lkOrders__price">Сумма: <span>&nbsp; 13 800 ₽</span></div>
							</div>
							<div class="lkOrders__text lkOrders__text_margin"> Адрес доставки:</div>
							<div class="lkOrders__address"><span>г. Омск ул. Сакена Сейфуллина, 27</span></div>
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
				</section>
			</div>
		</section>
	</div>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>