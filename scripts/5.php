<?php
if (isset($_POST['save'])) {
    $text = htmlspecialchars($_POST['text']);
    $str = file_put_contents('file.txt', $text);
    echo 'Сохранение прошло успешно';
}
if (isset($_POST['upload'])) {
    if(file_exists('file.txt')) {

        echo "Файл существует!";

    } else {

        echo "Файл отсутствует!";

    }
}
if (isset($_POST['delete'])) {
    unlink('file.txt');
    echo 'Файл успешно удален!';

    if(!file_exists('file.txt')) {

        echo "Файл не существует!";

    }
}
?>


<form action="" method="post">
    <?php if (isset($_POST['upload'])) {
        $str = file_get_contents('file.txt');
        ?>
        <textarea name="text" id="" cols="30" rows="10"><?= $str ?></textarea>
    <?php } else { ?>
        <textarea name="text" id="" cols="30" rows="10"></textarea>
    <?php } ?>
    <p><input type="submit" name="save" value="Сохранить"></p>
    <p><input type="submit" name="upload" value="Загрузить"></p>
    <p><input type="submit" name="delete" value="Удалить"></p>
</form>


<!--
1. Создать форму с текстовой областью и тремя кнопками: «Сохранить», «Загрузить» и «Удалить».
2. Если пользователь вводит в текстовую область какой-то текст и жмёт кнопку «Сохранить», то данный текст должен быть
сохранён в текстовый файл на сервере, а у пользователя должна появиться строка: «Сохранение прошло успешно».
3. При нажатии кнопки «Загрузить» в текстовой области должен появиться текст, который был записан до этого в файл. Если
 файла не существует, то вывести строку: «Файл не существует».
3. При нажатии кнопки «Удалить» файл должен быть удалён, а у пользователя должна появиться строка: «Файл успешно
удалён». Если файла не существует, то вывести строку: «Файл не существует».
-->

