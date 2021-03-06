<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/detail.css">
<main class="page page_detail">
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
			<div class="detail">
				<section class="detail__productCard productCard">
					<div class="productCard__slider">
						<div class="imgParent_js">
							<img class="productCard__image image_js" src="/dist/img/trash/aboutSlide1.jpg">
						</div>
						<div class="productCard__box sliderProduct_js">
							<img class="productCard__image imageClick_js productCard__image_small productCard__checked" src="/dist/img/trash/aboutSlide1.jpg">
							<img class="productCard__image imageClick_js productCard__image_small" src="/dist/img/trash/aboutSlide2.jpg">
							<img class="productCard__image imageClick_js productCard__image_small" src="/dist/img/trash/aboutSlide3.jpg">
							<img class="productCard__image imageClick_js productCard__image_small" src="/dist/img/trash/aboutSlide4.jpg">
							<img class="productCard__image imageClick_js productCard__image_small" src="/dist/img/trash/aboutSlide5.jpg">
							<img class="productCard__image imageClick_js productCard__image_small" src="/dist/img/trash/aboutSlide6.jpg">
							<img class="productCard__image imageClick_js productCard__image_small" src="/dist/img/trash/aboutSlide7.jpg">
						</div>
					</div>
					<div class="productCard__info">
						<div class="productCard__article">Арт. 17586503</div>
						<div class="productCard__title">Лейка для садовых растений
							Gardenia12 л.</div>
						<div class="availability">
							<div class="availability__text has">
								<span>Есть в наличии</span>
							</div>
							<div class="availability__text not hidden">
								<span>Нет в наличии</span>
							</div>
						</div>
						<div class="review productCard__review">
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
						<div class="productCard__season">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/seson.svg'; ?>
							<div class="productCard__seasonText">Сезон: <span>Лето</span></div>
						</div>
						<div class="productCard__weight productWeight">
							<div class="productWeight__text">Вес, кг</div>
							<div class="productWeight__container">
								<div class="productWeight__item weight_js">2,5 кг</div>
								<div class="productWeight__item weight_js">2,5 кг</div>
								<div class="productWeight__item weight_js">2,5 кг</div>
								<div class="productWeight__item weight_js productCard__checked_small">2,5 кг</div>
							</div>
						</div>
						<div class="productCard__colors productColors">
							<div class="productColors__text">
								Цвет: <span>салатовый микс</span>
							</div>
							<div class="productColors__box">
								<div class="productColors__item_big color_js productCard__checked_small">
									<div class="productColors__item" style="background-color:#5D9D16;"></div>
								</div>
								<div class="productColors__item_big color_js">
									<div class="productColors__item" style="background-color:#69BE5E;"></div>
								</div>
								<div class="productColors__item_big color_js">
									<div class="productColors__item" style="background-color:#4E6D4A;"></div>
								</div>
								<div class="productColors__item_big color_js">
									<div class="productColors__item" style="background-color:#169D74;"></div>
								</div>
								<div class="productColors__item_big color_js">
									<div class="productColors__item" style="background-color:#34B15E;"></div>
								</div>
								<div class="productColors__item_big color_js">
									<div class="productColors__item" style="background-color:#5ACA51;"></div>
								</div>
							</div>
						</div>
						<div class="productCard__cost cost">
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
									<span class="cost__totalPrice cost__totalPrice_ussual">240</span>
									<span class="cost__ruble">₽</span>
								</div>
							</div>
						</div>
						<div class="cardProduct__bottom productCard__bottom">
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
								<div class="btnJaundicedFull productCard__button">В корзину</div>
								<div class="likeProduct productCard__like">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeProducts.svg'; ?>
								</div>
							</div>
						</div>
						<div class="productCard__method productMethod">
							<div class="productMethod__title">Способы получения</div>
							<div class="productMethod__container">
								<div class="productMethod__item">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/self.svg'; ?>
									<div class="productMethod__text">
										Самовывоз г. Омск <span>5 магазинов <br></span>
										<span>бесплатно</span>
									</div>
								</div>
								<div class="productMethod__item">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/delievered.svg'; ?>
									<div class="productMethod__text">
										Курьером <br>
										<span>стоимость доставки 190 ₽ </span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="detail__productTabs productTabs">
					<ul class="productTabs__head">
						<li id="description" class="productTabs__title infoCategories_js productTabs__title_checked ">Описание</li>
						<li id="characteristics" class="productTabs__title infoCategories_js">Характеристики</li>
						<li id="reviews" class="productTabs__title infoCategories_js">Отзывы</li>
						<li id="availability" class="productTabs__title infoCategories_js">Наличие</li>
						<li id="documents" class="productTabs__title infoCategories_js">Документы</li>
						<li id="instructions" class="productTabs__title infoCategories_js">Инструкция</li>
					</ul>
					<div id="description" class="productTabs__main info_js">
						<div class="productTabs__name">Описание</div>
						<div class="productTabs__body">
							<div class="productTabs__columnLeft">
								<div class="productTabs__text productTabs__text_lh">Газон «Олигарх» — представляет собой смесь почвопокровных растений, выдерживающих высокую нагрузку в течение весенне-летнего сезона. Состав газона был разработан датскими селекционерами, а как известно, Дания — страна достаточно северных широт. Можно быть уверенными в 100%-ной схожести семян. Следует учесть, что для спортивного газона применяются достаточно жесткие, грубоватые виды травянистых растений, так как именно они наиболее устойчивы к вытаптыванию и износу.
								</div>
								<div class="productTabs__description">Состав семян газона:
								</div>
								<ul class="productTabs__textUl productTabs__textUl_indention ">
									<li class="productTabs__textLi">Овсяница красная Гринлайт — 10%</li>
									<li class="productTabs__textLi">Мятлик луговой Балин — 10%</li>
									<li class="productTabs__textLi">Райграс пастбищный Дабл — 40%</li>
									<li class="productTabs__textLi">Овсяница красная Максима 1 — 40%</li>
								</ul>
							</div>
							<div class="productTabs__columnRight">
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="productTabs__text productTabs__text_indention ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="productTabs__text  productTabs__text_indention">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Оплата банковской картой</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div id="characteristics" class="productTabs__main info_js hidden">
						<div class="productTabs__name">Характеристики</div>
						<div class="productTabs__body">
							<div class="productTabs__columnLeft">
								<ul class="productTabs__textUl">
									<li class="productTabs__textLi productTabs__textLi_color">Артикул <div class="productTabs__points"></div> <span>17586503</span> </li>
									<li class="productTabs__textLi productTabs__textLi_color">Тип удобрения<div class="productTabs__points"></div> <span>Органическое</span></li>
									<li class="productTabs__textLi productTabs__textLi_color">Вид удобрения<div class="productTabs__points"></div> <span>Гранулированое</span></li>
									<li class="productTabs__textLi productTabs__textLi_color">Вес, кг<div class="productTabs__points"></div> <span>2</span></li>
									<li class="productTabs__textLi productTabs__textLi_color">Бренд<div class="productTabs__points"></div> <span>Оргавит</span></li>
								</ul>
							</div>
							<div class="productTabs__columnRight">
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="productTabs__text productTabs__text_indention ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="productTabs__text  productTabs__text_indention">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Оплата банковской картой</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div id="availability" class="productTabs__main info_js hidden">
						<div class="productTabs__name">Наличие</div>
						<div class="productTabs__body">
							<div class="productTabs__columnLeft">
								<ul class="productTabs__textUl">
									<li class="productTabs__textLi">ул. Маяковского, д. 20 <div class="productTabs__points"></div>
										<div class="availability ">
											<div class="availability__text productTabs__availability has">
												<span>есть в наличии</span><span>(5 шт)</span>
											</div>
											<div class="availability__text productTabs__availability not hidden">
												<span>нет в наличии</span>
											</div>
										</div>
									</li>
									<li class="productTabs__textLi">пр. Мира, д. 64<div class="productTabs__points"></div>
										<div class="availability ">
											<div class="availability__text productTabs__availability has">
												<span>есть в наличии</span><span>(5 шт)</span>
											</div>
											<div class="availability__text productTabs__availability not hidden">
												<span>нет в наличии</span>
											</div>
										</div>
									</li>
									<li class="productTabs__textLi">пр. Карла Маркса, д. 83<div class="productTabs__points"></div>
										<div class="availability ">
											<div class="availability__text productTabs__availability has">
												<span>есть в наличии</span><span>(5 шт)</span>
											</div>
											<div class="availability__text productTabs__availability not hidden">
												<span>нет в наличии</span>
											</div>
										</div>
									</li>
									<li class="productTabs__textLi">ул. Сакена Сейфуллина, д. 27<div class="productTabs__points"></div>
										<div class="availability ">
											<div class="availability__text productTabs__availability has hidden">
												<span>есть в наличии</span><span>(5 шт)</span>
											</div>
											<div class="availability__text productTabs__availability not ">
												<span>нет в наличии</span>
											</div>
										</div>
									</li>
									<li class="productTabs__textLi">ул. 10 лет Октября, д. 113<div class="productTabs__points"></div>
										<div class="availability ">
											<div class="availability__text productTabs__availability has">
												<span>есть в наличии</span><span>(5 шт)</span>
											</div>
											<div class="availability__text productTabs__availability not hidden">
												<span>нет в наличии</span>
											</div>
										</div>
									</li>
								</ul>

							</div>
							<div class="productTabs__columnRight">
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="productTabs__text productTabs__text_indention ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="productTabs__text  productTabs__text_indention">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Оплата банковской картой</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div id="documents" class="productTabs__main info_js hidden">
						<div class="productTabs__name">Документы</div>
						<div class="productTabs__body">
							<div class="productTabs__columnLeft">
								<div class="productTabs__text">
									<span>В данном разделе собраны документы, относящиеся к данному товару.</span>
									<ul class="productTabs__textUl productTabs__textUl_indention">
										<li class='productTabs__itemLi'>
											<a class="productTabs__pdf" href="">Скачать сертификат качества PDF</a>
											<span class="productTabs__pdfSpan ">(755.1 Kb)</span>
										</li>
										<li class='productTabs__itemLi'>
											<a class="productTabs__pdf" href="">Скачать лицензию на товар PDF</a>
											<span class="productTabs__pdfSpan ">(755.1 Kb)</span>
										</li>
										<li class='productTabs__itemLi'>
											<a class="productTabs__pdf" href="">Скачать сертификат соответствия</a>
											<span class="productTabs__pdfSpan ">(755.1 Kb)</span>
										</li>

									</ul>
								</div>
							</div>
							<div class="productTabs__columnRight">
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="productTabs__text productTabs__text_indention ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="productTabs__text  productTabs__text_indention">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Оплата банковской картой</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div id="instructions" class="productTabs__main info_js hidden">
						<div class="productTabs__name">Инструкция</div>
						<div class="productTabs__body">
							<div class="productTabs__columnLeft">
								<div class="productTabs__text">
									<span>На все товары мы предоставляем инструкцию по посадке растений.</span>
									<ul class="productTabs__textUl productTabs__textUl_indention">
										<li class='productTabs__itemLi'>
											<a class="productTabs__pdf" href="">Скачать инструкцию PDF</a>
											<span class="productTabs__pdfSpan ">(755.1 Kb)</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="productTabs__columnRight">
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/winter.svg'; ?>
									</div>

									<div class="productTabs__text productTabs__text_indention ">Все растения с высокой
										зимостойкостью</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoCard.svg'; ?>
									</div>

									<div class="productTabs__text  productTabs__text_indention">Доставка бесплатно
										от 2000 ₽ по Омску</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/infoDel.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Оплата банковской картой</div>
								</div>
								<div class="productTabs__item">
									<div class="productTabs__svg"> <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/guarented.svg'; ?>
									</div>
									<div class="productTabs__text productTabs__text_indention">Гарантия 90 дней
										на весь посадочный
										материал</div>
								</div>
							</div>
						</div>
					</div>
					<div class="infoReviewsNot_js productReviews hidden">
						<div class="productTabs__name">Отзывы</div>
						<div class="productTabs__body productTabs__body_indention">
							<div class="productReviews__columnLeft">
								<div class="review productReviews__stars">
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
									<div class="review__how productReviews__text productReviews__text_indention">Нет отзывов</div>
								</div>
								<a class="btn productReviews__btn" href="#">Написать отзыв</a>
							</div>
							<div class="productReviews__columnRight">
								<div class="productReviews__description">Помогите другим пользователям с выбором - будьте первым, кто поделиться своим <br> мнением об этом товаре</div>
							</div>
						</div>
					</div>
					<div id="reviews" class="productTabs__main info_js productReviews hidden">
						<div class="productTabs__name">Отзывы</div>
						<div class="productTabs__body productTabs__body_indention ">
							<div class="productReviews__columnLeft">
								<div class="review productReviews__stars">
									<div class="review__list">
										<div class="productReviews__value">4.6</div>
										<div class="review__item productReviews__item">
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
									<div class="review__how productReviews__text productReviews__text_indention">24 отзыва</div>
								</div>
								<div class="productReviews__evaluations">
									<div class="productReviews__text productReviews__text_bold">
										Оценки
									</div>
									<div class="agreement productReviews__agreement">
										<label class="agreement__label productReviews__label">
											<input type="checkbox" checked="checked">
											<span class="check"></span>
										</label>
										<div class="productReviews__text productReviews__text_small">
											5
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="productReviews__band">
											<div class="productReviews__band_green" style=" width: 5%;"></div>
										</div>
										<div class="productReviews__text productReviews__text_small">
											(12)
										</div>
									</div>
									<div class="agreement productReviews__agreement">
										<label class="agreement__label productReviews__label">
											<input type="checkbox">
											<span class="check"></span>
										</label>
										<div class="productReviews__text productReviews__text_small">
											4
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="productReviews__band">
											<div class="productReviews__band_green" style=" width: 65%;"></div>
										</div>
										<div class="productReviews__text productReviews__text_small">
											(12)
										</div>
									</div>
									<div class="agreement productReviews__agreement">
										<label class="agreement__label productReviews__label">
											<input type="checkbox">
											<span class="check"></span>
										</label>
										<div class="productReviews__text productReviews__text_small">
											3
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="productReviews__band">
											<div class="productReviews__band_green" style=" width: 45%;"></div>
										</div>
										<div class="productReviews__text productReviews__text_small">
											(12)
										</div>
									</div>
									<div class="agreement productReviews__agreement">
										<label class="agreement__label productReviews__label">
											<input type="checkbox">
											<span class="check"></span>
										</label>
										<div class="productReviews__text productReviews__text_small">
											2
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="productReviews__band">
											<div class="productReviews__band_green" style=" width: 15%;"></div>
										</div>
										<div class="productReviews__text productReviews__text_small">
											(12)
										</div>
									</div>
									<div class="agreement productReviews__agreement">
										<label class="agreement__label productReviews__label">
											<input type="checkbox">
											<span class="check"></span>
										</label>
										<div class="productReviews__text productReviews__text_small">
											1
										</div>
										<div class="review__item active">
											<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
										</div>
										<div class="productReviews__band">
											<div class="productReviews__band_green" style=" width: 0%;"></div>

										</div>
										<div class="productReviews__text productReviews__text_small">
											(0)
										</div>
									</div>
								</div>

								<a class="btn productReviews__btn" href="#">Написать отзыв</a>
							</div>

							<div class="productReviews__columnRight">
								<div class="productReviews__box">
									<div class="productReviews__header">
										<div class="productReviews__letter">Р</div>
										<div class="productReviews__boxName">
											<div class="productReviews__name">Роман <span>15.07.2020</span></div>
											<div class="review__list">
												<div class="review__item productReviews__item">
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
									<div class="productReviews__text productReviews__text_indention">
										На самом деле, ещё очень рано судить о качестве материала, так как купила ее 12го апреля,то есть менее суток ещё прошло, но уже развернула и кое-что вижу. Есть парочка маленьких свежих корешков, главные корни крепкие без признаков гниения. Правда, один такой корень был надломлен, ведь чтобы упаковать, эти корни сгибают и надрезают.
									</div>
									<div class="productReviews__title">Достоинства:</div>
									<div class="productReviews__text productReviews__text_indention">
										Цена, очень низкая
									</div>
									<div class="productReviews__title">Недостатки:</div>
									<div class="productReviews__text productReviews__text_indention">
										Посеял ровно месяц назад! Телал все по технологии! Сеял на чернозем, чернозем заранее приобрел, Растет очень очень медленно!!! Подивал каждый вечер, да и дожди поливали очень сильно!
									</div>
									<div class="productReviews__text productReviews__text_gray">
										Вам помог этот отзыв?
									</div>
									<div class="productReviews__buttons">
										<div class="productReviews__button">Да &nbsp;<span> 1</span></div>
										<div class="productReviews__button">Нет &nbsp;<span> 0</span></div>
									</div>
								</div>
								<div class="productReviews__box">
									<div class="productReviews__header">
										<div class="productReviews__letter">Р</div>
										<div class="productReviews__boxName">
											<div class="productReviews__name">Роман <span>15.07.2020</span></div>
											<div class="review__list">
												<div class="review__item productReviews__item">
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
									<div class="productReviews__text productReviews__text_indention">
										На самом деле, ещё очень рано судить о качестве материала, так как купила ее 12го апреля,то есть менее суток ещё прошло, но уже развернула и кое-что вижу. Есть парочка маленьких свежих корешков, главные корни крепкие без признаков гниения. Правда, один такой корень был надломлен, ведь чтобы упаковать, эти корни сгибают и надрезают.
									</div>
									<div class="productReviews__title">Достоинства:</div>
									<div class="productReviews__text productReviews__text_indention">
										Цена, очень низкая
									</div>
									<div class="productReviews__title">Недостатки:</div>
									<div class="productReviews__text productReviews__text_indention">
										Посеял ровно месяц назад! Телал все по технологии! Сеял на чернозем, чернозем заранее приобрел, Растет очень очень медленно!!! Подивал каждый вечер, да и дожди поливали очень сильно!
									</div>
									<div class="productReviews__text productReviews__text_gray">
										Вам помог этот отзыв?
									</div>
									<div class="productReviews__buttons">
										<div class="productReviews__button">Да &nbsp;<span> 1</span></div>
										<div class="productReviews__button">Нет &nbsp;<span> 0</span></div>
									</div>
								</div>
								<div class="productReviews__link"><span>Показать больше отзывов</span></div>
							</div>
						</div>
					</div>
					<div class="detail__productBox productBox">
						<div class="productBox__hit">
							<div class="productTabs__name">Хит продаж</div>
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
						<div class="productBox__additional">
							<div class="productTabs__name">Дополнительные товары</div>
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
					</div>
				</section>
			</div>
		</section>
	</div>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>