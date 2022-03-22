<?php
if (isset($_POST['submit'])) {
    $color = $_POST['color'];
    setcookie('color', $color);
    header("Refresh: 0");
}

$counter = 0;
if(isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'];
    $counter++;
}
setcookie('counter', $counter, time() + 3600);
echo $counter;

echo '<br>';
?>
<br>
<form action="" method="post" style="background-color: <?= $_COOKIE['color'] ?>/* ;">
    <select name="color" id="">
        <option value="#ff0000">Красный</option>
        <option value="#00ff00">Зеленый</option>
        <option value="#0000ff">Синий</option>
    </select>
    <input type="submit" name="submit" value="Установить">
</form>
