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
    <header class="header header__js">
      <div class="headerTop">
        <div class="container">
          <div class="header__container">
            <ul class="headerTop__menu">
              <li class="headerTop__menuLi"><a href="#">Доставка и оплата</a></li>
              <li class="headerTop__menuLi"><a href="#">Семинары</a></li>
              <li class="headerTop__menuLi"><a href="#">Блог огородника</a></li>
              <li class="headerTop__menuLi headerTop__menuElse"><a href="#">Еще
                  &#8226;&#8226;&#8226;</a></li>
              <div class="headerTop__menuHide">
                <li class="headerTop__menuLi"><a href="#">О компании</a></li>
                <li class="headerTop__menuLi"><a href="#">Новости</a></li>
                <li class="headerTop__menuLi"><a href="#">Контакты</a></li>
              </div>
            </ul>
            <a class="headerTop__newspapper" href="#">
              <div class="headerTop__icon">
                <? include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newspapper.svg'; ?>
              </div>
              <span class="headerTop__text">Газета &#171; Живой сад &#187;</span>
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
              <a class="headerMiddle__catalog headerMiddleCatalog__js" href="#">
                <span>Каталог</span>
                <div class="hamburger hamburger__collapse hamburger__js">
                  <span class="hamburger__box">
                    <span class="hamburger__inner"></span>
                  </span>
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
      <div class="headerBottom headerBottom__js">
        <div class="container">
          <ul class="header__container">
            <li><a class="headerBottom__link" href="#">Акции</a></li>
            <li><a class="headerBottom__link" href="#">Теплица</a></li>
            <li><a class="headerBottom__link" href="#">Семена</a></li>
            <li><a class="headerBottom__link" href="#">Саженцы</a></li>
            <li><a class="headerBottom__link" href="#">Биозащита сада</a></li>
            <li><a class="headerBottom__link" href="#">Биопрепараты</a></li>
            <li><a class="headerBottom__link" href="#">Грунты для растений</a></li>
            <li><a class="headerBottom__link" href="#">Пленка</a></li>
            <li><a class="headerBottom__link" href="#">Горшки</a></li>
            <li><a class="headerBottom__link" href="#">Украшение сада</a></li>
          </ul>
        </div>
      </div>
      <div class="headerCatalog headerCatalog__js ">
        <div class="container">
          <div class="headerCatalog__title">Каталог</div>
          <div class="headerCatalog__categories">
            <div class="headerCatalog__item">
              <img class="headerCatalog__img" src="/dist/img/productPopularImg7.png" alt="">
              <div class="headerCatalog__text">
                <div class="headerCatalog__itemTitle">Для сада</div>
                <ul class="headerCatalog__textUl class=" headerBottom__li"">
                  <li class="headerCatalog__textLi"><a href="#">Украшение сада</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Капельный полив</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Теплица</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Средства защиты</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Украшение сада</a></li>
                </ul>
              </div>
            </div>
            <div class="headerCatalog__item">
              <img class="headerCatalog__img" src="/dist/img/productPopularImg5.png" alt="">
              <div class="headerCatalog__text">
                <div class="headerCatalog__itemTitle">Инструменты</div>
                <ul class="headerCatalog__textUl class=" headerBottom__li"">
                  <li class="headerCatalog__textLi"><a href="#">Садовый инвентарь</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Опрыскиватели</a></li>
                </ul>
              </div>
            </div>
            <div class="headerCatalog__item">
              <img class="headerCatalog__img" src="/dist/img/forHome.png" alt="">
              <div class="headerCatalog__text">
                <div class="headerCatalog__itemTitle">Для дома</div>
                <ul class="headerCatalog__textUl class=" headerBottom__li"">
                  <li class="headerCatalog__textLi"><a href="#">Здоровое питание</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Выращивание рассады</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Пакеты</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Фитолампы для растений</a></li>
                  <li class="headerCatalog__textLi"><a href="#">ЭМ товары для дома</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Сушилка</a></li>
                </ul>
              </div>
            </div>
            <div class="headerCatalog__item">
              <img class="headerCatalog__img" src="/dist/img/plants.png" alt="">
              <div class="headerCatalog__text">
                <div class="headerCatalog__itemTitle">Растения</div>
                <ul class="headerCatalog__textUl class=" headerBottom__li"">
                  <li class="headerCatalog__textLi"><a href="#">Газон</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Лук-севок</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Чеснок</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Уценка</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Семена</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Саженцы</a></li>
                </ul>
              </div>
            </div>
            <div class="headerCatalog__item">
              <img class="headerCatalog__img" src="/dist/img/forPlants.png" alt="">
              <div class="headerCatalog__text">
                <div class="headerCatalog__itemTitle">Для растений</div>
                <ul class="headerCatalog__textUl class=" headerBottom__li"">
                  <li class="headerCatalog__textLi"><a href="#">БиоЗащита сада</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Биопрепараты, органические удобрения</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Сидераты</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Грунт для растений</a></li>
                </ul>
              </div>
            </div>
            <div class="headerCatalog__item">
              <img class="headerCatalog__img" src="/dist/img/other.png" alt="">
              <div class="headerCatalog__text">
                <div class="headerCatalog__itemTitle">Прочее</div>
                <ul class="headerCatalog__textUl class=" headerBottom__li"">
                  <li class="headerCatalog__textLi"><a href="#">Хозяйственные товары</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Расходные материалы</a></li>
                  <li class="headerCatalog__textLi"><a href="#">Книги</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>