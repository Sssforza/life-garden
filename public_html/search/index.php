<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/search.css">
<main class="page page_club">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Поиск</span>
			</li>
		</ul>
	</section>
	<section class="page__box container search">
		<section class="search__nothing searchNothing">
			<div class="searchNothing__svg">

			</div>
			<div class="searchNothing__box">
				<div class="page__title searchNothing__title">По запросу <span>эскимо</span> ничего не найдено
				</div>
				<div class="searchNothing__description">Попробуйте написать название товара по-другому или сократить запрос</div>
				<a class="searchNothing__link" href="/">На главную</a>
			</div>
		</section>
		<section class="search__find searchFind">
			<div class="page__title searchFind__title">По запросу <span>эскимо</span> ничего не найдено
			</div>
		</section>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>