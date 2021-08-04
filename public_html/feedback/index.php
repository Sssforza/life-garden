<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/feedback.css">
<main class="page page_feedback">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<a class="breadCrumbs__link" href="/">Каталог</a>
			</li>
			<li>
				<a class="breadCrumbs__link" href="/">Газон</a>
			</li>
			<li>
				<a class="breadCrumbs__link" href="/">Газон «Олигарх»</a>
			</li>
			<li>
				<span>Отзыв</span>
			</li>
		</ul>
	</section>
	<section class="page__box container feedback">
		<div class="page__title ">Ваш отзыв о товаре</div>
		<section class="feedback__product feedbackProduct">
			<div class="feedbackProduct__img" style="background-image:url(/dist/img/trash/tree.png)"></div>
			<div class="feedbackProduct__box">
				<div class="feedbackProduct__title">Ель обыкновенная Инверса на штамбе</div>
				<div class="feedbackProduct__articul">Артикул: 6457638793456</div>
			</div>
		</section>
		<section class="feedback__description">
			<form class="feedback__form">
				<div class="feedback__fields">
					<div class="envelopeInput">
						<div class="envelopeInput__title">Текст отзыва<span class="envelopeInput__surely">*</span></div>
						<textarea class="envelopeInput__textarea feedback__comment_js" placeholder="Комментарий к товару"></textarea>
					</div>
					<div class="envelopeInput">
						<div class="envelopeInput__title">Достоинства</div>
						<textarea class="envelopeInput__textarea" placeholder="Преимущества "></textarea>
					</div>
					<div class="envelopeInput">
						<div class="envelopeInput__title">Недостатки</div>
						<textarea class="envelopeInput__textarea" placeholder="Минусы"></textarea>
					</div>
				</div>
				<div class="feedback__estimation feedbackEstimation">
					<div class="feedbackEstimation__title">Оцените товар</div>
					<div class="review">
						<div class="review__list">
							<div class="review__item review__item_js">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
							</div>
							<div class="review__item review__item_js">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
							</div>
							<div class="review__item review__item_js">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
							</div>
							<div class="review__item review__item_js">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
							</div>
							<div class="review__item review__item_js">
								<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/reviewIcon.svg'; ?>
							</div>
						</div>
						<div class="review__how feedbackEstimation__text_js"></div>
					</div>
					<button class="btn feedback__btn feedback__btn_js" type="submit">Отправить отзыв</button>
				</div>
			</form>
		</section>

	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>