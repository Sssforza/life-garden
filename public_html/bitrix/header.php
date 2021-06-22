<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href="/dist/css/main.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
               <div class="header__container header__top">
                    <ul class="header__top-menu">
                      <li>Доставка и оплата</li>  
                      <li>Семинары</li>  
                      <li>Блог огородника</li>  
                      <li>О компании</li>  
                      <li>Новости</li>  
                      <li>Контакты</li>  
                    </ul>
                    <a class="header__top-newspapper" href="#">
                      <div class="header__top-icon">
					    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/newspapper.svg';?>
				      </div>
                      Газета "Живой сад"
                    </a>
                    <div class="header__top-end">
                      <a class="header__top-telephone" href="tel: +73812349341">
                         <div class="header__top-icon">
					       <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/telephone.svg';?>
				         </div>
                          + 7 3812 34-93-41</a>
                      <a class="header__top-enter" href="#">
                         <div class="header__top-icon">
					       <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/enter.svg';?>
				         </div>
                          Вход
                      </a>
                    </div>
               </div>
               <div class="header__container header__mid">
                 <div class="logo">
					<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/logo.svg';?>
				 </div>
                 <div class="header__mid-search">
                     <div class="header__mid-catalog"></div>
                     <input type="text" placeholder="Поиск">
                     <button></button>
                 </div>
               </div>
               <div class="header__container header__bot"></div>
        </header>