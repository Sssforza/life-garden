<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/404.css">
<main class="page page_notFound">
	<div class="container notFound">
		<div class="notFound__img">
			<img src="/dist/img/404.png" alt="">
		</div>
		<div class="notFound__title">Увы, такой страницы нет</div>
		<div class="notFound__description">Указан некорректный адрес или страница была перемещена.
			Вы можете вернуться на главную или воспользоваться поиском</div>
		<a class="notFound__btn btn" href="/">Главная страница</a>
	</div>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>