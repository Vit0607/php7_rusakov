Страница 1

<?php
if (isset($_POST['reg'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = md5(htmlspecialchars($_POST['password']));
    $ip_reg = ip2long($_SERVER['REMOTE_ADDR']);

    $sql = "INSERT INTO `secret_users`
(`name`, `email`, `password`, `ip_reg`)
VALUES (:name, :email, :password, :ip_reg)";

    $params = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'ip_reg' => $ip_reg,
    ];

    echo '<br>';

    $result = dbQuery($sql, $params);
}
?>

<?php if (isset($result)) { ?>
    <?php if ($result) { ?>
        <p>Регистрация прошла успешно!</p>

    <?php } else { ?>
        <p>Ошибка при регистрации!</p>
    <?php } ?>
<?php } ?>

<?php
if (isset($_POST['submit'])) {
    $number1 = htmlspecialchars($_POST['number1']);
    $number2 = htmlspecialchars($_POST['number2']);

    echo '<br>';
    echo mt_rand($number1, $number2);
}

?>

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

<form action="index.php" method="post">
    <p>
        Введите первое число: <input type="number" name="number1">
    </p>
    <p>
        Введите второе число: <input type="number" name="number2">
    </p>
    <p>
        <input type="submit" name="submit" value="Обработать">
    </p>
</form>
