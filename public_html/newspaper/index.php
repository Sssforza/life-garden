<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/newspaper.css">
<main class="page page_promo">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Газета «Живой сад»</span>
			</li>
		</ul>
	</section>
	<section class="page__box container newspaper">
		<section class="newspaper__header newspaperHeader">
			<div class="page__title">Газета «Живой сад»</div>
			<div class="newspaperHeader__container">
				<div class="newspaperHeader__item newspaperHeader__last_js newspaperHeader__item_checked">Все выпуски 2021г.</div>
				<div class="newspaperHeader__item newspaperHeader__archive_js">
					<div class="newspaperHeader__btn">
						Архив &nbsp;<span class="newspaperHeader__btn_year">2020г.</span>
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/arrowColor.svg'; ?>
					</div>
					<ul class="newspaperHeader__years newspaperHeader__years_js">
						<li class="newspaperHeader__year newspaperHeader__year_js">2020г.</li>
						<li class="newspaperHeader__year newspaperHeader__year_js">2019г.</li>
						<li class="newspaperHeader__year newspaperHeader__year_js">2018г.</li>
						<li class="newspaperHeader__year newspaperHeader__year_js">2017г.</li>
						<li class="newspaperHeader__year newspaperHeader__year_js">2016г.</li>
						<li class="newspaperHeader__year newspaperHeader__year_js">2015г.</li>
						<li class="newspaperHeader__year newspaperHeader__year_js">2014г.</li>
						<li class="newspaperHeader__year newspaperHeader__year_js">2013г.</li>
						<li class="newspaperHeader__year newspaperHeader__year_js">2012г.</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="newspaper__body newspaperBody">
			<div class="catalogCoverPdf">
				<div class="catalogCoverPdf_wrapper">
					<div class="newspaperOne flip-book-container solid-container" src="dist/pdf/newspaper.pdf" data-pdf="/dist/pdf/newspaper.pdf">
						<img src="/dist/img/trash/cover1.jpg" alt="">
						<p class="text">
							Газета
						</p>
					</div>
				</div>
			</div>

			<!-- <ul class="newspaperBody__ul">
				<li>
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<div class="newspaperBody__release">
						№12 Декабрь 2020
					</div>
				</li>
				<li>
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<div class="newspaperBody__release">
						№12 Декабрь 2020
					</div>
				</li>
				<li>
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<div class="newspaperBody__release">
						№12 Декабрь 2020
					</div>
				</li>
				<li>
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<div class="newspaperBody__release">
						№12 Декабрь 2020
					</div>
				</li>
				<li>
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<div class="newspaperBody__release">
						№12 Декабрь 2020
					</div>
				</li>
				<li>
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<div class="newspaperBody__release">
						№12 Декабрь 2020
					</div>
				</li>
			</ul> -->
		</section>
	</section>


</main>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>