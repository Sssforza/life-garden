<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/masterClass.css">
<main class="page page_masterClass">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Семинары</span>
			</li>
		</ul>
	</section>
	<section class="page__box container masterClass">
		<div class="page__title ">Расписание мастер-классов</div>
		<div class="masterClass__header">
			<div class="choice masterClass__choice">
				<div class="choice__btn choice__btn_checked">Июль</div>
				<div class="choice__btn ">Август</div>
			</div>
			<div class="masterClass__archive">
				<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/archive.svg'; ?>
				<div class="masterClass__archiveText"> Архив &nbsp;
					<span class="masterClassDate_js"> август 2021</span>
				</div>

			</div>
		</div>
		<div class="masterClass__container">
			<div class="masterClass__card masterClassCard">
				<div class="masterClassCard__columnLeft">
					<img class="masterClassCard__img" src="/dist/img/trash/masterCardImg.jpg" alt="">
					<div class="masterClassCard__share">
						<span>Поделиться</span>
						<a class="masterClassCard__link" href="">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vkWhite.svg'; ?>
						</a>
						<a class="masterClassCard__link" href="">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/okWhite.svg'; ?>
						</a>
					</div>
				</div>
				<div class="masterClassCard__columnRight">
					<div class="masterClassCard__header">
						<div class="masterClassCard__date">
							25 <span>Сентября <br> в 18:00</span>
						</div>
						<div class="masterClassCard__title">Как и чем укрыть сад надежно
							и безопасно. Укрытие роз.
							Основные ошибки
						</div>
					</div>
					<div class="masterClassCard__body">
						<div class="masterClassCard__text">
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
						</div>
						<div class="masterClassCard__readAll masterClassCard__readAll_js">
							Читать полностью
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/enter.svg'; ?>
						</div>
					</div>
					<div class="masterClassCard__footer">
						<div class="masterClassCard__row">
							<div class="masterClassCard__description">Цена</div>
							<div></div>
							<div class="masterClassCard__value">500<span>₽</span> (Осталось 15 билетов) </div>
						</div>
						<div class="masterClassCard__btn btn">Купить билет</div>
					</div>
				</div>
			</div>
		</div>
		<div class="masterClass__footer">
			<div class="masterClass__title masterClass__title_small">
				Фотоотчет с мастер-класса
			</div>
			<div class="masterClass__slider"></div>
		</div>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>