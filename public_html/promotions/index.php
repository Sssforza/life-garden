<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/promotions.css">
<main class="page page_promotions">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Акции</span>
			</li>
		</ul>
	</section>
	<section class="page__box container promotions">
		<div class="page__title ">Акции</div>
		<div class="promotions__container">
			<div class="promotions__item">
				<div class="promotions__image">
					<img src="../dist/img/trash/promotion1.jpg">
				</div>
				<div class="promotions__date">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/calendar.svg'; ?>
					<span>с 15.04.2021 — до 10.06.2021</span>
				</div>
				<a class="promotions__title" href="/promo/">Акция на Многолетники</a>
				<div class="promotions__description">При покупке Многолетников на сумму 2 200 <span class="promotions__description_ruble">₽</span> хоста в подарок</div>
			</div>
			<div class="promotions__item">
				<div class="promotions__image">
					<img src="../dist/img/trash/promotion1.jpg">
				</div>
				<div class="promotions__date">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/calendar.svg'; ?>
					<span>с 15.04.2021 — до 10.06.2021</span>
				</div>
				<a class="promotions__title" href="/promo/">Акция на Многолетники</a>
				<div class="promotions__description">При покупке Многолетников на сумму 2 200 <span class="promotions__description_ruble">₽</span> хоста в подарок</div>
			</div>
			<div class="promotions__item">
				<div class="promotions__image">
					<img src="../dist/img/trash/promotion1.jpg">
				</div>
				<div class="promotions__date">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/calendar.svg'; ?>
					<span>с 15.04.2021 — до 10.06.2021</span>
				</div>
				<a class="promotions__title" href="/promo/">Акция на Многолетники</a>
				<div class="promotions__description">При покупке Многолетников на сумму 2 200 <span class="promotions__description_ruble">₽</span> хоста в подарок</div>
			</div>
			<div class="promotions__item">
				<div class="promotions__image">
					<img src="../dist/img/trash/promotion1.jpg">
				</div>
				<div class="promotions__date">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/calendar.svg'; ?>
					<span>с 15.04.2021 — до 10.06.2021</span>
				</div>
				<a class="promotions__title" href="/promo/">Акция на Многолетники</a>
				<div class="promotions__description">При покупке Многолетников на сумму 2 200 <span class="promotions__description_ruble">₽</span> хоста в подарок</div>
			</div>
		</div>
		<div class="catalogCards__show btnShow">
			<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/look.svg'; ?>
			<span>Показать еще</span>
		</div>
		<div class="catalogCards__pagination pagination">
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
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>