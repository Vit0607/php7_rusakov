<?php
//Текущая дата:
$time = time();
echo date('d.m.Y H:i:s', $time);

echo '<br>';

//Случайная дата:
$rand_time = $time + mt_rand(1, 10) * 10000;
echo date('d.m.Y H:i:s', $rand_time);

echo '<br>';

//Разница:
$diff = $rand_time - $time;
echo date('H:i:s', $diff);

echo '<br>';

function getGM($local) {
    $offset = date("Z", $local);
    echo $offset;
}

function getLM($gm, $offset) {
    return $gm + $offset;
}

if (isset($_POST['submit'])) {
    echo '<br>';
    echo 'Время на сервере: ' . date('d.m.Y H:i:s');
    echo '<br>';
    echo 'Время у пользователя: ' . date('d.m.Y H:i:s', getLM(time(), $_POST['zone']));
}

?>

<form action="" method="post">
    <select name="zone" id="">
        <option value="3600">Берлин</option>
        <option value="10800">Москва</option>
        <option value="36000">Токио</option>
    </select>
    <input type="submit" name="submit" value="Вывести">
</form>
