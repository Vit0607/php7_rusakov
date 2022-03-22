<?php
$arr = parse_ini_file("config.ini");
var_dump($arr);
?>

<p style="color: <?= $arr['color'] ?>; font-size: <?= $arr['font-size'] ?>;"><span>Lorem ipsum dolor sit amet,
        consectetur
        adipisicing elit. Aliquid
        consectetur
        dignissimos distinctio ea
        esse explicabo fugit magnam minus, nulla odio odit, perspiciatis provident quae reprehenderit rerum. Deserunt dignissimos hic iste.</span><span>At autem commodi culpa cum eos eum fuga nihil numquam porro tempora! Ad corporis dicta enim et libero, natus neque sed. Asperiores cupiditate, incidunt magnam natus odio quas quibusdam sint?</span><span>Adipisci at aut dignissimos, distinctio eos placeat sapiente. A ad atque dignissimos dolorem ducimus facere fuga illum minus modi, quo repellat saepe ullam, voluptatum? Assumenda atque dolor dolore laboriosam non!</span></p>
<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur dignissimos distinctio ea esse explicabo fugit magnam minus, nulla odio odit, perspiciatis provident quae reprehenderit rerum. Deserunt dignissimos hic iste.</span><span>At autem commodi culpa cum eos eum fuga nihil numquam porro tempora! Ad corporis dicta enim et libero, natus neque sed. Asperiores cupiditate, incidunt magnam natus odio quas quibusdam sint?</span><span>Adipisci at aut dignissimos, distinctio eos placeat sapiente. A ad atque dignissimos dolorem ducimus facere fuga illum minus modi, quo repellat saepe ullam, voluptatum? Assumenda atque dolor dolore laboriosam non!</span></p>


<!--
1. Создайте INI-файл, где укажите цвет текста и его размер.
2. Создайте простую HTML-страницу (обязательно с DOCTYPE и всеми базовыми HTML-тегами: html, head, body).
3. Добавьте пару абзацев с помощью тега <p>.
4. Получите данные из INI-файла и подставьте их внутри тега <style>, чтобы у текста внутри тега <p> был соответствующий
 цвет и размер.
5. * Создайте 2 языковых файла ru.ini и en.ini, где будут языковые константы и их перевод. Например, TITLE=Заголовок –
в ru.ini, и TITLE=Title – в en.ini. Далее нужно проанализировать массив $_SERVER и узнать, какой язык предпочтительнее у пользователя. И вывести TITLE из того файла, который будет соответствовать языку пользователя. При этом если задать GET-параметр: lang=ru или lang=en – должно выводиться соответствующее представление языковой константы TITLE, независимо от того, что находится в массиве $_SERVER.
-->