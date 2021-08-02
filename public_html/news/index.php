<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/news.css">
<main class="page page_promo">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Новости</span>
			</li>
		</ul>
	</section>
	<section class="page__box container news">
		<section class="news__header newsHeader">
			<div class="page__title">Новости</div>
			<div class="newsHeader__container">
				<div class="newsHeader__item newsHeader__all_js newsHeader__item_checked">Все новости
				</div>
				<div class="newsHeader__item newsHeader__master_js">Семинары и мастер-классы
				</div>
			</div>
		</section>
		<section class="news__body">
			<div class="news__container">
				<div class="news__card newsCard">
					<div class="newsCard__img">
						<img src="/dist/img/trash/news.jpg" alt="">
					</div>
					<div class="newsCard__box">
						<div class="newsCard__date">9 марта 2021</div> 
						<div class="newsCard__color newsCard__color_master">Мастер-класс</div>
						<div class="newsCard__title">Акция на все семена цветов</div>
						<div class="newsCard__subtitle">Запустилась рождественская акция на все семена цветов</div>
						<div class="newsCard__btn">Читать полностью
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newsArrow.svg'; ?>
						</div>
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
						<div class="newsCard__btn">Читать полностью
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newsArrow.svg'; ?>
						</div>
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
						<div class="newsCard__btn">Читать полностью
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newsArrow.svg'; ?>
						</div>
					</div>
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
	</section>


</main>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>