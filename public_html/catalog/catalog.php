<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/catalog.css">
<main class="main">
	<section class="catalog">
		<section class="catalog__header">
			<div class="container">
				<div class="catalog__tree"></div>
				<div class="catalog__event"></div>
				<div class="catalog__name"></div>
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