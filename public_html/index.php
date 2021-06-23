
<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
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
									<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mainSlierInfoImg1.svg';?>
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
									<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mainSlierInfoImg2.svg';?>
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
									<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mainSlierInfoImg3.svg';?>
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
		<section class="mainNews">
			<div class="mainNews__wrapper container">
				<div class="mainNews__header">
					<div class="mainNews__title">Новости</div>
					<a class="mainNews__subtitle" href="#">Все новости</a>
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
					<a class="btn clubCard__btn" href="#">Получить карту</a>
					<div class="clubCard__minInfo">
						* Скидка не&nbsp;распространяется на&nbsp;товары по&nbsp;акции. Скидка в&nbsp;период &laquo;Дня&nbsp;рождения&raquo; предоставляется только самому клиенту по&nbsp;предъявлении документа 
						(паспорт, пенсионное удостоверение, водительские права).
					</div>
				</div>
			</div>
		</section>
	</section>
</main>

<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>