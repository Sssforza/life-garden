<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/delivery.css">
<main class="page page_delivery">
	<section class="breadCrumbs container">
		<ul class="breadCrumbs__ul">
			<li>
				<a class="breadCrumbs__link" href="/">Главная</a>
			</li>
			<li>
				<span>Доставка и оплата</span>
			</li>
		</ul>
	</section>
	<section class="page__box container delivery">
		<div class="page__title ">Доставка и оплата</div>
		<div class="delivery__container">
			<section class="delivery__omsk">
				<div class="delivery__subtitle">Омск</div>
				<div class="delivery__text">
					Доставка товаров по всей территории РФ производится компаниями «Почта России» и СДЭК. Скорость
					и стоимость доставки рассчитываются автоматически при выборе городав корзине интернет-магазина.
					Дополнительную информацию по доставке можно получить у сотрудника магазина или по телефону
					<span>8-908-310-48-07</span>
				</div>
				<div class="delivery__table deliveryTable">
					<div class="deliveryTable__row">
						<div class="deliveryTable__title">Курьером</div>
						<div class="deliveryTable__middle">
							<div class="deliveryTable__cost">Стоимость доставки</div>
							<div class="deliveryTable__price">200 <span>₽</span> </div>
							<div class="deliveryTable__subtitle">При заказе от 2000 <span>₽</span>
								доставка бесплатно</div>
						</div>
						<div class="deliveryTable__end">
							<div class="deliveryTable__cost">Срок доставки</div>
							<div class="deliveryTable__subtitle">2-3 рабочих дня</div>
						</div>
					</div>
					<div class="deliveryTable__row">
						<div class="deliveryTable__title">Самовывоз</div>
						<div class="deliveryTable__middle">
							<div class="deliveryTable__cost">Стоимость доставки</div>
							<div class="deliveryTable__subtitle">Бесплатно</div>
						</div>
						<div class="deliveryTable__end">
							<div class="deliveryTable__cost">Срок доставки</div>
							<div class="deliveryTable__subtitle">2-3 рабочих дня</div>
						</div>
					</div>
				</div>
			</section>
			<section class="delivery__russia">
				<div class="delivery__subtitle">Россия</div>
				<div class="delivery__text">
					Доставка товаров по всей территории РФ производится компаниями «Почта России» и СДЭК. Скорость и стоимость
					доставки рассчитываются автоматически при выборе городав корзине интернет-магазина.
				</div>
				<div class="delivery__table deliveryTable">
					<div class="deliveryTable__row">
						<img class="deliveryTable__sdek" src="/dist/img/sdek.png">
						<div class="deliveryTable__middle">
							<div class="deliveryTable__cost">Стоимость доставки</div>
							<div class="deliveryTable__subtitle">до пункта выдачи 400 ₽</div>
							<div class="deliveryTable__subtitle">до двери 550 ₽</div>
						</div>
						<div class="deliveryTable__end">
							<div class="deliveryTable__cost">Срок доставки</div>
							<div class="deliveryTable__subtitle">1-2 рабочих дня</div>
							<div class="deliveryTable__subtitle">до 5 рабочих дней</div>
						</div>
					</div>
					<div class="deliveryTable__row">
						<img class="deliveryTable__post" src="/dist/img/post.png">
						<div class="deliveryTable__middle">
							<div class="deliveryTable__cost">Стоимость доставки</div>
							<div class="deliveryTable__subtitle">до пункта выдачи 400 ₽</div>
							<div class="deliveryTable__subtitle">до двери 550 ₽</div>
						</div>
						<div class="deliveryTable__end">
							<div class="deliveryTable__cost">Срок доставки</div>
							<div class="deliveryTable__subtitle">1-2 рабочих дня</div>
							<div class="deliveryTable__subtitle">до 5 рабочих дней</div>
						</div>
					</div>
				</div>
			</section>
			<section class="delivery__methods">
				<div class="delivery__title">Способы оплаты товара
				</div>
				<div class="delivery__text delivery__text_margin">
					Оплата за товар и услугу доставки возможна онлайн на сайте, наличным и безналичным расчетом курьеру
					или непосредственно в магазине.
				</div>
				<div class="delivery__cash">
					<div class="delivery__subtitle delivery__subtitle_small">
						Наличными или картой при получении
					</div>
					<div class="delivery__text">
						Оплата производится в рублях при передаче товара и необходимых финансовых документов курьером лично Вам в руки. Оплата наличными или картой при получении возможна только в пределах Российской Федерации.
					</div>
				</div>
				<div class="delivery__card">
					<div class="delivery__subtitle delivery__subtitle_small">
						Картой на сайте
					</div>
					<div class="delivery__text">
						По завершении формирования заказа у Вас появится возможность произвести оплату по пластиковой
						(кредитной) карте. Мы принимаем Visa, MasterCard и МИР. Отправка товара производится по факту поступления средств на счет магазина «Живой сад».
					</div>
				</div>
				<div class="delivery__accept">
					<img class="delivery__masterImg" src="/dist/img/mastercardGray.png" alt="">
					<img class="delivery__visaImg" src="/dist/img/visaGray.png" alt="">
					<img class="delivery__mirImg" src="/dist/img/mirGray.png" alt="">
				</div>
			</section>
		</div>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>