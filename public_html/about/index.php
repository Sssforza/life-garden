<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/about.css">
<main class="page page_about">

	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>О компании</span>
			</li>
		</ul>
	</section>
	<section class="page__box">
		<div class="page__title container">О компании</div>
		<div class="about">
			<section class="about__history aboutHistory container">
				<img class="aboutHistory__image" src="/dist/img/aboutPeople.png">
				<p class="aboutHistory__title">«Живой сад»<span> — центр природного земледелия, который специализируется
						на помощи выращивания экологически чистого урожая</span></p>
				<p class="about__text">Первый магазин «Живой сад» был открыт в 2006 году в Омске, и с тех пор компания демонстрирует уверенный рост. Помогаем
					садоводам, огородникам, дачникам, владельцам приусадебных участков - выращивать экологически чистый урожай,
					восстанавливать и повышать плодородие почвы, облегчать труд на земле, создавать красивые сады.</p>
			</section>
			<section class="about__facts aboutFacts">
				<div class="aboutFacts__content container">
					<div class="about__title">Ключевые факты</div>
					<div class="aboutSlider aboutSlider_js">
						<div class="aboutFacts__card">
							<div class="aboutFacts__info">
								<div class="aboutFacts__text">6000</div>
								<div class="aboutFacts__text_small">товаров на полках</div>
								<img class="aboutFacts__points" src="/dist/img/aboutCardPoints.png">
							</div>
							<div class="aboutFacts__image">
								<img src="/dist/img/6000products.jpg">
							</div>
						</div>
						<div class="aboutFacts__card">
							<div class="aboutFacts__info">
								<div class="aboutFacts__text">50 <span>тыс.</span></div>
								<div class="aboutFacts__text_small">постоянных покупателей</div>
								<img class="aboutFacts__points" src="/dist/img/aboutCardPoints.png">
							</div>
							<div class="aboutFacts__image">
								<img src="/dist/img/50buyers.jpg">
							</div>
						</div>
						<div class="aboutFacts__card">
							<div class="aboutFacts__info">
								<div class="aboutFacts__text">15 <span>лет</span></div>
								<div class="aboutFacts__text_small">мы работаем для вас</div>
								<img class="aboutFacts__points" src="/dist/img/aboutCardPoints.png">
							</div>
							<div class="aboutFacts__image">
								<img src="/dist/img/aboutCard.png">
							</div>
						</div>
						<div class="aboutFacts__card">
							<div class="aboutFacts__info">
								<div class="aboutFacts__text">5000</div>
								<div class="aboutFacts__text_small">наименований растений</div>
								<img class="aboutFacts__points" src="/dist/img/aboutCardPoints.png">
							</div>
							<div class="aboutFacts__image">
								<img src="/dist/img/5kPlants.jpg">
							</div>
						</div>
					</div>
				</div>

			</section>
			<section class="about__care aboutCare container">
				<div class="aboutCare__column">
					<div class="about__title">C заботой о вашем саде</div>
					<div class="aboutCare__subtitle">Тщательный контроль сорта и качества посадочного
						материала, а также высокий уровень сервиса — абсолютный
						приоритет «Живого сада».</div>
					<div class="about__text">Проводим семинары по различным темам и вопросам, приглашаем
						специалистов с других городов. Снимаем обучающие видео, которые можно
						посмотреть на нашем YouTube канале, в группах: ВКонтакте, Одноклассниках
						и Инстаграмм.</div>
				</div>
				<div class="aboutCare__image">
					<img src="/dist/img/aboutCare.png">
				</div>
			</section>
			<section class="about__help aboutHelp container">
				<div class="aboutHelp__quote">
					<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/quote.svg'; ?>
				</div>
				<div class="aboutHelp__title">Мы, своей деятельностью, искренне помогаем
					садоводам, огородникам и дачникам создавать
					свой гармоничный «Живой сад»</div>
				<div class="aboutHelp__container">
					<div class="aboutHelp__item">
						<div class="aboutHelp__icon">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/assort.svg'; ?>
						</div>
						<div class="aboutHelp__text">Широкий, специально
							отобранный ассортимент <span>В нашем ассортименте представлен широкий
								ассортимент более чем 2 500 товаров</span></div>
					</div>
					<div class="aboutHelp__item">
						<div class="aboutHelp__icon">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutBook.svg'; ?>
						</div>
						<div class="aboutHelp__text">Подтвержденное качество <span>Тщательно контролируем сортность
								и качество посадочного материала</span></div>
					</div>
					<div class="aboutHelp__item">
						<div class="aboutHelp__icon">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutExpert.svg'; ?>
						</div>
						<div class="aboutHelp__text">Экспертиза на каждом шаге
							оформления заказа <span>Работаем напрямую с питомниками,
								являющимися селекционерами —
								оригинаторами и производителями</span></div>
					</div>
					<div class="aboutHelp__item">
						<div class="aboutHelp__icon">
							<? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutTechnology.svg'; ?>
						</div>
						<div class="aboutHelp__text">Собственная технология
							выращивания растений <span>Разрабатываем собственную технологию
								выращивания растений по культурам, выдаем
								посадочные инструкции при продаже растений</span></div>
					</div>

				</div>
			</section>
		</div>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>