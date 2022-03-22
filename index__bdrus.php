<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mysite');


try {
    $pdo = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER_, DB_PASSWORD, [PDO::ATTR_ERRMODE =>
        PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo 'Ошибка при подключении к базе данных!';
}


//ЗАПРОС 1:
//$query = 'SELECT * FROM `secret_users`';
//$result = $pdo->query($query); // Вызываем метод query(); Возвращает PDOStatement()
////$row = $result->fetch(); // Получаем ОДНУ строку
//$row = $result->fetch(PDO::FETCH_ASSOC); // Позволяет убрать дублирование
//var_dump($row);
//echo '<br>';


//ЗАПРОС 2:
//try {// ЛЮБОЙ запрос нужно в идеале выполнять через TRY-CATCH
//    $query = 'INSERT INTO `secret_articles` (`user_id`, `title`, `text`, `seo_text`, `date`)
//VALUES ("1" , "Новая статья", "Текст этой новой статьи...", "SEO-title новой статьи", UNIX_TIMESTAMP())';
//    $result = $pdo->exec($query); // Для таких запросов уже нужно вызывать не метод query(), а метод exec(); Возвращает
//// количество затронуты записей
//    $last_id = $pdo->lastInsertId(); // СУПЕРМЕТОД: ПОЛУЧИТЬ ID ПОСЛЕДНЕЙ ВСТАВЛЕННОЙ ЗАПИСИ
//    echo $result . ' - ' . $last_id;
//    echo '<br>';
//} catch (PDOException $e) {
//    echo 'Ошибка в запросе: ' . $e->getMessage() . '<br>';
//}

//ЗАПРОС 3:
//$query = 'UPDATE `secret_articles` SET `date` = `date` + 1';
//$result = $pdo->exec($query);
//echo $result;
//echo '<br>';

//ЗАПРОС 4:
//$last_id = $pdo->lastId();
//$query = "DELETE FROM `secret_articles` WHERE `id`='$last_id'";
//$result = $pdo->exec($query);
//echo $result;
//echo '<br>';


//ЗАПРОС 5:
//$query = 'SELECT * FROM `secret_users`';
//$result = $pdo->query($query);
//$table = $result->fetchAll(PDO::FETCH_ASSOC); // Получаем ВСЮ ТАБЛИЦУ в виде массива (и убираем лишние индексы) - это
//// СУПЕРМЕТОД в классе PDO - позволяет выводить все без циклов
//var_dump($table);


//ЗАПРОС 6:
//$email = 'vasya@mail.ru'; // Допустим, получено из формы
//$query = 'SELECT * FROM `secret_users` WHERE `email` = ?';
//$query = $pdo->prepare($query); // Возвращает объект PDOStatement
//$query->execute([$email]); // У объекта PDOStatement вызываем метод execute()
//$row = $query->fetch((PDO::FETCH_ASSOC));
//var_dump($row);


//$query = 'SELECT * FROM `secret_users` WHERE `email` = :email :a :b';
//$query = $pdo->prepare($query); // Возвращает объект PDOStatement
//$query->execute([`email` => $email, `b` => 5, `a` => 7]);
//$row = $query->fetch((PDO::FETCH_ASSOC));
//var_dump($row);


//    $query = 'INSERT INTO `secret_articles` (`user_id`, `title`, `text`, `date`)
//VALUES ("1" , "Новая статья", "Текст этой новой статьи...", UNIX_TIMESTAMP())';
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

//    if(isset($_POST['reg'])) {
//        $name = htmlspecialchars($_POST['name']);
//        $email = htmlspecialchars($_POST['email']);
//        $password = htmlspecialchars($_POST['password']);
//        $ip_reg = ip2long($_SERVER['REMOTE_ADDR']);
//        $query = "INSERT INTO `secret_users`
//(`name`, `email`, `password`, `ip_reg`, `date_reg`)
//VALUES ('$name', '$email', MD5('$password'), '$ip_reg', UNIX_TIMESTAMP())";
//        $result = $pdo->exec($query);
//        echo '<br>';
//    }


    if(isset($_POST['send'])) {
        $offset = $_POST['timezones'];
       echo "Смещение от Гринвича: $offset секунд.";
       echo '<br>';
    }

$query = 'SELECT * FROM `secret_timezones`';
$result = $pdo->query($query);
$table = $result->fetchAll(PDO::FETCH_ASSOC); // Получаем ВСЮ ТАБЛИЦУ в виде массива (и убираем лишние индексы) - это
// СУПЕРМЕТОД в классе PDO - позволяет выводить все без циклов
var_dump($table);

echo '<br>';

?>
<?php //if (isset($result)) { ?>
<!--    --><?php //if ($result) { ?>
<!--        <p>Регистрация прошла успешно!</p>-->
<!--    --><?php //} else { ?>
<!--        <p>Ошибка при регистрации!</p>-->
<!--    --><?php //} ?>
<?php //} ?>

<?php //if (isset($result)) { ?>
<!--    --><?php //if ($result) { ?>
<!--        <p>Добавление прошло успешно!</p>-->
<!--    --><?php //} else { ?>
<!--        <p>Ошибка при добавлении!</p>-->
<!--    --><?php //} ?>
<?php //} ?>

<!--<form name="reg" action="index.php" method="post">-->
<!--    <p>-->
<!--        Имя: <input type="text" name="name">-->
<!--    </p>-->
<!--    <p>-->
<!--        E-mail: <input type="text" name="email">-->
<!--    </p>-->
<!--    <p>-->
<!--        Пароль: <input type="password" name="password">-->
<!--    </p>-->
<!--    <p>-->
<!--        <input type="submit" name="reg" value="Зарегистрироваться">-->
<!--    </p>-->
<!--</form>-->

<!--<form action="index.php" name="zones" method="post">-->
<!--    <p>-->
<!--        Часовой пояс: <input type="text" name="timezone">-->
<!--    </p>-->
<!--    <p>-->
<!--        Смещение: <input type="text" name="offset">-->
<!--    </p>-->
<!--    <p>-->
<!--        <input type="submit" name="add" value="Добавить">-->
<!--    </p>-->
<!--</form>-->

<form action="" method="post">
    <select name="timezones" id="">
        <?php
        foreach ($table as $row) {
            echo '<option value="' . $row['offset'] .'">' . $row['title'] . '</option><br>';
        }
        ?>
    </select>
    <p>
        <input type="submit" name="send" value="Отправить">
    </p>
</form>


