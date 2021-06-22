
<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/indexPage.css">
<main class="main">
	<section class="page page_index">
		<section class="mainSlier container">
			<div class="mainSlier__content">
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
		<section class="productSection productPopular container">
			<div class="productSection__title">Популярные категории</div>
			<div class="productSection__content productPopular__content">
				<a class="productPopular__item" href="#">
					<div class="productPopular__img">
						<img src="/dist/img/productPopularImg1.png" alt="">
					</div>
					<div class="productPopular__name">Саженцы</div>
				</a>
				<a class="productPopular__item" href="#">
					<div class="productPopular__img">
						<img src="/dist/img/productPopularImg2.png" alt="">
					</div>
					<div class="productPopular__name">Семена</div>
				</a>
				<a class="productPopular__item" href="#">
					<div class="productPopular__img">
						<img src="/dist/img/productPopularImg3.png" alt="">
					</div>
					<div class="productPopular__name">Наборы для рассады</div>
				</a>
				<a class="productPopular__item" href="#">
					<div class="productPopular__img">
						<img src="/dist/img/productPopularImg4.png" alt="">
					</div>
					<div class="productPopular__name">Украшение сада</div>
				</a>
				<a class="productPopular__item" href="#">
					<div class="productPopular__img">
						<img src="/dist/img/productPopularImg5.png" alt="">
					</div>
					<div class="productPopular__name">Инструменты</div>
				</a>
				<a class="productPopular__item" href="#">
					<div class="productPopular__img">
						<img src="/dist/img/productPopularImg6.png" alt="">
					</div>
					<div class="productPopular__name">Хвойные</div>
				</a>
				<a class="productPopular__item" href="#">
					<div class="productPopular__img">
						<img src="/dist/img/productPopularImg7.png" alt="">
					</div>
					<div class="productPopular__name">Теплица</div>
				</a>
				<a class="productPopular__item" href="#">
					<div class="productPopular__img">
						<img src="/dist/img/productPopularImg8.png" alt="">
					</div>
					<div class="productPopular__name">Здоровое питание</div>
				</a>
			</div>
		</section>
	</section>
</main>

<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>