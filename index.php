<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
mb_internal_encoding("UTF-8");

require_once('connect_db.php');
require_once('dumper.php');
require_once('functions.php');
?>

<br>

<a href="index.php">Главная страница</a><br>
<a href="index.php?page=1">ссылка 1</a><br>
<a href="index.php?page=2">Пользовательская сортировка многомерных массивов</a><br>
<a href="index.php?page=3">Дата и время</a><br>
<a href="index.php?page=4">JSON-формат</a><br>
<a href="index.php?page=5">Работа с файлами</a><br>
<a href="index.php?page=6">Парсинг ini-файлов</a><br>
<a href="index.php?page=7">Работа с cookie</a><br>
<a href="index.php?page=8">Работа с сессиями</a><br>
<a href="index.php?page=9">Авторизация пользователей</a><br>

<br>
<hr>
<br>

<?php
include __DIR__ . '/template/template.php';

if(isset($_GET['page'])) {
    require_once 'scripts/' . $_GET['page'] . '.php';
}

?>
















