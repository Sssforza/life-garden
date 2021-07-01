<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/catalog.css">
<main class="main">
	<section class="catalog">
		<section class="catalog__header">
			<div class="container">
				<div class="breadCrumbs">
					<ul class="breadCrumbs__ul">
						<li><a class="breadCrumbs__link" href="">Главная</a></li>
						<li><a class="breadCrumbs__link" href="">Каталог</a></li>
						<li><a class="breadCrumbs__link" href="">Растения</a></li>
						<li><a class="breadCrumbs__link" href="">Семена</a></li>
						<li><span>Пряные и лекарственные травы</span></li>
					</ul>
				</div>
				<a class="catalog__event catalogEvent" href="#">
					<div class="catalogEvent__textContainer">
						<div class="catalogEvent__title">Весенняя акция: три
							растения по цене двух</div>
						<div class="catalogEvent__description">С 20 марта по 1 мая у нас действует акция: каждое третье растение В ПОДАРОК!</div>
					</div>
				</a>
				<div class="catalog__title">Пряные и лекарственные травы
					<span>180 товаров</span>
				</div>
			</div>
		</section>
		<section class="catalog__body">
			<div class="container">
				<div class="catalog__menu"></div>
				<div class="catalog__cards"></div>
			</div>
		</section>
		<section class="catalog__helpful">
			<div class="catalog__menu"></div>
			<div class="catalog__cards"></div>
		</section>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>