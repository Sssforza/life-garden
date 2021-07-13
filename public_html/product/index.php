<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/product.css">
<main class="page page_lk">
	<div class="container">
		<section class="breadCrumbs">
			<ul class="breadCrumbs__ul">
				<li>
					<a class="breadCrumbs__link" href="/">Главная</a>
				</li>
				<li>
					<a class="breadCrumbs__link" href="/">Каталог</a>
				</li>
				<li>
					<a class="breadCrumbs__link" href="/">Газон</a>
				</li>
				<li>
					<span>Газон "Олигарх"</span>
				</li>
			</ul>
		</section>
		<section class="page__box">
			<div class="goods">
				<section class="product">
					<div class="product__slider">
						<div class="zoomer product__image image_js" 
						style="background-image:url(/dist/img/trash/product.png)">
							<img src="/dist/img/trash/product.png" />
						</div>
						<div class="product__box sliderProduct_js">
							<div class="product__image product__image_small product_checked imageClick__js" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)"></div>
							<div class="product__image product__image_small imageClick__js" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)"></div>
							<div class="product__image product__image_small imageClick__js" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)"></div>
							<div class="product__image product__image_small imageClick__js" style="background-image:url(/dist/img/trash/product.png)"></div>
							<div class="product__image product__image_small imageClick__js" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)"></div>
							<div class="product__image product__image_small imageClick__js" style="background-image:url(/dist/img/trash/product.png)"></div>
							<div class="product__image product__image_small product__image_checked imageClick__js" style="background-image:url(/dist/img/trash/cardProductImg1.jpg)"></div>
						</div>
					</div>
					<div class="product__info">
						<div class="product__article">Арт. 17586503</div>
						<div class="product__title">Лейка для садовых растений
							Gardenia12 л.</div>
						<div class="availability">
							<div class="availability__text has">
								<span>Есть в наличии</span>
							</div>
							<div class="availability__text not hidden">
								<span>Нет в наличии</span>
							</div>
						</div>
						<div class="review product__review">
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
						<div class="product__season">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/seson.svg'; ?>
							<div class="product__seasonText">Сезон: <span>Лето</span></div>
						</div>
						<div class="product__weight">
							<div class="weight__text">Вес, кг</div>
							<div class="weight__container">
								<div class="weight__item weight__js">2,5 кг</div>
								<div class="weight__item weight__js">2,5 кг</div>
								<div class="weight__item weight__js">2,5 кг</div>
								<div class="weight__item product_checked weight__js">2,5 кг</div>
							</div>
						</div>
						<div class="product__colors">
							<div class="colors__text">
								Цвет: <span>салатовый микс</span>
							</div>
							<div class="colors__box">
								<div class="colors__item_big color__js product_checked">
									<div class="colors__item" style="background-color:#5D9D16;"></div>
								</div>
								<div class="colors__item_big color__js">
									<div class="colors__item" style="background-color:#69BE5E;"></div>
								</div>
								<div class="colors__item_big color__js">
									<div class="colors__item" style="background-color:#4E6D4A;"></div>
								</div>
								<div class="colors__item_big color__js">
									<div class="colors__item" style="background-color:#169D74;"></div>
								</div>
								<div class="colors__item_big color__js">
									<div class="colors__item" style="background-color:#34B15E;"></div>
								</div>
								<div class="colors__item_big color__js">
									<div class="colors__item" style="background-color:#5ACA51;"></div>
								</div>
							</div>
						</div>
						<div class="product__cost cost">
							<div class="cost__left">
								<div class="cost__info ">с картой живой сад</div>
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
						<div class="cardProduct__bottom product__bottom">
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
								<div class="btnJaundicedFull product__button">В корзину</div>
								<div class="likeProduct product__like">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
								</div>
							</div>
						</div>
						<div class="product__method">
							<div class="method__title">Способы получения</div>
							<div class="method__container">
								<div class="method__item">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/self.svg'; ?>
									<div class="method__text">
										Самовывоз г. Омск <span>5 магазинов <br></span>
										<span>бесплатно</span>
									</div>
								</div>
								<div class="method__item">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/delievered.svg'; ?>
									<div class="method__text">
										Курьером <br>
										<span>стоимость доставки 190 ₽ </span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="info">
					<ul class="info__head">
						<li id="1" class="info__title infoCategories__js info__title_checked ">Описание</li>
						<li id="2" class="info__title infoCategories__js">Характеристики</li>
						<li id="3" class="info__title infoCategories__js">Отзывы</li>
						<li id="4" class="info__title infoCategories__js">Наличие</li>
						<li id="5" class="info__title infoCategories__js">Документы</li>
						<li id="6" class="info__title infoCategories__js">Инструкция</li>
					</ul>
					<div id="1" class="info__js">
						<div class="info__name">Описание</div>
						<div class="info__body">
							<div class="info__columnLeft">
								<div class="info__text">Газон «Олигарх» — представляет собой смесь почвопокровных растений, выдерживающих высокую нагрузку в течение весенне-летнего сезона. Состав газона был разработан датскими селекционерами, а как известно, Дания — страна достаточно северных широт. Можно быть уверенными в 100%-ной схожести семян. Следует учесть, что для спортивного газона применяются достаточно жесткие, грубоватые виды травянистых растений, так как именно они наиболее устойчивы к вытаптыванию и износу.
								</div>
								<div class="info__description">Состав семян газона:
								</div>
								<div class="info__text">
									<ul>
										<li class="info__textLi">Овсяница красная Гринлайт — 10%</li>
										<li class="info__textLi">Мятлик луговой Балин — 10%</li>
										<li class="info__textLi">Райграс пастбищный Дабл — 40%</li>
										<li class="info__textLi">Овсяница красная Максима 1 — 40%</li>
									</ul>
								</div>
							</div>
							<div class="info__columnRight">
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="info__text info__text_margin ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="info__text  info__text_margin">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Оплата банковской картой</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div id="2" class="info__js hidden">
						<div class="info__name">Характеристики</div>
						<div class="info__body">
							<div class="info__columnLeft">
								<div class="info__text">
									<ul>
										<li class="info__textLi info__textLi_color">Артикул <div class="info__points"></div> <span>17586503</span> </li>
										<li class="info__textLi info__textLi_color">Тип удобрения<div class="info__points"></div> <span>Органическое</span></li>
										<li class="info__textLi info__textLi_color">Вид удобрения<div class="info__points"></div> <span>Гранулированое</span></li>
										<li class="info__textLi info__textLi_color">Вес, кг<div class="info__points"></div> <span>2</span></li>
										<li class="info__textLi info__textLi_color">Бренд<div class="info__points"></div> <span>Оргавит</span></li>
									</ul>
								</div>
							</div>
							<div class="info__columnRight">
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="info__text info__text_margin ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="info__text  info__text_margin">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Оплата банковской картой</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div id="4" class="info__js hidden">
						<div class="info__name">Наличие</div>
						<div class="info__body">
							<div class="info__columnLeft">
								<div class="info__text">
									<ul>
										<li class="info__textLi info__textLi_color">ул. Маяковского, д. 20 <div class="info__points"></div>
											<div class="availability ">
												<div class="availability__text info__availability has">
													<span>есть в наличии</span><span>(5 шт)</span>
												</div>
												<div class="availability__text info__availability not hidden">
													<span>нет в наличии</span>
												</div>
											</div>
										</li>
										<li class="info__textLi info__textLi_color">пр. Мира, д. 64<div class="info__points"></div>
											<div class="availability ">
												<div class="availability__text info__availability has">
													<span>есть в наличии</span><span>(5 шт)</span>
												</div>
												<div class="availability__text info__availability not hidden">
													<span>нет в наличии</span>
												</div>
											</div>
										</li>
										<li class="info__textLi info__textLi_color">пр. Карла Маркса, д. 83<div class="info__points"></div>
											<div class="availability ">
												<div class="availability__text info__availability has">
													<span>есть в наличии</span><span>(5 шт)</span>
												</div>
												<div class="availability__text info__availability not hidden">
													<span>нет в наличии</span>
												</div>
											</div>
										</li>
										<li class="info__textLi info__textLi_color">ул. Сакена Сейфуллина, д. 27<div class="info__points"></div>
											<div class="availability ">
												<div class="availability__text info__availability has hidden">
													<span>есть в наличии</span><span>(5 шт)</span>
												</div>
												<div class="availability__text info__availability not ">
													<span>нет в наличии</span>
												</div>
											</div>
										</li>
										<li class="info__textLi info__textLi_color">ул. 10 лет Октября, д. 113<div class="info__points"></div>
											<div class="availability ">
												<div class="availability__text info__availability has">
													<span>есть в наличии</span><span>(5 шт)</span>
												</div>
												<div class="availability__text info__availability not hidden">
													<span>нет в наличии</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="info__columnRight">
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="info__text info__text_margin ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="info__text  info__text_margin">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Оплата банковской картой</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div id="5" class="info__js hidden">
						<div class="info__name">Документы</div>
						<div class="info__body">
							<div class="info__columnLeft">
								<div class="info__text">
									<span>В данном разделе собраны документы, относящиеся к данному товару.</span>
									<ul class="info__textUl">
										<li class='info__textLi'>
											<a class="info__pdf" href="#" download>
												<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pdf.svg'; ?>
												</div>
												<div class="info__text info__text_margin ">Скачать сертификат качества PDF <br><span>(755.1 Kb)</span></div>
											</a>
										</li>
										<li class='info__textLi'>
											<a class="info__pdf" href="#" download>
												<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pdf.svg'; ?>
												</div>
												<div class="info__text info__text_margin ">Скачать лицензию на товар PDF<br><span>(755.1 Kb)</span></div>
											</a>
										</li>
										<li class='info__textLi'>
											<a class="info__pdf" href="#" download>
												<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pdf.svg'; ?>
												</div>
												<div class="info__text info__text_margin ">Скачать сертификат соответствия<br><span>(755.1 Kb)</span></div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="info__columnRight">
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="info__text info__text_margin ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="info__text  info__text_margin">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Оплата банковской картой</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div id="6" class="info__js hidden">
						<div class="info__name">Инструкция</div>
						<div class="info__body">
							<div class="info__columnLeft">
								<div class="info__text">
									<span>На все товары мы предоставляем инструкцию по посадке растений.</span>
									<ul class="info__textUl">
										<li class='info__textLi'>
											<a class="info__pdf" href="#" download>
												<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/pdf.svg'; ?>
												</div>
												<div class="info__text info__text_margin ">Скачать инструкцию PDF<br><span>(755.1 Kb)</span></div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="info__columnRight">
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="info__text info__text_margin ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="info__text  info__text_margin">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Оплата банковской картой</div>
								</div>
								<div class="info__item">
									<div class="info__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="info__text info__text_margin">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div class="infoReviewsNot__js reviews hidden">
						<div class="info__name">Отзывы</div>
						<div class="info__body info__body_margin">
							<div class="reviews__columnLeft">
								<div class="review reviews__stars">
									<div class="review__list">
										<div class="review__item ">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="review__item">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="review__item ">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="review__item ">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="review__item">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
									</div>
									<div class="review__how reviews__text reviews__text_margin">Нет отзывов</div>
								</div>
								<div class="btn reviews__btn">Написать отзыв</div>

							</div>
							<div class="reviews__columnRight">
								<div class="reviews__description">Помогите другим пользователям с выбором - будьте первым, кто поделиться своим <br> мнением об этом товаре</div>
							</div>
						</div>
					</div>
					<div id="3" class="info__js reviews hidden">
						<div class="info__name">Отзывы</div>
						<div class="info__body info__body_margin">
							<div class="reviews__columnLeft">
								<div class="review reviews__stars">
									<div class="review__list">
										<div class="reviews__value">4.6</div>
										<div class="review__item reviews__item">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="review__item">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="review__item ">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="review__item ">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="review__item">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
									</div>
									<div class="review__how reviews__text reviews__text_margin">24 отзыва</div>
								</div>
								<div class="reviews__evaluations">
									<div class="reviews__text reviews__text_bold">
										Оценки
									</div>
									<div class="agreement reviews__agreement">
										<label class="agreement__label reviews__label">
											<input type="checkbox" checked="checked">
											<span class="check"></span>
										</label>
										<div class="reviews__text">
											5
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="reviews__band">
											<div class="reviews__band_green"></div>
										</div>
										<div class="reviews__text">
											(12)
										</div>
									</div>
									<div class="agreement reviews__agreement">
										<label class="agreement__label reviews__label">
											<input type="checkbox">
											<span class="check"></span>
										</label>
										<div class="reviews__text">
											4
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="reviews__band">
											<div class="reviews__band_green"></div>
										</div>
										<div class="reviews__text">
											(12)
										</div>
									</div>
									<div class="agreement reviews__agreement">
										<label class="agreement__label reviews__label">
											<input type="checkbox">
											<span class="check"></span>
										</label>
										<div class="reviews__text">
											3
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="reviews__band">
											<div class="reviews__band_green"></div>
										</div>
										<div class="reviews__text">
											(12)
										</div>
									</div>
									<div class="agreement reviews__agreement">
										<label class="agreement__label reviews__label">
											<input type="checkbox">
											<span class="check"></span>
										</label>
										<div class="reviews__text">
											2
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="reviews__band">
											<div class="reviews__band_green"></div>
										</div>
										<div class="reviews__text">
											(12)
										</div>
									</div>
									<div class="agreement reviews__agreement">
										<label class="agreement__label reviews__label">
											<input type="checkbox">
											<span class="check"></span>
										</label>
										<div class="reviews__text">
											1
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="reviews__band">

										</div>
										<div class="reviews__text">
											(0)
										</div>
									</div>
								</div>

								<div class="btn reviews__btn">Написать отзыв</div>
							</div>

							<div class="reviews__columnRight">
								<div class="reviews__box">
									<div class="reviews__header">
										<div class="reviews__letter">Р</div>
										<div>
											<div class="reviews__name">Роман <span>15.07.2020</span></div>
											<div class="review__list">
												<div class="review__item reviews__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item ">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item ">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
												<div class="review__item">
													<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
												</div>
											</div>
										</div>

									</div>
									<div class="reviews__text reviews__text_margin">
										На самом деле, ещё очень рано судить о качестве материала, так как купила ее 12го апреля,то есть менее суток ещё прошло, но уже развернула и кое-что вижу. Есть парочка маленьких свежих корешков, главные корни крепкие без признаков гниения. Правда, один такой корень был надломлен, ведь чтобы упаковать, эти корни сгибают и надрезают.
									</div>
									<div class="reviews__title">Достоинства:</div>
									<div class="reviews__text reviews__text_margin">
										Цена, очень низкая
									</div>
									<div class="reviews__title">Недостатки:</div>
									<div class="reviews__text reviews__text_margin">
										Посеял ровно месяц назад! Телал все по технологии! Сеял на чернозем, чернозем заранее приобрел, Растет очень очень медленно!!! Подивал каждый вечер, да и дожди поливали очень сильно!
									</div>
									<div class="reviews__text reviews__text_gray">
										Вам помог этот отзыв?
									</div>
									<div class="reviews__buttons">
										<div class="reviews__button">Да &nbsp;<span> 1</span></div>
										<div class="reviews__button">Нет &nbsp;<span> 0</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="infoHit__js reviews">
						<div class="info__name">Хит продаж</div>
						<div class="productSpecial__productBlock productBlock">
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
					<div class="infoAdditional__js reviews">
						<div class="info__name">Дополнительные товары</div>
						<div class="productSpecial__productBlock productBlock">
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
					<div class="infoSimilar__js reviews">
						<div class="info__name">Похожие товары</div>
						<div class="productSpecial__productBlock productBlock">
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
			</div>
		</section>
	</div>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>