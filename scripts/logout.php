<?php
session_start();
$error = false;
if (isset($_POST['auth'])) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = md5($_POST['password']);
    $error = true;
}
if (isset($_GET['page']) && $_GET['page'] == 'logout') {
    unset($_SESSION['login']);
    unset($_SESSION['password']);
}
$login = 'admin';
$password = '202cb962ac59075b964b07152d234b70';
$auth = false;
$iss = isset($_SESSION['login']) && isset($_SESSION['password']);
if ($iss && $_SESSION['login'] === $login && $_SESSION['password'] === $password) {
    $auth = true;
    $error = false;
}

?>
<?php if ($error) { ?>
    <p>Неверные логин и/или пароль!</p>
<?php } ?>
<?php if ($auth) { ?>
    <p>Здравствуйте, <?= $login ?>!</p>
    <a href="index.php?page=logout">Выход</a>
<?php } else { ?>
    <form action="" name="auth" method="post">
        <p>
            Логин: <input type="text" name="login">
        </p>
        <p>
            Пароль: <input type="password" name="password">
        </p>
        <input type="submit" name="auth" value="Войти">
    </form>
<?php } ?>
