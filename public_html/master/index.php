<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/master.css">
<main class="page page_master">
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
	<section class="page__box container master">
		<div class="page__title ">Расписание мастер-классов</div>
		<div class="master__header">
			<div class="choice master__choice">
				<div class="choice__btn choice__btn_checked">Июль</div>
				<div class="choice__btn ">Август</div>
			</div>
			<div class="master__archive">
				<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/archive.svg'; ?>
				<div class="master__archiveText"> Архив &nbsp;
					<span class="masterDate_js"> август 2021</span>
				</div>

			</div>
		</div>
		<div class="master__container">
			<div class="master__card masterCard">
				<div class="masterCard__columnLeft">
					<img class="masterCard__img" src="/dist/img/trash/masterCardImg.jpg" alt="">
					<div class="masterCard__share">
						<span>Поделиться</span>
						<a class="masterCard__link" href="">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vkWhite.svg'; ?>
						</a>
						<a class="masterCard__link" href="">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/okWhite.svg'; ?>
						</a>
					</div>
				</div>
				<div class="masterCard__columnRight">
					<div class="masterCard__header">
						<div class="masterCard__date">
							25 <span>Сентября <br> в 18:00</span>
						</div>
						<div class="masterCard__title">Как и чем укрыть сад надежно
							и безопасно. Укрытие роз.
							Основные ошибки
						</div>
					</div>
					<div class="masterCard__body">
						<div class="masterCard__text">
							Первый способ – засыпьте основание куста землей, уложите еловую хвою, насыпьте песок и укройте
							его еловым лапником. Плети осторожно снимите с опор и уложите на еловый лапник. Сверху также
							положите еловые ветки и замотайте всю зеленую массу спанбондом. Весной такое укрытие снимают
							постепенно, сначала приоткрывая ветки, а затем высвобождая все растение.
						</div>
						<div class="masterCard__readAll masterCard__readAll_js">
							Читать полностью
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/enter.svg'; ?>
						</div>
					</div>
					<div class="masterCard__footer">
						<div class="masterCard__row">
							<div class="masterCard__description">Цена</div>
							<div></div>
							<div class="masterCard__value">500<span>₽</span> (Осталось 15 билетов) </div>
						</div>
						<div class="masterCard__btn btn">Купить билет</div>
					</div>
				</div>
			</div>
		</div>
		<div class="master__footer">
			<div class="master__title master__title_small">
				Фотоотчет с мастер-класса
			</div>
			<div class="master__slider"></div>
		</div>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>