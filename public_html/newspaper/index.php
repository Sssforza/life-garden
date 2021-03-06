<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/newspaper.css">
<link rel='stylesheet' href="/dist/min/font-awesome.css">
<script type="text/javascript">
	$(document).ready(function() {
		$(".newspaperBody__pdf_js").flipBook({
			pdfUrl: "/dist/pdf/newspaper.pdf",
			lightBox: true,
		});
		/*         // <? if (!empty($arResult['MAIN'])) : ?>
		        // $(".journalLink_jsMain").flipBook({
		        //     pdfUrl:"<?= CFile::GetPath($arResult['MAIN']['PROPERTIES']['JOURNAL_PDF']['VALUE']) ?>",
		        //     lightBox:true
		        // });
		        // <? endif ?>
		        // <? foreach ($arResult['ITEMS'] as $key => $item) : ?>
		        // $(".journalLink_js<?= $key ?>").flipBook({
		        //     pdfUrl:"<?= CFile::GetPath($item['PROPERTIES']['JOURNAL_PDF']['VALUE']) ?>",
		        //     lightBox:true
		        // });
		        // <? endforeach ?> */
	});
</script>
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
			<ul class="newspaperBody__ul">
				<li class="newspaperBody__pdf newspaperBody__pdf_js" data-pdf="/dist/pdf/newspaper.pdf">
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<div class="newspaperBody__release">
						№12 Декабрь 2020
					</div>
				</li>
				<li class="newspaperBody__pdf newspaperBody__pdf_js" data-pdf="/dist/pdf/newspaper.pdf">
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<p class="newspaperBody__release">
						№12 Декабрь 2020
					</p>
				</li>
				<li class="newspaperBody__pdf newspaperBody__pdf_js" data-pdf="/dist/pdf/newspaper.pdf">
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<p class="newspaperBody__release">
						№12 Декабрь 2020
					</p>
				</li>
				<li class="newspaperBody__pdf newspaperBody__pdf_js" data-pdf="/dist/pdf/newspaper.pdf">
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<p class="newspaperBody__release">
						№12 Декабрь 2020
					</p>
				</li>
				<li class="newspaperBody__pdf newspaperBody__pdf_js" data-pdf="/dist/pdf/newspaper.pdf">
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<p class="newspaperBody__release">
						№12 Декабрь 2020
					</p>
				</li>
				<li class="newspaperBody__pdf newspaperBody__pdf_js" data-pdf="/dist/pdf/newspaper.pdf">
					<div class="newspaperBody__cover">
						<img src="/dist/img/trash/cover1.jpg" alt="">
					</div>
					<p class="newspaperBody__release">
						№12 Декабрь 2020
					</p>
				</li>
			</ul>
		</section>
	</section>


</main>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>