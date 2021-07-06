
<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=81ff5a41-050a-4199-aee4-2c8ebd0c8bfb"></script>
<link rel='stylesheet' href="/dist/css/blocks/contacts.css">
<main class="page page_contacts">
	<div class="container">
		<section class="breadCrumbs">
			<ul class="breadCrumbs__ul">
				<li>
					<a class="breadCrumbs__link" href="/">Главная</a>
					</li>
				<li>
					<span>Контакты</span>
				</li>
			</ul>
		</section>
		<section class="page__box">
			<div class="page__title">Контакты</div>
			<div class="pageContacts">
				<section class="pageContacts__data">
					<aside class="pageContacts__aside">
						<div class="pageContacts__item">
							<div class="pageContacts__subtitle">Общие контакты</div>
							<div class="pageContacts__description">
								<div class="pageContacts__info">Телефон</div>
								<div class="pageContacts__text">
									<a href="tel:+79084161495">+7 908 416-14-95</a>
								</div>
								<div class="pageContacts__info">E-mail</div>
								<div class="pageContacts__text">
									<a href="mailto:givoisad@mail.ru">givoisad@mail.ru</a>
								</div>
								<div class="pageContacts__info">Адрес</div>
								<div class="pageContacts__text">Омск, Сакена Сейфуллина, 27</div>
							</div>
						</div>
					</aside>
					<form class="pageContacts__form"></form>
				</section>
				<section class="pageContacts__map"></section>
			</div>
		</section>
	</div>
</main>

<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>