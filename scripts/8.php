<?php
session_start();
$counter = $_SESSION['counter'] ?? 0;
$counter++;
$_SESSION['counter'] = $counter;
echo $counter;
echo '<br>';

if (isset($_POST['submit'])) {
//    $color = $_POST['color'];
//    setcookie('color', $color);

    unset($_COOKIE['color']);
    $_SESSION['color'] = $_POST['color'];
    var_dump($_COOKIE);
    echo '<br>';
    var_dump($_SESSION);
}
?>

<form action="" method="post" style="background-color: <?= $_SESSION['color'] ?>/* ;">
    <select name="color" id="">
        <option value="#ff0000">Красный</option>
        <option value="#00ff00">Зеленый</option>
        <option value="#0000ff">Синий</option>
    </select>
    <input type="submit" name="submit" value="Установить">
</form>
