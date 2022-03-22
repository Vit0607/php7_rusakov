<?php
define('DB_HOST', 'localhost');
define('DB_USER_', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mysite');


try {
    $pdo = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER_, DB_PASSWORD, [PDO::ATTR_ERRMODE =>
        PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo 'Ошибка при подключении к базе данных!';
}


$query = 'INSERT INTO `secret_articles` (`user_id`, `title`, `text`, `date`)
VALUES ("1" , "Новая статья", "Текст этой новой статьи...", UNIX_TIMESTAMP())';
//    $result = $pdo->exec($query); // Для таких запросов уже нужно вызывать не метод query(), а метод exec(); Возвращает
//// количество затронуты записей
//    $last_id = $pdo->lastInsertId(); // СУПЕРМЕТОД: ПОЛУЧИТЬ ID ПОСЛЕДНЕЙ ВСТАВЛЕННОЙ ЗАПИСИ
//    echo $result . ' - ' . $last_id;
//    echo '<br>';

// Запрос:
//$query = "INSERT INTO `secret_users`
//    (`id`, `name`, `email`, `password`, `balance`, `ip_reg`, `date_reg`)
//    VALUES (NULL, 'Вячеслав', 'v3@mail.ru', MD5('123'), '0.00', INET_ATON('127.0.0.1'), UNIX_TIMESTAMP())";
// $pdo->exec($query); // Для таких запросов уже нужно вызывать не метод query(), а метод exec(); Возвращает
//// количество затронуты записей
//    echo '<br>';

print_r($_POST);

if (isset($_POST['reg'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $ip_reg = ip2long($_SERVER['REMOTE_ADDR']);
    $query = "INSERT INTO `secret_users`
(`name`, `email`, `password`, `ip_reg`, `date_reg`)
VALUES ('$name', '$email', MD5('$password'), '$ip_reg', UNIX_TIMESTAMP())";
    $result = $pdo->exec($query);
    echo '<br>';
}

?>
<?php if (isset($result)) { ?>
    <?php if ($result) { ?>
        <p>Регистрация прошла успешно!</p>

    <?php } else { ?>
        <p>Ошибка при регистрации!</p>
    <?php } ?>
<?php } ?>

<form name="reg" action="index.php" method="post">
    <p>
        Имя: <input type="text" name="name">
    </p>
    <p>
        E-mail: <input type="text" name="email">
    </p>
    <p>
        Пароль: <input type="password" name="password">
    </p>
    <p>
        <input type="submit" name="reg" value="Зарегистрироваться">
    </p>
</form>

<?php //ЗАПРОС 1:
$query = "SELECT * FROM `secret_users` WHERE `id` = 9";
$result = $pdo->query($query); // Вызываем метод query(); Возвращает PDOStatement()
//$row = $result->fetch(); // Получаем ОДНУ строку
$row = $result->fetch(PDO::FETCH_ASSOC); // Позволяет убрать дублирование
var_dump($row);
echo '<br>';
echo $row['email'];

?>

<hr>

<?php
echo '<br>';


$sum = 0;
$i = 10;
while ($i <= 40) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
    $i++;
}
echo $sum;

?>

<!--<div>-->
<!--    <a href="?com=add">Сложить</a>-->
<!--    <a href="?com=mult">Перемножить</a>-->
<!--</div>-->

<!--<form action="" method="post">-->
<!--    <p>Введите число: <input type="number" name="number"></p>-->
<!--    <input type="submit" value="Отправить">-->
<!--</form>-->



