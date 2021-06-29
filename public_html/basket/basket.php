<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/catalog.css">
<main class="main">
	<section class="basket container">
		<section class="basket__main">
			<div class="chain">
				<span>Главная > Корзина</span>
			</div>
			<div class="basket__title">Корзина</div>
			<div class="basket__free">
				<img src="/dist/img/free.png" alt="">
				<span>БЕСПЛАТНАЯ ДОСТАВКА ПРИ ЗАКАЗЕ ОТ 2000 ₽ ПО ГОРОДУ ОМСКУ</span>	</div>
			<div class="basket__cards">
				<div class="basket__card basketCard">
					<div class="basketCard__img"></div>
					<div class="basketCard__description">
						<div class="basketCard__title">Ель обыкновенная Инверса на штамбе</div>
						<div class="basketCard__article">Артикул: 456789</div>
						<div class="availability">
							<div class="availability__text has">
								<span>Есть в наличии</span>
							</div>
							<div class="availability__text not hidden">
								<span>Нет в наличии</span>
							</div>
						</div>
					</div>
					<div class="basketCard__count">
						<div class="basketCard__countTitle">Количество</div>
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
					</div>
					<div class="basketCard__price">
						<div class="basketCard__priceTitle">Цена</div>
						<span class="basketCard__priceValue">2880</span>
						<span>₽</span>
					</div>
					<div class="basketCard__icons">
						<div class="basketCard__icon">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/likeBasket.svg'; ?>
						</div>
						<div class="basketCard__icon">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/basket.svg'; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="basket__registration"></div>
		</section>
		<aside class="basket__order basketOrder">
			<div class="basketOrder__info"></div>
			<div class="basketOrder__send"></div>
		</aside>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>