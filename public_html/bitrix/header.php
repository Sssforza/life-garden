<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel='stylesheet' href="/dist/css/main.css">
  <script type="text/javascript" src="/dist/js/main.js"></script>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="headerTop">
        <div class="container">
          <div class="header__container">
            <ul class="headerTop__menu">
              <li><a href="#">Доставка и оплата</a></li>
              <li><a href="#">Семинары</a></li>
              <li><a href="#">Блог огородника</a></li>
              <li class="headerTop__menuElse"><a href="#">Еще 	
              &#8226;&#8226;&#8226;</a></li>
              <div class="headerTop__menuHide">
              <li><a href="#">О компании</a></li>
              <li><a href="#">Новости</a></li>
              <li><a href="#">Контакты</a></li>
              </div>
            </ul>
            <a class="headerTop__newspapper" href="#">
              <div class="headerTop__icon">
                <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newspapper.svg'; ?>
              </div>
              <span class="headerTop__text headerTop__text_underline">Газета &#171; Живой сад &#187;</span>
            </a>
            <div class="headerTop__end">
              <a class="headerTop__telephone" href="tel: +73812349341">
                <div class="headerTop__icon">
                  <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/telephone.svg'; ?>
                </div>
                <span>+ 7 3812 34-93-41</span>
              </a>
              <a class="headerTop__enter" href="#">
                <div class="headerTop__icon">
                  <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/enter.svg'; ?>
                </div>
                <span class="headerTop__text">Вход</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="headerMiddle">
        <div class="container">
          <div class="header__container">
            <a class="headerMiddle__logo" href="#">
              <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/logo.svg'; ?>
            </a>
            <div class="headerMiddle__search">
              <a class="headerMiddle__catalog" href="#">
                <span>Каталог</span>
                <div class="headerMiddle__catalogSvg">
                  <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/catalog.svg'; ?>
                </div>
                <div class="headerMiddle__catalogSvgEsc">
                  <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/catalog-esc.svg'; ?>
                </div>
              </a>
              <form class="headerMiddle__form">
                <input class="headerMiddle__input" type="text" placeholder="Поиск">
                <button class="headerMiddle__button" type="submit">
                  <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/search.svg'; ?>
                </button>
              </form>
            </div>
            <div class="headerMiddle__icons">
              <div class="iconSelected">
                <div class="iconSelected__svg">
                  <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/like.svg'; ?>
                </div>
                <span class="iconSelected__count">0</span>
              </div>
              <div class="iconSelected">
                <div class="iconSelected__svg">
                  <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/date.svg'; ?>
                </div>
                <span class="iconSelected__count">0</span>
              </div>
              <div class="headerMiddle__iconsBasket">
                <div class="iconSelected">
                  <div class="iconSelected__svg">
                    <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/garbage.svg'; ?>
                  </div>
                  <span class="iconSelected__count iconSelected__count_choice">100</span>
                </div>
                <div class="iconSelected__garbage">
                  <span>Корзина</span>
                  <span>6570 р</span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="headerBottom">
        <div class="container">
          <ul class="header__container">
            <li><a href="#">Акции</a></li>
            <li><a href="#">Теплица</a></li>
            <li><a href="#">Семена</a></li>
            <li><a href="#">Саженцы</a></li>
            <li><a href="#">Биозащита сада</a></li>
            <li><a href="#">Биопрепараты</a></li>
            <li><a href="#">Грунты для растений</a></li>
            <li><a href="#">Пленка</a></li>
            <li><a href="#">Горшки</a></li>
            <li><a href="#">Украшение сада</a></li>
          </ul>
        </div>
      </div>
      <div class="catalog">
        <div class="container">
          <h2 class="catalog__title">Каталог</h2>
          <div class="catalogСategories">
            <div class="catalogСategories__item">
              <img class="catalogСategories__img" src="/dist/img/productPopularImg7.png" alt="">
              <div class="catalogСategories__text">
                <h3 class="catalogСategories__title">Для сада</h3>
                <ul>
                  <li><a href="#">Средства защиты</a></li>
                  <li><a href="#">Капельный полив</a></li>
                  <li><a href="#">Украшение сада</a></li>
                  <li><a href="#">Теплица</a></li>
                  <li><a href="#">Украшение сада</a></li>
                </ul>
              </div>
            </div>
            <div class="catalogСategories__item">
              <img class="catalogСategories__img" src="/dist/img/productPopularImg5.png" alt="">
              <div class="catalogСategories__text">
                <h3 class="catalogСategories__title">Инструменты</h3>
                <ul>
                  <li><a href="#">Садовый инвентарь</a></li>
                  <li><a href="#">Опрыскиватели</a></li>
                </ul>
              </div>
            </div>
            <div class="catalogСategories__item">
              <img class="catalogСategories__img" src="/dist/img/forHome.png" alt="">
              <div class="catalogСategories__text">
                <h3 class="catalogСategories__title">Для дома</h3>
                <ul>
                  <li><a href="#">Здоровое питание</a></li>
                  <li><a href="#">Выращивание рассады</a></li>
                  <li><a href="#">Пакеты</a></li>
                  <li><a href="#">Фитолампы для растений</a></li>
                  <li><a href="#">ЭМ товары для дома</a></li>
                  <li><a href="#">Сушилка</a></li>
                </ul>
              </div>
            </div>
            <div class="catalogСategories__item">
              <img class="catalogСategories__img" src="/dist/img/plants.png" alt="">
              <div class="catalogСategories__text">
                <h3 class="catalogСategories__title">Растения</h3>
                <ul>
                  <li><a href="#">Газон</a></li>
                  <li><a href="#">Лук-севок</a></li>
                  <li><a href="#">Чеснок</a></li>
                  <li><a href="#">Уценка</a></li>
                  <li><a href="#">Семена</a></li>
                  <li><a href="#">Саженцы</a></li>
                </ul>
              </div>
            </div>
            <div class="catalogСategories__item">
              <img class="catalogСategories__img" src="/dist/img/forPlants.png" alt="">
              <div class="catalogСategories__text">
                <h3 class="catalogСategories__title">Для растений</h3>
                <ul>
                  <li><a href="#">БиоЗащита сада</a></li>
                  <li><a href="#">Биопрепараты, органические удобрения</a></li>
                  <li><a href="#">Сидераты</a></li>
                  <li><a href="#">Грунт для растений</a></li>
                </ul>
              </div>
            </div>
            <div class="catalogСategories__item">
              <img class="catalogСategories__img" src="/dist/img/other.png" alt="">
              <div class="catalogСategories__text">
                <h3 class="catalogСategories__title">Прочее</h3>
                <ul>
                  <li><a href="#">Хозяйственные товары</a></li>
                  <li><a href="#">Расходные материалы</a></li>
                  <li><a href="#">Книги</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>