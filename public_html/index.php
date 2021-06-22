
<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/indexPage.css">
<main class="main">
	<section class="page page_index">
		<section class="mainSlier container">
			<div class="mainSlier__content">
				<div class="mainSlier__slider mainSlier_js">
					<div class="mainSlier__item" style="background-image:url(/dist/img/mainSlierImg1.jpg)"></div>
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
	</section>
</main>

<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>