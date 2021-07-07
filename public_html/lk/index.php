<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/lkProfile.css">
<main class="page">
	<div class="container">
		<section class="breadCrumbs">
			<ul class="breadCrumbs__ul">
				<li>
					<a class="breadCrumbs__link" href="/">Главная</a>
				</li>
				<li>
					<span>Личный кабинет</span>
				</li>
			</ul>
		</section>
		<section class="page__box">
			<div class="pageLk">
				<aside class="lkMenu">
					<div class="lkMenu__link">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/profile.svg'; ?>
						<span>Профиль</span>
					</div>
					<div class="lkMenu__link">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/myorder.svg'; ?>
						<span>Мои заказы</span>
					</div>
					<div class="lkMenu__link">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/favorites.svg'; ?>
						<span>Избранное</span>
					</div>
					<div class="lkMenu__link">
						<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/exit.svg'; ?>
						<span>Выйти</span>
					</div>
				</aside>
				<form class="pageLk__form lkProfile">
					<div class="lkProfile__content">
						<div class="lkProfile__header">
							<div class="page__title">Профиль</div>
							<div class="lkProfile__subtitle">Персональные данные</div>
						</div>
						<div class="lkProfile__fields">
							<div class="envelopeInput">
								<div class="envelopeInput__title">Имя</div>
								<input class="envelopeInput__input" type="text" value="Иван">
							</div>
							<div class="envelopeInput">
								<div class="envelopeInput__title">Телефон</div>
								<input class="envelopeInput__input" type="number" placeholder="+7 (999) 999-99-99">
							</div>
							<div class="envelopeInput">
								<div class="envelopeInput__title">Фамилия</div>
								<input class="envelopeInput__input" type="text" value="Иванович">
							</div>
							<div class="envelopeInput">
								<div class="envelopeInput__title">E-mail</div>
								<input class="envelopeInput__input" type="text" value="lifegarden@mail.ru" disabled>
							</div>
							<div class="envelopeInput">
								<div class="envelopeInput__title">Отчество</div>
								<input class="envelopeInput__input" type="text" value="Иванов">
							</div>
						</div>
						<div class="lkProfile__birthday">
							<div class="envelopeInput">
								<div class="envelopeInput__title">Дата рождения</div>
								<input class="envelopeInput__input" type="text" value="дд.мм.гггг">
							</div>
							<div class="lkProfile__message">
								<span> Заполните поле даты рождения и получите скидку 5% в честь
									вашего дня рождения. Скидка действует 3 дня до, 3 дня после
									и в день рождения.</span>

								<div class="lkProfile__close">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/closeProfile.svg'; ?>
								</div>
							</div>

						</div>
						<div class="lkProfile__delivery">
							<div class="lkProfile__subtitle">
								Адрес доставки
							</div>
							<div class="choiceBtn lkProfile__choice">
								<div class="choiceBtn__courier choiceBtn__courier_checked">Курьером</div>
								<div class="choiceBtn__courier">Самовывоз</div>
							</div>
							<div class="lkProfile__address">
								<ul>
									<li class="lkProfile__liAddress">
										<label><input type="radio" name='address' checked>
											<span>Омск, ул. Сакена Сейфуллина, 27</span>
										</label>
										<div class="lkProfile__delete">Удалить</div>
									</li>
									<li class="lkProfile__liAddress">
										<label><input type="radio" name='address'>
											<span>Омск, ул. Сакена Сейфуллина, 27</span></label>
										<div class="lkProfile__delete">Удалить</div>
									</li>
								</ul>
								<div class="lkProfile__add">
									<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/addAddress.svg'; ?>
									<span>Добавить адрес</span>
								</div>
							</div>
							<div class="lkProfile__address">
								<div class="lkProfile__addressMap">
									<div class="envelopeInput lkProfile__input">
										<div class="envelopeInput__title">Выберите другой магазин самовывоза</div>
										<input class="envelopeInput__input" type="text" value="ул. Маяковского, 20">
										<div class="lkProfile__shops">
											<ul>
												<li class="lkProfile__shopsLi">ул. Маяковского, 20</li>
												<li class="lkProfile__shopsLi">ул. Сакена Сейфуллина, 27</li>
												<li class="lkProfile__shopsLi">пр. Мира, 64</li>
												<li class="lkProfile__shopsLi">ул. 10 лет Октября, 113</li>
												<li class="lkProfile__shopsLi">пр. Маркса, 83</li>
											</ul>
										</div>
									</div>
									<div class="lkProfile__showMap">
										<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/mapProfile.svg'; ?>
										<span>Показать на карте</span>
									</div>
								</div>
								<div class="lkProfile__saveContainer">
									<div class="btn lkProfile__btn lkProfile__btn_margin">Сохранить изменения</div>
									<span>Отменить</span>
								</div>
							</div>



						</div>
						<div class="lkProfile__password">
							<div class="lkProfile__subtitle">
								Изменить пароль
							</div>
							<div class="lkProfile__container">
								<div class="envelopeInput">
									<div class="envelopeInput__title">Новый пароль</div>
									<input class="envelopeInput__input" type="password" value="">
								</div>
								<div class="envelopeInput">
									<div class="envelopeInput__title">Подтвердите пароль</div>
									<input class="envelopeInput__input" type="password" value="">
								</div>
							</div>
						</div>
					</div>
					<button class="btn lkProfile__btn" type="submit">Сохранить изменения</button>
				</form>
			</div>
		</section>
	</div>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>